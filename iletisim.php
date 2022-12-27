<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\proje\PHPMailer-master\src/Exception.php';
require 'C:\xampp\htdocs\proje\PHPMailer-master\src/PHPMailer.php';
require 'C:\xampp\htdocs\proje\PHPMailer-master\src/SMTP.php';
$hata = false;
$gonder = false;
//Gönderme işleminin mevcut olup olmadığını kontrol ediyoruz.
if( isset($_POST["islem"]) && $_POST["islem"]=="gonder" ) {
	
	//Formdan gelen verilerin eksiksiz olup olmadığını kontrol ediyoruz.
	if( !empty($_POST["adsoyad"]) && !empty($_POST["email"])  && !empty($_POST["mesaj"]) ) {
		
		
		
		//Ayarlar (Bu ayarlar için gerekli bilgiler kullandığınız sunucuya göre değişebilir.)
		$mail = new PHPMailer();
		$mail->isSMTP();										//SMTP Aktif
		//$mail->SMTPDebug = 1;  //Hata Gösterimi Aktif
		//$mail->SMTPSecure = 'tls';  //TLS Aktif
		$mail->SMTPAuth   = true;  //SMTP Kimlik Doğrulaması Aktif
		$mail->Host       = 'smtp.gmail.com';  //SMTP Host
		$mail->Username   = 'omrygt1907@gmail.com';	 //SMTP Kullanıcı Adınız
		$mail->Password   = 'zfmuapbaaupokege';	 //SMTP Şifreniz
		$mail->Port       = 587;  //SMTP Portu
		$mail->setFrom('omrygt1907@gmail.com', 'Gönderen Adı');  //Mailin Kimden Gönderildiği
		$mail->addAddress('omer_yigit27@hotmail.com', 'Alıcı Adı');	//Mailin Gönderileceği Adres (Buraya formdan gelen mesajın gönderileceği mail adresini giriniz.)
		
		//HTML Aktif
		$mail->isHTML(true);
		$mail->CharSet ="utf-8";
		//Mail Başlığı
		$mail->Subject = 'İletişim Formu Mesajı';
		//Mail İçeriği
		$mail->Body    = '<p><strong>Gönderen:</strong> ' . $_POST["adsoyad"] . ' - ' . $_POST["email"] . '</p>'.
		'<p><strong>Mesaj:</strong> ' . $_POST["mesaj"] . '</p>';

		//Gönder
		if ( $mail->send() ) {
			$gonder = true;
		} else {
			$hata = true;
			$hata_mesaj = "Mesaj gönderilirken bir hata oluştu: ".$mail->ErrorInfo;
		}
	} else {
		$hata = true;
		$hata_mesaj = "Lütfen tüm alanları doldurun.";
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <title>ESKİMEYENLER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="iletisim.css">
    <script src="https://kit.fontawesome.com/d755b7edb1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    

    <title>Eskimeyenler</title>
    <style>
        .bg-soft-black{
            background-color: #00000099;
        }
    </style>
        </head>
        <body>
            <nav class="navbar navbar-dark bg-soft-black navbar-expand-lg text-white sticky-top">
            <div class="container py-2">
                <a href="anasayfa.html" class="navbar-brand">Eskimeyenler</a>
    
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-eskimeyenler" aria-controls="navbar-eskimeyenler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="#navbar-eskimeyenler">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item px-3">
                            <a href="arama.php" class="nav-link text-white">Ara</a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="anasayfa.html" class="nav-link text-white">Anasayfa</a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="seksenler.html" class="nav-link text-white">80's</a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="doksanlar.html" class="nav-link text-white">90's</a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="ikibinler.html" class="nav-link text-white">2000's</a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="iletisim.php" class="nav-link text-white">İletişim</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
            <section id="contact">
                <div class="container">
                    <h1 class="title">Bizimle iletişime geçin</h1>
                    <?php if ($gonder) { ?>
		            <div class="alert alert-success">Mesajınız başarıyla gönderildi.</div>
		            <?php } ?>
		
		            <?php if ($hata) { ?>
		            <div class="alert alert-warning"><?php echo $hata_mesaj; ?></div>
		            <?php } ?>
                    <div class="contact-area">
                        <div class="cont-left">
                            <div class="cont-top">
                                <div class="cont-element">
                                    <i class="far fa-address-card"></i>
                                    <address>Elazığ / Türkiye</address>
                                </div>
                                <div class="cont-element">
                                    <i class="far fa-envelope"></i>
                                    <a href="mailto:mustafasenlik@fakemail.com">mustafasenlik@fakemail.com</a>
                                </div>
                                <div class="cont-element">
                                    <i class="fas fa-phone-alt"></i>
                                    <a href="tel:+1234567890">123-456-7890</a>
                                </div>
                            </div>
                            <div class="cont-bottom">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> 
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a> 
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a> 
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> 
                            </div>
                        </div>
                        <div class="cont-right">
                        <form method="POST" action="">                                
                                <input type="text" name="adsoyad" id="adsoyad" placeholder="Ad Soyad">
                                <input type="email" name="email" id="email" placeholder="Mail Adresiniz">
                                <textarea name="mesaj" id="mesaj" rows="10" placeholder="Mesajınız"></textarea>
                                <input type="hidden" name="islem" value="gonder" required>
			                    <button type="submit">Gönder</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="bg-dark py-5">
                <div class="container text-white">
                    <div class="row">
                        <div class="col-md-2"><h3><b>Eskimeyenler</b></h3></div>
                        <div class="col-md-2">
                            <ul class="list-unstyled">
                                <li class="text-muted mb-3"></li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul class="list-unstyled">
                                <li class="text-muted mb-3"></li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul class="list-unstyled">
                                <li class="text-muted mb-3"></li>
                            </ul>
                        </div>
                        <div class="col-md-4 text-right">
                            <i class="fa-brands fa-facebook-f fa-2x mx-3"></i>
                            <i class="fa-brands fa-twitter fa-2x mx-3"></i>
                            <i class="fa-brands fa-instagram fa-2x mx-3"></i>
                        </div>
                        <p class="mt-4 ml-auto text-right"><small>Türkiye<br> Eskimeyenler TR</small></p>
                    </div>
                </div>
        
            </footer>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </body>
        </html>