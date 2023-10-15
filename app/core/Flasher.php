<?php

class Flasher
{

    public static function setFlash($pesan, $aksi, $type)
    {
        $_SESSION['flash'] = [
            "pesan" => $pesan,
            "aksi" => $aksi,
            "type" => $type,
        ];
    }
    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            $img_url = BASEURL . "/assets/icons/close_white.png";
            $type =  $_SESSION['flash']['type'];
            $pesan = $_SESSION['flash']['pesan'];
            $aksi = $_SESSION['flash']['aksi'];
            if ($type == "success") {
                echo "<div class='bg-green-500/90 px-4 py-1 rounded-md text-xs flex justify-between'>
                <p>data $pesan $aksi</p>
                <img src='$img_url' alt='' class='w-4 h-4 cursor-pointer' id='close_flash'>
                </div>";
            } else {
                echo "<div class='bg-red-500/90 px-4 py-1 rounded-md text-xs flex justify-between'>
                <p>data $pesan $aksi</p>
                <img src='$img_url' alt='' class='w-4 h-4 cursor-pointer' id='close_flash'>
                </div>";
            }
            unset($_SESSION['flash']);
        }
    }
}
