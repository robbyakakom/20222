File proses <hr>
<?php
    $nilai_1 = $_POST['angka_1'] ;
    $nilai_2 = $_POST['angka_2'] ;
    $jumlah = $nilai_1 + $nilai_2 ;
    $rata_rata = $jumlah / 2 ;
    echo "Nilai 1 Anda " . $nilai_1 . "<br>" ;
    echo "Nilai 2 Anda " . $nilai_2 . "<br>" ;
    echo "Jumlah Nilai Anda " . $jumlah . "<br>" ;
    echo "Rata-rata Nilai Anda " . $rata_rata . "<br>" ;
?>
