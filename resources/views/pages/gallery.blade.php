@extends('layouts.app')

@section('title', $metaTitle)
@section('description', $metaDescription)

@section('content')
    <section class="page-hero shell narrow" data-reveal>
        <p class="section-kicker">Gallery</p>
        <h1>Dokumentasi visual perusahaan</h1>
        <p class="section-description">Aset gambar yang sebelumnya berada di situs statis kini tersaji ulang di Laravel dengan grid responsif dan lightbox JavaScript.</p>
    </section>

    <section class="shell gallery-grid large-gallery">
        @foreach ($gallery as $item)
            <button
                class="gallery-card large"
                type="button"
                data-lightbox-trigger
                data-lightbox-image="{{ asset(ltrim($item['image'], '/')) }}"
                data-lightbox-caption="{{ $item['title'] }}"
            >
                <img src="{{ asset(ltrim($item['image'], '/')) }}" alt="{{ $item['title'] }}">
                <span>{{ $item['title'] }}</span>
            </button>
        @endforeach
    </section>
@endsection