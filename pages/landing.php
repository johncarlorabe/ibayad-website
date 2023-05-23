<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iBayad Online Ventures</title>
    <link href="../assets/thirdparty/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/thirdparty/bootstrap-icons-1.9.1/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/local/css/ibayad-styling.css" rel="stylesheet">
    <link href="../assets/local/css/hover-animations.css" rel="stylesheet">
    <link href="../assets/local/css/svg-dividers.css" rel="stylesheet">
    <link href="../assets/thirdparty/animate.css" rel="stylesheet">
    <link href="../assets/local/css/logo-carousel.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/images/logo/ib-logo-only-white.png">

    <script src="../assets/thirdparty/jquery-3.7.0.min.js"></script>
    <script src="../assets/thirdparty/jquery.fittext.js"></script>
    <script src="../assets/thirdparty/jquery.lettering.js"></script>
    <script src="../assets/thirdparty/jquery.textillate.js"></script>
    <script src="../assets/thirdparty/isotope.pkgd.min.js"></script>
</head>
<body class="body-bg" style="overflow-x:hidden">
<script type="application/javascript">


    $(document).ready(function(){
        $('.tlt').textillate({
            loop:true,
            initialDelay:200,
            in: { effect: 'pulse', shuffle: true, delay: 50  } ,
            out: {effect: 'pulse', shuffle: true, delay: 500}
        });

        $('.ib-card-hover').hover(
            function() {
                $('.product-hvr-target').addClass('hvr-forward');
            },
            function() {
                $('.product-hvr-target').removeClass('hvr-forward');
            }
        );

        $('.grid').isotope({
            // options
            itemSelector: '.grid-item',
            layoutMode: 'fitRows'
        });
    });


</script>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: transparent">
    <div class="container-fluid">
        <a class="navbar-brand px-2" href="#">
            <img src="../assets/images/logo/ib-logo-w-text-black.png" alt="Bootstrap" height="45">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"> <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item hvr-underline-from-center">
                    <a class="nav-link" aria-current="page" href="#">Products</a>
                </li>
                <li class="nav-item hvr-underline-from-center">
                    <a class="nav-link" href="#">Partners</a>
                </li>
                <li class="nav-item hvr-underline-from-center">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item hvr-underline-from-center">
                    <a class="nav-link" href="#">Our company</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row d-flex h-100">
        <div class="col-md-5 text-white d-flex px-5" style="height: 90vh">
            <div class="row align-self-center mb-5 pb-5">
                <h1 class="text-black ib-font-semibold"><strong class="tlt" style="font-style: italic"><i>Transform</i></strong> the way you pay</h1>
                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="col">
                    <button type="button" class="btn btn-ib-main hvr-icon-forward">Learn more <i class="bi bi-arrow-right hvr-icon"></i></button>
                </div>
            </div>
        </div>
        <div class="col-md-7 d-none d-sm-block">
            <div class="row justify-content-center">
                <img src="../assets/images/page/landing.jpg" class="img-fluid" alt="...">
            </div>
        </div>
    </div>
