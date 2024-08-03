<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit;
}

$status = '';
$message = '';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']); 

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $status = 'success';
        $message = 'Selamat datang!';
    } else {
        $status = 'error';
        $message = 'Username atau password salah!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="" method="POST">
                <h1>Login</h1>
                <hr>
                <p>Silakan Login Atau Register Jika Kamu Belum Memiliki Akun</p>
                <label for="Email">Email</label>
                <input type="text" placeholder="example@gmail.com" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required>
                <label for="Password">Password</label>
                <input type="password" placeholder="Password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>" required>
                <div class="input-group">
                    <button name="submit" class="btn">Login</button>
                </div>
                <p>
                    <a href="reset_password.php" class="small-link">Lupa Kata Sandi?</a>
                    <a href="register.php" class="small-link">Belum Memiliki Akun?</a>
                </p>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var status = "<?php echo $status; ?>";
            var message = "<?php echo $message; ?>";
            if (status === 'success') {
                swal({
                    title: "Login Berhasil",
                    text: message,
                    icon: "success",
                    button: {
                        text: "OK",
                        className: "btn",
                        closeModal: true
                    },
                    className: "swal-theme"
                }).then(() => {
                    window.location.href = "home.php";
                });
            } else if (status === 'error') {
                swal({
                    title: "Login Gagal",
                    text: message,
                    icon: "error",
                    button: {
                        text: "OK",
                        className: "btn",
                        closeModal: true
                    },
                    className: "swal-theme"
                });
            }
        });
    </script>
</body>
</html>
