<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - ReneoLaundry</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
</head>

<body class="bg-white">

    <!-- Container Utama -->
    <div class="container py-5">

        <!-- Judul -->
        <section class="text-center mb-5">
            <h1 class="selection-tittle">
                <span>Tentang</span> <strong>Kami</strong>
            </h1>
        </section>

        <!-- Deskripsi dan Gambar Gedung -->
        <section class="mb-5">
            <div class="row align-items-center">
                <!-- Deskripsi -->
                <div class="col-md-6">
                    <p>
                        Reneo Laundry adalah layanan laundry profesional yang hadir untuk memudahkan hidup Anda. Kami
                        berkomitmen untuk memberikan pelayanan terbaik dalam mencuci, menyetrika, dan merawat pakaian
                        Anda dengan cepat, bersih, dan wangi.
                    </p>
                    <p>
                        Dengan dukungan tim yang berpengalaman dan peralatan modern, kami siap menjadi solusi laundry
                        terpercaya bagi Anda yang sibuk, aktif, dan mengutamakan kebersihan serta kerapian pakaian
                        sehari-hari.
                    </p>
                </div>
                <!-- Gambar -->
                <div class=" rounded-2 col-md-6 about-image">/
                    <img src="" alt=" Gedung ReneoLaundry">/
                </div>
            </div>
        </section>

        <!-- Peta dan Info Kontak -->
        <section>
            <div class="row">
                <!-- Peta -->
                <div class="col-md-6 mb-4 mb-md-0 map-image>
                    <img src=" asset\depan.png" alt="Peta Lokasi">
                </div>
                <!-- Kontak -->
                <div class="col-md-6">
                    <div class="contact-info">
                        <p class="mb-3"><strong>Alamat:</strong> Perum Bumi Mas 1 Blk. H No.11 Mojorejo, Kec. Taman,
                            Kota Madiun,
                            Jawa
                            Timur 63139</p>
                        <p class="mb-3"><strong>Telepon:</strong> 085837043478</p>
                        <p class="mb-4"><strong>Instagram:</strong> @reneolaundry</p>
                        <div class="sosial-icon">
                            <a href="#" class="social-icon"><img src="https://via.placeholder.com/30"
                                    alt="WhatsApp Icon"></a>
                            <a href="#" class="social-icon"><img src=" https://via.placeholder.com/30"
                                    alt="Instagram Icon"></a>
                        </div>
                    </div>
                </div>
        </section>
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <div id="map" style="height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Inisialisasi peta
    var map = L.map('map').setView([-6.2088, 106.8456], 13); // Contoh: Jakarta

    // Tambahkan tile layer dari OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Tambahkan marker (opsional)
    L.marker([-6.2088, 106.8456]).addTo(map)
        .bindPopup('Lokasi Contoh').openPopup();
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</body>

</html>
<!-- 
Kenapa ini lebih enak buat Bootstrap 5 nanti?

Struktur udah pakai section dan div div terpisah → kamu tinggal kasih class container, row, col-md-6, dll.

Gambar dan teks sudah dipisah jelas → tinggal kamu grid-in pakai row-cols-*

Bagian kontak bisa kamu style dengan d-flex, gap-*, atau text-center

Mau aku bantuin kasih contoh versi Bootstrap 5-nya juga gak? Atau kamu udah cukup sampai sini dulu? -->