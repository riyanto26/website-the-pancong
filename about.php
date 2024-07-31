<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>About Page</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="home.php"><img src="images/logo-pancong.png" alt="Logo"></a>
        </div>
        <nav class="container-nav">
            <div class="nav-center">
                <a href="home.php">Home</a>
                <a href="home.php#about-section">Tentang Kami</a>
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
        <section class="about-content" id="about-section">
            <div class="about-card">
                <div class="about-text">
                    <h1>Tentang <span>The Pancong</span></h1>
                    <p>The Pancong adalah sebuah perusahaan yang berdedikasi untuk menghadirkan produk-produk terbaik kepada pelanggan kami. Dengan pengalaman bertahun-tahun di industri ini, kami berusaha untuk terus berinovasi dan menyediakan layanan terbaik.</p>
                    <p>Misi kami adalah untuk memuaskan setiap pelanggan dengan produk berkualitas tinggi dan layanan yang ramah. Kami percaya bahwa kepercayaan dan kepuasan pelanggan adalah kunci keberhasilan kami.</p>
                    <h2>Visi Kami</h2>
                    <p>Menjadi perusahaan terdepan dalam industri kuliner dengan terus berinovasi dan memberikan layanan terbaik kepada pelanggan kami.</p>
                    <h2>Misi Kami</h2>
                    <p>Memberikan produk dan layanan berkualitas tinggi yang memenuhi dan melampaui harapan pelanggan kami.</p>
                </div>
                <div class="about-image">
                    <img src="images/logo-pancong.png" alt="Creator Image">
                </div>
            </div>
        </section>
    </main>
    <script>
      feather.replace();
    </script>
</body>
</html>
