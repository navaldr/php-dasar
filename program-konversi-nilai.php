<?php
  // nilai yang akan dikonversi
  $nilai = 96;

  // konversi nilai ke nilai huruf
  if ($nilai >= 85 && $nilai <= 100) {
    $nilai_huruf = 'A';
  } elseif ($nilai >= 70 && $nilai <= 84) {
    $nilai_huruf = 'B';
  } elseif ($nilai >= 60 && $nilai < 70) {
    $nilai_huruf = 'C';
  } elseif ($nilai >= 50 && $nilai < 60) {
    $nilai_huruf = 'D';
  } else {
    $nilai_huruf = 'E';
  }

  // tampilkan hasil konversi
  echo "Nilai angka: " . $nilai . "<br>";
  echo "Nilai huruf: " . $nilai_huruf;
?>
