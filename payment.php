<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <style>
        /* ... your existing styles ... */
    </style>
</head>
<body>

<div class="container">

    <div class="section billing">
        <h3 class="title">Alamat Penagihan</h3>
        <form action="payment.php" method="POST" id="paymentForm">
            <div class="inputBox">
                <span>Nama Lengkap:</span>
                <input type="text" name="fullName" id="fullName" placeholder="Masukkan Nama Anda" required>
            </div>
            <div class="inputBox">
                <span>Email:</span>
                <input type="email" name="email" id="email" placeholder="Masukkan Email Anda" required>
            </div>
            <div class="inputBox">
                <span>Alamat:</span>
                <input type="text" name="address" id="address" placeholder="Masukkan Alamat" required>
            </div>
            <div class="inputBox">
                <span>Kota:</span>
                <input type="text" name="city" id="city" placeholder="Masukkan Kota Anda" required>
            </div>
            <div class="flex">
                <div class="inputBox">
                    <span>Provinsi:</span>
                    <input type="text" name="state" id="state" placeholder="Negara" required>
                </div>
                <div class="inputBox">
                    <span>Kode Pos:</span>
                    <input type="text" name="code" id="code" placeholder="123 456" required>
                </div>
            </div>
            <div class="section payment">
                <h3 class="title">Pembayaran</h3>
                <div class="paymentMethods">
                    <button type="submit" name="paymentMethod" value="QRIS" class="checkout">QRIS</button>
                    <button type="submit" name="paymentMethod" value="Dana" class="checkout">Dana</button>
                    <button type="submit" name="paymentMethod" value="ShopeePay" class="checkout">ShopeePay</button>
                    <button type="submit" name="paymentMethod" value="GoPay" class="checkout">GoPay</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // ... your existing JavaScript code ...
</script>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $code = $_POST['code'];
    $paymentMethod = $_POST['paymentMethod'];

    // Simpan data ke database atau lakukan pemrosesan lainnya

    switch ($paymentMethod) {
        case 'QRIS':
            header("Location: qris_form.php");
            break;
        case 'Dana':
            header("Location: dana_form.php");
            break;
        case 'ShopeePay':
            header("Location: shopeepay_form.php");
            break;
        case 'GoPay':
            header("Location: gopay_form.php");
            break;
        default:
            // Tampilkan pesan error
            echo "<script>
                    Swal.fire({
                        title: 'Error',
                        text: 'Metode pembayaran tidak valid.',
                        icon: 'error',
                        confirmButtonText: 'OK',
                        customClass: {
                            title: 'swal-title',
                            text: 'swal-text',
                            confirmButton: 'swal-button'
                        },
                        backdrop: 'rgba(0, 0, 0, 0.6)'
                    });
                  </script>";
            break;
    }
}
?>
