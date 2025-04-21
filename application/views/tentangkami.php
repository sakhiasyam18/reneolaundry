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

    <!-- extend css dari aku  -->
    <link rel="stylesheet" href="<?php echo base_url('public/css/tentangkami.css'); ?>" />
</head>

<body class="bg-white">

    <!-- Container Utama -->
    <div class="container py-5">

        <!-- Judul -->
        <section class="text-center mb-5">
            <h1 class="selection-tittle">
                <span>Tentang</span> <strong style="color: blue;">Kami</strong>
            </h1>
        </section>

        <!-- Deskripsi dan Gambar Gedung -->
        <section class=" mb-5">
            <div class="row align-items-center">

                <!-- Deskripsi -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <p>
                        Reneo Laundry adalah layanan laundry profesional yang hadir untuk memudahkan hidup Anda.
                        Kami
                        berkomitmen untuk memberikan pelayanan terbaik dalam mencuci, menyetrika, dan merawat
                        pakaian
                        Anda dengan cepat, bersih, dan wangi.
                    </p>
                    <p>
                        Dengan dukungan tim yang berpengalaman dan peralatan modern, kami siap menjadi solusi
                        laundry
                        terpercaya bagi Anda yang sibuk, aktif, dan mengutamakan kebersihan serta kerapian
                        pakaian
                        sehari-hari.
                    </p>
                </div>

                <!-- Gambar -->
                <div class="col-md-6 order-md-2 text-center">
                    <img src="<?php echo base_url('public/assets/depan.png'); ?>" alt="Gedung ReneoLaundry"
                        class="img-fluid rounded-2">
                </div>
            </div>
        </section>

        <!-- Peta dan Info Kontak -->
        <section>
            <div class="row align-items-start">

                <!-- Peta -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4366.31954873799!2d111.53478297500345!3d-7.639779492376133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bfb03beb471b%3A0x16a030768cf7afc!2sRENEO%20LAUNDRY!5e1!3m2!1sen!2sid!4v1745205459695!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Kontak -->
                <div class="col-md-6">
                    <div class="contact-info">
                        <h2 class="h5 mb-3">Informasi Kontak</h2>
                        <p class="mb-3"><strong>Alamat:</strong> Perum Bumi Mas 1 Blk. H No.11 Mojorejo, Kec. Taman,
                            Kota Madiun,
                            Jawa
                            Timur 63139</p>
                        <p class="mb-3"><strong>Telepon:</strong> 085837043478</p>
                        <p class="mb-4"><strong>Instagram:</strong> @reneolaundry</p>
                        <div class="sosial-icon">
                            <a href="wa.me/6285837043478" class="social-icon"><img
                                    src="<?php echo base_url('public/assets/brand-whatsapp.svg'); ?>"
                                    alt="WhatsApp Icon"></a>
                            <a href="instagram.com/reneolaundry" class="social-icon"><img
                                    src="<?php echo base_url('public/assets/brand-instagram.svg'); ?>"
                                    alt="Instagram Icon"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <!-- Inisialisasi peta Leaflet
    <script>
        var map = L.map('map').setView([-7.59703, 110.82317], 15); // Contoh: Koordinat Solo, ganti dengan Madiun
    </script> -->
</body>

</html>
<!-- 
Kenapa ini lebih enak buat Bootstrap 5 nanti?

Struktur udah pakai section dan div div terpisah → kamu tinggal kasih class container, row, col-md-6, dll.

Gambar dan teks sudah dipisah jelas → tinggal kamu grid-in pakai row-cols-*

Bagian kontak bisa kamu style dengan d-flex, gap-*, atau text-center

Mau aku bantuin kasih contoh versi Bootstrap 5-nya juga gak? Atau kamu udah cukup sampai sini dulu? -->