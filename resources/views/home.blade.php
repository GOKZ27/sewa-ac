@extends('layouts.app')

@section('title', $pageTitle)
@section('description', $pageDescription)

@section('content')
<div class="relative">
    <header class="absolute inset-x-0 top-0 z-30 border-b border-white/15 bg-gradient-to-b from-black/55 to-transparent">
        <nav class="mx-auto flex max-w-7xl items-center justify-between gap-3 px-4 py-2.5 sm:gap-5 sm:px-8 sm:py-3" aria-label="Navigasi utama">
            <a href="{{ route('home') }}" class="flex shrink-0 items-center gap-2.5 text-white sm:gap-3" aria-label="Sewa AC Standing {{ $serviceArea }}, beranda">
                <img src="{{ asset('images/logo/logo2.png') }}" alt="Logo Sinar Sumatra" width="112" height="75" fetchpriority="high" class="h-12 w-16 object-contain sm:h-14 sm:w-20">
                <span class="border-l border-white/35 py-1 pl-2.5 text-[10px] font-extrabold leading-tight tracking-[0.12em] sm:pl-3 sm:text-xs">SEWA AC<br><span class="font-medium tracking-normal text-white/70">Standing portable</span></span>
            </a>
            <div class="hidden items-center gap-6 xl:flex">
                <a href="{{ route('home') }}" class="border-b border-emerald-400 py-2 text-xs font-bold text-white">Beranda</a>
                <a href="#produk" class="py-2 text-xs font-semibold text-white/85 transition hover:text-emerald-300">Produk</a>
                <a href="#layanan" class="py-2 text-xs font-semibold text-white/85 transition hover:text-emerald-300">Layanan</a>
                <a href="#galeri" class="py-2 text-xs font-semibold text-white/85 transition hover:text-emerald-300">Galeri</a>
                <a href="#kontak" class="py-2 text-xs font-semibold text-white/85 transition hover:text-emerald-300">Kontak</a>
            </div>
            <div class="flex shrink-0 items-center gap-2 sm:gap-3">
                <a href="https://wa.me/6285279761446?text=Halo%2C%20saya%20ingin%20menanyakan%20sewa%20AC%20standing%20di%20{{ rawurlencode($serviceArea) }}." target="_blank" rel="noopener noreferrer" class="interactive-button inline-flex items-center gap-1.5 bg-emerald-600 px-3 py-2.5 text-[10px] font-bold text-white transition hover:bg-emerald-500 sm:gap-2 sm:px-4 sm:text-xs">
                    <i class="fa-brands fa-whatsapp" style="color: rgb(99, 230, 190);" aria-hidden="true"></i>
                    Hubungi Kami
                </a>
                <details class="group relative hidden sm:block xl:hidden">
                    <summary class="interactive-button flex size-10 cursor-pointer list-none items-center justify-center border border-white/50 text-white sm:size-11" aria-label="Buka navigasi">
                        <svg viewBox="0 0 24 24" fill="none" class="size-5" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path d="M4 7h16M4 12h16M4 17h16" stroke-linecap="round"/>
                        </svg>
                    </summary>
                    <div class="absolute right-0 top-12 grid max-h-[75vh] min-w-56 gap-1 overflow-y-auto border border-white/15 bg-[#111b19]/95 p-3 shadow-xl backdrop-blur-sm">
                        <a href="{{ route('home') }}" class="px-3 py-2 text-sm font-semibold text-white">Beranda</a>
                        <a href="#produk" class="px-3 py-2 text-sm font-semibold text-white">Produk</a>
                        <a href="#layanan" class="px-3 py-2 text-sm font-semibold text-white">Layanan</a>
                        <a href="#proses" class="px-3 py-2 text-sm font-semibold text-white">Cara pesan</a>
                        <a href="#galeri" class="px-3 py-2 text-sm font-semibold text-white">Galeri foto</a>
                        <a href="#video" class="px-3 py-2 text-sm font-semibold text-white">Video</a>
                        <a href="#area" class="px-3 py-2 text-sm font-semibold text-white">Area layanan</a>
                        <a href="#faq" class="px-3 py-2 text-sm font-semibold text-white">FAQ</a>
                        <a href="https://wa.me/6285279761446?text=Halo%2C%20saya%20ingin%20menanyakan%20sewa%20AC%20standing%20di%20{{ rawurlencode($serviceArea) }}." target="_blank" rel="noopener noreferrer" class="interactive-button mt-1 inline-flex items-center justify-center gap-2 bg-emerald-600 px-3 py-2.5 text-center text-sm font-bold text-white transition hover:bg-emerald-500">
                            <i class="fa-brands fa-whatsapp" style="color: rgb(99, 230, 190);" aria-hidden="true"></i>
                            Hubungi WhatsApp
                        </a>
                    </div>
                </details>
            </div>
        </nav>
    </header>

