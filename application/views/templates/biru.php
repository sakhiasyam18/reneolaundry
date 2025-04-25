<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fitur Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
    body {
        font-family: "Segoe UI", sans-serif;
        overflow: hidden;
    }

    .feature-box {
        background-color: #a5e0ff;
        padding: 50px 20px;
    }

    .feature-card {
        transition: all 0.3s ease;
        border-radius: 12px;
        padding: 20px;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        background-color: #ffffff33;
    }

    .icon-box {
        background-color: #fff;
        width: 70px;
        height: 70px;
        border-radius: 12px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto 20px auto;
    }

    .icon-box img {
        width: 35px;
    }

    .feature-title {
        font-weight: bold;
        font-size: 18px;
        color: #3e3e3e;
    }

    .feature-text {
        color: #3e3e3e;
        opacity: 0.8;
        font-size: 14px;
    }

    .iframe-container {
        width: 100%;
        max-width: 100%;
    }

    #iframeBiru {
        width: 100%;
        border: none;
        overflow: hidden;
    }
    </style>
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#a5e0ff" fill-opacity="1"
            d="M0,64L18.5,69.3C36.9,75,74,85,111,112C147.7,139,185,181,222,192C258.5,203,295,181,332,181.3C369.2,181,406,203,443,208C480,213,517,203,554,176C590.8,149,628,107,665,117.3C701.5,128,738,192,775,192C812.3,192,849,128,886,128C923.1,128,960,192,997,213.3C1033.8,235,1071,213,1108,202.7C1144.6,192,1182,192,1218,181.3C1255.4,171,1292,149,1329,122.7C1366.2,96,1403,64,1422,48L1440,32L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z">
        </path>
    </svg>
    <section class="feature-box text-center">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Box 1 -->
                <div class="col-md-4 mb-4">
                    <div class="feature-card">
                        <div class="icon-box">
                            <img src="https://img.icons8.com/ios-filled/50/000000/smartphone.png" alt="phone icon" />
                        </div>
                        <div class="feature-title">
                            Pesan Online Kapanpun, <br />
                            Gratis Antar Jemput!
                        </div>
                        <p class="feature-text mt-2">Tidak ada waktu? Pesan online via WA Business kami (Verified) untuk
                            semua item laundry.</p>
                    </div>
                </div>
                <!-- Box 2 -->
                <div class="col-md-4 mb-4">
                    <div class="feature-card">
                        <div class="icon-box">
                            <img src="https://img.icons8.com/ios-filled/50/000000/sleeping.png" alt="sleep icon" />
                        </div>
                        <div class="feature-title">
                            Nikmati Waktu <br />
                            Luang Anda
                        </div>
                        <p class="feature-text mt-2">Nikmati waktu luang Anda dan kami akan jemput sesuai waktu
                            preferensi Anda.</p>
                    </div>
                </div>
                <!-- Box 3 -->
                <div class="col-md-4 mb-4">
                    <div class="feature-card">
                        <div class="icon-box">
                            <img src="https://img.icons8.com/ios-filled/50/000000/delivery.png" alt="delivery icon" />
                        </div>
                        <div class="feature-title">
                            Santai Dengan <br />
                            Pengantaran Langsung
                        </div>
                        <p class="feature-text mt-2">Pakaian Anda kami antarkan langsung ke alamat Anda. Layanan Express
                            tersedia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    function resizeIframe(iframe) {
        iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
    }
    </script>
</body>

</html>