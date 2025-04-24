<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <style>
    .header {
        padding: 15px 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        /* position: sticky; */
        top: 0;
        z-index: 1000;
    }

    .back-btn {
        background-color: #ffffff;
        color: #1f2937;
        border: 1px solid #e5e7eb;
        padding: 8px 16px;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        text-decoration: none;
    }

    .back-btn:hover {
        background-color: #f3f4f6;
        transform: translateX(-2px);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .back-btn i {
        margin-right: 6px;
        font-size: 1.1rem;
    }
    </style>
</head>

<body>
    <header class="header container">
        <div class="container">
            <a href="<?= base_url() ?>" class="back-btn">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>
    </header>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>