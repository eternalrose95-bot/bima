@extends('layouts.app')

@section('title', $metaTitle)
@section('description', $metaDescription)

@section('content')
    <section class="page-hero shell narrow" data-reveal>
        <p class="section-kicker">Kontak</p>
        <h1>Diskusikan kebutuhan radiologi dan laboratorium Anda.</h1>
        <p class="section-description">Konten kontak dari situs lama dipertahankan, lalu kami tambah form Livewire agar pengunjung bisa meninggalkan pesan dengan pengalaman yang lebih baik.</p>
    </section>

    <section class="shell contact-grid">
        <div class="contact-stack">
            <iframe class="contact-map" src="{{ $contact['map_embed'] }}" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>

            <div class="cards-grid cards-3 compact-grid">
                @foreach ($contact['cards'] as $card)
                    <a class="feature-card compact-card" href="{{ $card['href'] }}" @if (str_starts_with($card['href'], 'http')) target="_blank" rel="noreferrer" @endif>
                        <span class="feature-index">0{{ $loop->iteration }}</span>
                        <h3>{{ $card['label'] }}</h3>
                        <p>{{ $card['value'] }}</p>
                    </a>
                @endforeach
            </div>

            <article class="side-panel muted">
                <p class="section-kicker">Alamat</p>
                <p>{{ config('site.company.address') }}</p>
            </article>
        </div>

        <livewire:contact-form />
    </section>
@endsection