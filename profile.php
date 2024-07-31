<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Include database connection
require_once 'config.php';

// Fetch user data from database
$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <title>Edit Profil</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="#"><img src="images/logo-pancong.png" alt="Logo"></a>
        </div>
        <nav class="container-nav">
            <div class="nav-center">
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="product.php">Product</a>
                <a href="contact.php">Contact</a>
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
        <div class="profile-section">
            <h2>Edit Profil</h2>
            <form method="POST" action="update_profile.php">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>" readonly>

                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?php echo $user['nama']; ?>" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required>

                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" rows="4"><?php echo $user['alamat']; ?></textarea>

                <label for="current_password">Kata Sandi Saat Ini:</label>
                <input type="password" id="current_password" name="current_password" required>

                <label for="new_password">Kata Sandi Baru:</label>
                <input type="password" id="new_password" name="new_password">

                <button type="submit">Perbarui Profil</button>
            </form>
        </div>
    </main>

    <!-- Footer -->
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
                <a href="about.php">About</a>
                <a href="product.php">Product</a>
                <a href="contact.php">Contact</a>
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
</body>
</html>
