<?php 
//cek apakah tidak ada data di $_GET
if( !isset($_GET["gambar"]) ||
    !isset($_GET["nama"]) || 
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ) {
    //redirect (memindahkan sebuah halaman ke halaman lain)
    header("Location: get.php");
    exit;
}
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
    
    <ul>
        <li>
            <img src="img/<?= $_GET["gambar"]; ?>">
        </li>   
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>

    <a href="get.php">Kembali ke Daftar</a>

</body>
</html>