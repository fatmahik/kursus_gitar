<?php
include "koneksi.php";
$result = $conn->query("SELECT * FROM testimoni ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GuitarSpace - Kursus Gitar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
<div class="container">
<a class="navbar-brand d-flex align-items-center" href="#home">
<img src="assets/img/logo.svg" width="42" class="me-2">
<span>Guitar<span class="brand-orange">Space</span></span>
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav ms-auto">
<li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
<li class="nav-item"><a class="nav-link" href="#profil">Profil</a></li>
<li class="nav-item"><a class="nav-link" href="#kursus">Kursus</a></li>
<li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
<li class="nav-item"><a class="nav-link" href="#testimoni">Testimoni</a></li>
</ul>
<a href="#testimoni" class="btn btn-dark ms-lg-3">Beri Testimoni</a>
</div>
</div>
</nav>

<section id="home" class="hero">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<span class="hero-label">🎸 KURSUS GITAR PROFESIONAL</span>
<h1>Temukan Suaramu <span>Lewat Musik.</span></h1>
<p>Belajar gitar dari dasar hingga mahir dengan metode yang menyenangkan, praktis, dan mudah dipahami.</p>
<div class="hero-buttons">
<a href="#kursus" class="btn btn-orange">Lihat Kursus <i class="bi bi-arrow-right"></i></a>
<a href="#profil" class="btn btn-outline-dark">Tentang Kami</a>
</div>
</div>
<div class="col-lg-6">
<div class="hero-image">
<img src="https://images.unsplash.com/photo-1510915361894-db8b60106cb1?auto=format&fit=crop&w=1000&q=85" alt="Belajar gitar">
<div class="floating-card">
<div class="floating-icon"><i class="bi bi-music-note-beamed"></i></div>
<div><strong>Belajar Musik</strong><small>Jadi Lebih Seru</small></div>
</div>
</div>
</div>
</div>
</div>
</section>

<section id="profil" class="section">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 mb-4 mb-lg-0">
<img class="about-image" src="https://images.unsplash.com/photo-1525201548942-d8732f6617a0?auto=format&fit=crop&w=900&q=85" alt="Gitar">
</div>
<div class="col-lg-6 ps-lg-5">
<span class="section-label">TENTANG KAMI</span>
<h2>Belajar Gitar Dengan Cara Yang Menyenangkan</h2>
<p>GuitarSpace adalah tempat belajar gitar untuk siapa saja, mulai dari pemula yang baru pertama kali memegang gitar hingga kamu yang ingin meningkatkan kemampuan bermain musik.</p>
<p>Kami menggunakan metode pembelajaran yang santai, praktis, dan menyesuaikan kemampuan setiap peserta.</p>
<div class="row mt-4">
<div class="col-6"><div class="stat"><strong>100+</strong><span>Siswa Belajar</span></div></div>
<div class="col-6"><div class="stat"><strong>5+</strong><span>Tahun Pengalaman</span></div></div>
</div>
</div>
</div>
</div>
</section>

<section id="kursus" class="section section-soft">
<div class="container">
<div class="text-center section-heading">
<span class="section-label">PILIHAN KURSUS</span>
<h2>Pilih Kelas Sesuai Levelmu</h2>
<p>Materi dibuat bertahap agar kamu dapat belajar dengan nyaman dan tidak mudah bosan.</p>
</div>
<div class="row g-4">
<div class="col-md-4"><div class="course-card">
<div class="course-icon"><i class="bi bi-stars"></i></div>
<h3>Gitar Pemula</h3><p>Cocok untuk kamu yang baru mulai belajar gitar dari nol.</p>
<ul><li>Dasar-dasar gitar</li><li>Chord dasar</li><li>Strumming</li><li>Memainkan lagu sederhana</li></ul>
<div class="course-price">Rp150.000 <small>/ bulan</small></div>
</div></div>
<div class="col-md-4"><div class="course-card featured">
<div class="popular">PALING POPULER</div>
<div class="course-icon"><i class="bi bi-music-note-list"></i></div>
<h3>Gitar Intermediate</h3><p>Untuk kamu yang sudah menguasai dasar dan ingin berkembang.</p>
<ul><li>Chord lanjutan</li><li>Fingerstyle</li><li>Improvisasi</li><li>Teknik bermain lagu</li></ul>
<div class="course-price">Rp200.000 <small>/ bulan</small></div>
</div></div>
<div class="col-md-4"><div class="course-card">
<div class="course-icon"><i class="bi bi-mic"></i></div>
<h3>Gitar Performance</h3><p>Persiapkan dirimu untuk tampil percaya diri di depan banyak orang.</p>
<ul><li>Performance</li><li>Solo gitar</li><li>Stage confidence</li><li>Persiapan tampil</li></ul>
<div class="course-price">Rp250.000 <small>/ bulan</small></div>
</div></div>
</div>
</div>
</section>

<section id="galeri" class="section">
<div class="container">
<div class="text-center section-heading">
<span class="section-label">GALERI</span>
<h2>Suasana Belajar Kami</h2>
<p>Belajar musik tidak harus tegang. Nikmati prosesnya dan berkembang bersama.</p>
</div>
<div class="row g-3">
<div class="col-md-6"><img class="gallery-img large" src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?auto=format&fit=crop&w=1000&q=85" alt="Kelas gitar"></div>
<div class="col-md-3"><img class="gallery-img" src="https://images.unsplash.com/photo-1524368535928-5b5e00ddc76b?auto=format&fit=crop&w=700&q=85" alt="Musik"></div>
<div class="col-md-3"><img class="gallery-img" src="https://images.unsplash.com/photo-1524650359799-842906ca1c06?auto=format&fit=crop&w=700&q=85" alt="Gitar"></div>
</div>
</div>
</section>

<section id="testimoni" class="section section-soft">
<div class="container">
<div class="text-center section-heading">
<span class="section-label">TESTIMONI</span>
<h2>Kata Mereka Tentang Kami</h2>
<p>Bagikan pengalamanmu setelah mengikuti kursus.</p>
</div>

<div class="testimonial-form">
<h3>Bagikan Pengalamanmu 🎸</h3>
<form action="tambah.php" method="POST">
<div class="row">
<div class="col-md-4 mb-3">
<label>Nama</label>
<input type="text" name="nama" class="form-control" placeholder="Nama kamu" required>
</div>
<div class="col-md-8 mb-3">
<label>Testimoni</label>
<textarea name="pesan" class="form-control" rows="3" placeholder="Ceritakan pengalamanmu..." required></textarea>
</div>
</div>
<button class="btn btn-orange">Kirim Testimoni <i class="bi bi-send"></i></button>
</form>
</div>

<div class="row g-4 mt-4">
<?php if ($result->num_rows > 0): ?>
<?php while ($row = $result->fetch_assoc()): ?>
<div class="col-md-6">
<div class="testimonial-card">
<div class="testimonial-top">
<div class="avatar"><?= strtoupper(substr($row['nama'], 0, 1)); ?></div>
<div><h4><?= htmlspecialchars($row['nama']); ?></h4><small>Peserta Kursus</small></div>
</div>
<p>“<?= htmlspecialchars($row['pesan']); ?>”</p>
<div class="testimonial-actions">
<a href="edit.php?id=<?= $row['id']; ?>" class="btn-edit"><i class="bi bi-pencil"></i> Edit</a>
<a href="hapus.php?id=<?= $row['id']; ?>" class="btn-delete" onclick="return confirm('Yakin ingin menghapus testimoni ini?')"><i class="bi bi-trash"></i> Hapus</a>
</div>
</div>
</div>
<?php endwhile; ?>
<?php else: ?>
<div class="text-center">Belum ada testimoni.</div>
<?php endif; ?>
</div>
</div>
</section>

<footer>
<div class="container">
<div class="row">
<div class="col-md-6"><h3>Guitar<span>Space</span></h3><p>Tempat belajar gitar dengan cara yang santai, menyenangkan, dan praktis.</p></div>
<div class="col-md-6 text-md-end"><p>© 2026 GuitarSpace. All Rights Reserved.</p></div>
</div>
</div>
</footer>

<div class="whatsapp-wrapper">
<div class="whatsapp-popup" id="whatsappPopup">
<button class="popup-close" onclick="closeWhatsapp()">×</button>
<div class="popup-icon"><i class="bi bi-whatsapp"></i></div>
<strong>Butuh informasi?</strong>
<p>Yuk konsultasikan jadwal dan paket kursus gitar kamu.</p>
<a href="https://wa.me/629520361068?text=Halo%20GuitarSpace,%20saya%20ingin%20bertanya%20tentang%20kursus%20gitar." target="_blank" class="popup-button"><i class="bi bi-whatsapp"></i> Chat WhatsApp</a>
</div>
<button class="whatsapp-button" onclick="toggleWhatsapp()"><i class="bi bi-whatsapp"></i></button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>