<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Saya</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .section-title {
            margin-top: 30px;
            margin-bottom: 20px;
        }
        .resume-section {
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }
        .justify-text {
        text-align: justify;
        }
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
        .section-title {
            margin-top: 30px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutme.php">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="resume.php">Resume</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="portofolio.php">Portofolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontak.php">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- Resume Header -->
<header class="bg-light text-center py-5">
<img src="WOALA.jpg" alt="Foto Profil" class="profile-img">
    <h1 class="mt-3">Yurico Bagus Dwi Anggoro</h1>
    <p class="lead">IT TECH and Digital Artist</p>
</header>

<section class="container content text-center">
<h1>Resume Saya</h1>
<p class="lead">Rincian pengalaman dan pendidikan saya</p>
    </section>
<!-- Pengalaman Kerja -->
<section class="container resume-section">
    <h2 class="section-title">Pengalaman Kerja</h2>
    <div class="row">
        <div class="col-md-12">
            <h5>IT Helpdesk Support - Universitas Pembangunan Jaya</h5>
            <p><strong>Periode:</strong> Agustus 2024 - Sekarang</p>
            <?php
    include 'koneksi.php'; 

    // Query ngambil text
    $sql = "SELECT resumetext FROM resumees";
    $result = mysqli_query($koneksi, $sql); 

    if (mysqli_num_rows($result) > 0) {
        // bakal nampili textbya
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>" . $row['resumetext'] . "</p>"; 
        }
    }
    ?>
        </div>
        <div class="col-md-12">
            <h5>Magang IT Support - Universitas Pembangunan Jaya</h5>
            <p><strong>Periode:</strong> Juli 2023 - Des 2023</p>
            <?php
    include 'koneksi.php'; 

    // Query ngambil text
    $sql = "SELECT resumestec FROM resumees";
    $result = mysqli_query($koneksi, $sql); 

    if (mysqli_num_rows($result) > 0) {
        // bakal nampili textbya
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>" . $row['resumestec'] . "</p>"; 
        }
    }
    ?>
        </div>
    </div>
</section>

<!-- Pendidikan -->
<section class="container resume-section">
    <h2 class="section-title">Pendidikan</h2>
    <div class="row">
        <div class="col-md-12">
            <h5>Universitas Pembangunan Jaya</h5>
            <p><strong>Jurusan:</strong> Teknik Informatika</p>
            <p><strong>Periode:</strong> 2022 - 2025</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h5>SMKN 6 Tangerang Selatan</h5>
            <p><strong>Jurusan:</strong> RPL</p>
            <p><strong>Periode:</strong> 2019 - 2022</p>
        </div>
    </div>
</section>

<!-- Sertifikat -->
<section class="container resume-section">
    <h2 class="section-title">Sertifikat</h2>
    <div class="row">
        <div class="col-md-12">
            <h5>Intro To Programming</h5>
            <p><strong>Instansi:</strong> OneTwoCode Indonesia</p>
            <p><strong>Tanggal:</strong> Juni 2022</p>
            <p>Didapatkan setelah mengikuti program kursus intro to programming</p><br>
        </div>
        <div class="col-md-12">
            <h5>Sertifikat Uji Kompetensi</h5>
            <p><strong>Instansi:</strong> SMKN 6 Taangerang Selatan</p>
            <p><strong>Tanggal:</strong> Mei 2022</p>
            <p>Didapatkan setelah menyelesaikan Ujian Kompetensi</p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Yurico Bagus Dwi Anggoro.</p>
    <div>
        <a href="https://github.com/YuricoBagusDwiAnggoro" target="_blank" class="text-white me-3">
            <i class="fab fa-github"></i>
        </a>
        <a href="https://www.instagram.com/ricoanggoro69/" target="_blank" class="text-white me-3">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/in/yurico-bagus-dwi-anggoro-b9b070236/" target="_blank" class="text-white">
            <i class="fab fa-linkedin"></i>
        </a>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
