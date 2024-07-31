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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="home.php"><img src="images/logo-pancong.png" alt="Logo"></a>
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
        <div class="card">
        <h1>Keranjang</h1>
        <ul class="listCard"></ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Tutup</div>
        </div>
        </nav>
        <?php if (!isset($_SESSION['username'])): ?>
            <a href="login.php" class="login-btn">Login</a>
            <a href="register.php" class="register-btn">Register</a>
        <?php endif; ?>
    </header>
    <div class="container">
        <div class="title">
            <h1>Menu <span> The Pancong</span></h1>            
            <div class="shop">
                        <img src="images/shop.png" alt="Shop Icon">
                        <span class="quantity">0</span>
            </div>
        </div>
        <div class="list"></div>
    </div>
    </div>
    <script>
      feather.replace();
    </script>
    <script src="product.js"></script>
</body>
</html>