</div>
<div class="row h-100 bg-dark" style="position: relative;">
    <div class="row">
        <div class="custom-shape-divider-top-1684836416">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="px-0" style="min-height: 150px"></div>
        <div class="col-md-3 bg-dark py-5 d-flex align-items-center">
            <div class="row mx-3 px-3">
                <h1 class="text-light ib-font-extrabold">Products</h1>
                <hr class="ib-landing-hr">
                <p class="text-light fs-5 mt-3">We intend to specifically cater to emerging markets, primarily in the Philippines but also other countries in the South East Asian region,<br>with a focus on the development and distribution of <strong>solb!</strong>, <strong>miLine</strong>, <strong>ElecTraNet Mgr MkII</strong></p>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row d-flex justify-content-between d-grid align-items-stretch py-5 px-5">
                <div class="col card mb-3 mx-3 px-0 ib-card ib-card-hover">
                    <div class="ib-card-img-top-radius" style="background: url('../assets/images/products/solb.jpg')">
                        <img src="../assets/images/products/solb-logo-200x200.png" class="product-hvr-target img-thumbnail rounded-circle my-3 ms-2 w-25 ib-shadow" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mt-3"><strong>solb!</strong></h5>
                        <p class="card-text text-start">An app based mobile point of sale (mPOS) and payment facilitating solution that utilizes the Philippines first, Bancnet approved, mobile card reader. solb! empowers ANY merchant, whether business or individual entrepreneur, with the ability to accept bank ATM cards, credit cards, debit cards, loyalty cards or any other type of card payment, any time, anywhere.</p>
                    </div>
                    <div class="card-footer bg-white border-top-0 mb-2">
                        <a class="product-hvr-target ib-link ib-font-bold" href="#" target="_blank">Learn More <i class="bi bi-arrow-right hvr-icon"></i></a>
                    </div>
                </div>
                <div class="col card mb-3 mx-3 px-0 ib-card">
                    <div class="ib-card-img-top-radius" style="background: url('../assets/images/products/miline.jpg')">
                        <img src="../assets/images/products/miLine-logo-200x200.png" class="img-thumbnail rounded-circle my-3 ms-2 w-25 ib-shadow" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mt-3"><strong>miLine</strong></h5>
                        <p class="card-text text-start">A mobile app and web based platform which gives access to an online ecosystem of products and services. miLine enables migrant workers to cost-effectively communicate and conveniently support and take care of their families and other beneficiaries needs, in their respective home countries.</p>
                    </div>
                    <div class="card-footer bg-white border-top-0 mb-2">
                        <a class="product-hvr-target ib-link ib-font-bold" href="#" target="_blank">Learn More <i class="bi bi-arrow-right hvr-icon"></i></a>
                    </div>
                </div>
                <div class="col card mb-3 mx-3 px-0 ib-card">
                    <div class="ib-card-img-top-radius" style="background: url('../assets/images/products/electra.jpg')">
                        <img src="../assets/images/products/ElecTraNet-logo-200x200.png" class="img-thumbnail rounded-circle my-3 ms-2 w-25 ib-shadow" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mt-3"><strong>ElecTraNet Mgr MkII</strong></h5>
                        <p class="card-text text-start">Electronic Transaction Network Manager is an infinitely flexible, mobile-optimized, multi-platform e-commerce solution. It is a powerful tool that gives enterprise users complete control over a multitude of financial transactions; a multi-pocket e-wallet, banking services, payment processing, electronic vouchers, and a loyalty rewards program all in one single, modular-designed platform.</p>
                    </div>
                    <div class="card-footer bg-white border-top-0 mb-2">
                        <a class="product-hvr-target ib-link ib-font-bold" href="#" target="_blank">Learn More <i class="bi bi-arrow-right hvr-icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-0" style="min-height: 150px"></div>
        <div class="custom-shape-divider-bottom-1684836437">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

</div>
<div class="col-12" >
<div class="row text-center">
    <h1 class="text-dark ib-font-extrabold">Partners</h1>
    <p class="text-dark">Lorem ipsum dolor sit amet</p>
</div>
<div class="row border-5">
<div class="container rounded-4 ib-landing-bg-blue pt-4" style="width: 85%">
<div class="slider my-1">
    <div class="slide-track-1">
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-aim-global-300x150.jpg" alt="AIM Global" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-avon-300x150.jpg" alt="Avon" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-amazon-web-services-300x150.jpg" alt="Amazon Web Services" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-bancnet-300x150.jpg" alt="BancNet" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-bayad-center-1-300x150.jpg" alt="Bayad Center" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-bpi-globe-banko-300x150.jpg" alt="BPI BanKo" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-cutting-edge-300x150.jpg" alt="Cutting Edge" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-ecpay-300x150.jpg" alt="ECPay" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-filmon-300x150.jpg" alt="Filmon" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-gametime-300x150.jpg" alt="Gametime" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-generika-300x150.jpg" alt="Generika" width="300" height="150" loading="lazy">
        </div>

        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-aim-global-300x150.jpg" alt="AIM Global" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-avon-300x150.jpg" alt="Avon" width="300" height="150" loading="lazy">
        </div>

        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-amazon-web-services-300x150.jpg" alt="Amazon Web Services" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-bancnet-300x150.jpg" alt="BancNet" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-bayad-center-1-300x150.jpg" alt="Bayad Center" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-bpi-globe-banko-300x150.jpg" alt="BPI BanKo" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-cutting-edge-300x150.jpg" alt="Cutting Edge" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-ecpay-300x150.jpg" alt="ECPay" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-filmon-300x150.jpg" alt="Filmon" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-gametime-300x150.jpg" alt="Gametime" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-generika-300x150.jpg" alt="Generika" width="300" height="150" loading="lazy">
        </div>
    </div>
</div>
<div class="slider my-1">
    <div class="slide-track-2">
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-ipc-300x150.jpg" alt="IPC" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-ips-300x150.jpg" alt="IPS" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-manila-jockey-club-300x150.jpg" alt="Manila Jockey" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-mobeelity-300x150.jpg" alt="Mobeelity" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-mynt-300x150.jpg" alt="Mynt" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-nets-300x150.jpg" alt="Nets" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-nexmo-300x150.jpg" alt="Nexmo" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-paymaya-300x150.jpg" alt="Paymaya" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-paypal-300x150.jpg" alt="PayPal" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-paytyche-300x150.jpg" alt="Paytyche" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-philarp-300x150.jpg" alt="Philarp" width="300" height="150" loading="lazy">
        </div>

        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-ipc-300x150.jpg" alt="IPC" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-ips-300x150.jpg" alt="IPS" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-manila-jockey-club-300x150.jpg" alt="Manila Jockey" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-mobeelity-300x150.jpg" alt="Mobeelity" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-mynt-300x150.jpg" alt="Mynt" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-nets-300x150.jpg" alt="Nets" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-nexmo-300x150.jpg" alt="Nexmo" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-paymaya-300x150.jpg" alt="Paymaya" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-paypal-300x150.jpg" alt="PayPal" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-paytyche-300x150.jpg" alt="Paytyche" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-philarp-300x150.jpg" alt="Philarp" width="300" height="150" loading="lazy">
        </div>
    </div>
