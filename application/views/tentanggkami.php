<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - ReneoLaundry</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('public/css/tentangkami.css'); ?>" />

    <!-- AOS Animation Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
</head>

<body>
    <!-- Wrapper dengan Logo Background -->
    <div class="page-wrapper">
        <!-- Container Utama -->
        <div class="container py-5">

            <!-- Judul Halaman -->
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade-down">
                    <div class="section-title">
                        <h1 class="page-title">
                            <span class="text-primary fw-light">Tentang</span>
                            <span class="fw-bold text-blue">Kami</span>
                        </h1>
                        <div class="title-underline"></div>
                    </div>
                </div>
            </div>

            <!-- Deskripsi dan Gambar Gedung -->
            <div class="card about-card shadow mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="card-body p-4 p-lg-5">
                    <div class="row align-items-center">
                        <!-- Deskripsi -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="about-text">
                                <h2 class="h3 mb-4 text-blue">Layanan Laundry Profesional</h2>
                                <p class="lead mb-3">
                                    Reneo Laundry adalah layanan laundry profesional yang hadir untuk memudahkan hidup
                                    Anda.
                                    Kami berkomitmen untuk memberikan pelayanan terbaik dalam mencuci, menyetrika, dan
                                    merawat
                                    pakaian Anda dengan cepat, bersih, dan wangi.
                                </p>
                                <p>
                                    Dengan dukungan tim yang berpengalaman dan peralatan modern, kami siap menjadi
                                    solusi
                                    laundry terpercaya bagi Anda yang sibuk, aktif, dan mengutamakan kebersihan serta
                                    kerapian
                                    pakaian sehari-hari.
                                </p>
                                <div class="mt-4">
                                    <div class="features">
                                        <div class="feature-item">
                                            <i class="fas fa-check-circle text-primary"></i> Pelayanan Profesional
                                        </div>
                                        <div class="feature-item">
                                            <i class="fas fa-check-circle text-primary"></i> Hasil Bersih & Wangi
                                        </div>
                                        <div class="feature-item">
                                            <i class="fas fa-check-circle text-primary"></i> Pengiriman Tepat Waktu
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gambar -->
                        <div class="col-lg-6 ps-lg-4">
                            <div class="about-image-container">
                                <img src="<?php echo base_url('public/assets/depan.png'); ?>" alt="Gedung ReneoLaundry"
                                    class="img-fluid rounded-3 about-image">
                                <div class="image-badge">
                                    Sejak 2018
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Peta dan Info Kontak -->
            <div class="row mb-5">
                <!-- Peta dengan judul -->
                <div class="col-lg-7 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
                    <div class="map-section">
                        <h2 class="h3 mb-3 text-blue">Lokasi Kami</h2>
                        <div class="map-container rounded-3 overflow-hidden shadow">
                            <!-- Google Maps -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4366.31954873799!2d111.53478297500345!3d-7.639779492376133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bfb03beb471b%3A0x16a030768cf7afc!2sRENEO%20LAUNDRY!5e1!3m2!1sen!2sid!4v1745205459695!5m2!1sen!2sid"
                                height="400" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" class="w-100"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Kontak -->
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="300">
                    <div class="contact-section h-100">
                        <h2 class="h3 mb-3 text-blue">Informasi Kontak</h2>
                        <div class="contact-info p-4 rounded-3 h-100">
                            <div class="contact-item">
                                <div class="icon-box">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info-text">
                                    <h5>Alamat</h5>
                                    <p>Perum Bumi Mas 1 Blk. H No.11 Mojorejo, Kec. Taman, Kota Madiun, Jawa Timur 63139
                                    </p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="icon-box">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="info-text">
                                    <h5>Telepon</h5>
                                    <p><a href="tel:+6285837043478" class="contact-link">085837043478</a></p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="icon-box">
                                    <i class="fab fa-instagram"></i>
                                </div>
                                <div class="info-text">
                                    <h5>Instagram</h5>
                                    <p><a href="https://instagram.com/reneolaundry"
                                            class="contact-link">@reneolaundry</a></p>
                                </div>
                            </div>

                            <!-- Tombol Sosial Media -->
                            <div class="social-links mt-4">
                                <h5 class="mb-3">Hubungi Kami</h5>
                                <div class="d-flex flex-wrap gap-2">
                                    <a href="https://wa.me/6285837043478" class="social-btn whatsapp-btn"
                                        title="WhatsApp">
                                        <i class="fab fa-whatsapp"></i>
                                        <span>WhatsApp</span>
                                    </a>
                                    <a href="https://instagram.com/reneolaundry" class="social-btn instagram-btn"
                                        title="Instagram">
                                        <i class="fab fa-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <!-- Bootstrap Core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <!-- AOS Animation Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Custom JS -->
    <script>
    // Inisialisasi animasi AOS
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    });
    </script>
</body>

</html>