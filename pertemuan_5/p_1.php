<?php
// echo("Pemrograman Web Server Side") ;
// echo "<br>" ;
// print("Pemrograman Web Server Side") ;

// $a = "UNIVERSITAS" ;
// $b = "TEKNOLOGI" ;
// $C = "DIGITAL";
// $d = "INDONESIA" ;

// echo $a, $b, $C, $d ;

// $nim = "0999" ;
// $nama = "Marjuki" ;
// $umur = 22 ;

// printf("NIM adalah %s bernama %s dengan usia %d",$nim,$nama,$umur) ;

// $nim = "195410087" ;
// $nama = "Budi Budiman " ;
// $nama_kapital = strtoupper($nama) ;

// $angkatan = substr($nim,0,2) ;
// $jurusan = substr($nim,2,3) ;
// $no_reg = substr($nim,-4) ;
// echo "Angkatan Mahasiswa : ", ("20".$angkatan) ;
// echo "<br>" ;
// echo "Kode Jurusan : ", $jurusan ;
// echo "<br>" ;
// echo "Nomor Registrasi : ", $no_reg;
// echo "<br>" ;
// echo "Nama Mahasiswa : ", $nama_kapital ;

// $text = " Yogyakarta " ;
// $ulang = str_repeat(trim($text), 5);
// echo $ulang ;

// date_default_timezone_set("Asia/Jakarta");
// echo date("l, j F Y H:i:s") ;

// $tgl = "2000-06-20" ;
// echo date("l, j F Y H:i:s",strtotime($tgl)) ;

$harga = 876823400.5078 ;

echo "Rp. " . number_format($harga,2,",",".") ;


?>