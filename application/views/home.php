<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Loading Page</title>
    <style>
        /* Loading screen */
        #preloader {
            background: #ffffff;
            height: 100vh;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .loader-logo {
            width: 80px;
            margin-bottom: 20px;
        }

        .dots {
            display: flex;
            gap: 10px;
        }

        .dot {
            width: 12px;
            height: 12px;
            background-color: #80d8ff;
            border-radius: 50%;
            animation: bounce 1.4s infinite;
        }

        .dot:nth-child(2) {
            animation-delay: 0.2s;
        }

        .dot:nth-child(3) {
            animation-delay: 0.4s;
        }

        @keyframes bounce {

            0%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-10px);
            }
        }

        body.loaded #main-content {
            display: block;
        }

        #main-content {
            display: none;
        }
    </style>
</head>

<body>
    <!-- Loading Screen -->
    <div id="preloader">
        <img src="<?php echo base_url('assets/images/logo-reneo-laundry.png'); ?>" alt="Logo Reneo Laundry"
            class="loader-logo ">
        <div class="dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

    <script>
        // Setelah 3 detik, redirect ke index.html
        window.addEventListener("load", () => {
            setTimeout(() => {
                window.location.href = "landing"; // halaman tujuan
            }, 3000); // waktu delay 3 detik
        });
    </script>
</body>

</html>