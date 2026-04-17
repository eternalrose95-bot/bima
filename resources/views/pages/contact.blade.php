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

            <article class="side-panel contact-details-panel muted">
                <p class="section-kicker">Informasi Kontak</p>
                <ul class="contact-details-list">
                    @foreach ($contact['cards'] as $card)
                        <li class="contact-details-item">
                            <span class="contact-details-label">{{ $card['label'] }}</span>: 
                            <a href="{{ $card['href'] }}" @if (str_starts_with($card['href'], 'http')) target="_blank" rel="noreferrer" @endif>
                                {{ $card['value'] }}
                            </a>
                        </li>
                    @endforeach
                    <li class="contact-details-item is-address">
                        <span class="contact-details-label">Alamat</span>
                        <p>{{ config('site.company.address') }}</p>
                    </li>
                </ul>
            </article>
        </div>

        <livewire:contact-form />
    </section>
@endsection