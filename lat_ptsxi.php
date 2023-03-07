<?php 
    $jam_kerja = "";

    if( $jam_kerja >8){
        echo "Mendapat gaji lembur";
    }

    else{
        echo "Tidak mendapat gaji lembur";
    }
?>
<br>
<?php 
    $kelas_nasabah = "kelas 2";

    if( $kelas_nasabah == "kelas vip"){
        echo "Mendapatkan kartu atm, buku tabungan, akses M-Banking dan menjadi prioritas";
    }

    else if( $kelas_nasabah == "kelas 1"){
        echo "Mendapatkan kartu atm, akses M-Banking dan buku tabungan";
    }

    else{
        echo "Mendapatkan kartu atm dan buku tabungan";
    }
?>
<br>
<?php 
    for( $i=21; $i<=30; $i++){
        echo "$i";
        echo ",";
    }
?>
<br>
<?php 
    for($i=3; $i<=60; $i+=3){
        echo "$i";
        echo ",";
    }
?>
<br>
<?php 
    $PERUSAHAAN = ["Toyota", "Daihatsu", "Honda", "Ford", "Ferari"];
    echo $PERUSAHAAN[4]."<br>";
    echo $PERUSAHAAN[1]." dan ".$PERUSAHAAN[2];

?>