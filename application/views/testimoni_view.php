<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni - ReneoLaundry</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/testimoni.css') ?>" rel="stylesheet">
    <link rel="icon" href="assets/images/logo.png" type="image/png">
    <!-- buat baground agar transparan -->
    <style>
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

    <div class="container py-5">
        <div class="page-header text-center animate__animated animate__fadeIn">
            <h2 class="mb-2">Testimoni Pelanggan</h2>
            <p class="text-muted">Dengar langsung dari pelanggan setia kami</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Form Input Testimoni -->
                <div class="card shadow soft-card mb-5 animate__animated animate__fadeInUp">
                    <div class="card-body p-4 input-highlight">
                        <h4 class="mb-4 text-primary"><i class="fas fa-comment-dots me-2"></i>Bagikan Pengalaman Kamu
                        </h4>
                        <form action="<?= site_url('testimoni/submit') ?>" method="post" id="testimoniForm">
                            <div class="mb-4">
                                <label for="nama" class="form-label small text-muted">Nama Kamu</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="fas fa-user text-primary"></i>
                                    </span>
                                    <input type="text" name="nama" id="nama" class="form-control"
                                        placeholder="Tulis nama kamu (opsional)">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="rating" class="form-label small text-muted">Rating</label>
                                <select name="rating" id="rating" class="form-select" required>
                                    <option value="" selected disabled>Pilih Rating</option>
                                    <option value="5">⭐⭐⭐⭐⭐</option>
                                    <option value="4">⭐⭐⭐⭐</option>
                                    <option value="3">⭐⭐⭐</option>
                                    <option value="2">⭐⭐</option>
                                    <option value="1">⭐</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="isi" class="form-label small text-muted">Cerita Pengalaman</label>
                                <textarea name="isi" id="isi" rows="4" class="form-control"
                                    placeholder="Ceritakan pengalaman kamu menggunakan jasa kami..."
                                    required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-3">
                                <i class="fas fa-paper-plane me-2"></i>Kirim Testimoni
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Separator -->
                <div class="d-flex align-items-center mb-4 animate__animated animate__fadeIn">
                    <div class="flex-grow-1 border-bottom"></div>
                    <div class="mx-3 text-muted">Testimoni Pelanggan</div>
                    <div class="flex-grow-1 border-bottom"></div>
                </div>

                <!-- Daftar Testimoni -->
                <div class="testimoni-list">
                    <?php if (empty($testimoni)): ?>
                    <div class="card mb-3 p-4 shadow-sm soft-card text-center">
                        <div class="py-4">
                            <i class="fas fa-comments fa-3x text-muted mb-3"></i>
                            <p class="mb-0">Belum ada testimoni. Jadilah yang pertama!</p>
                        </div>
                    </div>
                    <?php else: ?>
                    <?php foreach ($testimoni as $t): ?>
                    <div class="card mb-4 p-4 shadow-sm soft-card hover-card">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle bg-primary text-white me-3">
                                    <?= substr(htmlspecialchars($t->nama ?: 'A'), 0, 1) ?>
                                </div>
                                <strong><?= htmlspecialchars($t->nama ?: 'Anonim') ?></strong>
                            </div>
                            <div class="text-warning">
                                <?= str_repeat('⭐', $t->rating) ?>
                            </div>
                        </div>
                        <p class="mb-0"><?= htmlspecialchars($t->isi) ?></p>
                        <?php if (isset($t->created_at)): ?>
                        <div class="mt-3 text-muted small">
                            <i class="far fa-clock me-1"></i> <?= date('d M Y', strtotime($t->created_at)) ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script>
    // Simple form animation
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('testimoniForm');
        const inputs = form.querySelectorAll('input, select, textarea');

        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.closest('.mb-4').classList.add('animate__animated', 'animate__pulse');
            });

            input.addEventListener('blur', function() {
                this.closest('.mb-4').classList.remove('animate__animated', 'animate__pulse');
            });
        });

        // Form submission animation
        form.addEventListener('submit', function() {
            const submitBtn = this.querySelector('button[type="submit"]');
            submitBtn.innerHTML =
                '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Mengirim...';
        });
    });
    </script>

    <style>
    /* Additional inline styles to complement the CSS file */
    .avatar-circle {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    /* Custom styling for input groups */
    .input-group-text {
        border-radius: 10px 0 0 10px;
    }

    .input-group .form-control {
        border-radius: 0 10px 10px 0;
    }
    </style>
</body>

</html>