<main id="konten">
    <section class="relative isolate min-h-[680px] overflow-hidden bg-[#0c1817] text-white sm:min-h-[690px] lg:h-[min(100svh,800px)] lg:min-h-[680px]">
        <img src="{{ asset('images/11.webp') }}" alt="AC standing portable di ruang kegiatan" width="864" height="1536" fetchpriority="high" class="absolute inset-0 size-full scale-[1.04] object-cover object-[center_48%] lg:translate-x-[30%] lg:scale-[1.35]">
        <div aria-hidden="true" class="absolute inset-0 bg-gradient-to-r from-[#071e17]/95 via-[#071e17]/76 to-[#071e17]/16"></div>
        <div aria-hidden="true" class="absolute inset-0 bg-gradient-to-t from-[#071e17]/65 via-transparent to-black/20"></div>
        <div aria-hidden="true" class="absolute left-0 top-0 h-[48%] w-[15%] bg-emerald-600 [clip-path:polygon(0_0,100%_0,0_100%)] sm:w-[12%]"></div>
        <div aria-hidden="true" class="absolute -left-24 top-28 size-80 rounded-full border border-white/10"></div>
        <div aria-hidden="true" class="absolute -left-10 top-44 size-56 rounded-full border border-emerald-400/15"></div>
        <div class="relative mx-auto flex min-h-[680px] max-w-6xl items-center px-5 pb-28 pt-28 sm:min-h-[690px] sm:px-8 sm:pb-24 sm:pt-28 lg:h-full lg:min-h-0 lg:pb-20">
            <div class="relative z-10 max-w-2xl">
                @if ($breadcrumbLabel)
                    <nav aria-label="Breadcrumb" class="mb-5 text-xs text-white/70">
                        <ol class="flex flex-wrap items-center gap-2">
                            <li><a href="{{ route('home') }}" class="underline decoration-white/40 underline-offset-4 hover:text-white">Beranda</a></li>
                            <li aria-hidden="true">/</li>
                            <li aria-current="page" class="font-semibold text-white">{{ $breadcrumbLabel }}</li>
                        </ol>
                    </nav>
                @endif
                <h1 class="max-w-2xl text-5xl font-extrabold leading-[0.96] tracking-[-0.055em] sm:text-6xl lg:text-[5.75rem]">
                    Sewa AC<br>
                    <span class="text-emerald-400">Standing</span>
                </h1>
                <p class="mt-5 max-w-lg text-base leading-7 text-white/90 sm:text-lg sm:leading-8">{{ $areaIntro }}</p>
                <div class="mt-7 flex flex-col items-stretch gap-3 sm:flex-row sm:items-center">
                    <a href="https://wa.me/6285279761446?text=Halo%2C%20saya%20ingin%20menanyakan%20sewa%20AC%20standing%20di%20{{ rawurlencode($serviceArea) }}." target="_blank" rel="noopener noreferrer" class="interactive-button inline-flex min-h-12 items-center justify-center gap-2 bg-emerald-600 px-5 py-3 text-sm font-bold text-white transition hover:bg-emerald-500 sm:w-auto">
                        <i class="fa-brands fa-whatsapp text-xl" style="color: rgb(99, 230, 190);" aria-hidden="true"></i>
                        Hubungi WhatsApp
                    </a>
                    <a href="#produk" class="interactive-button inline-flex min-h-12 items-center justify-center gap-2 border border-white/70 bg-white/5 px-5 py-3 text-sm font-bold text-white transition hover:bg-white/15 sm:w-auto sm:px-7">
                        <svg viewBox="0 0 24 24" fill="none" class="size-5 shrink-0" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path d="m3.5 7 8.5-4 8.5 4v10l-8.5 4-8.5-4V7Z" stroke-linejoin="round"/>
                            <path d="m3.8 7.2 8.2 4 8.2-4M12 11.2V21M8 5l8.5 4" stroke-linejoin="round"/>
                        </svg>
                        Lihat produk
                    </a>
                </div>
                <div class="mt-7 flex flex-wrap gap-x-6 gap-y-3 text-xs font-semibold text-white/85 sm:gap-x-8">
                    <span class="inline-flex items-center gap-2">
                        <svg viewBox="0 0 24 24" fill="none" class="size-4 shrink-0 text-emerald-300" stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                            <path d="M6 4h12v16H6zM9 7h6M9 10h6M9 13h6M9 16h3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        AC standing portable
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <svg viewBox="0 0 24 24" fill="none" class="size-4 shrink-0 text-emerald-300" stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                            <path d="M4 5.5h16v15H4zM8 3v5M16 3v5M4 10h16M8 14l2 2 5-5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Cek ketersediaan unit
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <svg viewBox="0 0 24 24" fill="none" class="size-4 shrink-0 text-emerald-300" stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                            <path d="M12 3.5 19 6v5.2c0 4.3-2.9 7.5-7 9.3-4.1-1.8-7-5-7-9.3V6l7-2.5Z" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="m9 12 2 2 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Konfirmasi biaya sewa
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section aria-label="Pilihan produk dan area layanan" class="relative z-10 -mt-14 px-3 sm:-mt-16 sm:px-8">
        <div class="mx-auto grid max-w-6xl grid-cols-2 divide-x divide-y divide-slate-200 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-xl shadow-slate-950/10 lg:grid-cols-5 lg:divide-y-0">
            <a href="#produk" class="flex min-h-24 items-center gap-2 p-3 transition hover:bg-emerald-50 sm:gap-3 sm:p-5">
                <img src="{{ asset('images/3.webp') }}" alt="" width="1472" height="1472" loading="eager" decoding="async" class="size-11 shrink-0 rounded-lg object-cover sm:size-14">
                <span><span class="block text-xs font-extrabold text-slate-900 sm:text-sm">AC Standing</span><span class="mt-1 block text-[10px] text-slate-600 sm:text-xs">Portable · Acara</span></span>
            </a>
            <a href="#layanan" class="flex min-h-24 items-center gap-2 p-3 transition hover:bg-emerald-50 sm:gap-3 sm:p-5">
                <img src="{{ asset('images/12.webp') }}" alt="" width="864" height="1536" loading="eager" decoding="async" class="size-11 shrink-0 rounded-lg object-cover sm:size-14">
                <span><span class="block text-xs font-extrabold text-slate-900 sm:text-sm">Event & Pernikahan</span><span class="mt-1 block text-[10px] text-slate-600 sm:text-xs">Acara indoor</span></span>
            </a>
            <a href="#galeri" class="flex min-h-24 items-center gap-2 p-3 transition hover:bg-emerald-50 sm:gap-3 sm:p-5">
                <img src="{{ asset('images/1.webp') }}" alt="" width="300" height="300" loading="eager" decoding="async" class="size-11 shrink-0 rounded-lg object-cover sm:size-14">
                <span><span class="block text-xs font-extrabold text-slate-900 sm:text-sm">Seminar & Pameran</span><span class="mt-1 block text-[10px] text-slate-600 sm:text-xs">Dokumentasi acara</span></span>
            </a>
            <a href="#layanan" class="flex min-h-24 items-center gap-2 p-3 transition hover:bg-emerald-50 sm:gap-3 sm:p-5">
                <img src="{{ asset('images/2.webp') }}" alt="" width="300" height="225" loading="eager" decoding="async" class="size-11 shrink-0 rounded-lg object-cover sm:size-14">
                <span><span class="block text-xs font-extrabold text-slate-900 sm:text-sm">Gathering & Event</span><span class="mt-1 block text-[10px] text-slate-600 sm:text-xs">Untuk kegiatan</span></span>
            </a>
            <div class="col-span-2 flex min-h-24 items-center gap-3 p-4 sm:p-5 lg:col-span-1">
                <span class="grid size-11 shrink-0 place-items-center rounded-full bg-emerald-50 text-emerald-700 sm:size-12" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" class="size-5" stroke="currentColor" stroke-width="1.8">
                        <path d="M20 10.2c0 5-8 11.3-8 11.3S4 15.2 4 10.2a8 8 0 1 1 16 0Z" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="12" cy="10" r="2.5"/>
                    </svg>
                </span>
                <span>
                    <span class="block text-sm font-extrabold text-slate-900">Area Layanan</span>
                    <span class="mt-1 block text-xs text-slate-600">Tangerang & Ciledug</span>
                    <span class="mt-1 flex gap-3 text-[10px] font-semibold text-emerald-700 sm:text-xs">
                        <a href="{{ route('sewa-ac-tangerang') }}" class="inline-flex items-center gap-1 hover:underline">
                            Tangerang
                            <svg viewBox="0 0 24 24" fill="none" class="size-3.5" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </a>
                        <a href="{{ route('sewa-ac-ciledug') }}" class="inline-flex items-center gap-1 hover:underline">
                            Ciledug
                            <svg viewBox="0 0 24 24" fill="none" class="size-3.5" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </a>
                    </span>
                </span>
            </div>
        </div>
    </section>

    <section class="bg-white px-5 pb-4 pt-12 sm:px-8 sm:pt-16">
        <div class="mx-auto grid max-w-7xl gap-7 border-b border-slate-200 pb-8 md:grid-cols-[0.9fr_1.1fr] md:items-center">
            <div>
                <h2 class="mt-3 max-w-lg text-2xl font-extrabold leading-tight tracking-tight text-slate-950 sm:text-3xl">Sewa AC standing portable di {{ $serviceArea }}</h2>
            </div>
            <div class="grid gap-4 sm:grid-cols-3">
                <div class="flex items-center gap-3">
                    <span class="grid size-12 shrink-0 place-items-center rounded-full bg-emerald-50 text-emerald-700" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" class="size-6" stroke="currentColor" stroke-width="1.8"><path d="M12 3 4.5 12h6l-1 9L19.5 10h-6l1-7Z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                    <span class="text-sm font-bold leading-5 text-slate-800">Pilih kebutuhan AC</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="grid size-12 shrink-0 place-items-center rounded-full bg-emerald-50 text-emerald-700" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" class="size-6" stroke="currentColor" stroke-width="1.8"><path d="M12 3v18M3 12h18M5.64 5.64l12.72 12.72m0-12.72L5.64 18.36" stroke-linecap="round"/></svg>
                    </span>
                    <span class="text-sm font-bold leading-5 text-slate-800">Cek unit dan jadwal</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="grid size-12 shrink-0 place-items-center rounded-full bg-emerald-50 text-emerald-700" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" class="size-6" stroke="currentColor" stroke-width="1.8"><path d="M12 8v4l2.5 2.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                    <span class="text-sm font-bold leading-5 text-slate-800">Konfirmasi biaya sewa</span>
                </div>
            </div>
        </div>
    </section>

    <section id="produk" class="scroll-mt-24 bg-[#f2f8f4] px-5 py-8 sm:px-8 sm:py-12">
        <div class="mx-auto max-w-7xl">
            <div class="mb-4 flex flex-wrap items-end justify-between gap-4 sm:mb-6">
                <div>
                    <p class="text-[10px] font-extrabold uppercase tracking-[0.18em] text-emerald-700 sm:text-xs">Unit portable</p>
                    <h2 class="mt-1 text-xl font-extrabold leading-tight tracking-tight text-slate-950 sm:text-3xl">Pilih unit AC</h2>
                </div>
                <p class="max-w-40 text-right text-[10px] leading-4 text-slate-600 sm:max-w-xs sm:text-sm sm:leading-6">Tanyakan spesifikasi dan harga melalui WhatsApp.</p>
            </div>
            <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 sm:gap-5">
                <a href="https://wa.me/6285279761446?text=Halo%2C%20saya%20ingin%20menanyakan%20unit%20AC%20standing%20portable%20di%20{{ rawurlencode($serviceArea) }}." target="_blank" rel="noopener noreferrer" class="product-card group flex aspect-square flex-col overflow-hidden border border-emerald-100 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                    <div class="relative min-h-0 flex-1 overflow-hidden bg-emerald-50">
                        <img src="{{ asset('images/3.webp') }}" alt="Unit AC standing portable warna hitam" width="1472" height="1472" loading="lazy" decoding="async" class="size-full object-cover transition duration-500 group-hover:scale-105">
                    </div>
                    <div class="flex min-h-14 items-center justify-between gap-2 p-3 sm:min-h-20 sm:p-4">
                        <span><span class="block text-[10px] font-extrabold leading-tight text-slate-900 sm:text-sm">AC Standing</span><span class="mt-1 block text-[9px] text-slate-500 sm:text-xs">Unit portable</span></span>
                        <span class="grid size-8 shrink-0 place-items-center bg-emerald-600 text-white" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" class="size-3.5 sm:size-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                        </span>
                    </div>
                </a>
                <a href="https://wa.me/6285279761446?text=Halo%2C%20saya%20ingin%20melihat%20pilihan%20foto%20unit%20AC%20standing%20di%20{{ rawurlencode($serviceArea) }}." target="_blank" rel="noopener noreferrer" class="product-card group flex aspect-square flex-col overflow-hidden border border-emerald-100 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                    <div class="relative min-h-0 flex-1 overflow-hidden bg-emerald-50">
                        <img src="{{ asset('images/11.webp') }}" alt="AC standing portable di ruang kegiatan" width="864" height="1536" loading="lazy" decoding="async" class="size-full object-cover object-[center_35%] transition duration-500 group-hover:scale-105">
                    </div>
                    <div class="flex min-h-14 items-center justify-between gap-2 p-3 sm:min-h-20 sm:p-4">
                        <span><span class="block text-[10px] font-extrabold leading-tight text-slate-900 sm:text-sm">AC Standing</span><span class="mt-1 block text-[9px] text-slate-500 sm:text-xs">Foto di lokasi</span></span>
                        <span class="grid size-8 shrink-0 place-items-center bg-emerald-600 text-white" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" class="size-3.5 sm:size-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                        </span>
                    </div>
                </a>
                <a href="https://wa.me/6285279761446?text=Halo%2C%20saya%20ingin%20menanyakan%20unit%20AC%20standing%20untuk%20acara%20di%20{{ rawurlencode($serviceArea) }}." target="_blank" rel="noopener noreferrer" class="product-card group flex aspect-square flex-col overflow-hidden border border-emerald-100 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                    <div class="relative min-h-0 flex-1 overflow-hidden bg-emerald-50">
                        <img src="{{ asset('images/12.webp') }}" alt="Unit AC standing portable di ruang acara" width="864" height="1536" loading="lazy" decoding="async" class="size-full object-cover object-[center_40%] transition duration-500 group-hover:scale-105">
                    </div>
                    <div class="flex min-h-14 items-center justify-between gap-2 p-3 sm:min-h-20 sm:p-4">
                        <span><span class="block text-[10px] font-extrabold leading-tight text-slate-900 sm:text-sm">AC Standing</span><span class="mt-1 block text-[9px] text-slate-500 sm:text-xs">Untuk acara</span></span>
                        <span class="grid size-8 shrink-0 place-items-center bg-emerald-600 text-white" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" class="size-3.5 sm:size-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                        </span>
                    </div>
                </a>
            </div>
            <p class="mt-3 text-[9px] text-slate-500 sm:text-xs">Foto dokumentasi unit AC standing portable; jumlah, spesifikasi, dan harga dikonfirmasi saat pemesanan.</p>
        </div>
    </section>

    <section id="layanan" class="scroll-mt-24 bg-white px-5 py-8 sm:px-8 sm:py-12">
        <div class="mx-auto max-w-7xl">
            <div class="mb-4 flex flex-wrap items-end justify-between gap-4 sm:mb-6">
                <div>
                    <p class="text-[10px] font-extrabold uppercase tracking-[0.18em] text-emerald-700 sm:text-xs">Layanan untuk acara</p>
                    <h2 class="mt-1 text-xl font-extrabold leading-tight tracking-tight text-slate-950 sm:text-3xl">Sewa AC untuk berbagai acara</h2>
                </div>
                <a href="https://wa.me/6285279761446?text=Halo%2C%20saya%20ingin%20menanyakan%20layanan%20sewa%20AC%20di%20{{ rawurlencode($serviceArea) }}." target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 text-[10px] font-bold text-emerald-700 sm:text-sm">
                    Tanya layanan
                    <i class="fa-brands fa-whatsapp" style="color: rgb(99, 230, 190);" aria-hidden="true"></i>
                </a>
            </div>
            <div class="grid grid-cols-[1.15fr_0.85fr] gap-3 sm:gap-5">
                <a href="https://wa.me/6285279761446?text=Halo%2C%20saya%20ingin%20tanya%20sewa%20AC%20standing%20untuk%20event." target="_blank" rel="noopener noreferrer" class="group relative min-h-36 overflow-hidden rounded-xl bg-slate-900 text-white sm:min-h-64 sm:rounded-2xl">
                    <img src="{{ asset('images/12.webp') }}" alt="AC standing portable di ruang acara dengan meja dan kursi" width="864" height="1536" loading="lazy" decoding="async" class="absolute inset-0 size-full object-cover object-[center_45%] transition duration-500 group-hover:scale-[1.03]">
                    <span class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/15 to-transparent"></span>
                    <span class="absolute inset-x-0 bottom-0 p-3 sm:p-6">
                        <span class="block text-[9px] font-bold uppercase tracking-[0.15em] text-white/75 sm:text-xs">Untuk acara</span>
                        <span class="mt-1 flex items-center gap-1 text-xs font-extrabold leading-tight sm:text-xl">
                            Sewa AC untuk event
                            <svg viewBox="0 0 24 24" fill="none" class="size-4 shrink-0" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M7 17 17 7M8 7h9v9" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                    </span>
                </a>
                <a href="https://wa.me/6285279761446?text=Halo%2C%20saya%20ingin%20tanya%20sewa%20AC%20standing." target="_blank" rel="noopener noreferrer" class="flex min-h-36 flex-col justify-between rounded-xl bg-emerald-700 p-3 text-white transition hover:bg-emerald-800 sm:min-h-64 sm:rounded-2xl sm:p-6">
                    <span class="text-[9px] font-extrabold uppercase tracking-[0.15em] text-emerald-100 sm:text-xs">Unit portable / 01</span>
                    <span>
                        <span class="block text-xs font-extrabold leading-tight sm:text-xl">Sewa AC standing</span>
                        <span class="mt-2 flex items-center gap-1 text-[9px] font-bold sm:mt-3 sm:text-sm">
                            Tanya unit dan harga
                            <i class="fa-brands fa-whatsapp" style="color: rgb(99, 230, 190);" aria-hidden="true"></i>
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <section id="dokumentasi" class="bg-emerald-950 px-5 py-10 text-white sm:px-8 sm:py-12">
        <div id="proses" class="scroll-mt-24 mx-auto grid max-w-7xl items-center gap-6 lg:grid-cols-[0.8fr_1.2fr] lg:gap-10">
            <div>
                <p class="text-[10px] font-extrabold uppercase tracking-[0.18em] text-emerald-200 sm:text-xs">Cara memesan</p>
                <h2 class="mt-2 max-w-md text-xl font-extrabold leading-tight tracking-tight sm:text-3xl">Pemesanan dalam tiga langkah</h2>
                <a href="https://wa.me/6285279761446?text=Halo%2C%20saya%20ingin%20menanyakan%20sewa%20AC%20standing%20di%20{{ rawurlencode($serviceArea) }}." target="_blank" rel="noopener noreferrer" class="interactive-button mt-4 inline-flex min-h-10 items-center gap-2 bg-emerald-600 px-4 py-2 text-xs font-extrabold text-white transition hover:bg-emerald-500 sm:mt-5 sm:text-sm">
                    Mulai lewat WhatsApp
                    <i class="fa-brands fa-whatsapp" style="color: rgb(99, 230, 190);" aria-hidden="true"></i>
                </a>
            </div>
            <div class="grid gap-2 sm:grid-cols-3 sm:gap-3">
                <article class="flex items-start gap-3 rounded-xl bg-white/5 p-3 sm:flex-col sm:gap-3 sm:p-4">
                    <span class="grid size-8 shrink-0 place-items-center rounded-full bg-emerald-700 text-xs font-extrabold text-white sm:size-9">01</span>
                    <span>
                        <h3 class="text-sm font-extrabold leading-5">Pilih kebutuhan AC</h3>
                        <p class="mt-1 text-xs leading-5 text-white/70">Tentukan kebutuhan unit untuk acara.</p>
                    </span>
                </article>
                <article class="flex items-start gap-3 rounded-xl bg-white/5 p-3 sm:flex-col sm:gap-3 sm:p-4">
                    <span class="grid size-8 shrink-0 place-items-center rounded-full bg-emerald-700 text-xs font-extrabold text-white sm:size-9">02</span>
                    <span>
                        <h3 class="text-sm font-extrabold leading-5">Hubungi WhatsApp</h3>
                        <p class="mt-1 text-xs leading-5 text-white/70">Kirim tanggal dan alamat acara.</p>
                    </span>
                </article>
                <article class="flex items-start gap-3 rounded-xl bg-white/5 p-3 sm:flex-col sm:gap-3 sm:p-4">
                    <span class="grid size-8 shrink-0 place-items-center rounded-full bg-emerald-700 text-xs font-extrabold text-white sm:size-9">03</span>
                    <span>
                        <h3 class="text-sm font-extrabold leading-5">Konfirmasi jadwal</h3>
                        <p class="mt-1 text-xs leading-5 text-white/70">Tanyakan ketersediaan dan biaya.</p>
                    </span>
                </article>
            </div>
        </div>
    </section>

    <section id="kontak" class="scroll-mt-24 bg-[#eff5f1] px-5 pb-28 pt-8 sm:px-8 sm:py-9">
        <div class="mx-auto flex max-w-7xl flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <p class="text-[10px] font-extrabold uppercase tracking-[0.18em] text-emerald-700 sm:text-xs">Hubungi kami</p>
                <h2 class="mt-2 text-xl font-extrabold leading-tight tracking-tight text-slate-950 sm:text-3xl">Butuh AC untuk acara?</h2>
            </div>
            <a href="https://wa.me/6285279761446?text=Halo%2C%20saya%20ingin%20menanyakan%20sewa%20AC%20standing%20di%20{{ rawurlencode($serviceArea) }}." target="_blank" rel="noopener noreferrer" class="interactive-button inline-flex min-h-11 items-center justify-center gap-2 bg-emerald-700 px-5 py-3 text-sm font-extrabold text-white transition hover:bg-emerald-800">
                Hubungi WhatsApp
                <i class="fa-brands fa-whatsapp" style="color: rgb(99, 230, 190);" aria-hidden="true"></i>
            </a>
        </div>
    </section>

    <section id="galeri" class="scroll-mt-24 bg-[#e8e5dc] px-5 py-16 sm:px-8 sm:py-20">
        <div class="mx-auto max-w-7xl">
            <div class="mb-8 flex flex-wrap items-end justify-between gap-5">
                <div>
                    <h2 class="text-2xl font-extrabold tracking-tight text-slate-950 sm:text-3xl">Unit, ruang, dan momen</h2>
                </div>
                <p class="max-w-md text-sm leading-6 text-slate-600">Foto dokumentasi AC standing dan penempatannya di lokasi kegiatan.</p>
            </div>
            <div class="grid auto-rows-[145px] grid-cols-2 gap-3 sm:auto-rows-[190px] sm:grid-cols-3 lg:auto-rows-[220px] lg:grid-cols-4">
                <button type="button" data-lightbox-src="{{ asset('images/1.webp') }}" data-lightbox-alt="Unit AC standing dalam ruang acara" class="group relative overflow-hidden bg-stone-200 text-left sm:row-span-2">
                    <img src="{{ asset('images/1.webp') }}" alt="Unit AC standing dalam ruang acara" width="300" height="300" loading="lazy" decoding="async" class="size-full object-cover transition duration-500 group-hover:scale-[1.03]">
                    <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 to-transparent px-4 pb-4 pt-12 text-xs font-semibold text-white">Dokumentasi acara</span>
                </button>
                <button type="button" data-lightbox-src="{{ asset('images/2.webp') }}" data-lightbox-alt="Beberapa AC standing di lokasi kegiatan" class="group relative overflow-hidden bg-stone-200 text-left">
                    <img src="{{ asset('images/2.webp') }}" alt="Beberapa AC standing di lokasi kegiatan" width="300" height="225" loading="lazy" decoding="async" class="size-full object-cover transition duration-500 group-hover:scale-[1.03]">
                    <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 to-transparent px-3 pb-3 pt-10 text-xs font-semibold text-white">Unit AC standing</span>
                </button>
                <button type="button" data-lightbox-src="{{ asset('images/3.webp') }}" data-lightbox-alt="AC standing portable warna hitam" class="group relative overflow-hidden bg-stone-200 text-left">
                    <img src="{{ asset('images/3.webp') }}" alt="AC standing portable warna hitam" width="1472" height="1472" loading="lazy" decoding="async" class="size-full object-cover transition duration-500 group-hover:scale-[1.03]">
                    <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 to-transparent px-3 pb-3 pt-10 text-xs font-semibold text-white">Detail unit</span>
                </button>
                <button type="button" data-lightbox-src="{{ asset('images/4.webp') }}" data-lightbox-alt="AC standing portable di area indoor" class="group relative overflow-hidden bg-stone-200 text-left">
                    <img src="{{ asset('images/4.webp') }}" alt="AC standing portable di area indoor" width="1472" height="1472" loading="lazy" decoding="async" class="size-full object-cover transition duration-500 group-hover:scale-[1.03]">
                    <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 to-transparent px-3 pb-3 pt-10 text-xs font-semibold text-white">Unit di lokasi</span>
                </button>
                <button type="button" data-lightbox-src="{{ asset('images/5.webp') }}" data-lightbox-alt="AC standing portable di ruang acara" class="group relative overflow-hidden bg-stone-200 text-left lg:row-span-2">
                    <img src="{{ asset('images/5.webp') }}" alt="AC standing portable di ruang acara" width="1200" height="1600" loading="lazy" decoding="async" class="size-full object-cover transition duration-500 group-hover:scale-[1.03]">
                    <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 to-transparent px-3 pb-3 pt-10 text-xs font-semibold text-white">Suasana acara</span>
                </button>
                <button type="button" data-lightbox-src="{{ asset('images/8.webp') }}" data-lightbox-alt="Unit AC standing di dalam ruangan" class="group relative overflow-hidden bg-stone-200 text-left">
                    <img src="{{ asset('images/8.webp') }}" alt="Unit AC standing di dalam ruangan" width="606" height="770" loading="lazy" decoding="async" class="size-full object-cover transition duration-500 group-hover:scale-[1.03]">
                    <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 to-transparent px-3 pb-3 pt-10 text-xs font-semibold text-white">Penempatan unit</span>
                </button>
                <button type="button" data-lightbox-src="{{ asset('images/9.webp') }}" data-lightbox-alt="AC standing di area gedung" class="group relative overflow-hidden bg-stone-200 text-left">
                    <img src="{{ asset('images/9.webp') }}" alt="AC standing di area gedung" width="864" height="1536" loading="lazy" decoding="async" class="size-full object-cover transition duration-500 group-hover:scale-[1.03]">
                    <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 to-transparent px-3 pb-3 pt-10 text-xs font-semibold text-white">Dokumentasi lokasi</span>
                </button>
                <button type="button" data-lightbox-src="{{ asset('images/10.webp') }}" data-lightbox-alt="AC standing untuk kebutuhan acara" class="group relative overflow-hidden bg-stone-200 text-left">
                    <img src="{{ asset('images/10.webp') }}" alt="AC standing untuk kebutuhan acara" width="864" height="1536" loading="lazy" decoding="async" class="size-full object-cover transition duration-500 group-hover:scale-[1.03]">
                    <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 to-transparent px-3 pb-3 pt-10 text-xs font-semibold text-white">AC di acara</span>
                </button>
                <button type="button" data-lightbox-src="{{ asset('images/11.webp') }}" data-lightbox-alt="Unit AC standing di ruang kegiatan" class="group relative overflow-hidden bg-stone-200 text-left">
                    <img src="{{ asset('images/11.webp') }}" alt="Unit AC standing di ruang kegiatan" width="864" height="1536" loading="lazy" decoding="async" class="size-full object-cover transition duration-500 group-hover:scale-[1.03]">
                    <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 to-transparent px-3 pb-3 pt-10 text-xs font-semibold text-white">Ruang kegiatan</span>
                </button>
                <button type="button" data-lightbox-src="{{ asset('images/12.webp') }}" data-lightbox-alt="Unit AC standing di ruang acara dengan meja dan kursi" class="group relative overflow-hidden bg-stone-200 text-left">
                    <img src="{{ asset('images/12.webp') }}" alt="Unit AC standing di ruang acara dengan meja dan kursi" width="864" height="1536" loading="lazy" decoding="async" class="size-full object-cover transition duration-500 group-hover:scale-[1.03]">
                    <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 to-transparent px-3 pb-3 pt-10 text-xs font-semibold text-white">Acara dalam ruangan</span>
                </button>
                <button type="button" data-lightbox-src="{{ asset('images/7.webp') }}" data-lightbox-alt="AC standing di area acara indoor" class="group relative overflow-hidden bg-stone-200 text-left">
                    <img src="{{ asset('images/7.webp') }}" alt="AC standing di area acara indoor" width="614" height="764" loading="lazy" decoding="async" class="size-full object-cover transition duration-500 group-hover:scale-[1.03]">
                    <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 to-transparent px-3 pb-3 pt-10 text-xs font-semibold text-white">Unit di lokasi acara</span>
                </button>
            </div>
        </div>
    </section>

    <section id="video" class="scroll-mt-24 relative overflow-hidden bg-[#171b19] px-5 py-16 text-white sm:px-8 sm:py-20">
        <div aria-hidden="true" class="pointer-events-none absolute -right-28 bottom-0 size-80 rounded-full border border-white/10"></div>
        <div class="mx-auto max-w-6xl">
            <div class="mb-8">
                <div>
                    <h2 class="text-2xl font-extrabold tracking-tight text-white sm:text-3xl">Lihat dokumentasi video</h2>
                </div>
            </div>
            <div class="grid gap-5 md:grid-cols-[1.35fr_0.65fr] md:items-stretch">
                <button type="button" data-video-src="{{ asset('vidio/sewa-ac.mp4') }}" data-video-poster="{{ asset('images/7.webp') }}" aria-label="Putar video dokumentasi sewa AC pertama" class="group relative aspect-video overflow-hidden bg-slate-950 text-left md:aspect-auto md:min-h-[360px]">
                    <img src="{{ asset('images/7.webp') }}" alt="" width="614" height="764" loading="lazy" decoding="async" class="size-full object-cover object-center opacity-80 transition duration-700 group-hover:scale-[1.025]">
                    <span class="absolute inset-0 flex items-center justify-center">
                        <span class="flex size-16 items-center justify-center rounded-full bg-[#c7343c] text-white transition group-hover:scale-105" aria-hidden="true">
                            <svg viewBox="0 0 24 24" class="ml-1 size-5" fill="currentColor"><path d="M7 4.8v14.4L19 12 7 4.8Z"/></svg>
                        </span>
                    </span>
                    <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/80 to-transparent px-5 pb-5 pt-16 text-left text-sm font-bold text-white sm:px-7 sm:pb-7">Dokumentasi sewa AC <span class="mt-1 block text-xs font-medium text-white/70">Pilih untuk memutar video</span></span>
                </button>
                <button type="button" data-video-src="{{ asset('vidio/sewa-ac2.mp4') }}" data-video-poster="{{ asset('images/10.webp') }}" aria-label="Putar video dokumentasi sewa AC kedua" class="group relative aspect-video overflow-hidden bg-slate-950 text-left md:aspect-auto">
                    <img src="{{ asset('images/10.webp') }}" alt="" width="864" height="1536" loading="lazy" decoding="async" class="size-full object-cover opacity-75 transition duration-700 group-hover:scale-[1.025]">
                    <span class="absolute inset-0 flex items-center justify-center">
                        <span class="flex size-14 items-center justify-center rounded-full bg-white text-[#171b19] transition group-hover:scale-105" aria-hidden="true">
                            <svg viewBox="0 0 24 24" class="ml-1 size-5" fill="currentColor"><path d="M7 4.8v14.4L19 12 7 4.8Z"/></svg>
                        </span>
                    </span>
                    <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/80 to-transparent px-4 pb-4 pt-14 text-left text-sm font-bold text-white">Video kegiatan <span class="mt-1 block text-xs font-medium text-white/70">Pilih untuk memutar</span></span>
                </button>
            </div>
        </div>
    </section>

    <section id="area" class="scroll-mt-24 overflow-hidden bg-[#eff5f1] px-5 py-10 sm:px-8 sm:py-14">
        <div class="mx-auto grid max-w-7xl gap-6 md:grid-cols-[0.72fr_1.28fr] md:items-center md:gap-10">
            <div>
                <p class="inline-flex items-center gap-2 rounded-full bg-emerald-700 px-3 py-1.5 text-[10px] font-extrabold uppercase tracking-[0.12em] text-white sm:text-xs">
                    <svg viewBox="0 0 24 24" fill="none" class="size-4" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg>
                    Area layanan
                </p>
                <h2 class="mt-3 max-w-md text-2xl font-extrabold leading-tight tracking-tight text-slate-950 sm:text-3xl">Pilih area untuk informasi sewa AC</h2>
                <p class="mt-2 max-w-sm text-sm leading-5 text-slate-600">Konfirmasikan cakupan layanan berdasarkan alamat acara.</p>
            </div>
            <nav aria-label="Halaman area layanan" class="grid gap-3 sm:grid-cols-2">
                <a href="{{ route('sewa-ac-tangerang') }}" class="group grid h-24 grid-cols-[38%_1fr] overflow-hidden rounded-xl bg-white ring-1 ring-emerald-950/5 transition hover:-translate-y-0.5 hover:ring-emerald-700/30 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-700 sm:h-32 sm:rounded-2xl">
                    <img src="{{ asset('images/11.webp') }}" alt="Dokumentasi unit AC standing portable di ruang acara" width="864" height="1536" loading="lazy" decoding="async" class="size-full min-h-0 min-w-0 object-cover object-[center_38%] transition duration-500 group-hover:scale-105">
                    <span class="flex items-center justify-between gap-2 px-3 py-3 sm:px-4">
                        <span class="text-xs font-extrabold leading-snug text-slate-900 sm:text-sm">Sewa AC<br>Tangerang</span>
                        <span class="grid size-8 shrink-0 place-items-center rounded-full bg-emerald-50 text-emerald-800 transition group-hover:bg-emerald-700 group-hover:text-white" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" class="size-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                        </span>
                    </span>
                </a>
                <a href="{{ route('sewa-ac-ciledug') }}" class="group grid h-24 grid-cols-[38%_1fr] overflow-hidden rounded-xl bg-white ring-1 ring-emerald-950/5 transition hover:-translate-y-0.5 hover:ring-emerald-700/30 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-700 sm:h-32 sm:rounded-2xl">
                    <img src="{{ asset('images/12.webp') }}" alt="Dokumentasi AC standing portable untuk kegiatan dalam ruangan" width="864" height="1536" loading="lazy" decoding="async" class="size-full min-h-0 min-w-0 object-cover object-[center_42%] transition duration-500 group-hover:scale-105">
                    <span class="flex items-center justify-between gap-2 px-3 py-3 sm:px-4">
                        <span class="text-xs font-extrabold leading-snug text-slate-900 sm:text-sm">Sewa AC<br>Ciledug</span>
                        <span class="grid size-8 shrink-0 place-items-center rounded-full bg-emerald-50 text-emerald-800 transition group-hover:bg-emerald-700 group-hover:text-white" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" class="size-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                        </span>
                    </span>
                </a>
            </nav>
        </div>
    </section>

    <section id="faq" class="scroll-mt-24 bg-[#f8faf8] px-5 py-10 sm:px-8 sm:py-14">
        <div class="mx-auto grid max-w-7xl gap-7 md:grid-cols-[0.8fr_1.2fr] md:items-center md:gap-12">
            <div>
                <p class="inline-flex items-center gap-2 rounded-full bg-emerald-700 px-3 py-1.5 text-[10px] font-extrabold uppercase tracking-[0.12em] text-white sm:text-xs">
                    <svg viewBox="0 0 24 24" fill="none" class="size-4" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <circle cx="12" cy="12" r="9"/>
                        <path d="M9.8 9a2.3 2.3 0 1 1 3.8 1.7c-.9.8-1.6 1.1-1.6 2.3M12 16.5v.1" stroke-linecap="round"/>
                    </svg>
                    FAQ
                </p>
                <h2 class="mt-3 text-2xl font-extrabold tracking-tight text-slate-950 sm:text-3xl">Sebelum memesan</h2>
                <p class="mt-2 max-w-sm text-sm leading-5 text-slate-600">Jawaban singkat untuk membantu Anda menyiapkan sewa AC.</p>
                <figure class="group relative mt-5 aspect-[1.7/1] overflow-hidden rounded-xl bg-emerald-950 sm:aspect-[1.8/1] md:aspect-[1.15/1] md:rounded-2xl">
                    <img src="{{ asset('images/11.webp') }}" alt="Unit AC standing portable di ruang kegiatan" width="864" height="1536" loading="lazy" decoding="async" class="size-full object-cover object-[center_35%] transition duration-700 group-hover:scale-[1.02]">
                    <figcaption class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-slate-950/80 to-transparent px-4 pb-3 pt-10 text-[10px] font-semibold text-white sm:text-xs">Dokumentasi unit AC standing portable</figcaption>
                </figure>
            </div>
            <div class="rounded-xl bg-white px-4 shadow-sm ring-1 ring-slate-900/5 sm:px-6 sm:py-1 sm:rounded-2xl">
                <details class="group border-b border-slate-200 py-1" open>
                    <summary class="flex cursor-pointer list-none items-center gap-3 py-4 font-bold text-slate-900 marker:hidden sm:gap-4">
                        <span class="grid size-7 shrink-0 place-items-center rounded-full bg-emerald-700 text-white" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" class="size-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.8 9a2.3 2.3 0 1 1 3.8 1.7c-.9.8-1.6 1.1-1.6 2.3M12 16.5v.1"/><circle cx="12" cy="12" r="9"/></svg>
                        </span>
                        <span class="flex-1 text-xs leading-5 sm:text-sm">Informasi apa yang perlu dikirim untuk cek sewa AC?</span>
                        <span class="grid size-7 shrink-0 place-items-center text-emerald-800" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" class="size-5 group-open:hidden" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg>
                            <svg viewBox="0 0 24 24" fill="none" class="hidden size-5 group-open:block" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M5 12h14"/></svg>
                        </span>
                    </summary>
                    <div class="grid grid-rows-[0fr] transition-[grid-template-rows] duration-300 ease-out group-open:grid-rows-[1fr] motion-reduce:transition-none">
                        <div class="overflow-hidden">
                            <p class="pb-4 pl-10 pr-2 text-xs leading-5 text-slate-600 sm:pl-11 sm:text-sm sm:leading-6">Kirim tanggal acara, alamat, jenis acara, dan perkiraan jumlah unit agar ketersediaan serta biaya bisa dikonfirmasi.</p>
                        </div>
                    </div>
                </details>
                <details class="group border-b border-slate-200 py-1">
                    <summary class="flex cursor-pointer list-none items-center gap-3 py-4 font-bold text-slate-900 marker:hidden sm:gap-4">
                        <span class="grid size-7 shrink-0 place-items-center rounded-full bg-emerald-700 text-white" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" class="size-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.8 9a2.3 2.3 0 1 1 3.8 1.7c-.9.8-1.6 1.1-1.6 2.3M12 16.5v.1"/><circle cx="12" cy="12" r="9"/></svg>
                        </span>
                        <span class="flex-1 text-xs leading-5 sm:text-sm">Untuk acara apa AC standing dapat disewa?</span>
                        <span class="grid size-7 shrink-0 place-items-center text-emerald-800" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" class="size-5 group-open:hidden" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg>
                            <svg viewBox="0 0 24 24" fill="none" class="hidden size-5 group-open:block" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M5 12h14"/></svg>
                        </span>
                    </summary>
                    <div class="grid grid-rows-[0fr] transition-[grid-template-rows] duration-300 ease-out group-open:grid-rows-[1fr] motion-reduce:transition-none">
                        <div class="overflow-hidden">
                            <p class="pb-4 pl-10 pr-2 text-xs leading-5 text-slate-600 sm:pl-11 sm:text-sm sm:leading-6">Tanyakan unit untuk kebutuhan seperti pernikahan, seminar, pameran, gathering, dan acara lainnya.</p>
                        </div>
                    </div>
                </details>
                <details class="group py-1">
                    <summary class="flex cursor-pointer list-none items-center gap-3 py-4 font-bold text-slate-900 marker:hidden sm:gap-4">
                        <span class="grid size-7 shrink-0 place-items-center rounded-full bg-emerald-700 text-white" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" class="size-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.8 9a2.3 2.3 0 1 1 3.8 1.7c-.9.8-1.6 1.1-1.6 2.3M12 16.5v.1"/><circle cx="12" cy="12" r="9"/></svg>
                        </span>
                        <span class="flex-1 text-xs leading-5 sm:text-sm">Berapa harga sewa AC per hari?</span>
                        <span class="grid size-7 shrink-0 place-items-center text-emerald-800" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" class="size-5 group-open:hidden" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg>
                            <svg viewBox="0 0 24 24" fill="none" class="hidden size-5 group-open:block" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M5 12h14"/></svg>
                        </span>
                    </summary>
                    <div class="grid grid-rows-[0fr] transition-[grid-template-rows] duration-300 ease-out group-open:grid-rows-[1fr] motion-reduce:transition-none">
                        <div class="overflow-hidden">
                            <p class="pb-4 pl-10 pr-2 text-xs leading-5 text-slate-600 sm:pl-11 sm:text-sm sm:leading-6">Harga belum dicantumkan karena bergantung pada unit, durasi, dan alamat. Hubungi kami untuk meminta rincian sebelum memesan.</p>
                        </div>
                    </div>
                </details>
            </div>
        </div>
    </section>

