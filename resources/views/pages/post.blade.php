@extends('layouts.app')

@section('title', $metaTitle)
@section('description', $metaDescription)

@section('content')
    <section class="page-hero shell narrow" data-reveal>
        <p class="section-kicker">Artikel</p>
        <h1>{{ $post['title'] }}</h1>
        <p class="post-meta-line">{{ $post['date_label'] }} &middot; {{ $post['author'] }}</p>
        <p class="section-description">{{ $post['excerpt'] }}</p>
    </section>

    <section class="shell content-layout">
        <article class="article-panel" data-reveal>
            <img class="article-cover" src="{{ asset(ltrim($post['image'], '/')) }}" alt="{{ $post['title'] }}">
            <p class="article-caption">{{ $post['image_caption'] }}</p>
            <div class="rich-content prose-panel">
                {!! $post['content'] !!}
            </div>
        </article>

        <aside class="sidebar-panels">
            <article class="side-panel" data-reveal>
                <p class="section-kicker">Tag</p>
                <div class="tag-list">
                    @foreach ($post['tags'] as $tag)
                        <a class="tag-pill" href="{{ route('tags.show', $tag) }}">{{ str($tag)->replace('-', ' ')->title() }}</a>
                    @endforeach
                </div>
            </article>

            <article class="side-panel muted" data-reveal>
                <p class="section-kicker">Kontak</p>
                <h3>Butuh konsultasi alat kesehatan?</h3>
                <p>Tim kami siap mendiskusikan pengadaan, instalasi, dan dukungan teknis.</p>
                <a class="button button-primary" href="{{ route('contact') }}">Ke Halaman Kontak</a>
            </article>
        </aside>
    </section>
@endsection