<html>
<head>
    <title>Tampil Transaksi</title>
</head>
<body style="background-image:url(background.jpg)">
    <?php
    echo "<center>";
    echo "<font size = 8>";
    echo "<br>";
    echo "<b>Transaksi Baju</b>";
    echo "<br><b> Remaja Masjid</b></br>";
    echo "<hr>";
    echo "<table>";
    $baju=$_POST["baju"];
    $jumlah=$_POST["jumlah"];
    if($baju=="S")$harga=65000;
    if($baju=="M")$harga=70000;
    if($baju=="L")$harga=75000;
    if($baju=="XL")$harga=80000;
    if($baju=="XXL")$harga=85000;
    $totalbayar=$jumlah*$harga;
    echo "<tr><td> Ukuran Baju  : $baju <br>";
    echo "<tr><td>Harga : Rp. $harga <br>";
    echo "<tr><td> Jumlah : $jumlah <br>";
    echo "<tr><td colspan=3><hr>";
    echo "<tr><td>Total bayar    : Rp. $totalbayar";
    ?>
<br>
<br>
<br>
 <a href="tampilanawal.php">Kembali</a>
<form action = "tampilmodul1.php" method = "post">
<br>
<br>
<input type = "submit" value = "Selesai">
</body>
</html>