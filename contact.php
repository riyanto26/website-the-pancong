<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Contact Page</title>
</head>
<body>
    <header>
        <!-- hamburger menu -->
        <!-- <div class="menu">
            <a href="javascript:void(0);" id="hamburger-menu"><i data-feather="menu"></i></a>
            <div id="dropdown-menu" class="dropdown-content">
                <a href="profile.php">Profil</a>
                <a href="logout.php">Log Out</a>
                <a href="faq.php">FAQ</a>
            </div>
        </div> -->
        <!-- hamburger menu end -->

    <div class="logo">
                <a href="#"><img src="images/logo-pancong.png" alt="Logo"></a>
            </div>
        <nav class="container-nav">
            <div class="nav-center">
               <a href="home.php">Home</a>
                <a href="about.php">Tentang Kami</a>
                <a href="product.php">Produk</a>
                <a href="contact.php">Kontak</a>
            </div>

            <div class="nav-right">
            <div class="search-bar">
                    <input type="text" placeholder="Cari menu . . ." id="search-input">
                    <button id="clear-btn"><i data-feather="x-circle"></i></button>
                    <button id="search-btn"><i data-feather="search"></i></button>
                </div>
            </div>
            </div>
        </nav>
        <!-- <?php if (!isset($_SESSION['username'])): ?>
                <a href="login.php" class="login-btn">Login</a>
                <a href="register.php" class="register-btn">Register</a>
            <?php endif; ?> -->
    </header>
    <main>
        <!-- kontak -->
        <section id="contact" class="contact-section">
            <div class="form-content">
                <form>
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" required placeholder="Riyanto Febrian">
                
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required placeholder="RiyantoFebrian@gmail.com">
                
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required placeholder="xxxxxxxx">
                
                    <label for="message">Pesan:</label>
                    <textarea id="message" name="message" rows="4" required placeholder="Masukan pesan . . . . ."></textarea>
                
                    <button type="submit">Kirim</button>
                </form>
            </div>

            <div class="info-content">
                <div class="title-contact">
                    <h1>Contact</h1>
                </div>
                <h2>Hubungi Kami</h2>
                <p>"Berikan pelayanan terbaik kepada pelanggan, karena kepuasan mereka adalah prioritas utama kami."</p>
                <h4>Alamat</h4>
                <p>Jl. Contoh Alamat No. 123, Kota Contoh, Negara Contoh</p>
                <h4>Nomor Telepon</h4>
                <p>(021) 123-4567</p>
                <h4>Email</h4>
                <p>contact@gmail.com</p>
            </div>
        </section>

        <!-- footer -->
        <footer>
        <div class="footer-content">
        <div class="logo-footer">
            <a href="#"><img src="images/logo-pancong.png" alt="Logo"></a>
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
        <div class="footer-center">
            <p>Created by <a href="https://www.instagram.com/rrynnnnnnn_/?next=%2F">Riyanto Febrian</a>. | &copy; 2024.</p>
        </div>
    </footer>
        <!-- footer end -->

        <script src="product.js"></script>

        <!-- hamburger menu -->
        <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();

        document.getElementById("hamburger-menu").onclick = function() {
            var menu = document.getElementById("dropdown-menu");
            if (menu.style.display === "block") {
                menu.style.display = "none";
            } else {
                menu.style.display = "block";
            }
        };
    </script>
    <!-- hamburger menu end -->

         <!-- search -->
<script>
    feather.replace();

    document.getElementById("hamburger-menu").onclick = function() {
        var menu = document.getElementById("dropdown-menu");
        if (menu.style.display === "block") {
            menu.style.display = "none";
        } else {
            menu.style.display = "block";
        }
    };

    document.getElementById("search-btn").onclick = function() {
        var searchQuery = document.getElementById("search-input").value;
        if (searchQuery) {
            window.location.href = 'search.php?q=' + searchQuery;
        }
    };
</script>
    <!-- search -->
</body>
</html>