</div>
<div class="slider my-1">
    <div class="slide-track-1">
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-remitbox-300x150.jpg" alt="Remitbox" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-safenet-300x150.jpg" alt="Safenet" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-smart-300x150.jpg" alt="Smart" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-smart-pit-300x150.jpg" alt="Smart Pit" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-tara-nood-tayo-300x150.jpg" alt="Tara Nood Tayo" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-transferto-300x150.jpg" alt="Transfer To" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-trufidelity-300x150.jpg" alt="Trufidelity" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-voip-switch-300x150.jpg" alt="Voip Switch" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-wazile-300x150.jpg" alt="Wazile" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-wowza-300x150.jpg" alt="Wowza" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-zed-300x150.jpg" alt="Zed" width="300" height="150" loading="lazy">
        </div>

        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-remitbox-300x150.jpg" alt="Remitbox" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-safenet-300x150.jpg" alt="Safenet" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-smart-300x150.jpg" alt="Smart" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-smart-pit-300x150.jpg" alt="Smart Pit" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-tara-nood-tayo-300x150.jpg" alt="Tara Nood Tayo" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-transferto-300x150.jpg" alt="Transfer To" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-trufidelity-300x150.jpg" alt="Trufidelity" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-voip-switch-300x150.jpg" alt="Voip Switch" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-wazile-300x150.jpg" alt="Wazile" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-wowza-300x150.jpg" alt="Wowza" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-zed-300x150.jpg" alt="Zed" width="300" height="150" loading="lazy">
        </div>
        <div class="slide">
            <img class="img-thumbnail rounded-4 ib-card" src="../assets/images/partners/partners-logo-remitbox-300x150.jpg" alt="Remitbox" width="300" height="150" loading="lazy">
        </div>
    </div>
