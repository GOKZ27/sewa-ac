<?php

use Illuminate\Support\Facades\Route;

foreach (config('seo.pages') as $routeName => $page) {
    Route::view($page['path'], 'home', [
        'serviceArea' => $page['service_area'],
        'areaIntro' => $page['area_intro'],
        'pageTitle' => $page['title'],
        'pageDescription' => $page['description'],
        'breadcrumbLabel' => $page['breadcrumb_label'],
        'canonicalUrl' => config('seo.site_url').($page['path'] === '/' ? '/' : $page['path']),
    ])->name($routeName);
}

Route::get('/sitemap.xml', function () {
    $urls = collect(config('seo.pages'))
        ->map(function (array $page): string {
            $url = config('seo.site_url').($page['path'] === '/' ? '/' : $page['path']);

            return '    <url><loc>'.htmlspecialchars($url, ENT_XML1 | ENT_QUOTES, 'UTF-8').'</loc></url>';
        })
        ->implode("\n");

    return response(
        '<?xml version="1.0" encoding="UTF-8"?>'."\n"
            .'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n"
            .$urls."\n"
            .'</urlset>',
        200,
        ['Content-Type' => 'application/xml; charset=UTF-8'],
    );
})->name('sitemap');

Route::get('/robots.txt', function () {
    return response(
        "User-agent: *\nAllow: /\nSitemap: ".config('seo.site_url')."/sitemap.xml\n",
        200,
        ['Content-Type' => 'text/plain; charset=UTF-8'],
    );
})->name('robots');
