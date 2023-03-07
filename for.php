A. Output Segitiga arah ke atas
Membuat Program Bintang Bentuk Segitiga dengan PHP
<?php
	$star=10;
	for( $a=$star;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo "&nbsp";
	}
	for($a1=$star;$a1>=$a;$a1--){
		echo"*";
	}
	echo"<br>";
	}
?>
B. Output setengah Segitiga arah ke atas sisi kiri
Membuat Program Bintang Bentuk Segitiga dengan PHP
<?php
	$star=10;
	for($a=$star;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($a1=$star;$a1>=$a;$a1--){
		echo"*";
	}
	echo"<br>";
	}
?>
Baca Juga: Tutorial Lengkap Cara Menggunakan Array pada Bahasa Pemrograman PHP

C. Output setengah Segitiga arah ke atas sisi kanan
Membuat Program Bintang Bentuk Segitiga dengan PHP
<?php
	$star=10;
	for($a=$star;$a>0;$a--){
	for($b=$star;$b>=$a;$b--){
		echo "*";
	}
	echo "<br>";
	}
?>
D. Output Segitiga arah ke bawah
Membuat Program Bintang Bentuk Segitiga dengan PHP
<?php
	$star=10;
	for($a=1; $a<=$star; $a++){
	for($b=1; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
?>
E. Output setengah Segitiga arah ke bawah sisi kiri
Membuat Program Bintang Bentuk Segitiga dengan PHP
<?php
	$star=10;
	for($a=1; $a<=$star; $a++){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
?>
F. Output setengah Segitiga arah ke bawah sisi kanan
Membuat Program Bintang Bentuk Segitiga dengan PHP
<?php
	$star=10;
	for($a=1; $a<=$star; $a++){
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
?>
G. Output kombinasi Segitiga pola Diamond atau Belah Ketupat
Membuat Program Bintang Bentuk Segitiga dengan PHP
<?php
	$star=10;
	for($a=1; $a<=$star; $a++){
	for($b=$star; $b>=$a; $b-=1){
		echo "&nbsp";
	}
	for($c=1; $c<=$a; $c++){
		echo "*";
	}
	echo "<br>";
	}
	for($a=1; $a<=$star; $a++){
	for($b=1; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
?>