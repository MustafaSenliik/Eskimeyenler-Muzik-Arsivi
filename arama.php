<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <title>ESKİMEYENLER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .bg-soft-black{
            background-color: #00000099;
        }
    </style>
    <style type="text/css">
footer { position: absolute; bottom: 0; width: 100%; height: 180px; background-color: #f5f5f5; }
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
    <div class="container">
    <input class="form-control form-control-lg my-3" id="arama-cubugu" type="text" placeholder="En az 3 karakter ">
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
    <label class="custom-control-label" for="customRadioInline1">Şarkı</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
    <label class="custom-control-label" for="customRadioInline2">Sanatçı </label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
    <label class="custom-control-label" for="customRadioInline3">Yıl </label>
    </div>
    <div id="sonuclar" class="my-3"></div>
    </div>
    
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
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src=ara.js></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>s

  </body>
</html>