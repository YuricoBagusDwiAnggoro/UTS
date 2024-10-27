<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
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


<!-- bagan portooop -->
<!-- bagan porto -->
<section class="container content">
    <h2 class="section-title text-center">Portofolio Saya</h2>
    <div class="row text-center">
        <?php
        include 'koneksi.php';



        $sql = "SELECT id, gambar, judul, deskripsi FROM portofolio";
        $result = $koneksi->query($sql);

        // Tampilkan data portofolio
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-md-4 mb-4">';

                
                

                $gambarData = base64_encode($row['gambar']);
                
                echo '<img src="data:image/jpeg;base64,' . $gambarData . '" alt="' . $row["judul"] . '" class="img-fluid">';
                echo '<h3 class="mt-2">' . $row["judul"] . '</h3>';
                echo '<p>' . $row["deskripsi"] . '</p>';
                echo '</div>';
            }
          }
        ?>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
