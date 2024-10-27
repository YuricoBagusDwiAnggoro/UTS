<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->\
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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

<!-- Header  -->
<header class="bg-light text-center py-5">
    <img src="WOALA.jpg" alt="Foto Profil" class="profile-img">
    <h1 class="mt-3">Yurico Bagus Dwi Anggoro</h1>
    <p class="lead">IT TECH and Digital Artist</p>
</header>

<!-- Tentang Saya-->
<section class="container content text-center">
    <h2 class="section-title text-center">Tentang Saya</h2>
    <?php
    include 'koneksi.php'; 

    // Query ngambil text
    $sql = "SELECT textnya FROM tentangsaya";
    $result = mysqli_query($koneksi, $sql); 

    if (mysqli_num_rows($result) > 0) {
        // bakal nampili textbya
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>" . $row['textnya'] . "</p>"; 
        }
    }
    ?>
</section>


<!-- Keahlian Section -->
<section class="container" id="skills">
    <h2 class="section-title text-center">Keahlian</h2>
    <div class="row text-center">
        <div class="col-md-4">
            <h3>MY SQL</h3>
            <p>Saya memiliki keahlian dalam manajemen database, termasuk desain, optimasi, dan pemeliharaan. Berpengalaman dalam menggunakan berbagai sistem manajemen basis data seperti MySQL untuk memastikan efisiensi, skalabilitas.</p>
        </div>
        <div class="col-md-4">
            <h3>IT Support</h3>
            <p>Saya adalah seorang IT Specialist dengan keahlian dalam pengelolaan dan pemeliharaan infrastruktur TI. Pengalaman saya mencakup instalasi dan konfigurasi sistem operasi, troubleshooting perangkat keras dan perangkat lunak, serta dukungan teknis baik onsite maupun remote</p>
        </div>
        <div class="col-md-4">
            <h3>Back End</h3>
            <p>berpengalaman dalam pengembangan aplikasi server-side dan manajemen database. Keahlian saya mencakup perancangan arsitektur yang scalable, implementasi API, serta optimasi performa aplikasi untuk memastikan efisiensi dan keandalan.</p>
        </div>
    </div>
</section>

<!-- Kontak Section -->
<section class="bg-light py-5" id="contact">
    <div class="container">
        <p class="text-center">Jika Bapak/Ibu ingin menghubungi saya, silakan melalui informasi di bawah ini:</p>
        <div class="row text-center">
            <div class="col-md-4">
                <h4>Email</h4>
                <p>yuricoanggoro6@gmail.com</p>
            </div>
            <div class="col-md-4">
                <h4></h4>
                <p></p>
            </div>
            <div class="col-md-4">
                <h4>Telepon</h4>
                <p>+6285783415937</p>
            </div>
            </div>
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



</body>
</html>
