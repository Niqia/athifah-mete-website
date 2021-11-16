<p>Tersedia dalam 5 varian rasa : Rasa original/asin, rasa manis, rasa gula aren dan rasa bawang.</p><p>Ukuran lain yang tersedia dan harga masing-masing:</p><ul><li>- 150gr Rp 30.000,-</li><li>- 350gr RP 70.000,-</li><li>- 500gr Rp 95.000,-</li><ul>

produk_jualan::create([
    'nama_produk' => 'Keripik Mete',
    'kategori_id' => 1,
    'slug' => 'keripik-mete',
    'excerpt' => 'Tersedia rasa original',
    'ukuran' => '200gr',
    'harga' => '17.000',
    'deskripsi' => '<p>Tersedia rasa original</p><p>Ukuran lain yang tersedia dan harga masing-masing:</p><ul><li>- 200gr Rp 17.000,-</li><li>- 350gr Rp 29.000,-</li><li>- 500gr Rp 37.000,-</li><ul>',

    ])

produk_jualan::create([
    'nama_produk' => 'Mete Goreng',
    'kategori_id' => 1,
    'slug' => 'mete-goreng',
    'excerpt' => 'Tersedia dalam 5 varian rasa',
    'ukuran' => '150gr',
    'harga' => '30.000',
    'deskripsi' => '<p>Tersedia dalam 5 varian rasa : Rasa original/asin, rasa manis, rasa gula aren dan rasa bawang.</p><p>Ukuran lain yang tersedia dan harga masing-masing:</p><ul><li>- 150gr Rp 30.000,-</li><li>- 350gr RP 70.000,-</li><li>- 500gr Rp 95.000,-</li><ul>',

    ])

Kategori::create([
    'nama_kategori' => 'Makanan Khas Sultra',
    'slug' => 'makanan-khas-sultra',
    ])

Kategori::create([
    'nama_kategori' => 'Kerajinan Khas Sultra',
    'slug' => 'kerajinan-khas-sultra',
    ])