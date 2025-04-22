<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Testimoni Laundry Gen Z</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/css/testimoni.css') ?>" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <!-- Form Input Testimoni -->
                <div class="card shadow soft-card mb-4">
                    <div class="card-body">
                        <h4 class="mb-3 text-primary">Tulis Testimoni Kamu</h4>
                        <form action="<?= site_url('testimoni/submit') ?>" method="post">
                            <div class="mb-3">
                                <input type="text" name="nama" class="form-control" placeholder="Nama kamu (opsional)">
                            </div>
                            <div class="mb-3">
                                <select name="rating" class="form-select" required>
                                    <option value="">Rating kamu</option>
                                    <option value="5">⭐⭐⭐⭐⭐</option>
                                    <option value="4">⭐⭐⭐⭐</option>
                                    <option value="3">⭐⭐⭐</option>
                                    <option value="2">⭐⭐</option>
                                    <option value="1">⭐</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <textarea name="isi" rows="3" class="form-control"
                                    placeholder="Tulis pengalaman kamu..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Kirim Testimoni</button>
                        </form>
                    </div>
                </div>

                <!-- Daftar Testimoni -->
                <div class="testimoni-list">
                    <?php foreach ($testimoni as $t): ?>
                        <div class="card mb-3 p-3 shadow-sm soft-card hover-card">
                            <div class="d-flex justify-content-between align-items-center">
                                <strong><?= htmlspecialchars($t->nama ?: 'Anonim') ?></strong>
                                <div class="text-warning fs-5">
                                    <?= str_repeat('⭐', $t->rating) ?>
                                </div>
                            </div>
                            <p class="mt-2"><?= htmlspecialchars($t->isi) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>

</body>

</html>