</main>
</div>

<footer class="relative overflow-hidden border-t-2 border-emerald-500 bg-gradient-to-br from-[#071b20] via-[#09252b] to-[#071b20] px-5 pb-24 pt-8 text-white sm:px-8 sm:pb-20 sm:pt-10">
    <div aria-hidden="true" class="pointer-events-none absolute -right-20 -top-32 size-80 rounded-full border border-emerald-300/10"></div>
    <div class="relative mx-auto grid max-w-7xl gap-7 sm:grid-cols-2 md:grid-cols-[1.2fr_0.8fr_1fr] md:gap-10">
        <div>
            <a href="{{ route('home') }}" class="inline-flex items-center gap-3" aria-label="Sewa AC Standing, beranda">
                <span class="grid h-12 w-[4.5rem] shrink-0 place-items-center overflow-hidden">
                    <img src="{{ asset('images/logo/logo2.png') }}" alt="Logo Sinar Sumatra" width="112" height="75" loading="lazy" decoding="async" class="size-full scale-150 object-contain">
                </span>
                <span class="text-xs font-extrabold leading-tight tracking-[0.08em]">SEWA AC<br><span class="font-medium tracking-normal text-white/70">Standing portable</span></span>
            </a>
            <p class="mt-3 max-w-xs text-xs leading-5 text-white/70">Sewa AC standing portable untuk acara di {{ $serviceArea }}.</p>
        </div>
        <nav aria-label="Navigasi footer">
            <h2 class="text-xs font-extrabold text-white">Jelajahi halaman</h2>
            <ul class="mt-3 grid grid-cols-2 gap-x-4 gap-y-2 text-xs text-white/70 sm:grid-cols-1">
                <li><a href="{{ route('home') }}" class="transition hover:text-emerald-300">Beranda</a></li>
                <li><a href="#produk" class="transition hover:text-emerald-300">Produk AC</a></li>
                <li><a href="#layanan" class="transition hover:text-emerald-300">Layanan</a></li>
                <li><a href="#galeri" class="transition hover:text-emerald-300">Galeri</a></li>
                <li><a href="#area" class="transition hover:text-emerald-300">Area layanan</a></li>
                <li><a href="#faq" class="transition hover:text-emerald-300">FAQ</a></li>
            </ul>
        </nav>
        <div>
            <h2 class="text-xs font-extrabold text-white">Hubungi kami</h2>
            <p class="mt-3 text-xs text-white/70">Melayani area {{ $serviceArea }}</p>
            <a href="https://wa.me/6285279761446" target="_blank" rel="noopener noreferrer" class="interactive-button mt-3 inline-flex min-h-10 items-center gap-2 bg-emerald-600 px-4 py-2 text-xs font-extrabold text-white transition hover:bg-emerald-500">
                <i class="fa-brands fa-whatsapp" style="color: rgb(99, 230, 190);" aria-hidden="true"></i>
                Chat via WhatsApp
            </a>
            <a href="tel:+6285279761446" class="mt-2 flex w-fit items-center gap-2 text-xs font-semibold text-white/75 transition hover:text-white">+62 852-7976-1446</a>
        </div>
    </div>
    <div class="relative mx-auto mt-7 flex max-w-7xl flex-col gap-2 border-t border-white/15 pt-4 text-[10px] text-white/55 sm:flex-row sm:items-center sm:justify-between sm:pr-44">
        <p>&copy; {{ date('Y') }} Sewa AC Standing. Semua hak dilindungi.</p>
        <p class="flex items-center gap-2"><span class="h-px w-8 bg-emerald-400" aria-hidden="true"></span> Tangerang &amp; Ciledug</p>
    </div>