</div>
</div>
</div>
<div class="px-0" style="min-height: 100px"></div>
</div>
<div class="row multi-color-border ib-landing-bg-light" style="position: relative">
    <div class="px-0" style="min-height: 100px"></div>
    <div class="custom-shape-divider-top-1684836731">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="row py-5 h-100 ">
        <div class="col-4">
            <div class="row justify-content-center">
                <img src="../assets/images/logo/ibayad-logo.png" class="img-fluid w-50" alt="...">
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="container px-5">
                    <h1>Our <strong><i>Company</i></strong></h1>
                    <hr class="ib-landing-hr">
                    <p>iBayad Online Ventures, Inc. is a FinTech (Financial Technology) start-up company in the exciting field of mobile payments and e-commerce. Our company endeavors to bring innovative solutions for micro entrepreneurs and SME’s, with the purpose of empowering their businesses with technology, which will allow them to remain relevant and competitive, in their respective industries. We likewise aim to deliver beneficial financial services to the unbanked and underbanked sector of society, who remain unreached and unserved by traditional financial institutions.</p>
                    <p>iBayad is a locally registered corporation founded by Technopreneurs with the support of two other locally based technology companies: Paytyche Solutions Inc. and Mobeelity Innovations, Inc. We are likewise backed by a team of strategic foreign equity investors coming from the Information Technology, Telecommunications and Global Investment Banking Industries who believe in our endeavor to drive for innovations in the mobile payments and e-commerce space, as well as in our advocacies, to help developing-countries’ progress into a cashless society, and the financial inclusion of the bottom-of-the-pyramid.</p>
                    <p>iBayad is about bringing the best and brightest innovations brought about by the convergence in Financial Services and Mobile Communications. Our solutions demonstrate an incremental and radical / disruptive innovation in the development of applications, processes, products or business models for the financial services and mobile communications industry. We are driven by our passion to help improve every person’s life in this current mobile commerce revolution era.</p>
                    <p>Our mission is to accelerate the adoption and transformation of every consumer’s traditional spending behaviour from cash-centric transactions to card and mobile payments, as the standard payment format in this new information economy.</p>
                    <p>To achieve our objectives, we are utilizing our home-grown and award winning technologies and software systems currently deployed in over 30 countries worldwide.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer bg-dark">
    <div class="container-fluid pt-5">
        <div class="row px-5">
            <div class="col-md-4 mt-3">
                <p class="text-light">
                    <strong>We want to hear from you!</strong><br>
                    Feel free to contact us with the form below
                </p>
                <form class="" autocomplete="off">
                    <div class="mb-3">
                        <input type="text" class="form-control ib-form-control-light" id="name" required>
                        <label class="text-secondary" for="name">Name</label>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control ib-form-control-light" id="email" placeholder="" required>
                        <label class="text-secondary" for="email">Email address</label>
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control ib-form-control-light" id="msisdn" placeholder="" required>
                        <label class="text-secondary" for="msisdn">Phone Number</label>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control ib-form-control-light" rows="3" style="resize: none;" placeholder="" id="message" required></textarea>
                        <label class="text-secondary" for="message">Message</label>
                    </div>
                    <div class="col-12">
                        <button class="text-light btn btn-ib-main" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
            <div class="col-md-5 mt-3">
                <p class="text-light">
                    <strong>Corporate Head Office:</strong><br>
                    19th Floor Marco Polo Ortigas Manila Sapphire Road, <br>Ortigas Centre, Pasig City, Manila, 1600 Philippines
                </p>
                <iframe class="rounded-1 border-danger border-5 d-none d-sm-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.202946528677!2d121.06313949999999!3d14.5875086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c810a3ceb873%3A0x6999036523327d54!2siBayad%20Online%20Ventures%20Inc.!5e0!3m2!1sen!2sph!4v1684312450882!5m2!1sen!2sph" width="550" height="287" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-3 mt-3 border-start border-secondary border-2">
                <div class="mx-2">
                    <p class="mb-4">
                        <strong class="text-light">Products</strong><br>
                        <a class="link-light ib-link-secondary link-underline-opacity-0" href="http://www.solb.ph/" target="_blank">solb!</a><br>
                        <a class="link-light ib-link-secondary link-underline-opacity-0" href="http://www.migrantlifeline.com/" target="_blank">miLine</a><br>
                        <a class="link-light ib-link-secondary link-underline-opacity-0" href="http://www.migrantlifeline.com/" target="_blank">ElecTraNet Mgr Mk2</a>
                    </p>
                    <p class="mb-4">
                        <strong><a class="link-light link-underline-opacity-0" href="http://www.solb.ph/" target="_blank">Partners</a></strong><br>
                    </p>
                    <p class="mb-4">
                        <strong class="text-light">Company</strong><br>
                        <a class="link-light ib-link-secondary link-underline-opacity-0" href="http://www.solb.ph/" target="_blank">News</a><br>
                        <a class="link-light ib-link-secondary link-underline-opacity-0" href="http://www.solb.ph/" target="_blank">About Us</a><br>
                        <a class="link-light ib-link-secondary link-underline-opacity-0" href="http://www.migrantlifeline.com/" target="_blank">Careers</a><br>
                        <a class="link-light ib-link-secondary link-underline-opacity-0" href="http://www.migrantlifeline.com/" target="_blank">Contact Us</a>
                    </p>
                </div>

                <p class="text-center text-white pt-5">
                    <strong class="text-secondary d-none d-sm-block">Follow us: </strong>
                    <a class="px-2 link-secondary ib-link-secondary fs-4" href="https://www.facebook.com/ibayadph" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a class="px-2 link-secondary ib-link-secondary fs-4" href="https://twitter.com/ibayadph" target="_blank"><i class="bi bi-twitter"></i></a>
                    <a class="px-2 link-secondary ib-link-secondary fs-4" href="https://www.instagram.com/ibayadph/" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a class="px-2 link-secondary ib-link-secondary fs-4" href="http://www.linkedin.com/company/ibayad" target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a class="px-2 link-secondary ib-link-secondary fs-4" href="https://www.youtube.com/channel/UCmwlUFd7S2peY7GCGpqbgNQ" target="_blank"><i class="bi bi-youtube"></i></a>
                </p>
            </div>
        </div>
        <div class="row justify-content-center px-5 pt-4">
            <div class="col-md-5 d-none d-sm-block">
                <hr class="border border-light border-1">
            </div>
            <div class="col-md-2 d-flex justify-content-center px-0">
                <img class="img-fluid" src="../assets/images/logo/ib-logo-w-text-white.png" style="width: 115px;opacity: .8">
            </div>
            <div class="col-md-5 d-none d-sm-block">
                <hr class="border border-light border-1">
            </div>
        </div>

        <div class="row text-white d-flex justify-content-center pt-1">
            <p class="text-center pt-2 text-secondary">Copyright &copy; <?php echo date("Y"); ?> iBayad Online Ventures, Inc. All Rights Reserved.</p>
        </div>
    </div>
</footer>
<script src="../assets/thirdparty/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>