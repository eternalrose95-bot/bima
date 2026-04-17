@extends('layouts.app')

@section('title', $metaTitle)
@section('description', $metaDescription)

@section('content')
    <section class="page-hero shell narrow" data-reveal>
        <p class="section-kicker">Profil & Produk</p>
        <h1>{{ $page['title'] }}</h1>
        <p class="section-description">{{ $page['summary'] }}</p>
    </section>

    <section class="shell content-layout">
        <article class="rich-content prose-panel" data-reveal>
            {!! $page['content'] !!}
        </article>

        <aside class="sidebar-panels">
            <article class="side-panel" data-reveal>
                <p class="section-kicker">Konsultasi Cepat</p>
                <h3>Perlu bantuan memilih perangkat?</h3>
                <p>Diskusikan kebutuhan klinik atau rumah sakit Anda dengan tim kami.</p>
                <a class="button button-primary" href="https://wa.me/{{ config('site.company.whatsapp') }}" target="_blank" rel="noreferrer">Chat WhatsApp</a>
            </article>

            <article class="side-panel muted" data-reveal>
                <p class="section-kicker">Kontak</p>
                <ul class="footer-list compact">
                    <li>{{ config('site.company.address') }}</li>
                    <li><a href="tel:{{ config('site.company.phone') }}">{{ config('site.company.phone') }}</a></li>
                    <li><a href="mailto:{{ config('site.company.email') }}">{{ config('site.company.email') }}</a></li>
                </ul>
            </article>
        </aside>
    </section>
@endsection