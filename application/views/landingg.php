<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Reneo Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous" />
    <link rel="icon" href="assets/images/logo.png" type="image/png">


    <!-- css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/landing.css') ?>">

</head>

<body>
    <div class="bg">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="logo navbar-brand d-flex align-items-center" href="landing">
                    <img src="assets/images/logo-reneo-laundry.png" alt="Logo" width="60" class="me-2" />
                    RENEO LAUNDRY
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="tentanggkami">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="layanann">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="testimoni">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontakk">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- akhir navbar -->

        <!-- jumbotron -->
        <section class="container md-5">
            <div class="jumbotron">
                <div class="row">
                    <div class="col">
                        <h1 class="display-4 float-start" style="font-weight: bold;">Baju Bersih <br />Tanpa Ribet,
                            <br />Serahkan pada <br />Kami!
                            <br>
                            <p class="lead float-start">
                                Solusi Laundry Cepat, Bersih,<br />
                                dan Terpercaya
                            </p>
                        </h1>
                    </div><br><br><br>
                    <div class="col">
                        <img src="<?php echo base_url('/assets/images/mesin_cuci.png'); ?>" class="img-fluid float-end"
                            alt="mesin cuci" width="700" />
                    </div>
                </div>
            </div>
        </section>
        <div style=" bottom: 0; left: 0; width: 100%; overflow: hidden; line-height: 0;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,64L18.5,69.3C36.9,75,74,85,111,112C147.7,139,185,181,222,192C258.5,203,295,181,332,181.3C369.2,181,406,203,443,208C480,213,517,203,554,176C590.8,149,628,107,665,117.3C701.5,128,738,192,775,192C812.3,192,849,128,886,128C923.1,128,960,192,997,213.3C1033.8,235,1071,213,1108,202.7C1144.6,192,1182,192,1218,181.3C1255.4,171,1292,149,1329,122.7C1366.2,96,1403,64,1422,48L1440,32L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z">
                </path>
            </svg>
        </div>
    </div>
    </div><br><br>
    <!-- akhir jumbotron -->

    <!-- page 2 -->
    <div class="page2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-4 float-start">
                        Menjadi solusi <br />
                        laundry terpercaya <br />
                        dan pilihan utama <br />
                        masyarakat. <br>
                        <p class="lead float-start">
                            Ingin Tau Lebih Tentang <br />
                            Kami?<br />
                        </p>
                    </h1>
                </div>
                <div class="col">
                    <img src="<?php echo base_url('/assets/images/page2.png'); ?>" class="img-fluid float-end"
                        alt="orang page 2" width="600" />
                </div>
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col">
                        <a class="btn btn-primary float-start" href="tentanggkami">info lebih lanjut</a>
                    </div>
                    <div class="col">

                    </div>
                </div>
            </div>
        </div><br><br><br><br><br><br><br>
        <!-- page 2 akhir -->

        <!-- page 3 -->
        <div class="page3">
            <div class="page3">
                <p>
                    <span style="color : #5289E7;">Kami</span>
                    <span style="color : black">Ada</span>
                    <span style="color : #5289E7">Disini!</span>
                </p>
            </div>
            <!-- Peta -->
            <div class="peta">
                <div class="col-md-7 mb-4 mb-lg-0">
                    <!-- google maps nya -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4366.31954873799!2d111.53478297500345!3d-7.639779492376133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bfb03beb471b%3A0x16a030768cf7afc!2sRENEO%20LAUNDRY!5e1!3m2!1sen!2sid!4v1745205459695!5m2!1sen!2sid"
                        width="1200" height="500" style="border:0; aspect-ratio: 16/9;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>


            <!-- <div class="container text-center my-5">
            <div class="card mx-auto d-block" style="border: 0;">
                <iframe src="lokasi.html" width="1000" height="500" frameborder="0"></iframe>
            </div>
        </div> -->
        </div><br><br><br><br><br><br><br><br><br>
        <!-- page 3 akhir -->

        <!-- page 5 -->
        <div class="page5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="<?php echo base_url('/assets/images/page5.png'); ?>" class="img-fluid float-end"
                            alt="orang page 5" width="800" />
                    </div>
                    <div class="col">
                        <h1 class="display-4 float-start">
                            Layanan Kami – Bersih, <br> Cepat, Tanpa Ribet!
                        </h1>
                        <br />
                        <p class="lead float-start">
                            Cuci Kilat? ADA. <br>
                            Dry Clean? ADA. <br>
                            Laundry Satuan? ADA BANGET. <br>
                        </p>
                        <br><br><br><br><br><br><br><br><br><br><br><br>
                        <a class="btn btn-primary float-start" href="layanann">info lebih lanjut</a>
                    </div>
                </div>
            </div>
        </div><br><br><br><br><br><br><br>
        <!-- page 5 akhir -->


        <!-- page 6 -->
        <div class="page6">
            <div class="iframe-container d-flex justify-content-center py-5">
                <iframe src="<?php echo base_url('landing/biru'); ?>" width="100%" height="800"
                    frameborder="0"></iframe>
            </div>
        </div>

        <!-- page 6 akhir -->


        <!-- page 7 -->
        <div class="page7">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-4 float-start" style="font-weight: bold;">
                            <br>
                            Ada pertanyaan? <br>Butuh bantuan cepat? <br> Kami siap melayani <br> Anda!
                        </h1>
                    </div>
                    <div class="col">
                        <img src="<?php echo base_url('/assets/images/page7.png'); ?>" class="img-fluid float-end"
                            alt="orang page 2" width="800" />
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col">
                        <a class="btn btn-primary float-start" href="kontakk">info lebih lanjut</a>
                    </div>
                    <div class="col">

                    </div>
                </div>
            </div>
        </div><br><br><br><br><br><br><br>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
        function resizeIframe(iframe) {
            iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
        }
        </script>
</body>

</html>