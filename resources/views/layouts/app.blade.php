<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1c1c1c">
    <meta name="robots" content="@yield('robots', 'index,follow,max-image-preview:large')">
    <title>@yield('title', 'Sewa AC Standing Tangerang & Ciledug | Sewa AC Portable untuk Acara')</title>
    <meta name="description" content="@yield('description', 'Sewa AC standing portable untuk acara di Tangerang dan Ciledug. Hubungi kami untuk ketersediaan unit dan biaya sewa.')">
    <link rel="canonical" href="{{ $canonicalUrl }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo/logo2.png') }}">
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Sewa AC Standing">
    <meta property="og:title" content="@yield('title', 'Sewa AC Standing Tangerang & Ciledug | Sewa AC Portable untuk Acara')">
    <meta property="og:description" content="@yield('description', 'Sewa AC standing portable untuk acara di Tangerang dan Ciledug. Hubungi kami untuk ketersediaan unit dan biaya sewa.')">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:image" content="{{ config('seo.site_url') }}/images/3.webp">
    <meta property="og:image:alt" content="Unit AC standing portable untuk acara">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Sewa AC Standing Tangerang & Ciledug')">
    <meta name="twitter:description" content="@yield('description', 'Sewa AC standing portable untuk acara di Tangerang dan Ciledug.')">
    <meta name="twitter:image" content="{{ config('seo.site_url') }}/images/3.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    @php
        $seoSiteUrl = rtrim(config('seo.site_url'), '/');
        $homeCanonicalUrl = $seoSiteUrl . '/';
        $organizationId = $homeCanonicalUrl . '#organization';

        $structuredData = [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'Organization',
                    '@id' => $organizationId,
                    'name' => 'Sewa AC Standing',
                    'url' => $homeCanonicalUrl,
                    'logo' => [
                        '@type' => 'ImageObject',
                        'url' => $seoSiteUrl . '/images/logo/logo2.png',
                    ],
                    'telephone' => '+6285279761446',
                    'areaServed' => [
                        ['@type' => 'Place', 'name' => 'Tangerang'],
                        ['@type' => 'Place', 'name' => 'Ciledug'],
                    ],
                ],
                [
                    '@type' => 'WebSite',
                    '@id' => $homeCanonicalUrl . '#website',
                    'url' => $homeCanonicalUrl,
                    'name' => 'Sewa AC Standing',
                    'inLanguage' => 'id-ID',
                    'publisher' => ['@id' => $organizationId],
                ],
                [
                    '@type' => 'WebPage',
                    '@id' => $canonicalUrl . '#webpage',
                    'url' => $canonicalUrl,
                    'name' => $pageTitle,
                    'description' => $pageDescription,
                    'inLanguage' => 'id-ID',
                    'isPartOf' => ['@id' => $homeCanonicalUrl . '#website'],
                ],
                [
                    '@type' => 'Service',
                    '@id' => $canonicalUrl . '#service',
                    'name' => 'Sewa AC Standing Portable',
                    'serviceType' => 'Penyewaan AC standing portable untuk acara',
                    'description' => $pageDescription,
                    'areaServed' => [
                        '@type' => 'Place',
                        'name' => $serviceArea,
                    ],
                    'provider' => ['@id' => $organizationId],
                    'url' => $canonicalUrl,
                ],
            ],
        ];

        if ($breadcrumbLabel) {
            $structuredData['@graph'][] = [
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    [
                        '@type' => 'ListItem',
                        'position' => 1,
                        'name' => 'Beranda',
                        'item' => $homeCanonicalUrl,
                    ],
                    [
                        '@type' => 'ListItem',
                        'position' => 2,
                        'name' => $breadcrumbLabel,
                        'item' => $canonicalUrl,
                    ],
                ],
            ];
        }
    @endphp
    <script type="application/ld+json">
        @json($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white font-sans text-slate-800 antialiased">
    <a href="#konten" class="sr-only z-50 rounded-lg bg-white p-3 text-slate-950 focus:not-sr-only focus:fixed focus:left-4 focus:top-4">
        Lewati ke konten utama
    </a>
    @yield('content')
    <a href="https://wa.me/6285279761446?text=Halo%2C%20saya%20butuh%20informasi%20sewa%20AC." target="_blank" rel="noopener noreferrer" aria-label="Hubungi kami melalui WhatsApp" class="interactive-button whatsapp-float fixed bottom-5 right-5 z-40 inline-flex items-center gap-2 bg-emerald-500 px-5 py-3.5 text-sm font-extrabold text-white shadow-xl shadow-emerald-950/20 transition hover:bg-emerald-600 sm:bottom-7 sm:right-7">
        <i class="fa-brands fa-whatsapp" style="color: rgb(99, 230, 190);" aria-hidden="true"></i>
        WhatsApp
    </a>
</body>
</html>
