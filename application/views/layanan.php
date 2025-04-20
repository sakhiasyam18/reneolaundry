<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reneo Laundry - Layanan Laundry Terpercaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
    :root {
        --primary: #0D6EFD;
        --secondary: #5BC0DE;
        --dark-blue: #0B5ED7;
        --light-blue: #9EEAF9;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        position: relative;
        overflow-x: hidden;
    }

    .bg-logo {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        opacity: 0.05;
        z-index: -1;
        background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNDAgMjQwIj48cGF0aCBmaWxsPSIjMEQ2RUZEIiBkPSJNMTIwLDIwIGwtMjAsNDAgYzAsMCAtNDAsLTIwIC02MCwwIGMtMjAsIDIwIC0yMCw2MCAwLDgwIGMyMCwyMCA2MCwyMCA4MCwwIGMyMCwtMjAgMjAsLTYwIDAsLTgwIGwtMjAsNDAgbDIwLDQwIGMwLDAgNDAsLTIwIDYwLDAgYzIwLDIwIDIwLDYwIDAsODAgYy0yMCwyMCAtNjAsMjAgLTgwLDAgYy0yMCwtMjAgLTIwLC02MCAwLC04MCBsMjAsLTQwIHoiLz48L3N2Zz4=');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }

    .navbar {
        background-color: white !important;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand img {
        height: 40px;
    }

    .hero {
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
        padding: 5rem 0;
        position: relative;
        overflow: hidden;
    }

    .hero::after {
        content: '';
        position: absolute;
        bottom: -50px;
        left: 0;
        width: 100%;
        height: 100px;
        background-color: white;
        border-radius: 100% 100% 0 0;
    }

    .service-icon {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: var(--light-blue);
        color: var(--primary);
        border-radius: 50%;
        margin-bottom: 1rem;
        font-size: 1.5rem;
    }

    .service-card {
        background-color: white;
        border-radius: 10px;
        padding: 1.5rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin-bottom: 2rem;
        text-align: center;
        height: 100%;
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .price-card {
        background-color: white;
        border-radius: 10px;
        padding: 1.5rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        margin-bottom: 2rem;
        height: 100%;
    }

    .price-card-header {
        background-color: var(--primary);
        color: white;
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1rem;
        text-align: center;
    }

    .price-card-header.ekonomis {
        background-color: #FFC107;
    }

    .price-card-header.reguler {
        background-color: #20C997;
    }

    .price-card-header.express {
        background-color: #DC3545;
    }

    .price-card-header.besok {
        background-color: #6F42C1;
    }

    .price-card ul {
        list-style: none;
        padding: 0;
    }

    .price-card li {
        padding: 0.75rem 0;
        border-bottom: 1px solid #eee;
        display: flex;
        justify-content: space-between;
    }

    .cta-section {
        background-color: var(--light-blue);
        padding: 5rem 0;
    }

    .cta-card {
        background-color: white;
        border-radius: 10px;
        padding: 3rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        text-align: center;
    }

    .floating-whatsapp {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        background-color: #25D366;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        z-index: 100;
        text-decoration: none;
        transition: transform 0.3s ease;
    }

    .floating-whatsapp:hover {
        transform: scale(1.1);
        color: white;
    }

    footer {
        background-color: #343a40;
        color: white;
        padding: 3rem 0;
    }

    .water-drop {
        animation: pulsate 2s infinite;
        position: absolute;
        top: -30px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: auto;
    }

    @keyframes pulsate {
        0% {
            transform: translateX(-50%) scale(1);
        }

        50% {
            transform: translateX(-50%) scale(1.1);
        }

        100% {
            transform: translateX(-50%) scale(1);
        }
    }

    .satuan-table {
        width: 100%;
    }

    .satuan-table tr td {
        padding: 8px 0;
        border-bottom: 1px solid #eee;
    }

    .satuan-table tr td:last-child {
        text-align: right;
        font-weight: 500;
    }

    .tab-content {
        padding-top: 2rem;
    }

    .nav-tabs .nav-link {
        border: none;
        color: #6c757d;
        font-weight: 500;
        padding: 1rem 1.5rem;
    }

    .nav-tabs .nav-link.active {
        color: var(--primary);
        background-color: transparent;
        border-bottom: 3px solid var(--primary);
    }

    .promo-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: #dc3545;
        color: white;
        padding: 0.25rem 0.5rem;
        border-radius: 3px;
        font-size: 0.75rem;
        font-weight: bold;
        z-index: 1;
    }

    .testimonial-card {
        background-color: white;
        border-radius: 10px;
        padding: 1.5rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        margin: 1rem;
    }

    .testimonial-avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 1rem;
    }

    .star-rating {
        color: #ffc107;
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
    }
    </style>
</head>

<body>
    <div class="bg-logo"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNDAgMjQwIj48cGF0aCBmaWxsPSIjMEQ2RUZEIiBkPSJNMTIwLDIwIGwtMjAsNDAgYzAsMCAtNDAsLTIwIC02MCwwIGMtMjAsIDIwIC0yMCw2MCAwLDgwIGMyMCwyMCA2MCwyMCA4MCwwIGMyMCwtMjAgMjAsLTYwIDAsLTgwIGwtMjAsNDAgbDIwLDQwIGMwLDAgNDAsLTIwIDYwLDAgYzIwLDIwIDIwLDYwIDAsODAgYy0yMCwyMCAtNjAsMjAgLTgwLDAgYy0yMCwtMjAgLTIwLC02MCAwLC04MCBsMjAsLTQwIHoiLz48L3N2Zz4="
                    alt="Reneo Laundry Logo">
                <span class="ms-2 fw-bold">Reneo Laundry</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#harga">Harga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
                <a href="#order" class="btn btn-primary ms-lg-3">Pesan Sekarang</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Layanan Laundry Profesional untuk Pakaian Anda</h1>
                    <p class="lead mb-4">Kami menyediakan layanan cuci, setrika, dan antar-jemput berkualitas tinggi
                        dengan harga terjangkau.</p>
                    <div class="d-flex gap-3">
                        <a href="#order" class="btn btn-light btn-lg">Pesan Sekarang</a>
                        <a href="#layanan" class="btn btn-outline-light btn-lg">Lihat Layanan</a>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center mt-5 mt-lg-0">
                    <img src="/api/placeholder/500/400" alt="Laundry Service" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Section -->
    <section class="py-5" id="layanan">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Layanan Kami</h2>
                <p class="text-muted">Berbagai layanan untuk memenuhi kebutuhan Anda</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="service-card">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <h5>Cuci Kering</h5>
                        <p class="text-muted">Layanan cuci tanpa setrika, bersih dan wangi.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="service-card">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-iron"></i>
                        </div>
                        <h5>Cuci Setrika</h5>
                        <p class="text-muted">Layanan cuci dengan setrika, bersih, wangi, dan rapi.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="service-card">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-shower"></i>
                        </div>
                        <h5>Cuci Basah</h5>
                        <p class="text-muted">Layanan cuci saja tanpa pengeringan.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="service-card">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-magic"></i>
                        </div>
                        <h5>Setrika</h5>
                        <p class="text-muted">Layanan setrika saja untuk pakaian yang sudah bersih.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="p-4 bg-light rounded">
                        <h4 class="mb-3">Keunggulan Kami</h4>
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h5>Aman dan Terpercaya</h5>
                                <p class="text-muted">Pakaian Anda ditangani oleh tenaga profesional yang terlatih.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h5>Cepat dan Tepat Waktu</h5>
                                <p class="text-muted">Pilih layanan sesuai kebutuhan Anda, dari ekonomis hingga express.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h5>Antar Jemput Gratis</h5>
                                <p class="text-muted">Untuk area tertentu, kami menyediakan layanan antar jemput gratis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="p-4 bg-light rounded h-100 d-flex flex-column justify-content-center">
                        <h4 class="mb-4">Proses Layanan</h4>
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle p-2 me-3 d-flex align-items-center justify-content-center"
                                style="width: 40px; height: 40px;">
                                <span class="fw-bold">1</span>
                            </div>
                            <p class="mb-0">Pesan melalui WhatsApp atau kunjungi outlet kami</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle p-2 me-3 d-flex align-items-center justify-content-center"
                                style="width: 40px; height: 40px;">
                                <span class="fw-bold">2</span>
                            </div>
                            <p class="mb-0">Kami proses laundry Anda sesuai layanan yang dipilih</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle p-2 me-3 d-flex align-items-center justify-content-center"
                                style="width: 40px; height: 40px;">
                                <span class="fw-bold">3</span>
                            </div>
                            <p class="mb-0">Pakaian siap diambil atau diantar sesuai jadwal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricelist Section -->
    <section class="py-5 bg-light" id="harga">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Daftar Harga</h2>
                <p class="text-muted">Pilih layanan sesuai kebutuhan Anda</p>
            </div>

            <ul class="nav nav-tabs justify-content-center mb-4" id="priceTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="kiloan-tab" data-bs-toggle="tab" data-bs-target="#kiloan"
                        type="button" role="tab">Laundry Kiloan</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="satuan-tab" data-bs-toggle="tab" data-bs-target="#satuan" type="button"
                        role="tab">Laundry Satuan</button>
                </li>
            </ul>

            <div class="tab-content" id="priceTabContent">
                <div class="tab-pane fade show active" id="kiloan" role="tabpanel">
                    <p class="text-center mb-4">Minimal order 3kg per layanan</p>
                    <div class="row">
                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="price-card position-relative">
                                <div class="price-card-header ekonomis">
                                    <h5 class="mb-0">Ekonomis</h5>
                                    <small>3 Hari</small>
                                </div>
                                <ul>
                                    <li>
                                        <span>Cuci Setrika</span>
                                        <span>Rp 4.000,-/kg</span>
                                    </li>
                                    <li>
                                        <span>Cuci Kering</span>
                                        <span>Rp 3.500,-/kg</span>
                                    </li>
                                    <li>
                                        <span>Cuci Basah</span>
                                        <span>Rp 3.000,-/kg</span>
                                    </li>
                                    <li>
                                        <span>Setrika</span>
                                        <span>Rp 3.000,-/kg</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="price-card position-relative">
                                <div class="price-card-header reguler">
                                    <h5 class="mb-0">Reguler</h5>
                                    <small>2 Hari</small>
                                </div>
                                <ul>
                                    <li>
                                        <span>Cuci Setrika</span>
                                        <span>Rp 5.000,-/kg</span>
                                    </li>
                                    <li>
                                        <span>Cuci Kering</span>
                                        <span>Rp 4.500,-/kg</span>
                                    </li>
                                    <li>
                                        <span>Cuci Basah</span>
                                        <span>Rp 4.000,-/kg</span>
                                    </li>
                                    <li>
                                        <span>Setrika</span>
                                        <span>Rp 4.000,-/kg</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="price-card position-relative">
                                <div class="price-card-header besok">
                                    <h5 class="mb-0">Besok Jadi</h5>
                                    <small>1 Hari</small>
                                </div>
                                <ul>
                                    <li>
                                        <span>Cuci Setrika</span>
                                        <span>Rp 6.000,-/kg</span>
                                    </li>
                                    <li>
                                        <span>Cuci Kering</span>
                                        <span>Rp 5.500,-/kg</span>
                                    </li>
                                    <li>
                                        <span>Cuci Basah</span>
                                        <span>Rp 5.000,-/kg</span>
                                    </li>
                                    <li>
                                        <span>Setrika</span>
                                        <span>Rp 5.000,-/kg</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="price-card position-relative">
                                <span class="promo-badge">Paling Laku</span>
                                <div class="price-card-header express">
                                    <h5 class="mb-0">Express</h5>
                                    <small>8 Jam</small>
                                </div>
                                <ul>
                                    <li>
                                        <span>Cuci Setrika</span>
                                        <span>Rp 8.000,-/kg</span>
                                    </li>
                                    <li>
                                        <span>Cuci Kering</span>
                                        <span>Rp 7.500,-/kg</span>
                                    </li>
                                    <li>
                                        <span>Cuci Basah</span>
                                        <span>Rp 7.000,-/kg</span>
                                    </li>
                                    <li>
                                        <span>Setrika</span>
                                        <span>Rp 7.000,-/kg</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="satuan" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="price-card">
                                <h5 class="mb-3">Pakaian & Kain</h5>
                                <table class="satuan-table">
                                    <tr>
                                        <td>Selimut tipis</td>
                                        <td>Rp 15.000</td>
                                    </tr>
                                    <tr>
                                        <td>Selimut tebal</td>
                                        <td>Rp 22.000</td>
                                    </tr>
                                    <tr>
                                        <td>Bed cover</td>
                                        <td>Rp 15.000</td>
                                    </tr>
                                    <tr>
                                        <td>Gorden/m²</td>
                                        <td>Rp 4.000</td>
                                    </tr>
                                    <tr>
                                        <td>Karpet tipis/m²</td>
                                        <td>Rp 8.000</td>
                                    </tr>
                                    <tr>
                                        <td>Karpet tebal/m²</td>
                                        <td>Rp 10.000</td>
                                    </tr>
                                    <tr>
                                        <td>Bantal kecil</td>
                                        <td>Rp 5.000</td>
                                    </tr>
                                    <tr>
                                        <td>Tikar gulung</td>
                                        <td>Rp 15.000</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4 mt-md-0">
                            <div class="price-card">
                                <h5 class="mb-3">Bantal & Lainnya</h5>
                                <table class="satuan-table">
                                    <tr>
                                        <td>Bantal/guling besar</td>
                                        <td>Rp 15.000</td>
                                    </tr>
                                    <tr>
                                        <td>Bantal/guling sedang</td>
                                        <td>Rp 10.000</td>
                                    </tr>
                                    <tr>
                                        <td>Boneka kecil</td>
                                        <td>Rp 5.000</td>
                                    </tr>
                                    <tr>
                                        <td>Boneka sedang</td>
                                        <td>Rp 10.000</td>
                                    </tr>
                                    <tr>
                                        <td>Boneka besar</td>
                                        <td>Rp 15.000</td>
                                    </tr>
                                    <tr>
                                        <td>Tas kecil</td>
                                        <td>Rp 10.000</td>
                                    </tr>
                                    <tr>
                                        <td>Tas besar</td>
                                        <td>Rp 15.000</td>
                                    </tr>
                                    <tr>
                                        <td>Sepatu</td>
                                        <td>Rp 15.000</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>