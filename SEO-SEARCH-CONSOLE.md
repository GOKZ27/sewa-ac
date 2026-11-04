# SEO dan Google Search Console

## Status implementasi

- Halaman publik yang tersedia: beranda, sewa AC Tangerang, dan sewa AC Ciledug.
- Setiap halaman memiliki judul, deskripsi, canonical HTTPS, Open Graph, dan konten area yang spesifik.
- Sitemap tersedia di `/sitemap.xml`; robots.txt mengizinkan crawling dan merujuk ke sitemap.
- JSON-LD memuat Organization, WebSite, WebPage, Service, dan BreadcrumbList pada halaman area.
- Foto produk memiliki teks alternatif yang sesuai, foto dekoratif menggunakan alt kosong, foto di bawah fold memakai lazy loading, dan galeri menggunakan WebP.
- Belum ada admin panel, sistem artikel, harga terverifikasi, alamat publik, jam operasional, testimoni, atau layanan untuk kota lain. Informasi tersebut tidak dibuat-buat.

## Konfigurasi sebelum publikasi

Pastikan nilai berikut di `.env` sesuai domain produksi yang benar dan menggunakan HTTPS:

```dotenv
APP_URL=https://sewaacstanding.com
SEO_SITE_URL=https://sewaacstanding.com
```

Jika domain produksi berbeda, ganti kedua URL tersebut. Setelah deployment, jalankan `php artisan config:cache`. Pastikan hosting/CDN memiliki sertifikat TLS aktif dan mengarahkan HTTP ke HTTPS serta hanya menggunakan satu versi host (www atau non-www). Pengalihan host tidak dipaksakan di `.htaccess` karena konfigurasi TLS/proxy hosting belum diketahui.

Atur `APP_ENV=production` dan `APP_DEBUG=false` pada server produksi. Aktifkan kompresi dan cache browser di hosting bila modul Apache `mod_deflate` dan `mod_expires` tidak tersedia.

## Menambahkan properti ke Google Search Console

1. Buka [Google Search Console](https://search.google.com/search-console/) dan tambahkan properti **Domain** untuk domain produksi.
2. Salin record TXT verifikasi dari Google ke pengelola DNS domain. Jangan mengubah atau menghapus record lain. Tunggu propagasi DNS, lalu tekan **Verifikasi**.
3. Setelah berhasil, periksa `https://sewaacstanding.com/robots.txt` dan `https://sewaacstanding.com/sitemap.xml`.
4. Di menu **Sitemaps**, masukkan `sitemap.xml` dan kirim.
5. Gunakan **Inspeksi URL** untuk memeriksa beranda, `/sewa-ac-tangerang`, dan `/sewa-ac-ciledug`. Pastikan URL yang diuji memakai HTTPS dan canonical cocok dengan URL pilihan.
6. Setelah perubahan dipublikasikan, gunakan **Minta pengindeksan** untuk halaman penting. Pengajuan bukan jaminan halaman akan langsung diindeks.
7. Pantau laporan **Pengindeksan halaman**, **Core Web Vitals**, serta **Performa** untuk kueri, klik, tayangan, dan posisi rata-rata. Evaluasi berdasarkan data aktual; jangan menilai peringkat dari satu pencarian manual.

## Google Business Profile

Buat atau kelola profil bisnis hanya untuk bisnis yang benar-benar dimiliki. Gunakan nama, telepon, kategori, dan jam operasional yang konsisten dengan data bisnis terverifikasi. Jika bisnis melayani pelanggan di lokasi mereka, tetapkan area layanan yang benar di profil; jangan menambahkan alamat atau kantor fiktif. Lengkapi verifikasi Google Business Profile secara terpisah dari Search Console.

## Pemetaan halaman dan kata kunci

| Halaman | Fokus pencarian |
|---|---|
| `/` | Sewa AC standing Tangerang dan Ciledug |
| `/sewa-ac-tangerang` | Sewa AC standing Tangerang |
| `/sewa-ac-ciledug` | Sewa AC standing Ciledug |

Halaman AC split, sewa bulanan, kantor, Jakarta/Bekasi/Depok, harga tetap, serta blog belum dibuat: project belum menyediakan bukti bahwa layanan, area, atau harga tersebut benar-benar tersedia. Tambahkan hanya setelah pemilik bisnis mengonfirmasi layanan dan menyiapkan konten yang bermanfaat serta berbeda.

## Batas verifikasi

Implementasi kode belum membuktikan bahwa domain sudah live, HTTPS/redirect bekerja di hosting, Search Console sudah terverifikasi, sitemap sudah dikirim, atau URL telah diindeks. Verifikasi hal-hal tersebut setelah deployment. Peringkat Google tidak dapat dijamin.
