<?php
session_start();

create_image();

function create_image()
{
    // Menghasilkan Kode Acak
    $md5_hash =  md5(rand(0,999));
    $captcha = substr($md5_hash, 15,5);

    $_SESSION['captcha'] = $captcha;

    $width = 200;
    $height = 50;

    $image = ImageCreate($width, $height);

    // Warna
    $white = imagecolorallocate($image, 255, 255, 255);
    $black = imagecolorallocate($image, 0, 0, 0);
    $green = imagecolorallocate($image, 0, 255, 0);
    $brown = imagecolorallocate($image, 139, 69, 19);
    $orange = imagecolorallocate($image, 255, 69, 0);
    $grey = imagecolorallocate($image, 204, 204, 204);

    // Membuat latar belakang
    imagefill($image, 0, 0, $black);

    // Membuat noise
    for ($c = 0; $c < 1000; $c++) {
        $x = rand(0,$width-1);
        $y = rand(0,$height-1);
        imagesetpixel($image, $x, $y, 0x000000);
    }

    $x = rand(10,12);
    $y = rand(10,15);

    $angle = rand(-10,10);
    
    // Menambahkan teks ke dalam gambar
    $font = 'font.ttf';
    imagettftext($image, 20, $angle, 60, 35, $orange, $font, $captcha);

    // Menginformasikan browser ada file gambar jpeg akan datang
    header("Content-Type: image/jpeg");

    // Konversi gambar ke JPEG
    imagejpeg($image);
    // Membersihkan cache
    imagedestroy($image);
}