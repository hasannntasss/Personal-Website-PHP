<?php

    $vt_sunucu="";
    $vt_kullanici="";
    $vt_sifre="";
    $vt_adi="";

    $baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);
    
    if(!$baglan)
    {
        die("Veritabanına bağlanılamadı".mysqli_connect_error());
    }


?>