<?php

include 'config.php';

error_reporting(0);

session_start();

$status = '';
$message = '';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        
        $status = 'success';
        $message = 'Tautan reset kata sandi telah dikirim ke email Anda.';
    } else {
        $status = 'error';
        $message = 'Email tidak ditemukan.';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset_password.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="title-section">
                <h2 class="title">Reset Password</h2>
                <p class="para">Silahkan Cek Tautan Yang Dikirim Melalui Email Yang Terkait. Klik Tautan & Buat Kata Sandi Baru Anda
                </p>
            </div>

            <form action="" method="POST" class="form">
                <div class="input-group">
                    <label for="" class="label-title">Masukan Email Anda</label>
                    <input type="email" name="email" placeholder="Masukan Email" required>
                    <span class="icon">&#9993;</span>
                </div>

                <div class="input-group">
                    <button class="submit-btn" name="submit" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var status = "<?php echo $status; ?>";
            var message = "<?php echo $message; ?>";
            if (status === 'success') {
                swal({
                    title: "Berhasil",
                    text: message,
                    icon: "success",
                });
            } else if (status === 'error') {
                swal({
                    title: "Gagal",
                    text: message,
                    icon: "error",
                });
            }
        });
    </script>
</body>
</html>
