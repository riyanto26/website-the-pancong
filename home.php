<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Home Page</title>
</head>
<body>
    <header>
        <!-- logo -->
        <div class="logo">
            <a href="#"><img src="images/logo-pancong.png" alt="Logo"></a>
        </div>

        <!-- navbar -->
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
        <!-- navbar end -->

        <!-- produk -->
        <div class="card">
            <h1>Keranjang</h1>
            <ul class="listCard"></ul>
            <div class="checkOut">
                <div class="total">0</div>
                <div class="closeShopping">Tutup</div>
            </div>
        <!-- produk end -->

        <!-- php -->
        <?php if (!isset($_SESSION['username'])): ?>
            <a href="login.php" class="login-btn">Login</a>
            <a href="register.php" class="register-btn">Register</a>
        <?php endif; ?>

    </header> 
    <main>

        <!-- home -->
        <section class="home-section">
        <div class="content-left">
            <h1 class="animated-text">Selamat<br>Datang Di<br>The <span>Pancong</span>.</h1>
            <p class="animated-text">Selamat datang di website The Pancong. Di sini, Anda dapat menemukan produk terbaik kami dan ulasan dari pelanggan kami.</p>
            <img src="/images/bg-home.png" alt="">
        </div>
        <!-- gambar slide -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/menu1.png" alt="Slide 1"></div>
                <div class="swiper-slide"><img src="images/menu2.png" alt="Slide 2"></div>
                <div class="swiper-slide"><img src="images/menu3.png" alt="Slide 3"></div>
                <div class="swiper-slide"><img src="images/menu4.png" alt="Slide 4"></div>
                <div class="swiper-slide"><img src="images/menu5.png" alt="Slide 5"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <!-- gambar slide end -->
        </section>
        <!-- home end -->

        <!-- tentang kami -->
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
        <!-- tentang kami end -->

        <!-- menu atau produk -->
        <div class="container">
            <div class="title">
                <h1>Menu <span> The Pancong</span></h1>            
            <div class="shop">
                <img src="images/shop.png" alt="Shop Icon">
                <span span class="quantity">0</span>
            </div>
            </div>
        <div class="list"></div>
        </div>
        </div>
        <!-- menu atau produk end -->

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
                <div class="social-icons">
                    <a href="https://www.instagram.com/rrynnnnnnn_/" target="_blank" class="icon"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="http://tiktok.com/@rynnnnnnn_0/" target="_blank" class="icon"><ion-icon name="logo-tiktok"></ion-icon></a>
                    <a href="https://wa.me/6285691" target="_blank" class="icon"><ion-icon name="logo-whatsapp"></ion-icon></a>
                    <a href="https://youtube.com" target="_blank" class="icon"><ion-icon name="logo-youtube"></ion-icon></a>
                </div>
            </div>
        </section>

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

            <!-- Maps -->
            <!-- <section class="maps-card">
                <h2>Lokasi Kami</h2>
                <div class="map-container"> -->
                    <!-- Ganti src dengan link Google Maps lokasi outlet Anda -->
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.106343104835!2d144.96315731582066!3d-37.81410797975154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c3b40c40b%3A0x5045675218ce690!2sVictoria%20Australia!5e0!3m2!1sen!2sin!4v1634187435486!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </section>
        </div> -->
        <!-- kontak end -->
    </main>
    <!-- javascript -->
    
    <!-- produk js -->
     <script src="product.js"></script>
    <!-- produk js end -->

    <!-- feather icons -->
    <script>
        feather.replace();
    </script>
    <!-- feather icons end -->

    <!-- icon kontak -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- icon kontak end -->

    <!-- swiper slide -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
        </script>
    <!-- swiper slide end -->

    <!-- javascript -->
</body>
</html>
