<?php 

//SUPERGLOBALS
//Variable global milik PHP
//Merupakan Array Associative 

//$_GET

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
        <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li>
                <a href="get2.php?gambar= <?= $mhs["gambar"]; ?>&nama= <?= $mhs["nama"]; ?>&nrp= <?= $mhs["nrp"]; ?>&email= <?= $mhs["email"]; ?>&jurusan= <?= $mhs["jurusan"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
        </ul>
    </body>
</html>