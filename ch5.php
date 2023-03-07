<?php 
$siswa = [
    [
        "no" => "No",
        "nama" => "Nama",
        "kelas" => "Kelas",
        "alamat" => "Alamat"
    ],
    [
        "no" => "1",
        "nama" => "Joni Susanto",
        "kelas" => "XII TKR 2",
        "alamat" => "Pemaalng"
    ],
    [
        "no" => "2",
        "nama" => "Intan Ayu",
        "kelas" => "XII TB 1",
        "alamat" => "Brebes"
    ],
    [
        "no" => "3",
        "nama" => "Salma Karima",
        "kelas" => "XI RPL 3",
        "alamat" => "Batang"
    ]
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table border="1" cellspacing="0" cellpadding="10">
            <?php foreach( $siswa as $sw ) :?>
                <tbody>
                    <tr>
                        <td><?= $sw["no"];?></td>
                        <td><?= $sw["nama"];?></td>
                        <td><?= $sw["kelas"];?></td>
                        <td><?= $sw["alamat"];?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
        </table>
    </center>
</body>
</html>