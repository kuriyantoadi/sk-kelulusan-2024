<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
</head>
<body>
    <h1>QR Code</h1>
    <!-- Menampilkan gambar QR -->
    <img src="/assets/qr/<?php echo $qr_image; ?>" alt="QR Code">
    <img src=" <?= $qr_image ?>" alt="QR Code">
    <?= $qr_image ?>

</body>
</html>
