<?php

return [
    'site_url' => rtrim((string) env('SEO_SITE_URL', env('APP_URL', 'http://localhost')), '/'),

    'pages' => [
        'home' => [
            'path' => '/',
            'service_area' => 'Tangerang & Ciledug',
            'area_intro' => 'Sewa AC standing portable untuk acara di Tangerang dan Ciledug. Hubungi kami untuk menanyakan unit dan biaya sewa.',
            'title' => 'Sewa AC Standing Tangerang & Ciledug | Rental AC Acara',
            'description' => 'Sewa AC standing portable untuk pernikahan, seminar, pameran, dan acara di Tangerang dan Ciledug. Hubungi kami untuk cek unit dan biaya sewa.',
            'breadcrumb_label' => null,
        ],
        'sewa-ac-tangerang' => [
            'path' => '/sewa-ac-tangerang',
            'service_area' => 'Tangerang',
            'area_intro' => 'Mencari sewa AC standing di Tangerang? Kirim tanggal dan alamat acara untuk mengecek ketersediaan unit serta rincian biaya.',
            'title' => 'Sewa AC Standing Tangerang | Rental AC untuk Acara',
            'description' => 'Sewa AC standing untuk acara di Tangerang. Tanyakan ketersediaan unit dan biaya dengan mengirim tanggal serta alamat acara melalui WhatsApp.',
            'breadcrumb_label' => 'Sewa AC Tangerang',
        ],
        'sewa-ac-ciledug' => [
            'path' => '/sewa-ac-ciledug',
            'service_area' => 'Ciledug',
            'area_intro' => 'Butuh AC standing untuk acara di Ciledug? Hubungi kami dengan tanggal dan alamat agar ketersediaan unit serta biaya dapat dikonfirmasi.',
            'title' => 'Sewa AC Standing Ciledug | Rental AC untuk Acara',
            'description' => 'Sewa AC standing untuk acara di Ciledug. Kirim tanggal dan alamat acara melalui WhatsApp untuk menanyakan ketersediaan unit dan biaya sewa.',
            'breadcrumb_label' => 'Sewa AC Ciledug',
        ],
    ],
];
