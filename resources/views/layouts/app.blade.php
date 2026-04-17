<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('site.company.name'))</title>
    <meta name="description" content="@yield('description', config('site.company.short_description'))">
    <meta name="theme-color" content="#0c1f2f">
    <meta property="og:title" content="@yield('title', config('site.company.name'))">
    <meta property="og:description" content="@yield('description', config('site.company.short_description'))">
    <meta property="og:image" content="{{ asset(ltrim(config('site.company.favicon'), '/')) }}">
    <meta property="og:type" content="website">
    <link rel="icon" href="{{ asset(ltrim(config('site.company.favicon'), '/')) }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    @php($company = config('site.company'))
    @php($navigation = config('site.navigation'))
    @php($footerNavigation = config('site.footer_navigation'))

    <div class="orb orb-one"></div>
    <div class="orb orb-two"></div>

    <header class="site-header" data-header>
        <div class="shell header-shell">
            <a class="brand" href="{{ route('home') }}">
                <img class="brand-logo" src="{{ asset(ltrim($company['logo'], '/')) }}" alt="{{ $company['name'] }}">
                <div>
                    <p class="brand-name">{{ $company['name'] }}</p>
                    <p class="brand-tagline">{{ $company['tagline'] }}</p>
                </div>
            </a>

            <button class="nav-toggle" type="button" aria-label="Buka menu" data-nav-toggle>
                <span></span>
                <span></span>
            </button>

            <nav class="site-nav" data-nav>
                @foreach ($navigation as $item)
                    @if (! empty($item['children']))
                        @php($hasActiveChild = collect($item['children'])->contains(fn ($child) => request()->routeIs($child['route'])))
                        <div class="nav-group @if ($hasActiveChild) is-active @endif" data-nav-group>
                            <button class="nav-link nav-group-toggle @if ($hasActiveChild) is-active @endif" type="button" data-nav-group-toggle aria-expanded="{{ $hasActiveChild ? 'true' : 'false' }}">
                                {{ $item['label'] }}
                                <span class="nav-caret"></span>
                            </button>
                            <div class="nav-dropdown">
                                @foreach ($item['children'] as $child)
                                    <a
                                        class="nav-sublink @if (request()->routeIs($child['route'])) is-active @endif"
                                        href="{{ route($child['route'], $child['params'] ?? []) }}"
                                    >
                                        {{ $child['label'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <a
                            class="nav-link @if (request()->routeIs($item['route'])) is-active @endif"
                            href="{{ route($item['route'], $item['params'] ?? []) }}"
                        >
                            {{ $item['label'] }}
                        </a>
                    @endif
                @endforeach
            </nav>

            <a class="button button-primary header-cta" href="https://wa.me/{{ $company['whatsapp'] }}" target="_blank" rel="noreferrer">
                Hubungi Kami
            </a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="shell footer-inner">
            <div class="footer-col">
                <span class="footer-col-title">Tentang</span>
                <h2>{{ $company['name'] }}</h2>
                <p>{{ $company['short_description'] }}</p>
                <audio controls preload="none" class="footer-audio">
                    <source src="{{ asset(ltrim($company['jingle'], '/')) }}" type="audio/mpeg">
                </audio>
            </div>

            <div class="footer-col">
                <span class="footer-col-title">Kontak</span>
                <ul class="footer-list">
                    <li>{{ $company['address'] }}</li>
                    <li><a href="tel:{{ $company['phone'] }}">{{ $company['phone'] }}</a></li>
                    <li><a href="https://wa.me/{{ $company['whatsapp'] }}" target="_blank" rel="noreferrer">WhatsApp</a></li>
                    <li><a href="mailto:{{ $company['email'] }}">{{ $company['email'] }}</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <span class="footer-col-title">Navigasi</span>
                <ul class="footer-list">
                    @foreach ($footerNavigation as $item)
                        <li><a href="{{ route($item['route'], $item['params'] ?? []) }}">{{ $item['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="shell footer-base">
            <p>Copyright &copy; {{ now()->year }} {{ $company['name'] }}. All Rights Reserved.</p>
        </div>
    </footer>

    <a class="floating-wa" href="https://wa.me/{{ $company['whatsapp'] }}" target="_blank" rel="noreferrer">Butuh Bantuan?</a>

    <div class="lightbox" data-lightbox>
        <button class="lightbox-close" type="button" aria-label="Tutup" data-lightbox-close>&times;</button>
        <img class="lightbox-image" alt="Preview galeri" data-lightbox-image>
        <p class="lightbox-caption" data-lightbox-caption></p>
    </div>

    @livewireScripts
</body>
</html>