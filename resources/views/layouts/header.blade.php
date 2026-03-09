<!DOCTYPE html>
<html>
<head>
    <title>Samuel Apua | Portfolio</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/97c3b6d53c.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            background: linear-gradient(
                120deg,
                #0d0d0d,
                #1a1a1a,
                #242424,
                #0d0d0d
            );
            color: #ffffff;
            min-height: 100vh;
        }

        .custom-navbar {
            background: transparent;
        }

        .navbar .nav-link {
            color: #cccccc !important;
            transition: 0.2s ease;
        }

        .navbar .nav-link:hover {
            color: #ffffff !important;
        }

        .hero-wrapper {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 16px;
        }

        .custom-footer {
            background: transparent;
            color: #aaaaaa;
        }

        .btn-dark {
            background-color: #111;
            border: none;
        }

        .btn-dark:hover {
            background-color: #000;
            transform: translateY(-3px);
        }

        .btn-outline-dark:hover {
            background-color: #111;
            color: #fff;
        }

        .skill-card {
            background: rgba(255,255,255,0.06);
            border-radius: 16px;
            padding: 20px;
            backdrop-filter: blur(6px);
        }

        .progress {
            height: 12px;
            background: rgba(255,255,255,0.15);
            border-radius: 20px;
        }

        .skill-bar {
            width: var(--skill-width);
            background: linear-gradient(90deg, #ffffff, #dcdcdc);
            border-radius: 20px;
        }
        .skill-percent {
            color: #dcdcdc;
            font-size: 14px;
            font-weight: 600;
        }

        .experience-card {
            background: rgba(255,255,255,0.06);
            border-radius: 16px;
            padding: 22px;
            backdrop-filter: blur(6px);
            border-left: 4px solid rgba(255,255,255,0.2);
            transition: 0.2s ease;
        }

        .experience-card:hover {
            transform: translateY(-3px);
            border-left: 4px solid #ffffff;
        }

        .contact-card {
            background: rgba(255,255,255,0.06);
            border-radius: 16px;
            padding: 30px;
            backdrop-filter: blur(6px);
        }

        .contact-item {
            color: #dcdcdc;
            margin: 15px 0;
            font-size: 16px;
        }

        .contact-item a {
            color: #dcdcdc;
            margin: 15px 0;
            font-size: 16px;
            text-decoration: none;
        }


        .contact-item span {
            margin-left: 8px;
        }

        .project-card {
            background: rgba(255,255,255,0.06);
            border-radius: 16px;
            padding: 20px;
            backdrop-filter: blur(6px);
            transition: 0.2s ease;
        }

        .project-card:hover {
            transform: translateY(-4px);
        }

        .project-image {
            width: 100%;
            height: 180px;
            overflow: hidden;
            border-radius: 12px;
        }

        .project-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.25s ease;
        }

        .project-img:hover {
            transition: scale(1.05);
        }

        .project-placeholder {
            height: 180px;
            background: rgba(255,255,255,0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #bbb;
            font-size: 14px;
            border-radius: 12px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(1) grayscale(100%);
        }
    </style>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<body>