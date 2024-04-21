<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Dingocoin | Home</title>

    <meta content="Dingocoin is the most successful cryptocurrency fork of Dogecoin, with revolutionary innovations and unstoppable developments." name="description">
    <meta content="SuperTechDudes in conjunction with Dingocoin Project" name="author">
    <meta content="Dingocoin, wDingocoin, Cryptocurrency, decentralised coin, crypto, btc, eth, bsc scan, bsc chain, bsc token, dingo token, doge dingo, dingo, dingo exchange, dingo wallet, web wallet, crypto explorer, minning, pancakeswap, dingo coin, wdingo coin, nft, dingocoin nft platform, nft platform" name="keywords">
    <meta content="index,follow,all" name="robots">
    <meta content="index,follow,all" name="googlebot">
    <meta content="global" name="distribution">
    <meta content="worldwide" name="coverage">
    <link href="https://dingocoin.com/" rel="canonical">
    <meta content="en" name="language">
    <meta content="100" name="alexa">
    <meta content="Dingocoin | Community Development. Worldwide Adoption." property="og:title">
    <meta content="Dingocoin is the most successful cryptocurrency fork of Dogecoin, with revolutionary innovations and unstoppable developments." property="og:description">
    <meta content="website" property="og:type">
    <meta content="https://dingocoin.com/" property="og:url">
    <meta content="https://dingocoin.com/img/logos/dingocoin/logo/dingocoin.png" property="og:image">
    <meta content="Dingocoin" property="og:site_name">
    <meta content="website" property="og:type">
    <meta content="en_US" property="og:locale">
    <meta content="Dingocoin is the most successful cryptocurrency fork of Dogecoin, with revolutionary innovations and unstoppable developments." name="twitter:card">
    <meta content="Dingocoin | Community Development. Worldwide Adoption." name="twitter:title">
    <meta content="Dingocoin is the most successful cryptocurrency fork of Dogecoin, with revolutionary innovations and unstoppable developments." name="twitter:description">
    <meta content="https://dingocoin.com/img/logos/dingocoin/logo/dingocoin.png" name="twitter:image">
    <meta content="https://dingocoin.com/" name="twitter:url">

    <link href="/favicon.ico" rel="icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include ('includes/pages/top_nav.html');?>

<header>
    <a href="/Wallets">    
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/data1/images/121a.gif" alt="Get Involved Header">
                </div>
            </div>
        </div></a>
</header>
<?php include 'includes/pages/trailmap-alert.php'; ?>
<?php
$domain = 'https://explorer.dingocoin.com';  // Replace with the domain you want to check
$headers = @get_headers($domain);
if (!$headers || strpos($headers[0], '200') === false) {
    // Domain is down or not returning a 200 OK status code
    // Exclude the file here or perform any other necessary actions
    } else {
    // Domain is up and running
    include ('includes/pages/net_data.php');
    }
if (!@include('includes/pages/about.html')) {
    echo '<div class="container-xxl py-5">
	        <div class="container">
                <div class="text-center mx-auto  fadeInUp" data--delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6">About Us</h1>
                    </div>
                        <div class="row justify-content-center text-center">
                            <span>About Us Module Loading ...... <br> <small>Error: std-dxQH1</small></span>
                        </div> 
                    </div>
                </div>';
            }
    if (!@include('includes/pages/featured_projects.html')) {
        echo '<div class="container-xxl py-5">
	        <div class="container">
                <div class="text-center mx-auto  fadeInUp" data--delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-6">Featured Projects</h1>
                    </div>
                    <div class="row justify-content-center text-center">
                        <span>Featured Projects Module Loading ......<br> <small>Error: std-dxQH1</small></span>
                    </div> 
                </div>
            </div>
            ';
        }
    include ('includes/pages/footer.html');
    include ('includes/pages/2top-pups.html'); ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>