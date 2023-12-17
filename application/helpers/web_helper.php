<?php

function strtodash($string) {
    $url_friendly_string = url_title($string, 'dash', true);

    echo $url_friendly_string;
}

function rupiahK($angka)  {
    if ($angka >= 1000 && $angka < 1000000) {
        $hasil = number_format($angka / 1000, 0) . 'K';
    } elseif ($angka >= 1000000) {
        $hasil = number_format($angka / 1000000, 0) . 'M';
    } else {
        $hasil = $angka;
    }

    return $hasil;
}

function waktuTerakhir($waktuUnggah) {
    date_default_timezone_set('Asia/Jakarta'); 
      // Waktu saat ini
      $waktuSaatIni = time();

      // Menghitung selisih waktu
      $selisihWaktu = $waktuSaatIni - strtotime($waktuUnggah);

      // Menghitung selisih waktu dalam menit
      $selisihMenit = round($selisihWaktu / 60);

      if ($selisihMenit < 1) {
          return "Baru saja";
      } elseif ($selisihMenit < 5) {
          return "$selisihMenit menit yang lalu";
      } elseif ($selisihMenit < 10) {
          return "5 menit yang lalu";
      } elseif ($selisihMenit < 30) {
          return "10 menit yang lalu";
      } elseif ($selisihMenit < 60) {
          return "30 menit yang lalu";
      } elseif ($selisihMenit < 1440) { 
          return "1 jam yang lalu";
      } else {
          return "1 hari yang lalu";
      }
}