<!DOCTYPE html>
<html lang="en">

<head>
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MTHX5NB2');</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <?php include 'include/css.php'; ?>
    <title>
        <?php echo isset($title) ? $title : 'Home'; ?>
    </title>
    <meta name="google-site-verification" content="eoQvGFbRf4tINHldCoPIUiDqaD8icW2ghKB_3s__4Og" />
</head>

<body class="hompg">
    <!-- header -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTHX5NB2" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <header class="header123">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <a href="/index" class="logo md:pl-14 pl-2">
                        <img src="assets/images/logo-white.png" alt="" class="logo-main md:ml-8">
                        <img src="assets/images/logo.png" alt="" class="logo-fixed md:ml-8">
                    </a>
                    <div class="desk-menu"> <i class="fa fa-bars"></i>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="menu">
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#pricingSection">Packages</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#testimonial">Testimonial</a></li>
                            <li class="num"><a href="tel:+17379103666"><i class="fa fa-phone"></i>
                                    (737) 910-3666</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-left">
            <div class="menu-linn">
                <!-- <div class="menu-lclose"> <i class="fa fa-times"></i>
                </div> -->
                <div class="main-menu">
                    <ul>
                        <li><a onclick="handlenav()" href="#home">Home</a></li>
                        <li><a onclick="handlenav()" href="#portfolio">Portfolio</a></li>
                        <li><a onclick="handlenav()" href="#pricingSection">Packages</a></li>
                        <li><a onclick="handlenav()" href="#about">About</a></li>
                        <li><a onclick="handlenav()" href="#testimonial">Testimonial</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>