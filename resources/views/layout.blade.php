<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DAN Master | @yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="/img/logo-minimal-1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/mobile.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>

    <header class="header sticky-top">
        <div class="row align-items-center header-row">
            <div class="col-lg-2 header-logo-container">
                <a href="/"><img src="/img/logo.png" alt=""></a>
            </div>
            <div class="col-lg-10 header-link-container">
                <ul>
                    <li><a href="/">Principală</a></li>
                    <li><a href="/catalog">Catalog de Produse</a></li>
                    <li><a href="/#despre-noi">Despre Noi</a></li>
                    <li><a href="/#produse-recomandate">Produse Recomandate</a></li>
                    <li><a href="/#avantajele-noastre">Avantajele noastre</a></li>
                    <li><a href="/#contacte">Contacte</a></li>
                </ul>
            </div>
        </div>
    </header>

    <header class="sticky-top header-mobile">
        <div class="header-logo-container-mobile">
            <a href="/"><img src="/img/logo.png" alt=""></a>
        </div>
        <div class="header-link-mobile">
            <div class="dropdown">
                <a class="btn" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a href="/">Principală</a></li>
                    <li><a href="/catalog">Catalog de Produse</a></li>
                    <li><a href="/#despre-noi">Despre Noi</a></li>
                    <li><a href="/#produse-recomandate">Produse Recomandate</a></li>
                    <li><a href="/#avantajele-noastre">Avantajele noastre</a></li>
                    <li><a href="/#contacte">Contacte</a></li>
                </ul>
              </div>
        </div>
    </header>

    @include('messages')

    @yield('main_content_block')

    <footer class="footer">
        <div class="row align-items-center">
            <div class="footer-logo-container col-lg-3">
                <a href="/"><img src="/img/logo.png" alt=""></a>
            </div>
            <div class="footer-contact-container col-lg-6">
                <ul>
                    <li><a href="" class="icon-link-phone"><i class="fas fa-phone"></i></a></li>
                    <li><a href="" class="icon-link-viber"><i class="fab fa-viber"></i></a></li>
                    <li><a href="" class="icon-link-whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="" class="icon-link-facebook"><i class="fab fa-facebook"></i></a></li>
                </ul>
            </div>
            <div class="footer-copyright-container col-lg-3">
                <p>Site elaborat de:</p>
                <a href="https://moldstarter.md" target="_blank"><b>mold</b>starter</a>
            </div>
        </div>
    </footer>

</body>
</html>
