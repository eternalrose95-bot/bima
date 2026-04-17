<?php

namespace App\Livewire;

use App\Support\SiteContent;
use Livewire\Component;

class NewsBrowser extends Component
{
    public string $search = '';

    public string $tag = '';

    public bool $showAll = true;

    public int $limit = 6;

    public function mount(string $initialTag = '', bool $showAll = true, int $limit = 6): void
    {
        $this->tag = $initialTag;
        $this->showAll = $showAll;
        $this->limit = $limit;
    }

    public function clearFilters(): void
    {
        $this->reset('search', 'tag');
    }

    public function render()
    {
        $posts = collect(SiteContent::posts())
            ->when($this->search !== '', function ($collection) {
                $term = mb_strtolower($this->search);

                return $collection->filter(function (array $post) use ($term) {
                    $haystack = implode(' ', [
                        $post['title'],
                        $post['excerpt'],
                        strip_tags($post['content']),
                        implode(' ', $post['tags']),
                    ]);

                    return str_contains(mb_strtolower($haystack), $term);
                });
            })
            ->when($this->tag !== '', fn ($collection) => $collection->filter(
                fn (array $post) => in_array($this->tag, $post['tags'], true)
            ))
            ->values();

        if (! $this->showAll) {
            $posts = $posts->take($this->limit)->values();
        }

        return view('livewire.news-browser', [
            'posts' => $posts,
            'tags' => SiteContent::tags(),
        ]);
    }
}