<?php

return [
    'company' => [
        'name' => 'Bima Meditama Samudera Sejahtera',
        'tagline' => 'Digital Radiologi & Konsultan',
        'short_description' => 'Penyedia solusi radiologi digital, alat kesehatan, dan peralatan laboratorium dengan fokus pada kualitas, keandalan, dan teknologi modern.',
        'address' => 'Kavling KSB, Blok A24-25, Jl. Kantor walikota Serang, Serang, Banten 42212',
        'phone' => '081319442394',
        'whatsapp' => '6281319442394',
        'email' => 'bimameditama@gmail.com',
        'logo' => '/uploads/2025/11/ijhggyhgf.png',
        'favicon' => '/uploads/2025/11/ijhgrtyr-300x300.png',
        'hero_image' => '/uploads/2025/11/trgfdject.jpg',
        'jingle' => '/uploads/2025/11/jingle-bimameditama.mp3',
    ],
    'navigation' => [
        ['label' => 'Home', 'route' => 'home'],
        [
            'label' => 'Produk',
            'children' => [
                ['label' => 'Produk Radiologi', 'route' => 'pages.radiology'],
                ['label' => 'Produk Lab', 'route' => 'pages.lab'],
            ],
        ],
        ['label' => 'Tentang Kami', 'route' => 'pages.about'],
        ['label' => 'Gallery', 'route' => 'gallery'],
        ['label' => 'Berita', 'route' => 'news.index'],
        ['label' => 'Kontak', 'route' => 'contact'],
    ],
    'footer_navigation' => [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'Tentang Kami', 'route' => 'pages.about'],
        ['label' => 'Gallery', 'route' => 'gallery'],
        ['label' => 'Berita', 'route' => 'news.index'],
        ['label' => 'Kontak', 'route' => 'contact'],
    ],
    'home' => [
        'meta_title' => 'Bima Meditama Samudera Sejahtera - Digital Radiologi & Konsultan',
        'meta_description' => 'Bima Meditama Samudera Sejahtera adalah mitra untuk solusi radiologi digital, alat kesehatan, dan peralatan laboratorium bagi klinik, rumah sakit, dan fasilitas kesehatan.',
        'eyebrow' => 'Solusi Perangkat Medis Modern',
        'title' => 'Teknologi medis yang siap dipakai, didampingi, dan ditumbuhkan bersama.',
        'description' => 'Kami membantu klinik, rumah sakit, dan fasilitas kesehatan membangun layanan radiologi dan laboratorium yang lebih akurat, efisien, dan siap berkembang.',
        'primary_cta' => ['label' => 'Konsultasi via WhatsApp', 'href' => 'https://wa.me/6281319442394'],
        'secondary_cta' => ['label' => 'Lihat Produk', 'href' => '/produk-radiologi'],
        'highlights' => [
            ['label' => 'Pengadaan alat medis', 'value' => 'DR, CR, USG, X-Ray, Analyzer'],
            ['label' => 'Dukungan purna jual', 'value' => 'Maintenance, kalibrasi, training'],
            ['label' => 'Pendampingan instalasi', 'value' => 'Perencanaan ruang sampai operasional'],
        ],
        'services' => [
            [
                'title' => 'Pengadaan Alat Kesehatan & Radiologi',
                'description' => 'Perangkat radiologi digital, alat laboratorium, dan produk kesehatan yang memenuhi standar nasional dan internasional.',
            ],
            [
                'title' => 'Konsultasi & Perencanaan Instalasi',
                'description' => 'Pendampingan profesional untuk perencanaan ruang radiologi, instalasi alat, dan manajemen izin operasional.',
            ],
            [
                'title' => 'Layanan Teknis & Purna Jual',
                'description' => 'Servis, maintenance, kalibrasi, dan dukungan teknis berkelanjutan agar perangkat tetap optimal.',
            ],
        ],
        'stats' => [
            ['label' => 'Lini solusi utama', 'value' => 3, 'suffix' => '+'],
            ['label' => 'Kategori perangkat', 'value' => 21, 'suffix' => '+'],
            ['label' => 'Artikel pengetahuan', 'value' => 2, 'suffix' => '+'],
            ['label' => 'Respons konsultasi', 'value' => 24, 'suffix' => ' jam'],
        ],
        'focus' => [
            [
                'title' => 'Radiologi digital tanpa bottleneck',
                'description' => 'Sistem DR dan CR yang dirancang untuk alur kerja cepat, integrasi PACS/RIS, dan kualitas citra yang konsisten.',
            ],
            [
                'title' => 'Laboratorium yang stabil dan terukur',
                'description' => 'Analyzer, centrifuge, perangkat mikrobiologi, dan consumables untuk menjaga akurasi hasil analisa.',
            ],
            [
                'title' => 'Implementasi yang tidak berhenti di pengiriman',
                'description' => 'Kami mendampingi instalasi, pelatihan, maintenance, sampai evaluasi operasional setelah perangkat aktif digunakan.',
            ],
        ],
    ],
    'contact' => [
        'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53721.807825064825!2d106.08107665209985!3d-6.110647938594584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418b0dbb534a61%3A0x301e8f1fc28b8d0!2sSerang%2C%20Serang%20City%2C%20Banten!5e1!3m2!1sen!2sid!4v1763860557684!5m2!1sen!2sid',
        'cards' => [
            ['label' => 'Telepon', 'value' => '081319442394', 'href' => 'tel:081319442394'],
            ['label' => 'WhatsApp', 'value' => '081319442394', 'href' => 'https://wa.me/6281319442394'],
            ['label' => 'Email', 'value' => 'bimameditama@gmail.com', 'href' => 'mailto:bimameditama@gmail.com'],
        ],
    ],
    'pages' => [
        'tentang-kami' => [
            'slug' => 'tentang-kami',
            'title' => 'Tentang Kami',
            'summary' => 'Perusahaan penyedia solusi digital radiologi, alat kesehatan, dan layanan konsultasi untuk fasilitas medis di seluruh Indonesia.',
            'content' => <<<'HTML'
<p><strong>Bima Meditama Samudera Sejahtera</strong></p>
<p><strong>Digital Radiologi &amp; Konsultan Alat Kesehatan</strong></p>
<p>Bima Meditama Samudera Sejahtera adalah perusahaan yang bergerak di bidang penyediaan solusi <strong>digital radiologi</strong>, <strong>produk alat kesehatan</strong>, serta <strong>layanan konsultasi</strong> untuk fasilitas medis di seluruh Indonesia. Kami hadir untuk membantu klinik, rumah sakit, dan praktisi kesehatan meningkatkan kualitas layanan diagnostik dengan teknologi yang modern, efisien, dan terpercaya.</p>
<p>Dengan pengalaman di industri alat kesehatan dan kemitraan strategis dengan berbagai brand terkemuka, kami menyediakan rangkaian produk yang memenuhi standar nasional dan internasional. Mulai dari sistem radiologi digital (DR/CR), X-Ray, ultrasound, hingga perangkat penunjang lainnya, setiap produk kami dipilih dengan cermat untuk memastikan keakuratan diagnostik dan kenyamanan penggunaan.</p>
<p>Tidak hanya sebagai distributor, kami juga memberikan <strong>layanan konsultan</strong>, perencanaan instalasi, pendampingan izin, serta dukungan teknis profesional untuk memastikan setiap perangkat dapat berfungsi optimal dan berkelanjutan.</p>
<p><strong>Komitmen kami:</strong></p>
<ul>
<li>Menyediakan solusi teknologi medis yang inovatif</li>
<li>Mendukung efisiensi operasional fasilitas pelayanan kesehatan</li>
<li>Meningkatkan kualitas layanan diagnostik bagi masyarakat</li>
<li>Memberikan layanan purna jual yang responsif dan berkelanjutan</li>
</ul>
<p>Bima Meditama Samudera Sejahtera - Mitra terpercaya Anda dalam pengembangan layanan kesehatan berbasis teknologi modern.</p>
HTML,
        ],
        'produk-radiologi' => [
            'slug' => 'produk-radiologi',
            'title' => 'Produk Radiologi',
            'summary' => 'Pilihan perangkat radiologi digital untuk mendukung akurasi diagnostik, efisiensi kerja, dan kualitas pelayanan medis.',
            'content' => <<<'HTML'
<p>Bima Meditama Samudera Sejahtera menyediakan berbagai solusi perangkat radiologi digital yang dirancang untuk mendukung akurasi diagnostik, efisiensi kerja, dan kualitas pelayanan medis. Seluruh produk dipilih dari brand terpercaya dan telah memenuhi standar mutu nasional maupun internasional.</p>
<p><strong>1. Digital Radiography (DR System)</strong></p>
<p>Sistem radiografi digital yang menghasilkan gambar berkualitas tinggi dengan proses cepat tanpa penggunaan film.<br><strong>Fitur:</strong></p>
<ul>
<li>Sensor Flat Panel (Wired/Wireless)</li>
<li>Resolusi tinggi &amp; noise rendah</li>
<li>Integrasi langsung dengan PACS/RIS</li>
<li>Workflow lebih efisien</li>
</ul>
<p><strong>2. Computed Radiography (CR System)</strong></p>
<p>Solusi transisi dari sistem analog ke digital dengan biaya investasi lebih ringan.<br><strong>Fitur:</strong></p>
<ul>
<li>Imaging plate yang mudah digunakan</li>
<li>Kompatibel dengan berbagai jenis X-Ray</li>
<li>Hasil gambar stabil &amp; konsisten</li>
</ul>
<p><strong>3. Mobile X-Ray</strong></p>
<p>Unit X-Ray portabel untuk kebutuhan ruang IGD, ICU, bangsal, hingga medis lapangan.<br><strong>Fitur:</strong></p>
<ul>
<li>Desain ringkas &amp; mudah digerakkan</li>
<li>Pemrosesan gambar cepat</li>
<li>Cocok untuk pemeriksaan pasien non-mobilitas</li>
</ul>
<p><strong>4. Static X-Ray (General Radiography)</strong></p>
<p>Perangkat X-Ray untuk instalasi radiologi standar.<br><strong>Varian:</strong></p>
<ul>
<li>Floor Mounted</li>
<li>Ceiling Mounted</li>
<li>Radiografi umum dan khusus</li>
</ul>
<p><strong>5. C-Arm System</strong></p>
<p>Digunakan untuk prosedur bedah, ortopedi, dan intervensi.<br><strong>Fitur:</strong></p>
<ul>
<li>Visualisasi real-time</li>
<li>C-Arm mobile dengan rotasi fleksibel</li>
<li>Opsi fluoroscopy digital</li>
</ul>
<p><strong>6. Dental X-Ray (Panoramic &amp; Intraoral)</strong></p>
<p>Solusi pencitraan untuk praktik dan klinik gigi.<br><strong>Varian:</strong></p>
<ul>
<li>Panoramic X-Ray</li>
<li>Cephalometric</li>
<li>Intraoral sensor digital</li>
</ul>
<p><strong>7. Ultrasound (USG)</strong></p>
<p>USG digital untuk pemeriksaan abdomen, obgyn, vaskular, dan lainnya.<br><strong>Jenis:</strong></p>
<ul>
<li>Portable</li>
<li>Konsol</li>
<li>2D, 3D/4D, Doppler</li>
</ul>
<p><strong>8. PACS &amp; RIS System</strong></p>
<p>Sistem manajemen gambar dan informasi radiologi.<br><strong>Manfaat:</strong></p>
<ul>
<li>Penyimpanan cloud/on-premise</li>
<li>Integrasi dengan perangkat DR/CR</li>
<li>Mempermudah analisis &amp; pelaporan dokter radiologi</li>
</ul>
<p><strong>9. Accessories &amp; Perlengkapan Radiologi</strong></p>
<ul>
<li>Lead apron &amp; thyroid collar</li>
<li>Grid, cassette, positioning tools</li>
<li>Workstation radiologi</li>
<li>Printer film digital &amp; dry film</li>
</ul>
HTML,
        ],
        'produk-lab' => [
            'slug' => 'produk-lab',
            'title' => 'Produk Lab',
            'summary' => 'Rangkaian perangkat laboratorium medis untuk klinik, rumah sakit, dan laboratorium diagnostik dengan akurasi tinggi dan hasil stabil.',
            'content' => <<<'HTML'
<p>Bima Meditama Samudera Sejahtera menyediakan rangkaian lengkap <strong>peralatan dan perangkat laboratorium medis</strong> yang dirancang untuk memenuhi kebutuhan klinik, rumah sakit, dan laboratorium diagnostik. Setiap produk dipilih untuk memberikan akurasi tinggi, kemudahan penggunaan, serta kestabilan hasil analisa.</p>
<p><strong>1. Hematology Analyzer</strong></p>
<p>Perangkat pemeriksaan darah lengkap (CBC) dengan akurasi tinggi.<br><strong>Fitur:</strong></p>
<ul>
<li>3-part / 5-part differential</li>
<li>Throughput cepat</li>
<li>Reagen hemat &amp; otomatis</li>
</ul>
<p><strong>2. Chemistry Analyzer</strong></p>
<p>Mesin pemeriksaan kimia klinik untuk analisa metabolik, liver, kidney, lipid, dan lainnya.<br><strong>Fitur:</strong></p>
<ul>
<li>Semi-auto atau fully auto</li>
<li>Sistem reagen terbuka atau tertutup</li>
<li>Kapasitas sampel besar</li>
</ul>
<p><strong>3. Immunology Analyzer</strong></p>
<p>Untuk pemeriksaan berbasis imunologi seperti hormon, tumor marker, TORCH, dan infeksi.<br><strong>Teknologi:</strong></p>
<ul>
<li>CLIA</li>
<li>ELISA</li>
<li>Immunofluorescence</li>
</ul>
<p><strong>4. Coagulation Analyzer</strong></p>
<p>Mesin pemeriksaan pembekuan darah.<br><strong>Fitur:</strong></p>
<ul>
<li>PT, APTT, Fibrinogen</li>
<li>Auto-pipetting</li>
<li>Reagen presisi tinggi</li>
</ul>
<p><strong>5. Urine Analyzer</strong></p>
<p>Perangkat analisa urin otomatis.<br><strong>Varian:</strong></p>
<ul>
<li>Urine strip analyzer</li>
<li>Urine sediment analyzer</li>
</ul>
<p><strong>6. Microbiology Lab Equipment</strong></p>
<p>Peralatan untuk kultur dan identifikasi mikroorganisme.<br><strong>Produk:</strong></p>
<ul>
<li>Incubator</li>
<li>Autoclave / Sterilizer</li>
<li>Biosafety Cabinet</li>
<li>CO2 Incubator</li>
</ul>
<p><strong>7. Centrifuge</strong></p>
<p>Digunakan untuk pemisahan komponen sampel.<br><strong>Jenis:</strong></p>
<ul>
<li>Low-speed</li>
<li>High-speed</li>
<li>Refrigerated centrifuge</li>
</ul>
<p><strong>8. Microscope</strong></p>
<p>Mikroskop laboratorium medis dengan berbagai tingkat pembesaran.<br><strong>Varian:</strong></p>
<ul>
<li>Monocular</li>
<li>Binocular</li>
<li>Trinocular digital</li>
</ul>
<p><strong>9. Blood Gas Analyzer</strong></p>
<p>Untuk pemeriksaan gas darah (pH, pO2, pCO2, electrolyte).<br><strong>Fitur:</strong></p>
<ul>
<li>Cartridge system</li>
<li>Waktu hasil cepat</li>
</ul>
<p><strong>10. Refrigerator &amp; Freezer Lab</strong></p>
<p>Penyimpanan sampel dan reagen sensitif.<br><strong>Jenis:</strong></p>
<ul>
<li>2-8 C medical refrigerator</li>
<li>-20 C freezer</li>
<li>-40 C hingga -86 C ultra-low freezer</li>
</ul>
<p><strong>11. Point-of-Care Testing (POCT)</strong></p>
<p>Perangkat pemeriksaan cepat.<br><strong>Contoh:</strong></p>
<ul>
<li>Glucometer</li>
<li>HbA1c analyzer</li>
<li>CRP / D-Dimer / Troponin</li>
</ul>
<p><strong>12. Consumables &amp; Reagent</strong></p>
<p>Bahan habis pakai &amp; reagen laboratorium.<br><strong>Produk:</strong></p>
<ul>
<li>Tips, tube, syringe</li>
<li>Slide &amp; cover glass</li>
<li>Reagen hematologi, kimia, immunologi</li>
</ul>
HTML,
        ],
    ],
    'gallery' => [
        ['title' => 'Visual utama perusahaan', 'image' => '/uploads/2025/11/trgfdject.jpg'],
        ['title' => 'Tips Jaga Kesehatan Jantung', 'image' => '/uploads/2025/11/becca-tapert-O7sK3d3TPWQ-unsplash.jpg'],
        ['title' => 'Manfaat Buah Naga', 'image' => '/uploads/2025/11/engin-akyurt-1EjWR3oagkg-unsplash.jpg'],
    ],
    'posts' => [
        [
            'slug' => 'manfaat-buah-naga-untuk-kesehatan-kulit-wajah',
            'title' => 'Manfaat Buah Naga untuk Kesehatan Kulit Wajah',
            'excerpt' => 'Buah naga kaya vitamin C, folat, dan magnesium. Kandungannya mendukung kulit tetap lembap, cerah, dan terjaga dari penuaan dini.',
            'date' => '2025-11-23',
            'date_label' => '23 November 2025',
            'author' => 'bimy3415',
            'image' => '/uploads/2025/11/engin-akyurt-1EjWR3oagkg-unsplash.jpg',
            'image_caption' => 'Photo by engin akyurt on Unsplash',
            'category' => 'berita',
            'tags' => ['buah-naga', 'kecantikan', 'kesehatan-kulit', 'vitamin-b3'],
            'source' => 'https://www.fimela.com/beauty/read/5456329/7-manfaat-buah-naga-untuk-kesehatan-kulit-wajah-yang-tinggi-antioksidan',
            'content' => <<<'HTML'
<p>Buah naga berasal dari Amerika Tengah, rasanya yang segar dan manis membuat buah tropis ini cukup populer dan banyak disukai. Buah naga mengandung rendah gula, rendah kolesterol, dan kaya akan vitamin C. Ditambah lagi, buah ini dapat menjadi sumber folat dan magnesium yang baik untuk tubuh.</p>
<p><strong>Manfaat Buah Naga untuk Kesehatan Kulit:</strong></p>
<p><strong>1. Membantu menenangkan kulit yang terbakar sinar matahari</strong><br>Buah naga mengandung vitamin B3 dan mineral yang dapat membantu menenangkan kulit yang terbakar sinar matahari. Kandungan anti-inflamasi di dalamnya membantu meredakan peradangan, kemerahan, dan gatal-gatal pada kulit.</p>
<p><strong>2. Mengatasi tanda-tanda penuaan dini</strong><br>Antioksidan seperti vitamin C pada buah naga dapat membantu melindungi kulit dari kerusakan yang memicu garis halus dan kerutan.</p>
<p><strong>3. Mencegah kulit kusam</strong><br>Vitamin C dalam buah naga berkontribusi membuat kulit tampak lebih cerah, segar, dan muda.</p>
<p><strong>4. Membantu mengurangi jerawat</strong><br>Buah naga memiliki sifat antimikroba yang dapat membantu mengontrol produksi sebum dan menekan pertumbuhan bakteri pada permukaan kulit.</p>
<p><strong>5. Menjaga kulit tetap halus dan kencang</strong><br>Sebagai sumber vitamin C, buah naga dapat membantu meningkatkan produksi kolagen untuk menjaga elastisitas dan kekenyalan kulit.</p>
<p><strong>6. Membantu kulit tetap lembap</strong><br>Kandungan air yang tinggi pada buah naga dapat membantu menjaga kelembapan kulit secara alami.</p>
<p><strong>Penulis:</strong> Syifa Azzahra</p>
HTML,
        ],
        [
            'slug' => 'tips-jaga-kesehatan-jantung',
            'title' => 'Tips Jaga Kesehatan Jantung',
            'excerpt' => 'Langkah sederhana seperti olahraga rutin, tidur cukup, menjaga tekanan darah, dan membatasi lemak jenuh berperan penting untuk kesehatan jantung.',
            'date' => '2025-11-23',
            'date_label' => '23 November 2025',
            'author' => 'bimy3415',
            'image' => '/uploads/2025/11/becca-tapert-O7sK3d3TPWQ-unsplash.jpg',
            'image_caption' => 'Photo by Becca Tapert on Unsplash',
            'category' => 'berita',
            'tags' => ['jantung', 'merokok', 'olahraga', 'penyakit-jantung', 'tekanan-darah'],
            'source' => 'https://www.alodokter.com/berbagai-tips-untuk-menjaga-kesehatan-jantung',
            'content' => <<<'HTML'
<p>Mungkin Anda sudah sering mendengar dokter menganjurkan untuk rutin berolahraga, menjaga berat badan ideal, menjalani pola makan sehat, dan tidak merokok. Hal ini karena beberapa langkah tersebut merupakan metode yang efektif untuk menjaga kesehatan jantung.</p>
<p>Jika kesehatan jantung tidak dijaga, maka berbagai penyakit serius, seperti serangan jantung dan penyumbatan aliran darah di arteri, dapat terjadi.</p>
<p>Berikut ini adalah beberapa tips yang bisa Anda lakukan untuk menjaga kesehatan jantung:</p>
<p><strong>1. Tidak merokok</strong><br>Perokok memiliki risiko lebih tinggi untuk terkena penyakit jantung koroner. Tidak hanya perokok, orang-orang di sekitarnya yang menghirup asap rokok juga berisiko mengalami penyakit tersebut.</p>
<p><strong>2. Rutin beraktivitas fisik</strong><br>Sempatkan waktu untuk berolahraga sekitar 20-30 menit setiap hari. Aktivitas fisik membantu menjaga kesehatan jantung dan menurunkan risiko penyakit jantung.</p>
<p><strong>3. Mengonsumsi asam lemak omega-3</strong><br>Ikan seperti kembung, sarden, bawal, tuna, dan salmon adalah sumber omega-3 yang baik untuk kesehatan jantung.</p>
<p><strong>4. Mengonsumsi lebih banyak serat</strong><br>Makanan tinggi serat membantu menurunkan kadar kolesterol jahat (LDL) yang meningkatkan risiko penyakit jantung.</p>
<p><strong>5. Mengurangi konsumsi lemak jenuh</strong><br>Terlalu banyak lemak jenuh dan lemak trans dapat meningkatkan kolesterol dalam darah dan memperbesar risiko penyakit jantung.</p>
<p><strong>6. Menjaga tekanan darah</strong><br>Tekanan darah tinggi dapat menyebabkan kerusakan pembuluh darah dan memicu penyakit jantung maupun stroke.</p>
<p><strong>7. Menjaga kadar gula darah</strong><br>Kadar gula darah tinggi dapat merusak pembuluh darah dan saraf yang mengendalikan jantung.</p>
<p><strong>8. Istirahat yang cukup</strong><br>Tidur teratur selama 7-8 jam per hari membantu menjaga kesehatan jantung dan mencegah tekanan darah tinggi, diabetes, dan obesitas.</p>
<p>Beragam langkah hidup sehat di atas bisa mulai Anda lakukan dari sekarang guna menjaga kesehatan jantung. Selain itu, Anda juga disarankan untuk mengelola stres dan memeriksakan kesehatan secara rutin ke dokter.</p>
HTML,
        ],
    ],
];