<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" type="text/css" href="product.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            <a href="home.php"><img src="images/logo-pancong.png" alt="Logo"></a>
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
        <div class="card">
        <h1>Keranjang</h1>
        <ul class="listCard"></ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Tutup</div>
        </div>
        </nav>
        <!-- <?php if (!isset($_SESSION['username'])): ?>
            <a href="login.php" class="login-btn">Login</a>
            <a href="register.php" class="register-btn">Register</a>
        <?php endif; ?> -->
    </header>
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

    
</body>
</html>