</footer>

<dialog data-photo-dialog aria-label="Galeri foto" class="m-auto max-h-[92vh] w-[min(94vw,1100px)] max-w-none border-0 bg-slate-950 p-3 text-white backdrop:bg-black/85">
    <div class="flex items-center justify-between gap-4 pb-3">
        <p data-photo-caption class="text-sm font-semibold"></p>
        <button type="button" data-photo-close class="grid size-10 place-items-center border border-white/30 text-2xl leading-none" aria-label="Tutup galeri">&times;</button>
    </div>
    <div class="relative flex min-h-40 items-center justify-center">
        <button type="button" data-photo-previous class="absolute left-2 z-10 grid size-11 place-items-center bg-black/65 text-2xl" aria-label="Foto sebelumnya">‹</button>
        <img data-photo-image alt="" class="max-h-[78vh] max-w-full object-contain">
        <button type="button" data-photo-next class="absolute right-2 z-10 grid size-11 place-items-center bg-black/65 text-2xl" aria-label="Foto berikutnya">›</button>
    </div>
</dialog>

<dialog data-video-dialog aria-label="Pemutar video dokumentasi" class="m-auto w-[min(94vw,1000px)] max-w-none border-0 bg-slate-950 p-3 text-white backdrop:bg-black/85">
    <div class="flex items-center justify-between gap-4 pb-3">
        <p class="text-sm font-semibold">Video dokumentasi sewa AC</p>
        <button type="button" data-video-close class="grid size-10 place-items-center border border-white/30 text-2xl leading-none" aria-label="Tutup video">&times;</button>
    </div>
    <video data-video-player class="max-h-[78vh] w-full bg-black" controls playsinline preload="none"></video>
</dialog>
@endsection
