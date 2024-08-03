<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Home Page</title>
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
            </div>

            <!-- search -->
            <div class="nav-right">
                <div class="search-bar">
                    <input type="text" id="search-input" placeholder="Cari menu . . .">
                    <button id="clear-btn"><i data-feather="x-circle"></i></button>
                    <button id="search-btn"><i data-feather="search"></i></button>
                </div>
            </div>
            <!-- search end -->
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
    </header> 
    <main>

        <!-- home -->
        <section class="home-section">
        <div class="content-left">
            <h1 class="animated-text">Selamat<br>Datang Di<br>The <span>Pancong</span>.</h1>
            <p class="animated-text">Selamat datang di website The Pancong. Di sini, Anda dapat menemukan produk terbaik kami dan ulasan dari pelanggan kami.</p>
            <!-- BUTTON LOGIN DAN REGIS  -->
            <!-- <?php if (!isset($_SESSION['username'])): ?>
                <a href="login.php" class="login-btn">Login</a>
                <a href="register.php" class="register-btn">Register</a>
            <?php endif; ?> -->
            <!-- BUTTON LOGIN DAN REGIS  -->
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

        <!-- icon sosmed top -->
        <div class="social-icons">

                </div>
        <!-- icon sosmed top end -->
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
        <h1>Menu <span>The Pancong</span></h1>            
        <div class="shop">
            <img src="images/shop.png" alt="Shop Icon">
            <span class="quantity">0</span>
        </div>
    </div>
        <div class="list">
            <?php foreach ($filteredProducts as $product): ?>
                <div class="item">
                    <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                    <div class="title"><?php echo $product['name']; ?></div>
                    <div class="price">Rp <?php echo number_format($product['price']); ?></div>
                    <button onclick="addToCart(<?php echo $product['id']; ?>)">Tambahkan ke Keranjang</button>
                </div>
            <?php endforeach; ?>
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
                    <h1>Kontak</h1>
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
        <div class="social-icons">
            <h4>Ikuti Kami</h4>
            <div class="icons">
                <a href="https://www.instagram.com/rrynnnnnnn_/" target="_blank" class="icon"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="http://tiktok.com/@rynnnnnnn_0/" target="_blank" class="icon"><ion-icon name="logo-tiktok"></ion-icon></a>
                <a href="https://wa.me/6285691" target="_blank" class="icon"><ion-icon name="logo-whatsapp"></ion-icon></a>
                <a href="https://youtube.com" target="_blank" class="icon"><ion-icon name="logo-youtube"></ion-icon></a>
            </div>
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

        <!-- kontak end -->
    </main>
    <!-- javascript -->
    
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

    <!-- produk js -->
     <script src="product.js"></script>
    <!-- produk js end -->

    <!-- icon kontak -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- icon kontak end -->

    <script>
        document.getElementById("search-btn").addEventListener('click', function() {
            var searchQuery = document.getElementById("search-input").value.toLowerCase();
            if (searchQuery) {
                searchProducts(searchQuery);
            }
        });

        function searchProducts(query) {
            const allItems = document.querySelectorAll('.list .item');
            let found = false;

            allItems.forEach(item => {
                const title = item.querySelector('.title').textContent.toLowerCase();
                if (title.includes(query)) {
                    item.style.display = 'block'; // Tampilkan jika sesuai
                    found = true;
                } else {
                    item.style.display = 'none'; // Sembunyikan jika tidak sesuai
                }
            });

            if (!found) {
                Swal.fire({
                    icon: 'error',
                    title: 'Menu Tidak Ditemukan',
                    text: 'Menu yang Anda cari tidak tersedia atau stok sedang habis.',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'custom-btn' // Kelas kustom untuk tombol
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'product.php'; // Redirect ke product.php
                    }
                });
            }
        }
    </script>

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
