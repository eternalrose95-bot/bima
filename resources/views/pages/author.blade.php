@extends('layouts.app')

@section('title', $metaTitle)
@section('description', $metaDescription)

@section('content')
    <section class="page-hero shell narrow" data-reveal>
        <p class="section-kicker">Author</p>
        <h1>{{ $author['name'] }}</h1>
        <p class="section-description">Arsip tulisan dari {{ $author['name'] }} yang telah dipindahkan ke Laravel.</p>
    </section>

    <section class="shell cards-grid cards-2">
        @foreach ($author['posts'] as $post)
            <article class="news-card" data-reveal>
                <img src="{{ asset(ltrim($post['image'], '/')) }}" alt="{{ $post['title'] }}">
                <div>
                    <p class="news-meta">{{ $post['date_label'] }}</p>
                    <h3>{{ $post['title'] }}</h3>
                    <p>{{ $post['excerpt'] }}</p>
                    <a class="text-link" href="{{ route('posts.show', $post['slug']) }}">Baca artikel</a>
                </div>
            </article>
        @endforeach
    </section>
@endsection