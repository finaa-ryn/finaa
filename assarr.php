<?php 

// Array Associative

$mahasiswa = [
    [
        "gambar" => "fina.png",
        "nama" => "Fina", 
        "nrp" => "00140010",
        "email" => "fina@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "gambar" => "riyani.png",
        "nama" => "Riyani",
        "nrp" => "00200500",
        "email" => "riyani@gmail.com",
        "jurusan" => "Teknik Industri"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Mahasiswa</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>

        <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
        <?php endforeach; ?>
    </body>
</html>