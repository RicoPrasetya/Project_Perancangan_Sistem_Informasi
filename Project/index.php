<?php include 'css_version.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>

<body class="user-index">
    <div class="user-header">
        <a href="index.php" class="nama-situs">
            <img src="image/logo-rs.png" alt="Logo" class="logo-situs"> sisfo rumah sakit
        </a>

        <div class="user-navbar-container">
            <a href="#" class="user-navbar">aaaaa</a>
            <a href="#" class="user-navbar">ssssss</a>
            <a href="#" class="user-navbar">cccccc</a>
            <a href="#" class="user-navbar">rrrrrr</a>
        </div>

        <div class="user-profile-dropdown">
            <div class="user-profile">
                <img src="image/logo-rs.png" alt="User Profile" class="profile-pic">
                <span class="user-name">Admin Sisfo</span>
                <i class="fas fa-caret-down"></i>
            </div>
            <div class="dropdown-content">
                <a href="#">Pengaturan</a>
                <a href="#">Logout</a>
            </div>
        </div>
    </div>
    <div class="flex-container">
        <div class="user-aside">
            <nav class="sidebar-nav">
                <a href="#" class="sidebar-link"><i class="fas fa-home"></i> Beranda</a>
                <a href="#" class="sidebar-link"><i class="fas fa-user"></i> Profil</a>
                <a href="#" class="sidebar-link"><i class="fas fa-hospital"></i> Layanan</a>
                <a href="#" class="sidebar-link"><i class="fas fa-calendar"></i> Jadwal</a>
                <a href="#" class="sidebar-link"><i class="fas fa-cog"></i> Pengaturan</a>
            </nav>
        </div>
        <div class="user-main">
            <!-- Section: Tentang Rumah Sakit -->
            <section class="about-hospital">
                <h2>Tentang Kami</h2>
                <p>Selamat datang di Sisfo Rumah Sakit, pusat layanan kesehatan terpercaya yang memberikan pelayanan medis terbaik bagi masyarakat. Dengan tim medis yang berpengalaman dan fasilitas modern, kami berkomitmen untuk menjaga kesehatan Anda dan keluarga.</p>
                <a href="#" class="btn-more">Pelajari Lebih Lanjut</a>
            </section>

            <!-- Section: Layanan Utama -->
            <section class="services">
                <h2>Layanan Utama</h2>
                <div class="service-list">
                    <div class="service-item">
                        <i class="fas fa-stethoscope"></i>
                        <h3>Konsultasi Dokter</h3>
                        <p>Layanan konsultasi dengan dokter spesialis yang siap memberikan solusi medis sesuai kebutuhan Anda.</p>
                    </div>
                    <div class="service-item">
                        <i class="fas fa-ambulance"></i>
                        <h3>Layanan Darurat</h3>
                        <p>Tersedia 24/7 untuk menangani keadaan darurat medis dengan cepat dan efektif.</p>
                    </div>
                    <div class="service-item">
                        <i class="fas fa-bed"></i>
                        <h3>Rawat Inap</h3>
                        <p>Fasilitas rawat inap modern dan nyaman untuk pemulihan optimal pasien.</p>
                    </div>
                    <div class="service-item">
                        <i class="fas fa-x-ray"></i>
                        <h3>Radiologi</h3>
                        <p>Peralatan radiologi terkini untuk diagnosa yang akurat dan cepat.</p>
                    </div>
                </div>
            </section>

            <!-- Section: Jadwal Dokter -->
            <section class="doctor-schedule">
                <h2>Jadwal Dokter</h2>
                <p>Temui dokter spesialis kami sesuai jadwal yang tersedia untuk mendapatkan perawatan terbaik.</p>
                <a href="#" class="btn-more">Lihat Jadwal Lengkap</a>
            </section>

            <!-- Section: Testimoni Pasien -->
            <section class="testimonials">
                <h2>Testimoni Pasien</h2>
                <div class="testimonial-list">
                    <div class="testimonial-item">
                        <p>"Pelayanan di Sisfo Rumah Sakit sangat cepat dan memuaskan. Saya merasa aman dan nyaman selama menjalani perawatan."</p>
                        <p><strong>- Budi Santoso</strong></p>
                    </div>
                    <div class="testimonial-item">
                        <p>"Dokter dan stafnya sangat ramah dan profesional. Saya sangat terbantu dengan layanan di sini."</p>
                        <p><strong>- Siti Aisyah</strong></p>
                    </div>
                </div>
            </section>

            <!-- Section: Kontak Darurat -->
            <section class="emergency-contact">
                <h2>Kontak Darurat</h2>
                <p>Dalam keadaan darurat, segera hubungi kami:</p>
                <p><i class="fas fa-phone"></i> +62 812 3456 7890 (Layanan Darurat 24/7)</p>
            </section>
        </div>

    </div>
    <div class="user-footer">
        <div class="footer-content">
            <div class="footer-left">
                <a href="index.php" class="footer-logo">
                    <img src="image/logo-rs.png" alt="Logo" class="footer-logo-img"> Sisfo Rumah Sakit
                </a>
                <p>&copy; 2024 Sisfo Rumah Sakit. All Rights Reserved.</p>
            </div>

            <div class="footer-center">
                <ul class="footer-nav">
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Kontak</a></li>
                    <li><a href="#">Kebijakan Privasi</a></li>
                    <li><a href="#">Syarat & Ketentuan</a></li>
                </ul>
            </div>

            <div class="footer-right">
                <p>Hubungi Kami:</p>
                <p><i class="fas fa-phone"></i> +62 812 3456 7890</p>
                <p><i class="fas fa-envelope"></i> info@sisfo-rumahsakit.com</p>
                <div class="footer-socials">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>