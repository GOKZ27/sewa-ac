<?php

namespace Tests\Feature;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_service_pages_render_area_specific_content_and_search_metadata(): void
    {
        $pages = [
            '/' => [
                'Tangerang & Ciledug',
                'Sewa AC standing portable untuk acara di Tangerang dan Ciledug. Hubungi kami untuk menanyakan unit dan biaya sewa.',
                'Sewa AC Standing Tangerang &amp; Ciledug | Rental AC Acara',
                'Sewa AC standing portable untuk pernikahan, seminar, pameran, dan acara di Tangerang dan Ciledug. Hubungi kami untuk cek unit dan biaya sewa.',
                'https://example.test/',
            ],
            '/sewa-ac-tangerang' => [
                'Tangerang',
                'Mencari sewa AC standing di Tangerang? Kirim tanggal dan alamat acara untuk mengecek ketersediaan unit serta rincian biaya.',
                'Sewa AC Standing Tangerang | Rental AC untuk Acara',
                'Sewa AC standing untuk acara di Tangerang. Tanyakan ketersediaan unit dan biaya dengan mengirim tanggal serta alamat acara melalui WhatsApp.',
                'https://example.test/sewa-ac-tangerang',
            ],
            '/sewa-ac-ciledug' => [
                'Ciledug',
                'Butuh AC standing untuk acara di Ciledug? Hubungi kami dengan tanggal dan alamat agar ketersediaan unit serta biaya dapat dikonfirmasi.',
                'Sewa AC Standing Ciledug | Rental AC untuk Acara',
                'Sewa AC standing untuk acara di Ciledug. Kirim tanggal dan alamat acara melalui WhatsApp untuk menanyakan ketersediaan unit dan biaya sewa.',
                'https://example.test/sewa-ac-ciledug',
            ],
        ];

        foreach ($pages as $path => [$area, $areaIntro, $title, $description, $canonicalUrl]) {
            $response = $this->get($path);

            $response->assertOk()
                ->assertSeeText($area)
                ->assertSeeText($areaIntro)
                ->assertSeeText('Sewa AC Standing')
                ->assertSeeText('Hubungi WhatsApp')
                ->assertSeeText('Lihat produk')
                ->assertSee('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">', false)
                ->assertSee('<i class="fa-brands fa-whatsapp" style="color: rgb(99, 230, 190);" aria-hidden="true"></i>', false)
                ->assertSeeText('Event & Pernikahan')
                ->assertSeeText('Seminar & Pameran')
                ->assertSeeText('AC standing portable')
                ->assertSeeText('Sewa AC untuk berbagai acara')
                ->assertSeeText('Pilih unit AC')
                ->assertSeeText('Butuh AC untuk acara?')
                ->assertSeeText('Pemesanan dalam tiga langkah')
                ->assertSee('id="produk"', false)
                ->assertSee('id="proses"', false)
                ->assertSee('id="kontak"', false)
                ->assertSee('images/logo/logo2.png', false)
                ->assertSee('alt="Logo Sinar Sumatra"', false)
                ->assertSee('class="h-12 w-16 object-contain sm:h-14 sm:w-20"', false)
                ->assertSee('class="size-full scale-150 object-contain"', false)
                ->assertSee('"url":"https://example.test/images/logo/logo2.png"', false)
                ->assertSee("<title>{$title}</title>", false)
                ->assertSee('<meta name="description" content="'.e($description).'">', false)
                ->assertSee('<link rel="canonical" href="'.$canonicalUrl.'">', false)
                ->assertSee('rel="canonical"', false)
                ->assertSee('name="description"', false)
                ->assertSee('property="og:image"', false)
                ->assertSee('content="https://example.test/images/3.webp"', false)
                ->assertSee('type="application/ld+json"', false)
                ->assertSee('"@type":"Service"', false)
                ->assertSeeText('Sebelum memesan');
        }
    }

    public function test_service_pages_link_to_whatsapp_and_available_area_pages(): void
    {
        foreach (['/', '/sewa-ac-tangerang', '/sewa-ac-ciledug'] as $path) {
            $response = $this->get($path);

            $response->assertOk()
                ->assertSee('href="https://wa.me/6285279761446', false)
                ->assertSee('href="tel:+6285279761446"', false)
                ->assertSee('href="#galeri"', false)
                ->assertSee('href="#produk"', false)
                ->assertSee('href="#proses"', false)
                ->assertSee('href="#konten"', false)
                ->assertSee('href="'.route('sewa-ac-tangerang').'"', false)
                ->assertSee('href="'.route('sewa-ac-ciledug').'"', false);
        }
    }

    public function test_location_pages_redirect_trailing_slashes_to_canonical_urls(): void
    {
        foreach ([
            '/sewa-ac-tangerang' => 'sewa-ac-tangerang',
            '/sewa-ac-ciledug' => 'sewa-ac-ciledug',
        ] as $path => $routeName) {
            $request = Request::create("http://localhost{$path}/?campaign=test");
            $response = $this->app->make(Kernel::class)->handle($request);

            $this->assertSame(301, $response->getStatusCode());
            $this->assertSame($path.'?campaign=test', $response->headers->get('Location'));
        }
    }

    public function test_public_pages_send_baseline_security_headers(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertHeader('X-Content-Type-Options', 'nosniff')
            ->assertHeader('X-Frame-Options', 'SAMEORIGIN')
            ->assertHeader('Referrer-Policy', 'strict-origin-when-cross-origin')
            ->assertHeader('Permissions-Policy', 'camera=(), microphone=(), geolocation=()');
    }

    public function test_homepage_conversion_sections_follow_the_intended_order(): void
    {
        $response = $this->get('/');
        $html = $response->getContent();
        $sectionPositions = [];

        foreach (['produk', 'layanan', 'proses', 'kontak', 'galeri', 'video', 'area', 'faq'] as $sectionId) {
            $position = strpos($html, 'id="'.$sectionId.'"');

            $this->assertNotFalse($position, "The {$sectionId} section should be present.");
            $sectionPositions[] = $position;
        }

        for ($index = 1; $index < count($sectionPositions); $index++) {
            $this->assertGreaterThan($sectionPositions[$index - 1], $sectionPositions[$index]);
        }

        $response->assertSee('images/3.webp', false)
            ->assertSee('images/11.webp', false)
            ->assertSee('images/12.webp', false);
    }

    public function test_product_cards_are_square_and_do_not_show_numbered_badges(): void
    {
        $response = $this->get('/');
        $html = $response->getContent();

        $response->assertOk()
            ->assertSee('grid grid-cols-2 gap-3 sm:grid-cols-3 sm:gap-5', false)
            ->assertSee('product-card group flex aspect-square flex-col', false)
            ->assertDontSee('01 / STANDING')
            ->assertDontSee('02 / STANDING')
            ->assertDontSee('03 / STANDING');

        $this->assertSame(3, substr_count($html, 'product-card group flex aspect-square flex-col'));
    }

    public function test_homepage_internal_fragment_links_resolve_to_page_sections(): void
    {
        $html = $this->get('/')->assertOk()->getContent();
        preg_match_all('/href="#([^"]+)"/', $html, $fragmentLinks);

        foreach (array_unique($fragmentLinks[1]) as $fragment) {
            $this->assertStringContainsString('id="'.$fragment.'"', $html, "The #{$fragment} link should resolve.");
        }
    }

    public function test_area_cards_faq_answers_and_footer_contacts_remain_available(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('aria-label="Halaman area layanan"', false)
            ->assertSee('href="'.route('sewa-ac-tangerang').'"', false)
            ->assertSee('href="'.route('sewa-ac-ciledug').'"', false)
            ->assertSee('images/11.webp', false)
            ->assertSee('images/12.webp', false)
            ->assertSeeText('Informasi apa yang perlu dikirim untuk cek sewa AC?')
            ->assertSeeText('Kirim tanggal acara, alamat, jenis acara, dan perkiraan jumlah unit agar ketersediaan serta biaya bisa dikonfirmasi.')
            ->assertSeeText('Untuk acara apa AC standing dapat disewa?')
            ->assertSeeText('Tanyakan unit untuk kebutuhan seperti pernikahan, seminar, pameran, gathering, dan acara lainnya.')
            ->assertSeeText('Berapa harga sewa AC per hari?')
            ->assertSeeText('Harga belum dicantumkan karena bergantung pada unit, durasi, dan alamat. Hubungi kami untuk meminta rincian sebelum memesan.')
            ->assertSee('aria-label="Navigasi footer"', false)
            ->assertSee('href="https://wa.me/6285279761446"', false)
            ->assertSee('href="tel:+6285279761446"', false)
            ->assertSeeText('Chat via WhatsApp');
    }

    public function test_homepage_uses_optimized_documentation_photos_and_lazy_video_sources(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('images/11.webp', false)
            ->assertSee('images/1.webp', false)
            ->assertSee('images/12.webp', false)
            ->assertSee('alt="AC standing portable di ruang acara"', false)
            ->assertSee('aria-label="Pilihan produk dan area layanan"', false)
            ->assertSee('id="dokumentasi"', false)
            ->assertSee('data-lightbox-src', false)
            ->assertDontSee('data-photo-image src=""', false)
            ->assertSee('vidio/sewa-ac.mp4', false)
            ->assertSee('vidio/sewa-ac2.mp4', false)
            ->assertSee('data-video-player', false)
            ->assertSee('preload="none"', false);
    }

    public function test_sitemap_lists_each_service_area_page(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertOk()
            ->assertHeader('Content-Type', 'application/xml; charset=UTF-8')
            ->assertSee('https://example.test/', false)
            ->assertSee('https://example.test/sewa-ac-tangerang', false)
            ->assertSee('https://example.test/sewa-ac-ciledug', false)
            ->assertDontSee('localhost', false);

        $this->assertSame(3, substr_count($response->getContent(), '<url>'));
    }

    public function test_robots_file_points_search_engines_to_the_sitemap(): void
    {
        $response = $this->get('/robots.txt');

        $response->assertOk()
            ->assertHeader('Content-Type', 'text/plain; charset=UTF-8')
            ->assertSee('User-agent: *')
            ->assertSee('Allow: /')
            ->assertSee('Sitemap: https://example.test/sitemap.xml');
    }

    public function test_service_pages_render_valid_structured_data(): void
    {
        $pages = [
            '/' => ['Organization', 'WebSite', 'WebPage', 'Service'],
            '/sewa-ac-ciledug' => ['Organization', 'WebSite', 'WebPage', 'Service', 'BreadcrumbList'],
        ];

        foreach ($pages as $path => $expectedTypes) {
            $response = $this->get($path);
            $response->assertOk();
            $matchCount = preg_match('/<script type="application\/ld\+json">\s*(.*?)\s*<\/script>/s', $response->getContent(), $matches);
            $this->assertSame(1, $matchCount);

            $structuredData = json_decode($matches[1], true, 512, JSON_THROW_ON_ERROR);
            $this->assertSame($expectedTypes, array_column($structuredData['@graph'], '@type'));
        }
    }

    public function test_unknown_page_returns_not_found(): void
    {
        $response = $this->get('/sewa-ac-jakarta');

        $response->assertNotFound();
    }
}
