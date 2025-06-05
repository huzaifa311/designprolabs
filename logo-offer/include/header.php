<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
    <title><?php echo isset($title) ? $title : 'Home'; ?></title>
    <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1621314721826661');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1621314721826661&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>

<body class="hompg">
    <!-- header -->
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
                            +1 (737) 910-3666</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-left">
            <div class="menu-lover"></div>
            <div class="menu-linn">
                <div class="menu-lclose"> <i class="fa fa-times"></i>
                </div>
                <div class="main-menu">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#pricingSection">Packages</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#testimonial">Testimonial</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>