<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_service_pages_render_area_specific_content_and_search_metadata(): void
    {
        $pages = [
            '/' => [
                'Tangerang & Ciledug',
                'Sewa AC Standing Tangerang &amp; Ciledug | Rental AC Acara',
                'Sewa AC standing portable untuk pernikahan, seminar, pameran, dan acara di Tangerang dan Ciledug. Hubungi kami untuk cek unit dan biaya sewa.',
                'https://example.test/',
            ],
            '/sewa-ac-tangerang' => [
                'Tangerang',
                'Sewa AC Standing Tangerang | Rental AC untuk Acara',
                'Sewa AC standing untuk acara di Tangerang. Tanyakan ketersediaan unit dan biaya dengan mengirim tanggal serta alamat acara melalui WhatsApp.',
                'https://example.test/sewa-ac-tangerang',
            ],
            '/sewa-ac-ciledug' => [
                'Ciledug',
                'Sewa AC Standing Ciledug | Rental AC untuk Acara',
                'Sewa AC standing untuk acara di Ciledug. Kirim tanggal dan alamat acara melalui WhatsApp untuk menanyakan ketersediaan unit dan biaya sewa.',
                'https://example.test/sewa-ac-ciledug',
            ],
        ];

        foreach ($pages as $path => [$area, $title, $description, $canonicalUrl]) {
            $response = $this->get($path);

            $response->assertOk()
                ->assertSeeText($area)
                ->assertSeeText('Sewa AC Standing')
                ->assertSee('Sewa AC <br>Standing<br>di '.e($area), false)
                ->assertSeeText('Jasa Sewa AC Standing untuk Berbagai Acara')
                ->assertSee('images/logo-sewa-ac.png', false)
                ->assertSee('alt="Logo Sewa AC Standing"', false)
                ->assertSee("<title>{$title}</title>", false)
                ->assertSee('<meta name="description" content="'.e($description).'">', false)
                ->assertSee('<link rel="canonical" href="'.$canonicalUrl.'">', false)
                ->assertSee('rel="canonical"', false)
                ->assertSee('name="description"', false)
                ->assertSee('property="og:image"', false)
                ->assertSee('content="https://example.test/images/3.webp"', false)
                ->assertSee('type="application/ld+json"', false)
                ->assertSee('"@type":"Service"', false)
                ->assertSeeText('FAQ Sewa AC Standing');
        }
    }

    public function test_service_pages_link_to_whatsapp_and_available_area_pages(): void
    {
        foreach (['/', '/sewa-ac-tangerang', '/sewa-ac-ciledug'] as $path) {
            $response = $this->get($path);

            $response->assertOk()
                ->assertSee('href="https://wa.me/6285279761446', false)
                ->assertSee('href="tel:+6285279761446"', false)
                ->assertSee('href="#kontak"', false)
                ->assertSee('href="#konten"', false)
                ->assertSee('href="'.route('sewa-ac-tangerang').'"', false)
                ->assertSee('href="'.route('sewa-ac-ciledug').'"', false);
        }
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
