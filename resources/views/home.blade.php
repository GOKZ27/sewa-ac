@extends('layouts.app')

@section('title', $pageTitle)
@section('description', $pageDescription)

@section('content')
<header class="absolute inset-x-0 top-0 z-10">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-5 sm:px-8" aria-label="Navigasi utama">
        <a href="{{ route('home') }}" class="flex items-center gap-3 text-white" aria-label="Sewa AC Standing {{ $serviceArea }}, beranda">
            <img src="{{ asset('images/logo-sewa-ac.png') }}" alt="Logo Sewa AC Standing" width="72" height="64" fetchpriority="high" class="h-14 w-16 object-contain sm:h-16 sm:w-[72px]">
            <span class="text-sm font-extrabold leading-tight sm:text-base">SEWA AC STANDING<br><span class="font-medium text-white/75">Portable &amp; acara</span></span>
        </a>
        <a href="#kontak" class="rounded-full border border-white/40 bg-black/10 px-5 py-2.5 text-sm font-bold text-white transition hover:bg-white hover:text-slate-950">
            Hubungi Kami
        </a>
    </nav>
</header>

<main id="konten">
    <section class="relative isolate overflow-visible bg-slate-950 text-white">
        <div class="absolute inset-0 -z-10">
            <img src="{{ asset('images/2.webp') }}" alt="" width="300" height="225" fetchpriority="high" class="size-full object-cover object-center">
            <div class="absolute inset-0 bg-slate-950/50"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950/65 via-slate-950/45 to-slate-950/35"></div>
        </div>
        <div class="mx-auto grid min-h-[650px] max-w-7xl items-center gap-10 px-5 pb-20 pt-28 sm:px-8 sm:pb-24 lg:min-h-[690px] lg:grid-cols-[0.9fr_1.1fr] lg:gap-16 lg:pb-16">
            <div class="max-w-xl py-8 lg:py-16">
                @if ($breadcrumbLabel)
                    <nav aria-label="Breadcrumb" class="mb-5 text-sm text-white/75">
                        <ol class="flex flex-wrap items-center gap-2">
                            <li><a href="{{ route('home') }}" class="underline decoration-white/40 underline-offset-4 hover:text-white">Beranda</a></li>
                            <li aria-hidden="true">/</li>
                            <li aria-current="page" class="font-semibold text-white">{{ $breadcrumbLabel }}</li>
                        </ol>
                    </nav>
                @endif
                <p class="mb-5 inline-flex items-center gap-2 text-sm font-bold text-amber-300">
                    <span aria-hidden="true">✦</span>
                    Layanan sewa AC {{ $serviceArea }}
                </p>
                <h1 class="text-5xl font-extrabold leading-[1.06] tracking-tight sm:text-6xl lg:text-7xl">
                    Sewa AC <br>Standing<br>di {{ $serviceArea }}
                </h1>
                <p class="mt-6 max-w-lg text-base leading-7 text-white/85 sm:text-lg sm:leading-8">
                    {{ $areaIntro }}
                </p>
                <a id="kontak" href="https://wa.me/6285279761446?text=Halo%2C%20saya%20ingin%20menanyakan%20sewa%20AC%20standing%20di%20{{ rawurlencode($serviceArea) }}." target="_blank" rel="noopener noreferrer" class="mt-7 inline-flex items-center justify-center gap-3 rounded-lg bg-amber-300 px-6 py-3.5 font-extrabold text-slate-950 shadow-lg shadow-black/20 transition hover:bg-amber-200">
                    <svg viewBox="0 0 24 24" fill="none" class="size-5" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path d="M20 11.5a8.4 8.4 0 0 1-12.5 7.3L4 20l1.2-3.4A8.4 8.4 0 1 1 20 11.5Z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 9.5c.4 2.2 1.7 3.5 4 4" stroke-linecap="round"/>
                    </svg>
                    Tanya Harga &amp; Ketersediaan
                </a>
            </div>

            <figure class="relative z-10 mx-auto w-full max-w-[560px] lg:mt-36 lg:-mb-28">
                <img src="{{ asset('images/1.webp') }}" alt="Unit AC standing portable tertata untuk acara indoor" width="300" height="300" fetchpriority="high" class="aspect-[4/3] w-full rounded-md object-cover shadow-[0_30px_70px_-20px_rgba(0,0,0,0.65)]">
                <figcaption class="mt-4 flex items-center justify-end gap-2 text-sm font-medium text-white/90">
                    <svg viewBox="0 0 24 24" fill="none" class="size-4 text-amber-300" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/>
                    </svg>
                    Melayani area {{ $serviceArea }}
                </figcaption>
            </figure>
        </div>
    </section>

    <section class="bg-white px-5 pb-16 pt-16 sm:px-8 sm:pb-24 sm:pt-24 lg:pt-36">
        <div class="mx-auto max-w-6xl">
            <div class="text-center">
                <p class="text-xs font-extrabold uppercase tracking-[0.2em] text-amber-700">Layanan sewa AC standing</p>
                <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Jasa Sewa AC Standing untuk Berbagai Acara</h2>
            </div>
            <div class="mt-12 grid items-center gap-10 md:grid-cols-2 md:gap-16">
                <figure>
                    <img src="{{ asset('images/2.webp') }}" alt="Beberapa unit AC standing di ruang acara" width="300" height="225" loading="lazy" decoding="async" class="aspect-[4/3] w-full rounded-md object-cover shadow-[0_24px_60px_-25px_rgba(15,23,42,0.35)]">
                    <figcaption class="mt-3 text-sm font-semibold text-slate-700">AC standing untuk membantu menjaga kenyamanan ruang acara.</figcaption>
                </figure>
                <div>
                    <p class="text-xs font-extrabold uppercase tracking-[0.18em] text-amber-700">Sewa AC {{ $serviceArea }}</p>
                    <h3 class="mt-3 text-2xl font-extrabold leading-tight tracking-tight text-slate-900 sm:text-3xl">Pendingin ruangan untuk acara Anda</h3>
                    <p class="mt-5 leading-7 text-slate-600">
                        Kami melayani kebutuhan sewa AC standing portable untuk acara pernikahan, seminar, pameran, ulang tahun, gathering, dan kegiatan lainnya. Sampaikan tanggal acara serta lokasi di {{ $serviceArea }} untuk menanyakan ketersediaan unit dan detail biaya.
                    </p>
                    <a href="https://wa.me/6285279761446?text=Halo%2C%20saya%20ingin%20cek%20unit%20dan%20harga%20sewa%20AC%20standing%20di%20{{ rawurlencode($serviceArea) }}." target="_blank" rel="noopener noreferrer" class="mt-6 inline-flex items-center gap-2 font-extrabold text-amber-800 hover:text-amber-950">
                        Konsultasikan kebutuhan Anda <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-stone-50 px-5 py-16 sm:px-8 sm:py-20">
        <div class="mx-auto max-w-6xl">
            <div class="text-center">
                <p class="text-xs font-extrabold uppercase tracking-[0.2em] text-amber-700">Sewa AC standing</p>
                <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Keunggulan Layanan Kami</h2>
            </div>
            <div class="mt-12 grid gap-x-8 gap-y-10 sm:grid-cols-2 lg:grid-cols-3">
                <article class="text-center">
                    <span class="mx-auto flex size-12 items-center justify-center text-amber-500" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" class="size-8" stroke="currentColor" stroke-width="2">
                            <rect x="4" y="5" width="16" height="15" rx="2"/><path d="M8 3v4m8-4v4M8 12h8m-8 4h5" stroke-linecap="round"/>
                        </svg>
                    </span>
                    <h3 class="mt-3 text-lg font-extrabold text-slate-900">Jadwal Terencana</h3>
                    <p class="mx-auto mt-2 max-w-xs leading-6 text-slate-600">Ceritakan waktu acara agar jadwal pengiriman bisa dikonfirmasi sejak awal.</p>
                </article>
                <article class="text-center">
                    <span class="mx-auto flex size-12 items-center justify-center text-amber-500" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" class="size-8" stroke="currentColor" stroke-width="2">
                            <path d="M12 3 4 6v5c0 5 3.5 8.5 8 10 4.5-1.5 8-5 8-10V6l-8-3Z"/><path d="m9 12 2 2 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <h3 class="mt-3 text-lg font-extrabold text-slate-900">Dukungan Selama Sewa</h3>
                    <p class="mx-auto mt-2 max-w-xs leading-6 text-slate-600">Tanyakan dukungan teknis dan ketentuan layanan saat melakukan pemesanan.</p>
                </article>
                <article class="text-center">
                    <span class="mx-auto flex size-12 items-center justify-center text-amber-500" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" class="size-8" stroke="currentColor" stroke-width="2">
                            <path d="M4 20V5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v15M2 20h20M8 7h2m4 0h2m-8 4h2m4 0h2m-7 9v-4h4v4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <h3 class="mt-3 text-lg font-extrabold text-slate-900">Untuk Berbagai Acara</h3>
                    <p class="mx-auto mt-2 max-w-xs leading-6 text-slate-600">Pilihan untuk acara keluarga, seminar, pameran, dan kebutuhan ruangan lainnya.</p>
                </article>
                <article class="text-center">
                    <span class="mx-auto flex size-12 items-center justify-center text-amber-500" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" class="size-8" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v20M5 6l14 12M5 18 19 6M8 4l4 2 4-2M8 20l4-2 4 2M4 9l4 .3L9.3 6M20 15l-4-.3L14.7 18M4 15l4-.3L9.3 18M20 9l-4 .3L14.7 6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <h3 class="mt-3 text-lg font-extrabold text-slate-900">AC Standing Portable</h3>
                    <p class="mx-auto mt-2 max-w-xs leading-6 text-slate-600">Unit portable menjadi pilihan pendingin untuk kebutuhan acara sementara.</p>
                </article>
                <article class="text-center">
                    <span class="mx-auto flex size-12 items-center justify-center text-amber-500" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" class="size-8" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <h3 class="mt-3 text-lg font-extrabold text-slate-900">Respons Cepat</h3>
                    <p class="mx-auto mt-2 max-w-xs leading-6 text-slate-600">Hubungi kami untuk menanyakan informasi dan ketersediaan unit.</p>
                </article>
                <article class="text-center">
                    <span class="mx-auto flex size-12 items-center justify-center text-amber-500" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" class="size-8" stroke="currentColor" stroke-width="2">
                            <path d="M3 6h18l-2 7H5L3 6Zm2 7-1 6h16l-1-6m-9-3v3m4-3v3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <h3 class="mt-3 text-lg font-extrabold text-slate-900">Biaya Dikonfirmasi</h3>
                    <p class="mx-auto mt-2 max-w-xs leading-6 text-slate-600">Tanyakan rincian biaya berdasarkan jumlah unit, durasi, dan alamat acara.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-r from-blue-200 via-sky-300 to-blue-500 px-5 py-14 text-center sm:px-8 sm:py-16">
        <div class="mx-auto max-w-4xl">
            <h2 class="text-3xl font-extrabold tracking-tight text-slate-950 sm:text-4xl">Butuh Sewa AC Sekarang?</h2>
            <p class="mt-4 text-slate-800">Konsultasikan kebutuhan acara Anda untuk cek unit, jadwal, dan biaya sewa.</p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <a href="https://wa.me/6285279761446?text=Halo%2C%20saya%20ingin%20menanyakan%20sewa%20AC%20standing%20di%20{{ rawurlencode($serviceArea) }}." target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-full bg-emerald-500 px-6 py-3 font-bold text-slate-950 transition hover:bg-emerald-400">
                    <span aria-hidden="true">◉</span> Hubungi via WhatsApp
                </a>
                <a href="tel:+6285279761446" class="inline-flex items-center gap-2 rounded-full bg-rose-500 px-6 py-3 font-bold text-white transition hover:bg-rose-600">
                    <span aria-hidden="true">☎</span> Telepon Kami
                </a>
            </div>
        </div>
    </section>

    <section class="bg-white px-5 py-12 sm:px-8 sm:py-16" aria-labelledby="galeri-heading">
        <div class="mx-auto max-w-5xl">
            <h2 id="galeri-heading" class="sr-only">Galeri sewa AC standing {{ $serviceArea }}</h2>
            <div class="grid grid-cols-2 gap-2 overflow-hidden sm:grid-cols-4">
                <img src="{{ asset('images/1.webp') }}" alt="Unit AC standing pada acara indoor" width="300" height="300" loading="lazy" decoding="async" class="aspect-square size-full object-cover">
                <img src="{{ asset('images/3.webp') }}" alt="AC standing portable warna hitam" width="1472" height="1472" loading="lazy" decoding="async" class="aspect-square size-full object-cover">
                <img src="{{ asset('images/4.webp') }}" alt="AC standing portable di lokasi acara" width="1472" height="1472" loading="lazy" decoding="async" class="aspect-square size-full object-cover">
                <img src="{{ asset('images/5.webp') }}" alt="AC standing untuk acara dengan kursi tamu" width="1200" height="1600" loading="lazy" decoding="async" class="aspect-square size-full object-cover">
            </div>
        </div>
    </section>

    <section class="bg-stone-50 px-5 py-10 sm:px-8" aria-labelledby="area-layanan-heading">
        <div class="mx-auto max-w-5xl text-center">
            <h2 id="area-layanan-heading" class="text-xl font-extrabold text-slate-900">Area Layanan Sewa AC</h2>
            <p class="mt-2 text-slate-600">Hubungi kami untuk konfirmasi cakupan pengiriman berdasarkan alamat acara.</p>
            <nav aria-label="Halaman area layanan" class="mt-5 flex flex-wrap justify-center gap-3">
                <a href="{{ route('sewa-ac-tangerang') }}" class="rounded-full border border-stone-300 bg-white px-5 py-2.5 text-sm font-bold text-slate-800 hover:border-amber-500">Sewa AC Tangerang</a>
                <a href="{{ route('sewa-ac-ciledug') }}" class="rounded-full border border-stone-300 bg-white px-5 py-2.5 text-sm font-bold text-slate-800 hover:border-amber-500">Sewa AC Ciledug</a>
            </nav>
        </div>
    </section>

    <section class="bg-white px-5 py-14 sm:px-8 sm:py-16" aria-labelledby="faq-heading">
        <div class="mx-auto max-w-3xl">
            <h2 id="faq-heading" class="text-center text-3xl font-extrabold tracking-tight text-slate-900">FAQ Sewa AC Standing</h2>
            <div class="mt-8 divide-y divide-stone-200 border-y border-stone-200">
                <details class="group py-5">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-5 font-bold text-slate-900">
                        Informasi apa yang perlu dikirim untuk cek sewa AC?
                        <span class="text-xl text-amber-700 transition group-open:rotate-45" aria-hidden="true">+</span>
                    </summary>
                    <p class="mt-3 leading-7 text-slate-600">Kirim tanggal acara, alamat, jenis acara, dan perkiraan jumlah unit agar ketersediaan serta biaya bisa dikonfirmasi.</p>
                </details>
                <details class="group py-5">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-5 font-bold text-slate-900">
                        Untuk acara apa AC standing dapat disewa?
                        <span class="text-xl text-amber-700 transition group-open:rotate-45" aria-hidden="true">+</span>
                    </summary>
                    <p class="mt-3 leading-7 text-slate-600">AC standing dapat ditanyakan untuk kebutuhan seperti pernikahan, seminar, pameran, gathering, dan acara lainnya.</p>
                </details>
                <details class="group py-5">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-5 font-bold text-slate-900">
                        Berapa harga sewa AC per hari?
                        <span class="text-xl text-amber-700 transition group-open:rotate-45" aria-hidden="true">+</span>
                    </summary>
                    <p class="mt-3 leading-7 text-slate-600">Harga belum dicantumkan karena bergantung pada unit, durasi, dan alamat. Hubungi kami untuk meminta rincian sebelum memesan.</p>
                </details>
            </div>
        </div>
    </section>
</main>

<footer class="bg-[#1c1c1c] px-5 py-10 text-white sm:px-8">
    <div class="mx-auto grid max-w-5xl gap-8 sm:grid-cols-3">
        <p class="leading-7 text-white/75">Layanan sewa AC standing portable untuk pernikahan, seminar, pameran, dan acara lainnya di {{ $serviceArea }}.</p>
        <div>
            <h2 class="font-extrabold">Layanan</h2>
            <p class="mt-3 text-white/70">Sewa AC Standing</p>
            <p class="mt-1 text-white/70">Sewa AC Portable</p>
        </div>
        <div>
            <h2 class="font-extrabold">Hubungi Kami</h2>
            <p class="mt-3 text-white/70">Melayani area {{ $serviceArea }}</p>
            <a href="https://wa.me/6285279761446" target="_blank" rel="noopener noreferrer" class="mt-1 inline-block text-white/70 underline decoration-white/30 underline-offset-4 hover:text-white">WhatsApp</a>
        </div>
    </div>
    <p class="mx-auto mt-8 max-w-5xl border-t border-white/15 pt-5 text-sm text-white/55">&copy; {{ date('Y') }} Sewa AC Standing {{ $serviceArea }}.</p>
</footer>
@endsection
