<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educa Studio - Company Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',sans-serif;
        }

        body{
            background:linear-gradient(135deg,#0f172a,#1e3a8a,#2563eb);
            color:white;
        }

        .navbar{
            background:rgba(255,255,255,.08);
            backdrop-filter:blur(10px);
        }

        .navbar-brand{
            font-weight:bold;
            font-size:28px;
        }

        .hero{
            min-height:90vh;
            display:flex;
            align-items:center;
        }

        .hero h1{
            font-size:60px;
            font-weight:bold;
        }

        .hero p{
            font-size:20px;
            color:#dbeafe;
        }

        .btn-custom{
            background:#ffc107;
            color:black;
            padding:12px 30px;
            border-radius:30px;
            font-weight:bold;
            text-decoration:none;
            transition:.3s;
        }

        .btn-custom:hover{
            background:white;
        }

        .card-feature{
            border:none;
            border-radius:20px;
            transition:.4s;
            color:#333;
        }

        .card-feature:hover{
            transform:translateY(-10px);
            box-shadow:0 20px 35px rgba(0,0,0,.3);
        }

        .icon{
            font-size:50px;
        }

        footer{
            background:#0f172a;
            padding:25px;
            text-align:center;
            margin-top:70px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">

        <a class="navbar-brand" href="/">
            🚀 Educa Studio
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/category/marbel-edu-games">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/news">News</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/program/karir">Program</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/about-us">About Us</a>
                </li>

            </ul>

        </div>

    </div>
</nav>

<section class="hero">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<h1>
Membangun Masa Depan Anak Melalui Teknologi
</h1>

<p class="mt-4 mb-4">
Educa Studio adalah perusahaan pengembang aplikasi dan game edukasi
yang membantu anak-anak belajar dengan cara yang menyenangkan.
</p>

<a href="/about-us" class="btn-custom">
Pelajari Lebih Lanjut
</a>

</div>

<div class="col-lg-6 text-center">

<img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=700"
class="img-fluid rounded-4 shadow-lg">

</div>

</div>

</div>

</section>

<div class="container pb-5">

<div class="row g-4">

<div class="col-md-3">

<div class="card card-feature p-4 text-center h-100">

<div class="icon">🎮</div>

<h4 class="mt-3">Products</h4>

<p>Berbagai aplikasi dan game edukasi terbaik untuk anak.</p>

</div>

</div>

<div class="col-md-3">

<div class="card card-feature p-4 text-center h-100">

<div class="icon">📰</div>

<h4 class="mt-3">News</h4>

<p>Informasi terbaru mengenai kegiatan dan perkembangan perusahaan.</p>

</div>

</div>

<div class="col-md-3">

<div class="card card-feature p-4 text-center h-100">

<div class="icon">💼</div>

<h4 class="mt-3">Program</h4>

<p>Program Karir, Magang, dan Kunjungan Industri.</p>

</div>

</div>

<div class="col-md-3">

<div class="card card-feature p-4 text-center h-100">

<div class="icon">🏢</div>

<h4 class="mt-3">About Us</h4>

<p>Mengenal lebih dekat perusahaan Educa Studio.</p>

</div>

</div>

</div>

</div>

<footer>

<h5>Educa Studio Company Profile</h5>

<p>© 2026 - Laravel Framework | Dibuat untuk Tugas Praktikum</p>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>