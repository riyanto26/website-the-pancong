<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Pembayaran Dana</title>
</head>
<body>
<div class="container">
    <h2>Pembayaran Dana</h2>
    <form id="danaForm">
        <input type="hidden" name="paymentMethod" value="Dana">
        <div class="inputBox">
            <span>Jumlah Pembayaran:</span>
            <input type="text" id="amount" placeholder="Masukkan jumlah pembayaran" required>
        </div>
        <button type="button" class="checkout" onclick="payWithDana()">Bayar Sekarang</button>
    </form>
    <script>
        function payWithDana() {
            var amount = document.getElementById('amount').value;
            var danaUri = `dana://payment?amount=${amount}&reference=YOUR_REFERENCE`;
            window.location.href = danaUri;
        }
    </script>
</div>
</body>
</html>
