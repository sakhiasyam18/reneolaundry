<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - ReneoLaundry</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate.css untuk animasi -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="<?= base_url('assets/css/kontakk.css') ?>" rel="stylesheet">
    <style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        color: #1a202c;
        /* Warna judul lebih gelap */
        line-height: 1.3;
    }

    .lead {
        font-size: 1.1rem;
        font-weight: 400;
        color: #4a5568;
    }

    /* Background Watermark*/
    .background-watermark {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('<?php echo base_url("assets/images/logo-reneo-laundry.png"); ?>');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        opacity: 0.1;
        z-index: -1;
    }
    </style>
</head>

<body>
    <div class="background-watermark"></div>
    <!-- Header Section -->
    <div class="header-section text-center animate-fade-in">
        <div class="container py-5">
            <h1 class="display-4 fw-bold">Layanan Laundry Terbaik Ada di Sini!</h1>
            <p class="lead">Kami siap layani kamu dengan profesional, dari cuci harian sampai ekspres.</p>
        </div>
    </div>

    <div class="container py-3">
        <!-- Form Section -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8">
                <div class="contact-form animate-slide-up">
                    <h2 class="text-center mb-4 text-primary">Tertarik gabung tim ReneoLaundry? Langsung hubungi kami
                        untuk info lowongan!</h2>
                    <form id="whatsappForm">
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Nama Lengkap"
                                        required>
                                    <label for="name"><i class="fas fa-user me-2"></i>Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                                    <label for="email"><i class="fas fa-envelope me-2"></i>Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subjek" required>
                                <label for="subject"><i class="fas fa-heading me-2"></i>Subjek</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-floating">
                                <textarea class="form-control" id="message" rows="5" placeholder="Pesan"
                                    style="height: 150px" required></textarea>
                                <label for="message"><i class="fas fa-comment me-2"></i>Pesan, Saran atau
                                    Pertanyaan</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-submit">
                                <i class="fab fa-whatsapp me-2"></i>Kirim via WhatsApp
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Info Section -->
        <div class="info-section animate-fade-in">
            <div class="row text-center mb-4">
                <div class="col-12">
                    <h2 class="fw-bold text-primary">Hubungi Kami</h2>
                    <p class="lead">Kami menerima semua saran, kritik, dan pertanyaan Anda</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Address Card -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4 class="mb-3 text-primary">Alamat</h4>
                        <p>Perum Bumi Mas 1, Blk. B No.11,<br>Mojorojo, Kec. Taman, Kota Madiun,<br>Jawa Timur 63139</p>
                        <a href="https://maps.google.com/?q=Perum Bumi Mas 1, Blk. B No.11, Mojorojo, Kec. Taman, Kota Madiun"
                            class="btn btn-outline-primary mt-2">
                            <i class="fas fa-directions me-2"></i>Petunjuk Arah
                        </a>
                    </div>
                </div>
                <!-- Instagram Card -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <h4 class="mb-3 text-primary">Instagram</h4>
                        <p>Ikuti kami di Instagram untuk mendapatkan update terbaru dan promo menarik!</p>
                        <a href="https://www.instagram.com/laundryonlinemadiun" class="btn btn-outline-primary mt-2">
                            <i class="fab fa-instagram me-2"></i>@laundryonlinemadiun
                        </a>
                    </div>
                </div>
                <!-- WhatsApp Card -->
                <div class="col-md-4">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h4 class="mb-3 text-primary">WhatsApp</h4>
                        <p>Hubungi kami langsung untuk layanan cepat dan informasi lebih lanjut.</p>
                        <a href="https://wa.me/6285736658148" class="btn btn-outline-primary mt-2">
                            <i class="fab fa-whatsapp me-2"></i>6285736658148
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS for WhatsApp integration -->
    <script>
    // Form submission to WhatsApp
    document.getElementById('whatsappForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Get form values
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;

        // Construct WhatsApp message
        const whatsappMessage =
            `*Pesan dari Form Kontak ReneoLaundry*\n\n` +
            `*Nama:* ${name}\n` +
            `*Email:* ${email}\n` +
            `*Subjek:* ${subject}\n\n` +
            `*Pesan:*\n${message}`;

        // Encode the message for URL
        const encodedMessage = encodeURIComponent(whatsappMessage);

        // WhatsApp phone number (Indonesian format)
        const phoneNumber = '6285736658148';

        // Create WhatsApp URL
        const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;

        // Open WhatsApp in new tab
        window.open(whatsappUrl, '_blank');
    });

    // Add animation when scrolling
    document.addEventListener('DOMContentLoaded', function() {
        // Add animation classes when elements come into view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, {
            threshold: 0.1
        });

        // Observe all info cards
        document.querySelectorAll('.info-card').forEach(card => {
            observer.observe(card);
        });
    });
    </script>
</body>

</html>