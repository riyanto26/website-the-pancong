<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Pembayaran QRIS</title>
</head>
<body>
<div class="container">
    <h2>Pembayaran QRIS</h2>
    <form action="process_payment.php" method="POST">
        <input type="hidden" name="paymentMethod" value="QRIS">
        <div class="inputBox">
            <span>Nomor HP:</span>
            <input type="text" name="phoneNumber" placeholder="Masukkan nomor HP Anda" required>
        </div>
        <div class="inputBox">
            <span>Jumlah Pembayaran:</span>
            <input type="text" name="amount" placeholder="Masukkan jumlah pembayaran" required>
        </div>
        <button type="submit" class="checkout">Bayar Sekarang</button>
    </form>
</div>
</body>
</html>
