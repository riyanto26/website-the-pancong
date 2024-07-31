<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$status = '';
$message = '';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                $status = 'success';
                $message = 'Selamat Anda Berhasil Registrasi.';
            } else {
                $status = 'error';
                $message = 'Ups! Ada yang Salah.';
            }
        } else {
            $status = 'error';
            $message = 'Ups! Email sudah ada.';
        }
    } else {
        $status = 'error';
        $message = 'Kata Sandi Tidak Cocok.';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
    <div class="container">
        <h1 class="form-title">Registration</h1>
        <form action="" method="POST">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter Username" value="<?php echo isset($username) ? $username : ''; ?>" required>
                </div>
                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email" value="<?php echo isset($email) ? $email : ''; ?>" required>
                </div>
                <div class="user-input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>" required>
                </div>
                <div class="user-input-box">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="cpassword" placeholder="Confirm Password" value="<?php echo isset($_POST['cpassword']) ? $_POST['cpassword'] : ''; ?>" required>
                </div>
            </div>
            <div class="form-submit-btn">
                <button name="submit" class="btn">Register</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var status = "<?php echo $status; ?>";
            var message = "<?php echo $message; ?>";
            if (status === 'success') {
                swal({
                    title: "Registrasi Berhasil",
                    text: message,
                    icon: "success",
                }).then(() => {
                    window.location.href = 'login.php';
                });
            } else if (status === 'error') {
                swal({
                    title: "Registrasi Gagal",
                    text: message,
                    icon: "error",
                });
            }
        });
    </script>
</body>
</html>
