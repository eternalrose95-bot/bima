<div class="news-browser">
    <div class="filter-bar" data-reveal>
        <label class="filter-search">
            <span>Cari artikel</span>
            <input type="text" wire:model.live.debounce.300ms="search" placeholder="Contoh: jantung, kulit, olahraga">
        </label>

        <div class="tag-list">
            <button class="tag-pill @if ($tag === '') is-active @endif" type="button" wire:click="$set('tag', '')">Semua</button>
            @foreach ($tags as $item)
                <button class="tag-pill @if ($tag === $item['slug']) is-active @endif" type="button" wire:click="$set('tag', '{{ $item['slug'] }}')">
                    {{ $item['name'] }}
                </button>
            @endforeach
        </div>
    </div>

    @if ($search !== '' || $tag !== '')
        <div class="filter-reset">
            <button class="button button-ghost" type="button" wire:click="clearFilters">Reset filter</button>
        </div>
    @endif

    <div class="cards-grid cards-2">
        @forelse ($posts as $post)
            <article class="news-card" data-reveal>
                <img src="{{ asset(ltrim($post['image'], '/')) }}" alt="{{ $post['title'] }}">
                <div>
                    <p class="news-meta">{{ $post['date_label'] }} &middot; {{ $post['author'] }}</p>
                    <h3>{{ $post['title'] }}</h3>
                    <p>{{ $post['excerpt'] }}</p>
                    <div class="tag-list compact-tags">
                        @foreach ($post['tags'] as $postTag)
                            <a class="tag-pill small" href="{{ route('tags.show', $postTag) }}">{{ str($postTag)->replace('-', ' ')->title() }}</a>
                        @endforeach
                    </div>
                    <a class="text-link" href="{{ route('posts.show', $post['slug']) }}">Baca artikel</a>
                </div>
            </article>
        @empty
            <article class="empty-state">
                <h3>Tidak ada artikel yang cocok.</h3>
                <p>Coba ubah kata kunci atau pilih tag lain.</p>
            </article>
        @endforelse
    </div>
</div>