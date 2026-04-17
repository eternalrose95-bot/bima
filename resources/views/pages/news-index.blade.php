@extends('layouts.app')

@section('title', $metaTitle)
@section('description', $metaDescription)

@section('content')
    <section class="page-hero shell narrow" data-reveal>
        <p class="section-kicker">Berita</p>
        <h1>Artikel kesehatan dan wawasan praktis</h1>
        <p class="section-description">Konten lama dari kategori berita tetap tersedia, kini dengan filter Livewire untuk pencarian yang lebih cepat.</p>
    </section>

    <section class="shell">
        <livewire:news-browser />
    </section>
@endsection