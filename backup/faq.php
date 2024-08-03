<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="faq.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>FAQ - The Pancong</title>
</head>
<body>
    <header>
        <!-- hamburger menu -->
        <div class="menu">
            <a href="javascript:void(0);" id="hamburger-menu"><i data-feather="menu"></i></a>
            <div id="dropdown-menu" class="dropdown-content">
                <a href="profile.php">Profil</a>
                <a href="logout.php">Log Out</a>
                <a href="faq.php">FAQ</a>
            </div>
        </div>
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
                    <input type="text" placeholder="Cari..." id="search-input">
                    <button id="search-btn"><i data-feather="search"></i></button>
                </div>
            </div>
        </nav>
        <?php if (!isset($_SESSION['username'])): ?>
            <a href="login.php" class="login-btn">Login</a>
            <a href="register.php" class="register-btn">Register</a>
        <?php endif; ?>
    </header>

    <main>
        <section class="faq-section">
            <div class="container">
                <h1>FAQ</h1>
                <div class="faq-item">
                    <h2>Apa itu 'The Pancong'?</h2>
                    <p>'The Pancong' adalah restoran yang menyediakan berbagai jenis makanan tradisional Indonesia dengan cita rasa yang khas dan unik.</p>
                </div>
                <div class="faq-item">
                    <h2>Bagaimana cara memesan makanan di 'The Pancong'?</h2>
                    <p>Anda bisa memesan makanan secara langsung melalui website kami dengan mengunjungi halaman produk dan menambahkan makanan yang ingin dipesan ke dalam keranjang belanja.</p>
                </div>
                <div class="faq-item">
                    <h2>Metode pembayaran apa saja yang diterima?</h2>
                    <p>Kami menerima pembayaran melalui QRIS, Dana, ShopeePay, dan GoPay.</p>
                </div>
                <div class="faq-item">
                    <h2>Apakah 'The Pancong' menyediakan layanan pengiriman?</h2>
                    <p>Ya, kami menyediakan layanan pengiriman untuk area tertentu. Anda dapat mengecek ketersediaan layanan pengiriman dengan memasukkan alamat Anda saat melakukan pemesanan.</p>
                </div>
                <div class="faq-item">
                    <h2>Bagaimana cara menghubungi layanan pelanggan 'The Pancong'?</h2>
                    <p>Anda dapat menghubungi layanan pelanggan kami melalui email di contact@thepancong.com atau melalui telepon di +62 123 456 789.</p>
                </div>
                <div class="faq-item">
                    <h2>Apakah ada opsi vegetarian di menu 'The Pancong'?</h2>
                    <p>Ya, kami memiliki beberapa pilihan menu vegetarian yang dapat Anda pilih.</p>
                </div>
                <div class="faq-item">
                    <h2>Bagaimana cara memberikan ulasan tentang makanan di 'The Pancong'?</h2>
                    <p>Anda dapat memberikan ulasan tentang makanan kami melalui halaman review di situs web kami. Cukup pilih makanan yang ingin Anda ulas dan berikan rating serta komentar Anda.</p>
                </div>
                <div class="faq-item">
                    <h2>Apakah 'The Pancong' memiliki program loyalitas pelanggan?</h2>
                    <p>Ya, kami memiliki program loyalitas pelanggan di mana Anda bisa mendapatkan poin setiap kali melakukan pembelian. Poin tersebut bisa ditukarkan dengan diskon atau penawaran khusus.</p>
                </div>
                <div class="faq-item">
                    <h2>Bagaimana cara mendaftar untuk akun di 'The Pancong'?</h2>
                    <p>Anda bisa mendaftar untuk akun di 'The Pancong' dengan mengunjungi halaman registrasi dan mengisi formulir yang tersedia.</p>
                </div>
                <div class="faq-item">
                    <h2>Apa kebijakan pengembalian atau penukaran di 'The Pancong'?</h2>
                    <p>Kami memiliki kebijakan pengembalian dan penukaran untuk makanan yang tidak sesuai dengan pesanan atau mengalami kerusakan. Silakan hubungi layanan pelanggan kami untuk informasi lebih lanjut.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- footer -->
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
        <div class="footer-center">
            <p>Created by <a href="https://www.instagram.com/rrynnnnnnn_/?next=%2F">Riyanto Febrian</a>. | &copy; 2024.</p>
        </div>
    </footer>
    <!-- footer end -->

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

        document.getElementById("search-btn").onclick = function() {
            var searchQuery = document.getElementById("search-input").value;
            if (searchQuery) {
                window.location.href = 'search.php?q=' + searchQuery;
            }
        };
    </script>
</body>
</html>
