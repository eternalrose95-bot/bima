@extends('layouts.app')

@section('title', $metaTitle)
@section('description', $metaDescription)

@section('content')
    <section class="hero-section shell">
        <div class="hero-copy" data-reveal>
            <p class="section-kicker">{{ $home['eyebrow'] }}</p>
            <h1>{{ $home['title'] }}</h1>
            <p class="hero-description">{{ $home['description'] }}</p>

            <div class="hero-actions">
                <a class="button button-primary" href="{{ $home['primary_cta']['href'] }}" target="_blank" rel="noreferrer">{{ $home['primary_cta']['label'] }}</a>
                <a class="button button-secondary" href="{{ $home['secondary_cta']['href'] }}">{{ $home['secondary_cta']['label'] }}</a>
            </div>

            <div class="hero-highlights">
                @foreach ($home['highlights'] as $highlight)
                    <article class="mini-panel">
                        <p>{{ $highlight['label'] }}</p>
                        <strong>{{ $highlight['value'] }}</strong>
                    </article>
                @endforeach
            </div>
        </div>

        <div class="hero-visual" data-reveal>
            <img src="{{ asset(ltrim(config('site.company.hero_image'), '/')) }}" alt="{{ config('site.company.name') }}">
            <div class="floating-card top">
                <span>Implementasi</span>
                <strong>Pengadaan hingga purna jual</strong>
            </div>
            <div class="floating-card bottom">
                <span>Lokasi</span>
                <strong>Serang, Banten</strong>
            </div>
        </div>
    </section>

    <section class="shell section-grid">
        <div>
            <p class="section-kicker">Layanan Utama</p>
            <h2 class="section-title">Fondasi operasional untuk radiologi dan laboratorium yang lebih siap jalan.</h2>
        </div>
        <div class="cards-grid cards-3">
            @foreach ($home['services'] as $service)
                <article class="feature-card" data-reveal>
                    <span class="feature-index">0{{ $loop->iteration }}</span>
                    <h3>{{ $service['title'] }}</h3>
                    <p>{{ $service['description'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="shell metrics-grid">
        @foreach ($home['stats'] as $stat)
            <article class="metric-card" data-reveal>
                <strong><span data-count="{{ $stat['value'] }}">0</span>{{ $stat['suffix'] }}</strong>
                <p>{{ $stat['label'] }}</p>
            </article>
        @endforeach
    </section>

    <section class="shell split-section">
        <div class="split-copy" data-reveal>
            <p class="section-kicker">Kenapa Kami</p>
            <h2 class="section-title">Bukan sekadar supply alat, tetapi partner implementasi.</h2>
            <p class="section-description">Pendekatan kami menekankan kesiapan operasional. Artinya, perangkat yang tepat, alur kerja yang efisien, dan dukungan teknis yang tetap ada setelah instalasi selesai.</p>
        </div>

        <div class="stacked-panels">
            @foreach ($home['focus'] as $item)
                <article class="stacked-panel" data-reveal>
                    <h3>{{ $item['title'] }}</h3>
                    <p>{{ $item['description'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    {{-- <section class="shell gallery-preview">
        <div class="section-head">
            <div>
                <p class="section-kicker">Visual</p>
                <h2 class="section-title">Potret layanan dan materi yang sudah ada di situs sebelumnya.</h2>
            </div>
            <a class="button button-secondary" href="{{ route('gallery') }}">Buka Gallery</a>
        </div>

        <div class="gallery-grid">
            @foreach (config('site.gallery') as $item)
                <button
                    class="gallery-card"
                    type="button"
                    data-lightbox-trigger
                    data-lightbox-image="{{ asset(ltrim($item['image'], '/')) }}"
                    data-lightbox-caption="{{ $item['title'] }}"
                >
                    <img src="{{ asset(ltrim($item['image'], '/')) }}" alt="{{ $item['title'] }}">
                    <span>{{ $item['title'] }}</span>
                </button>
            @endforeach
        </div>
    </section>

    <section class="shell news-section">
        <div class="section-head">
            <div>
                <p class="section-kicker">Wawasan</p>
                <h2 class="section-title">Konten berita lama tetap tersedia, sekarang dalam pengalaman baca yang lebih rapi.</h2>
            </div>
            <a class="button button-secondary" href="{{ route('news.index') }}">Semua Artikel</a>
        </div>

        <livewire:news-browser :show-all="false" :limit="2" />
    </section> --}}
@endsection