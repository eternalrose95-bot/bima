<?php

namespace App\Support;

use Illuminate\Support\Collection;

class SiteContent
{
    public static function page(string $slug): array
    {
        $page = config("site.pages.$slug");

        abort_unless(is_array($page), 404);

        return $page;
    }

    public static function gallery(): array
    {
        return config('site.gallery', []);
    }

    public static function posts(): array
    {
        return self::postsCollection()->all();
    }

    public static function post(string $slug): array
    {
        $post = self::postsCollection()->firstWhere('slug', $slug);

        abort_unless(is_array($post), 404);

        return $post;
    }

    public static function tags(): array
    {
        return self::postsCollection()
            ->flatMap(fn (array $post) => collect($post['tags'])->map(fn (string $tag) => [
                'slug' => $tag,
                'name' => str($tag)->replace('-', ' ')->title()->toString(),
            ]))
            ->unique('slug')
            ->sortBy('name')
            ->values()
            ->all();
    }

    public static function tag(string $slug): array
    {
        $posts = self::postsCollection()
            ->filter(fn (array $post) => in_array($slug, $post['tags'], true))
            ->values();

        abort_if($posts->isEmpty(), 404);

        return [
            'slug' => $slug,
            'name' => str($slug)->replace('-', ' ')->title()->toString(),
            'posts' => $posts->all(),
        ];
    }

    public static function author(string $slug): array
    {
        $posts = self::postsCollection()
            ->filter(fn (array $post) => $post['author'] === $slug)
            ->values();

        abort_if($posts->isEmpty(), 404);

        return [
            'slug' => $slug,
            'name' => $slug,
            'role' => 'Admin Konten',
            'posts' => $posts->all(),
        ];
    }

    protected static function postsCollection(): Collection
    {
        return collect(config('site.posts', []))
            ->sortByDesc('date')
            ->values();
    }
}