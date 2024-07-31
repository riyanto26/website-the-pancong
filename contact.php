<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Contact Page</title>
</head>
<body>
    <header>
    <div class="logo">
                <a href="#"><img src="images/logo-pancong.png" alt="Logo"></a>
            </div>
        <nav class="container-nav">
            <div class="nav-center">
               <a href="home.php">Home</a>
                <a href="about.php">Tentang Kami</a>
                <a href="product.php">Produk</a>
                <a href="contact.php">Kontak</a>
                <a href="#" id="search"><i data-feather="search"></i></a>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><i class="fas fa-chevron-down"></i></button>
                <div class="dropdown-content">
                    <a href="profile.php">Profile</a>
                    <a href="faq.php">FAQ</a>
                    <a href="logout.php">Log Out</a>
                </div>
            </div>
        </nav>
        <?php if (!isset($_SESSION['username'])): ?>
                <a href="login.php" class="login-btn">Login</a>
                <a href="register.php" class="register-btn">Register</a>
            <?php endif; ?>
    </header>
    <main>
        <h1 class="title-contact">Kontak <span>The Pancong</span></h1>
        <div class="contact-section">
            <!-- Form Contact -->
            <section class="contact-form-card">
                <h2>Hubungi Kami</h2>
                <form method="POST" action="contact_process.php">
                    <label for="nama">Nama:</label>
                    <input type="text"  placeholder="Masukan nama lengkap" id="nama" name="nama" required>

                    <label for="email">Email:</label>
                    <input type="email"  placeholder="example@gmail.com" id="email" name="email" required>

                    <label for="pesan">Pesan:</label>
                    <textarea id="pesan"  placeholder="Masukan pesan disini" name="pesan" rows="6" required></textarea>

                    <button type="submit">Kirim Pesan</button>
                </form>
            </section>

            <!-- Maps -->
            <section class="maps-card">
                <h2>Lokasi Kami</h2>
                <div class="map-container">
                    <!-- Ganti src dengan link Google Maps lokasi outlet Anda -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.106343104835!2d144.96315731582066!3d-37.81410797975154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c3b40c40b%3A0x5045675218ce690!2sVictoria%20Australia!5e0!3m2!1sen!2sin!4v1634187435486!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="footer-content">
            <div>
                <h4>Kontak Kami</h4>
                <p>Email: contact@thepancong.com</p>
                <p>Telepon: +62 123 456 789</p>
            </div>
            <div>
                <h4>Link Penting</h4>
                <a href="home.php">Home</a>
                <a href="about.php">Tentang Kami</a>
                <a href="product.php">Produk</a>
                <a href="contact.php">Kontak</a>
            </div>
            <div>
                <h4>Ikuti Kami</h4>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2024 The Pancong. All rights reserved.
        </div>
    </footer>
    <script>
      feather.replace();
    </script>
</body>
</html>
