<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp',
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 465,
    'smtp_user' => 'tradeid.pf@gmail.com',  // Ganti dengan alamat email Gmail Anda
    'smtp_pass' => 'jjfocvjdtpqlwnti',   // Ganti dengan password Gmail Anda atau gunakan "App Password" jika menggunakan otentikasi dua faktor
    'smtp_crypto' => 'ssl',  // Gunakan 'ssl' jika port 465
    'mailtype' => 'html',
    'charset' => 'utf-8',
    'newline' => "\r\n",
);