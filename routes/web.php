<?php

use App\Support\SiteContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    $legacyPageMap = [
        12 => route('gallery'),
        14 => route('posts.show', 'manfaat-buah-naga-untuk-kesehatan-kulit-wajah'),
        16 => route('posts.show', 'tips-jaga-kesehatan-jantung'),
        18 => route('pages.about'),
        20 => route('contact'),
        22 => route('pages.radiology'),
        24 => route('pages.lab'),
    ];

    $legacyPageId = $request->integer('p');

    if ($legacyPageId && isset($legacyPageMap[$legacyPageId])) {
        return redirect()->to($legacyPageMap[$legacyPageId], 301);
    }

    return view('pages.home', [
        'home' => config('site.home'),
        'metaTitle' => config('site.home.meta_title'),
        'metaDescription' => config('site.home.meta_description'),
    ]);
})->name('home');

Route::get('/tentang-kami', function () {
    $page = SiteContent::page('tentang-kami');

    return view('pages.content', [
        'page' => $page,
        'metaTitle' => $page['title'].' | '.config('site.company.name'),
        'metaDescription' => $page['summary'],
    ]);
})->name('pages.about');

Route::get('/produk-radiologi', function () {
    $page = SiteContent::page('produk-radiologi');

    return view('pages.content', [
        'page' => $page,
        'metaTitle' => $page['title'].' | '.config('site.company.name'),
        'metaDescription' => $page['summary'],
    ]);
})->name('pages.radiology');

Route::redirect('/prodak-radiologi', '/produk-radiologi', 301);

Route::get('/produk-lab', function () {
    $page = SiteContent::page('produk-lab');

    return view('pages.content', [
        'page' => $page,
        'metaTitle' => $page['title'].' | '.config('site.company.name'),
        'metaDescription' => $page['summary'],
    ]);
})->name('pages.lab');

Route::get('/gallery', function () {
    return view('pages.gallery', [
        'gallery' => SiteContent::gallery(),
        'metaTitle' => 'Gallery | '.config('site.company.name'),
        'metaDescription' => 'Dokumentasi visual layanan, produk, dan aktivitas Bima Meditama Samudera Sejahtera.',
    ]);
})->name('gallery');

Route::get('/kontak', function () {
    return view('pages.contact', [
        'contact' => config('site.contact'),
        'metaTitle' => 'Kontak | '.config('site.company.name'),
        'metaDescription' => 'Hubungi Bima Meditama Samudera Sejahtera untuk konsultasi radiologi digital, alat kesehatan, dan peralatan laboratorium.',
    ]);
})->name('contact');

Route::get('/berita', function () {
    return redirect()->route('news.index', status: 301);
});

Route::get('/category/berita', function () {
    return view('pages.news-index', [
        'metaTitle' => 'Berita | '.config('site.company.name'),
        'metaDescription' => 'Artikel kesehatan, wawasan radiologi, dan pembaruan dari Bima Meditama Samudera Sejahtera.',
    ]);
})->name('news.index');

Route::get('/berita/{slug}', function (string $slug) {
    $post = SiteContent::post($slug);

    return view('pages.post', [
        'post' => $post,
        'metaTitle' => $post['title'].' | '.config('site.company.name'),
        'metaDescription' => $post['excerpt'],
    ]);
})->name('posts.show');

Route::get('/tag/{slug}', function (string $slug) {
    $tag = SiteContent::tag($slug);

    return view('pages.taxonomy', [
        'term' => $tag,
        'metaTitle' => 'Tag: '.$tag['name'].' | '.config('site.company.name'),
        'metaDescription' => 'Artikel dengan topik '.$tag['name'].' di '.config('site.company.name').'.',
    ]);
})->name('tags.show');

Route::get('/author/{slug}', function (string $slug) {
    $author = SiteContent::author($slug);

    return view('pages.author', [
        'author' => $author,
        'metaTitle' => $author['name'].' | '.config('site.company.name'),
        'metaDescription' => 'Tulisan dari '.$author['name'].' di '.config('site.company.name').'.',
    ]);
})->name('author.show');

Route::redirect('/feed', '/category/berita', 301);
Route::redirect('/comments/feed', '/category/berita', 301);
Route::redirect('/category/berita/feed', '/category/berita', 301);
Route::redirect('/author/bimy3415/feed', '/author/bimy3415', 301);
Route::redirect('/2025/11', '/category/berita', 301);
Route::redirect('/2025/11/23', '/category/berita', 301);
Route::get('/tag/{slug}/feed', fn (string $slug) => redirect()->route('tags.show', $slug, 301));
