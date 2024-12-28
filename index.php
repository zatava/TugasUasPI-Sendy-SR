<?php
// Konfigurasi Database
$host = "localhost"; // Nama host
$user = "root"; // Username database
$password = ""; // Password database
$database = "identitas_diri"; // Nama database
// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $database);
// Cek koneksi
if ($conn->connect_error) {
die("Koneksi gagal: " . $conn->connect_error);
}
// Query untuk mengambil data dari tabel
$sql = "SELECT id, nama, jenis_kelamin, alamat, deskripsi, foto FROM users";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Portfolio</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-black">
<div class="container">
<a class="navbar-brand text-white" href="#">2203010012
    SENDY SEPTYAWAN RUDI
    TI-A</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-
target="#navbarNav">

<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
<ul class="navbar-nav">

<li class="nav-item"><a class="nav-link" href="#"><b>HOME</b></a></li>
<li class="nav-item"><a class="nav-link" href="#"><b>EDUCATION</b></a></li>
<li class="nav-item"><a class="nav-link" href="#"><b>PROJECT</b></a></li>
<li class="nav-item"><a class="nav-link" href="#"><b>CONTACT</b></a></li>
<li class="nav-item">
<button class="btn hire-btn"><b>Hire me</b></button>
</li>
</ul>
</div>
</div>
</nav>
<!-- Hero Section -->
<section class="hero-section">
<div class="container">
<div class="row align-items-center">
<!-- Hero Text -->
<?php while ($row = $result->fetch_assoc()): ?>
<div class="col-md-6 hero-content">
<h1><span>I’m</span> <br> <?= $row['nama'] ?></h1>
<!-- Tampilkan Deskripsi -->
<p class="my-3">
<?= $row['deskripsi'] ?>
</p>
<a href="#" class="btn btn-custom">Download CV</a>
</div>
<!-- Hero Image -->
<div class="col-md-6 text-center hero-image">
<img src="Editor/assets/images/<?= $row['foto'] ?>" alt="Foto" width="100">
<?php endwhile; ?>
</section>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</div>
 <!-- Education Section -->
 <section id="education">
    <h2>Education</h2>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Pendidikan</th>
          <th>Tahun</th>
          <th>Nama Sekolah / Kampus</th>
        </tr>
      </thead>
      <tbody id="education-table">
        <!-- Data akan diisi menggunakan JavaScript -->
      </tbody>
    </table>
  </section>
</div>
<!-- Project Section -->
<section id="project">
    <h2>Project</h2>
    <div class="project-grid" id="project-list">
      <!-- Data akan diisi menggunakan JavaScript -->
    </div>
  </section>
</div>
<div>  <!-- Contact Section -->
  <section id="contact">
    <h2>Contact</h2>
    <p>Address</p>
    <address>
      <strong>Email:</strong> sendysetyawan842@gmail.com<br>
      <strong>Phone:</strong> +628986762055<br>
      <strong>Address:</strong> Tasikmalaya City
    </address>
  </section>
</div>
<!-- Footer -->
<footer>
  </footer>

  <script>
    // Contoh Data Pendidikan
    const educationData = [
      { no: 1, pendidikan: "SMK", tahun: "2019", sekolah: "SMAKN 2 Kota Tasikmalaya" },
      { no: 2, pendidikan: "S1", tahun: "2022", sekolah: "Universitas Perjuangan" }
    ];

    // Contoh Data Project
    const projectData = [
      { image: "Editor/assets/images/Websekolah.jpg", title: "Membangun Web Unper", description: "Proyek membangun sistem web Unper.", link: "https://unper.ac.id" },
      { image: "Editor/assets/images/tugass portopolio.jpg", title: "Membuat Web Portofolio", description: "Portofolio pribadi berbasis web.", link: "#" },
      { image: "Editor/assets/images/mobile.jpeg",title: "Aplikasi Mobile ", description: "Sistem aplikasi Mobile Legends Bang Bang.", link: "https://www.mobilelegends.com" }
    ];
// Render Data Pendidikan
const educationTable = document.getElementById('education-table');
    educationData.forEach(item => {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${item.no}</td>
        <td>${item.pendidikan}</td>
        <td>${item.tahun}</td>
        <td>${item.sekolah}</td>
      `;
      educationTable.appendChild(row);
    });
    // Render Data Project
    const projectList = document.getElementById('project-list');
    projectData.forEach(project => {
      const projectCard = document.createElement('div');
      projectCard.classList.add('project-card');
      projectCard.innerHTML = `
        <img src="${project.image}" alt="${project.title}"
        <h3>${project.title}</h3>
        <p>${project.description}</p>
        <a href="${project.link}">View Project</a>
      `;
      projectList.appendChild(projectCard);
    });
  </script>
</html>