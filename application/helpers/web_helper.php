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