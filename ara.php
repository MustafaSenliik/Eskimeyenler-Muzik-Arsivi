<?php

error_reporting(E_ALL);
ini_set('dispplay_errors',1);

$kullanici ="root";
$sifre="";

try{
    $db=new PDO('mysql:host=localhost;dbname=kitaplar;charset=utf8',$kullanici,$sifre);
}catch(Exception $e){
    echo 'Hata : '.$e->getMessage();
}
$aranan = htmlspecialchars($_POST['aranan']);
$secenek = htmlspecialchars($_POST['sec']);

if(!empty($aranan) && $secenek==1){
    $sorgu = "SELECT*FROM bilgiler WHERE kitap LIKE :aranan";
    $sonuc = $db ->prepare($sorgu);
    $sonuc ->bindValue(":aranan",'%'.$aranan.'%');
    $sonuc ->execute();
}
else if(!empty($aranan) && $secenek==2){
    $sorgu = "SELECT*FROM bilgiler WHERE yazar LIKE :aranan";
    $sonuc = $db ->prepare($sorgu);
    $sonuc ->bindValue(":aranan",'%'.$aranan.'%');
    $sonuc ->execute();
}
else if(!empty($aranan) && $secenek==3){
    $sorgu = "SELECT*FROM bilgiler WHERE basimyili LIKE :aranan";
    $sonuc = $db ->prepare($sorgu);
    $sonuc ->bindValue(":aranan",'%'.$aranan.'%');
    $sonuc ->execute();
}
if($sonuc->rowCount()!=0){
    echo '<div class="alet alert-primary" role="alert">'.$sonuc->rowCount().' Sonuç Bulundu. </div>';
    foreach($sonuc as $key){
        echo'<div class="card my-3"><div class="card-header font-weight-bold">';
        echo $key['kitap'];
        echo '</div><div class="card-body"><h6>';
        echo $key['yazar'];
        echo'</h6><p class="card-text">';
        echo 'Yil : '.$key['basimyili'];
        echo '</p></div></div>'; 
    }
}else{
    echo '<div class="alet alert-warning" role="alert">Sonuc Yok...</div>';
}
    
?>