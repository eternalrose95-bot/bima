@extends('layouts.app')

@section('title', $metaTitle)
@section('description', $metaDescription)

@section('content')
    <section class="page-hero shell narrow" data-reveal>
        <p class="section-kicker">Tag</p>
        <h1>{{ $term['name'] }}</h1>
        <p class="section-description">Artikel yang terhubung dengan topik {{ strtolower($term['name']) }} dari situs lama.</p>
    </section>

    <section class="shell">
        <livewire:news-browser :initial-tag="$term['slug']" />
    </section>
@endsection