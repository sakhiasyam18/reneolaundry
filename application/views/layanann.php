<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - ReneoLaundry</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/layananann.css') ?>">

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
                            <span class="text-dark fw-bold">Layanan</span>
                            <span class="fw-light text-primary">Kami</span>
                        </h1>
                        <div class="title-underline"></div>
                        <p class="subtitle mt-3">Berbagai layanan laundry berkualitas dengan harga terjangkau</p>
                    </div>
                </div>
            </div>

            <!-- Jenis Layanan -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-12 text-center">
                    <div class="services-container">
                        <div class="service-icon-container">
                            <div class="service-item" data-aos="zoom-in" data-aos-delay="100">
                                <div class="service-icon">
                                    <i class="fas fa-tshirt"></i>
                                </div>
                                <h5>Cuci Kering</h5>
                            </div>

                            <div class="service-item" data-aos="zoom-in" data-aos-delay="200">
                                <div class="service-icon">
                                    <i class="fas fa-iron"></i>
                                </div>
                                <h5>Cuci Setrika</h5>
                            </div>

                            <div class="service-item" data-aos="zoom-in" data-aos-delay="300">
                                <div class="service-icon">
                                    <i class="fas fa-water"></i>
                                </div>
                                <h5>Cuci Basah</h5>
                            </div>

                            <div class="service-item" data-aos="zoom-in" data-aos-delay="400">
                                <div class="service-icon">
                                    <i class="fas fa-box"></i>
                                </div>
                                <h5>Cuci Satuan</h5>
                            </div>

                            <div class="service-item" data-aos="zoom-in" data-aos-delay="500">
                                <div class="service-icon">
                                    <i class="fas fa-fire-alt"></i>
                                </div>
                                <h5>Setrika</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Layanan Kiloan -->
            <div class="row mb-5">
                <div class="col-12 mb-4" data-aos="fade-right">
                    <div class="section-header">
                        <h2 class="h3 fw-bold text-blue">
                            <i class="fas fa-weight me-2"></i>Layanan Kiloan
                        </h2>
                        <div class="section-line"></div>
                    </div>
                </div>

                <!-- Paket Ekonomis -->
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="price-card h-100">
                        <div class="price-header">
                            <div class="price-tag">Ekonomis</div>
                            <div class="duration">
                                <i class="far fa-clock me-1"></i> 3 hari
                            </div>
                        </div>
                        <div class="price-body">
                            <ul class="price-list">
                                <li>
                                    <span>Cuci Setrika</span>
                                    <span class="price">Rp 4.000,-/kg</span>
                                </li>
                                <li>
                                    <span>Cuci Kering</span>
                                    <span class="price">Rp 3.500,-/kg</span>
                                </li>
                                <li>
                                    <span>Cuci Basah</span>
                                    <span class="price">Rp 3.000,-/kg</span>
                                </li>
                                <li>
                                    <span>Setrika</span>
                                    <span class="price">Rp 3.000,-/kg</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Paket Reguler -->
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="price-card h-100">
                        <div class="price-header">
                            <div class="price-tag">Reguler</div>
                            <div class="duration">
                                <i class="far fa-clock me-1"></i> 2 hari
                            </div>
                        </div>
                        <div class="price-body">
                            <ul class="price-list">
                                <li>
                                    <span>Cuci Setrika</span>
                                    <span class="price">Rp 5.000,-/kg</span>
                                </li>
                                <li>
                                    <span>Cuci Kering</span>
                                    <span class="price">Rp 4.500,-/kg</span>
                                </li>
                                <li>
                                    <span>Cuci Basah</span>
                                    <span class="price">Rp 4.000,-/kg</span>
                                </li>
                                <li>
                                    <span>Setrika</span>
                                    <span class="price">Rp 4.000,-/kg</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Paket Besok Jadi -->
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="price-card h-100">
                        <div class="price-header">
                            <div class="price-tag">Besok Jadi</div>
                            <div class="duration">
                                <i class="far fa-clock me-1"></i> 1 hari
                            </div>
                        </div>
                        <div class="price-body">
                            <ul class="price-list">
                                <li>
                                    <span>Cuci Setrika</span>
                                    <span class="price">Rp 6.000,-/kg</span>
                                </li>
                                <li>
                                    <span>Cuci Kering</span>
                                    <span class="price">Rp 5.500,-/kg</span>
                                </li>
                                <li>
                                    <span>Cuci Basah</span>
                                    <span class="price">Rp 5.000,-/kg</span>
                                </li>
                                <li>
                                    <span>Setrika</span>
                                    <span class="price">Rp 5.000,-/kg</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Paket Ekspres -->
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="price-card h-100 premium-card">
                        <div class="price-header">
                            <div class="price-tag">Ekspres</div>
                            <div class="duration">
                                <i class="far fa-clock me-1"></i> 6 jam
                            </div>
                        </div>
                        <div class="price-body">
                            <ul class="price-list">
                                <li>
                                    <span>Cuci Setrika</span>
                                    <span class="price">Rp 8.000,-/kg</span>
                                </li>
                                <li>
                                    <span>Cuci Kering</span>
                                    <span class="price">Rp 7.500,-/kg</span>
                                </li>
                                <li>
                                    <span>Cuci Basah</span>
                                    <span class="price">Rp 7.000,-/kg</span>
                                </li>
                                <li>
                                    <span>Setrika</span>
                                    <span class="price">Rp 7.000,-/kg</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Layanan Satuan -->
            <div class="row mb-5">
                <div class="col-12 mb-4" data-aos="fade-right">
                    <div class="section-header">
                        <h2 class="h3 fw-bold text-blue">
                            <i class="fas fa-box-open me-2"></i>Layanan Satuan
                        </h2>
                        <div class="section-line"></div>
                    </div>
                </div>

                <!-- Bantal & Lainnya -->
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="table-card">
                        <div class="table-header">
                            <h3 class="h5">
                                <i class="fas fa-bed me-2"></i>Bantal & Lainnya
                            </h3>
                        </div>
                        <div class="table-body">
                            <table class="table price-table">
                                <tbody>
                                    <tr>
                                        <td>Bantal/guling besar</td>
                                        <td class="text-end">Rp 15.000</td>
                                    </tr>
                                    <tr>
                                        <td>Bantal/guling sedang</td>
                                        <td class="text-end">Rp 10.000</td>
                                    </tr>
                                    <tr>
                                        <td>Boneka kecil</td>
                                        <td class="text-end">Rp 5.000</td>
                                    </tr>
                                    <tr>
                                        <td>Boneka sedang</td>
                                        <td class="text-end">Rp 10.000</td>
                                    </tr>
                                    <tr>
                                        <td>Boneka besar</td>
                                        <td class="text-end">Rp 15.000</td>
                                    </tr>
                                    <tr>
                                        <td>Tas kecil</td>
                                        <td class="text-end">Rp 10.000</td>
                                    </tr>
                                    <tr>
                                        <td>Tas besar</td>
                                        <td class="text-end">Rp 15.000</td>
                                    </tr>
                                    <tr>
                                        <td>Sepatu</td>
                                        <td class="text-end">Rp 15.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Pakaian & Kain -->
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="table-card">
                        <div class="table-header">
                            <h3 class="h5">
                                <i class="fas fa-tshirt me-2"></i>Pakaian & Kain
                            </h3>
                        </div>
                        <div class="table-body">
                            <table class="table price-table">
                                <tbody>
                                    <tr>
                                        <td>Selimut tipis</td>
                                        <td class="text-end">Rp 15.000</td>
                                    </tr>
                                    <tr>
                                        <td>Selimut tebal</td>
                                        <td class="text-end">Rp 22.000</td>
                                    </tr>
                                    <tr>
                                        <td>Bed cover</td>
                                        <td class="text-end">Rp 15.000</td>
                                    </tr>
                                    <tr>
                                        <td>Gorden/m²</td>
                                        <td class="text-end">Rp 4.000</td>
                                    </tr>
                                    <tr>
                                        <td>Karpet tipis/m²</td>
                                        <td class="text-end">Rp 8.000</td>
                                    </tr>
                                    <tr>
                                        <td>Karpet tebal/m²</td>
                                        <td class="text-end">Rp 10.000</td>
                                    </tr>
                                    <tr>
                                        <td>Bantal kecil</td>
                                        <td class="text-end">Rp 5.000</td>
                                    </tr>
                                    <tr>
                                        <td>Tikar gulung</td>
                                        <td class="text-end">Rp 15.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <!-- <div class="row mb-5" data-aos="fade-up">
                <div class="col-12">
                    <div class="cta-section text-center">
                        <h3 class="mb-3">Butuh Layanan Laundry?</h3>
                        <p class="mb-4">Dapatkan pakaian bersih, wangi, dan rapi dengan layanan kami</p>
                        <a href="https://wa.me/6285837043478" class="btn cta-btn">
                            <i class="fab fa-whatsapp me-2"></i>Hubungi Sekarang
                        </a>
                    </div>
                </div>
            </div> -->
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

        // Menambahkan class FA untuk icon setrika yang tidak ada di standard FA
        // Menggunakan kelas custom untuk icon setrika
        var ironIcon = document.querySelectorAll('.fas.fa-iron');
        ironIcon.forEach(function(icon) {
            icon.classList.remove('fa-iron');
            icon.classList.add('fa-temperature-high'); // Alternativ icon
        });
    });
    </script>
</body>

</html>