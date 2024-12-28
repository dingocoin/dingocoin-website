<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Dingocoin is the most successful cryptocurrency fork of Dogecoin, driven by revolutionary innovations and unstoppable developments. Inspired by the Australian dingo, it is a community-driven cryptocurrency.">
    <meta name="keywords"
        content="Dingocoin, Dogecoin fork, cryptocurrency, blockchain, decentralized currency, community-driven crypto, Australian dingo cryptocurrency">
    <meta name="author" content="Dingocoin Team">

    <!-- Open Graph / Social Media Meta Tags -->
    <meta property="og:title" content="Dingocoin - Inspired by the Australian Dingo">
    <meta property="og:description"
        content="Dingocoin is the most successful cryptocurrency fork of Dogecoin, driven by revolutionary innovations and unstoppable developments. Join the community-driven cryptocurrency inspired by the Australian dingo.">
    <meta property="og:url" content="https://dingocoin.com/">
    <meta property="og:image" content="https://dingocoin.com/img/logos/dingocoin256-min.webp">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Dingocoin Official Website">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Dingocoin - Inspired by the Australian Dingo">
    <meta name="twitter:description"
        content="Explore Dingocoin, the most successful Dogecoin fork. Community-driven, revolutionary, and inspired by the Australian dingo.">
    <meta name="twitter:image" content="https://dingocoin.com/img/logos/dingocoin256-min.webp">

    <!-- Additional Tags -->
    <link rel="canonical" href="https://dingocoin.com/">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--   Fonts -->
    <!--<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap" as="style" onload="this.rel='stylesheet'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
</noscript -->

    <link href="/favicon.ico" rel="icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <!--<link rel="manifest" href="/site.webmanifest">-->

    <!--   Future Cache Control Phase 3-->
    <!--<meta http-equiv="Cache-Control" content="public, max-age=1814400">-->

    <title>Dingocoin - Your Gateway to Digital Currency</title>

    <!-- Inline critical CSS -->
    <style>
        /* Critical CSS */
        body {
            background: linear-gradient(135deg, #000b0c 0%, #025b68 100%);
            color: white;
            min-height: 100vh;
            margin: 0;
            font-family: 'Open Sans', sans-serif; 
        }

        .navbar {
            background-color: #1e4151;
            color: white;
            font-weight: bold;
            font-family: 'Roboto', sans-serif; 
        }

        .navbar .navbar-brand,
        .navbar .nav-link {
            color: white;

        }



        .navbar .nav-link {
            font-size: 1.1rem;  /* Base size for smaller screens */
            transition: font-size 0.3s ease;
        }

        @media (min-width: 992px) {
            .navbar .nav-link {
                font-size: 1.25rem;
                /* Larger size for desktop */
            }
        }

        .card-body {
            opacity: 1;
            visibility: visible;
            font-display: swap;
        }

        /* Optimize text rendering */
        .card-body p {
            text-rendering: optimizeSpeed;
            -webkit-font-smoothing: antialiased;
        }

        p {
            font-size: 1.2rem;
            font-family: 'Open Sans', sans-serif; 
        }

        .content {
            min-height: calc(100vh - 70px);
            padding-top: 20px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: bold;
            /* Make all headings bold */
            font-size: 1.5rem;
            /* Uniform size for all headings */
            font-family: 'Roboto', sans-serif; /* Apply Roboto to headings */
        }

        p {
            font-size: 1.2rem;
            /* Increase paragraph font size for better readability */
            line-height: 1.5;
            /* Improve line height for better legibility */
        }

        /* Additional styles for better text legibility */
        ul {
            font-size: 1.1rem;
            /* Slightly larger font size for list items */
        }

        /* Custom CSS for Privacy Modal */
        .privacy-container {
            font-size: 1.1rem;
            /* Adjusted for legibility */
            line-height: 1.6;
            /* Improved readability */
        }

        .privacy-title {
            font-size: 1.5rem;
            /* Uniform size for titles */
            font-weight: bold;
            /* Make titles bold */
            margin-top: 1.5rem;
            /* Space above titles */
        }

        .privacy-list {
            font-size: 1.1rem;
            /* Adjusted for legibility */
            line-height: 1.5;
            /* Improved readability */
        }
        .logo-img {
            width: 100px; /* Fixed width for logos */
            height: auto; /* Maintain aspect ratio */
            position: relative; /* Positioning for the mask */
        }
        .grayscale {
            filter: brightness(0) invert(1);
        }

        /* Remove underline from footer links */
        footer a {
            text-decoration: none; /* Remove underline */
        }
        footer a:hover {
            text-decoration: none; /* Ensure no underline on hover */
        }

        .navbar .nav-link,
        .navbar .navbar-brand {
            color: white; /* Set default text color to white */
        }
                /* Add this CSS to improve card responsiveness */
        .card {
            width: 100%; /* Ensure cards take full width on mobile */
            margin: 0 auto; /* Center cards */
        }

        @media (max-width: 768px) {
            .card {
                margin-bottom: 15px; /* Add some space between cards */
            }
        }

        .navbar .navbar-brand {
            color: white !important; /* Ensure the text color is always white */
        }

    </style>

    <!-- Load CSS synchronously for important styles -->
    <link rel="stylesheet" href="./main_style.css" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="./main_style.css">
    </noscript>
    <link rel="preload" href="./style.css" as="style" onload="this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="./style.css">
    </noscript>
    <link rel="stylesheet" href="./css/font_awesome_6_4.css" rel="preload" as="style" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="./style.css" rel="preload" as="style" onload="this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="./css/font_awesome_6_4.css">
    </noscript>
    <noscript>
        <link rel="stylesheet" href="./style.css">
    </noscript>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index">
                <img src="/img/logos/dingocoin256-min.webp" alt="Dingocoin Logo" height="64" width="64">
            </a>
            <div class="navbar-brand text-decoration: none;"> DINGOCOIN </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto py-4 py-lg-0">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active text-white"
                            data-bs-toggle="dropdown" aria-label="Eco-System Dropdown">Eco-System</a>
                        <div class="dropdown-menu shadow-sm m-0">
                            <a href="https://wrap.dingocoin.com" target="_blank" class="dropdown-item" aria-label="Visit wDingocoin Wrap">wDingocoin Wrap</a>
                            <a href="https://nft.dingocoin.com" target="_blank" class="dropdown-item" aria-label="Visit NFT Platform">NFT Platform</a>
                            <a href="https://blog.dingocoin.com" target="_blank" class="dropdown-item"  aria-label="Visit Dingocoin Blog">Dingocoin Blog</a>
                            <a href="https://explorer.dingocoin.com/" target="_blank" class="dropdown-item" aria-label="Visit Dingo Explorer (Official API)">Dingo Explorer <small>(Official API)</small></a>
                            <a href="https://openchains.info/coin/dingocoin/blocks" target="_blank" rel="noopener noreferrer nofollow" class="dropdown-item" aria-label="Visit Explorer (Open Chains)">Explorer <small>(Open Chains)</small></a>
                        </div>
                    </div>
                    <a class="nav-item nav-link active text-white" data-bs-toggle="modal" data-bs-target="#exchange-options" role="button"  aria-label="View Exchanges">Exchanges</a>
                    <a class="nav-item nav-link active text-white" data-bs-toggle="modal" data-bs-target="#trailmap-options" role="button" aria-label="View Trailmap">Trailmap</a>
                    <!--<a href="http://dingocoin.com/dingocoin.pdf" target="_blank" class="nav-item nav-link active text-white" rel="noopener noreferrer" aria-label="Download White Paper">White Paper</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active text-white"
                            data-bs-toggle="dropdown" aria-label="Resources Dropdown">Resources</a>
                        <div class="dropdown-menu shadow-sm m-0">
                            <a href="https://miningpoolstats.stream/dingocoin" target="_blank" rel="noopener noreferrer nofollow" class="dropdown-item" aria-label="View Mining Info">Mining Info</a>
                            <a href="https://blog.dingocoin.com/how-to-mine-dingocoin-using-prohashing/" target="_blank" rel="noopener noreferrer nofollow" class="dropdown-item" aria-label="Read Mining Guide">Mining Guide</a>
                            <a href="https://openchains.info/coin/dingocoin/blocks" rel="noopener noreferrer nofollow" target="_blank" class="dropdown-item" aria-label="Visit Explorer (Open Chains)">Explorer (Open Chains)</a>
                            <a href="http://dingocoin.com/docs/dingocoin_technical_information.pdf" target="_blank" rel="noopener noreferrer nofollow" class="dropdown-item" aria-label="View Dingocoin Technical Information">Dingocoin Technical Information</a>
                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#privacy-options" role="button" aria-label="View Privacy Policy">Privacy Policy</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active text-white" data-bs-toggle="dropdown" aria-label="Contact Us Dropdown">Contact Us</a>
                        <div class="dropdown-menu shadow-sm m-0">
                            <a href="https://discord.gg/9DxYCp9ttX" class="dropdown-item" target="_blank" rel="noopener noreferrer nofollow" aria-label="Join Discord">Discord</a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfBw1SJJWcM1eLY_1oFS9iNdKn7fJapKl5zqwraP1TSvXu5VA/viewform"
                                target="_blank" rel="noopener noreferrer nofollow" class="dropdown-item" aria-label="Submit Suggestions">Submit Suggestions</a>
                        </div>
                    </div>
                    <li class="nav-item"><a class="nav-link" href="https://github.com/dingocoin" target="_blank" rel="noopener noreferrer nofollow" aria-label="Visit Dingocoin GitHub">
                        <i class="fa-brands fa-github fa-2x"></i>
                    </a></li>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="content" style="min-height: 150px;">
        <section>
            <div class="container mt-5 mx-auto">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="card-body text-white text-center" style="min-height: 450px;">
                            <div>
                                <br>
                                <br>
                                <div class="row text-center">
                                    <!-- Left Column -->
                                    <div class="col-lg-4 col-md-4 col-12 mb-3">
                                        <div class="placeholder-text"
                                            style="text-align: left; margin: 0 auto; min-height: 300px;">
                                            <div>
                                                <h3 class="card-title">Faster Doge</h3><br>
                                            </div>
                                            <p>10x Throughput: Testnet scaling from ~33 to 330-660 TPS - aligning with
                                                Elon's vision for high-speed transactions.</p>
                                            <p>Trusted Security: Backed by the same robust Scrypt AuxPow mining as
                                                Dogecoin, ensuring comparable hashrate and network security.</p>
                                            <p>Global Reach: Listed on MEXC, Bitmart, LBank, AscendEX, XT, XeggeX,
                                                TradeOrge, plus BSC, SOL & Ploygon Bridges guided by a community-driven roadmap
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Middle Column with Image -->
                                    <div class="col-lg-4 col-md-4 col-12 mb-3 d-flex justify-content-center align-items-center">
                                        <div style="width: 200px; height: 200px; overflow: hidden;">
                                            <img src="/img/logos/dingocoin256-min.webp" alt="Dingo Logo" class="img-fluid" 
                                                 style="object-fit: contain; width: 200px; height: 200px;"> <!-- Set explicit width and height -->
                                        </div>
                                    </div>
                                    <!-- Right Column -->
                                    <div class="col-lg-4 col-md-4 col-12 mb-3">
                                        <div class="placeholder-text" style="text-align: left; margin: 0 auto;">
                                            <div>
                                                <h3 class="card-title">The Future of Payments</h3><br>
                                            </div>
                                            <p>Mobile-First Integration: Designed for easy wallet and payment app
                                                adoption, perfect for everyday transactions</p>
                                            <p>Proven Adoption: Fl!p partnership approaching 1 million users, delivering
                                                instant, low-cost payments today.</p>
                                            <p>Secure & Accessible: A trusted blockchain foundation enabling effortless,
                                                global payments - now and in 2025.</p>
                                        </div>
                                    </div>
                                    <div>
                                        <!--Phase 3 Upgrades-->
                                        <!--Doge Hashrate: (Placeholder for Data) VS  Dingocoin Hashrate: <?php echo "$roundedHashrate"; ?> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Content -->
        <section>
            <div class="container mt-5 mx-auto">
                <header class="row pt-5">
                    <div class="col-12">
                        <h3 class="text-uppercase border-bottom mb-4">Featured</h3>
                    </div>
                </header>
                <div class="row justify-content-center text-center d-flex align-items-stretch">
                    <!-- Dingocoin Wrap -->
                    <div class="col-lg-3 col-md-6 col-12 mb-3 d-flex align-items-stretch">
                        <div class="card flex-grow-1">
                            <img src="/img/sitemain/wrap.webp" class="card-img-top featured-image-rounded featured-image-padding" alt="Dingocoin Wrap Image" style="width: 100%; height: auto; object-fit: contain;">
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title">Dingocoin Wrap</h3>
                                <p>Wrapped Dingocoin on BSC, SOL & Polygon chains</p>
                                <p><strong>Exchange Rate:</strong></p>
                                <p><strong>1 wDingocoin = 1 Dingocoin</strong></p>
                                <a href="https://wrap.dingocoin.com" target="_blank" rel="noopener noreferrer" class="btn btn-secondary mt-auto">Start Wrapping</a>
                            </div>
                        </div>
                    </div>
                    <!-- Exchanges -->
                    <div class="col-lg-3 col-md-6 col-12 mb-3 d-flex align-items-stretch">
                        <div class="card flex-grow-1">
                            <img src="/img/sitemain/exchange-gen-image.webp" class="card-img-top featured-image-rounded featured-image-padding" alt="Exchanges Image" style="width: 100%; height: auto; object-fit: contain;">
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title">New Exchanges</h3>
                                <p>Dingocoin newly listed Exchanges</p>
                                <p> CoinEx 12/16/24</p>
                                <p><a href="https://www.coinex.com/en/exchange/DINGO-USDT" class="btn btn-secondary"
                                        target="_blank" rel="nofollow">Visit CoinEx Exchange</a></p>
                                <p><a href="https://coinmarketcap.com/exchanges/coinex/" class="btn btn-secondary"
                                        target="_blank" rel="nofollow">Visit CoinEx on CMC</a></p>
                                <br>
                                <p> Newest Exchange <br> BIT.com</p>
                                <p><a href="https://www.bit.com/spot?pair=DINGO-USDT" class="btn btn-secondary" target="_blank"
                                        target="_blank" rel="nofollow">Visit BIT Exchange</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- FL!P -->
                    <div class="col-lg-3 col-md-6 col-12 mb-3 d-flex align-items-stretch">
                        <div class="card flex-grow-1">
                            <img src="/img/sitemain/flip.webp" class="card-img-top featured-image-rounded featured-image-padding" alt="Fl!p Image" style="width: 100%; height: auto; object-fit: contain;">
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title">Fl!p</h3>
                                <p>Dingocoin has partnered with Flip to become part of payment apps and provide fiat
                                    on-ramps, creating clear use cases for payments.</p>
                                <a href="https://www.theflip.app/" name="Flip App" rel="nofollow" target="_blank"
                                    class="btn btn-secondary mt-auto">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Dingocoin Project -->
                    <div class="col-lg-3 col-md-6 col-12 mb-3 d-flex align-items-stretch">
                        <div class="card d-flex align-items-center flex-grow-1">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <h3 class="card-title">Dingocoin Project</h3>
                                <p>Dingocoin is a cryptocurrency similar to Bitcoin, but with a unique proof-of-work
                                    (POW) mechanism.</p>
                                <p>Inspired by Tenebrix and Litecoin, Dingocoin uses a simplified script.</p>
                                <div class="mt-4 mb-5">
                                    <hr>
                                </div>
                                <h3>Get Involved</h3>
                                <p>Whether you're a coder, graphic designer, content creator, or just interested in
                                    providing feedback, your contributions can make a difference.</p>
                                <p>Here's how you can join us:</p>
                                <a href="https://github.com/dingocoin/dingocoin" target="_blank" name="github"
                                    rel="nofollow" class="btn btn-secondary mb-3">Contribute on GitHub</a>
                                <a href="https://discord.gg/9DxYCp9ttX" class="btn btn-secondary" target="_blank"
                                    name="discord" rel="nofollow">Join Our Discord</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mt-5 mx-auto">
            <div>
                <p>At Dingocoin, we hold certain values dear. We believe in the continuation of wisdom united into
                    Dingocoin, genuine usefulness
                    with creative and elegant community-built solutions, being courageous and forging new paths around a
                    broken financial system,
                    and eternal emission rewarding all newcomers for securing the Dingocoin network.</p>
                <p>At the heart of Dingocoin lies a deep commitment to wisdom, creativity, and community. We believe
                    that the most effective
                    solutions come from working together, leveraging the collective creativity and ingenuity of our
                    members to create innovative,
                    elegant, and truly useful solutions.</p>
                <p>With every step we take, we are forging new paths towards a brighter tomorrow.<br><i>Are You
                        Ready?</i></p>
            </div>
        </div>
        <!--  Wallets & Eco-System & Blockchain Data -->
        <section id="wallets">
            <div class="container mt-5 mx-auto">
                <header class="row pt-5">
                    <div class="col-12">
                        <h3 class="text-uppercase border-bottom mb-4">At A Glance</h3>
                    </div>
                </header>
                <div class="row justify-content-center text-center">
                    <!-- GET Wallet -->
                    <div class="col-lg-4 col-md-4 col-12 mb-3 d-flex align-items-stretch">
                        <div class="card flex-grow-1">
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title">Get A Wallet</h3>
                                <p><br></p>
                                <p>Dingocoin Wallets come in many flavors. Select your wallet below and download will
                                    begin</p>
                                <form id="walletForm" aria-label="Wallet Selection Form" role="form"
                                    onsubmit="startDownload(event)" novalidate>
                                    <label for="walletSelect" class="visually-hidden">Select a Wallet</label>
                                    <select id="walletSelect" name="wallet" class="form-select" required
                                        aria-labelledby="walletSelectLabel">
                                        <option value="" disabled selected hidden>Select your wallet</option>
                                        <!-- Browser Wallets -->
                                        <optgroup label="Browser Wallet">
                                            <option value="Chrome"
                                                data-open-url="https://chrome.google.com/webstore/detail/dingocoin-wallet/njoljnomkdoakfphjbapdopdcneceeaf"
                                                rel="nofollow"
                                                data-download-url="https://chrome.google.com/webstore/detail/dingocoin-wallet/njoljnomkdoakfphjbapdopdcneceeaf">
                                                <strong>Chrome</strong></option>
                                            <option value="Brave" data-open-url="https://brave.com/wallet/"
                                                rel="nofollow" data-download-url="https://brave.com/wallet/">Brave
                                            </option>
                                        </optgroup>
                                        <!-- Desktop Wallets -->
                                        <optgroup label="Desktop Wallet">
                                            <option value="Windows"
                                                data-download-url="https://github.com/dingocoin/dingocoin/releases/download/v1.17.1.1/dingocoin-windows-binaries_1.17.1.1.zip"
                                                data-open-url="https://github.com/dingocoin/dingocoin/releases/download/v1.17.1.1/dingocoin-windows-binaries_1.17.1.1.zip">
                                                Windows</option>
                                            <option value="Linux"
                                                data-download-url="https://github.com/dingocoin/dingocoin/releases/download/v1.17.1.1/dingocoin-linux-binaries_1.17.1.1.zip"
                                                data-open-url="https://github.com/dingocoin/dingocoin/releases/download/v1.17.1.1/dingocoin-linux-binaries_1.17.1.1.zip">
                                                Linux</option>
                                            <option value="MacOS" data-download-url="#" data-open-url="#"
                                                target="_blank" rel="nofollow" disabled>MacOS</option>
                                        </optgroup>
                                        <!-- Mobile Wallets -->
                                        <optgroup label="Mobile">
                                            <option value="Flip-Apple"
                                                data-open-url="https://apps.apple.com/no/app/the-flip-app/id1641134087"
                                                data-download-url="https://apps.apple.com/no/app/the-flip-app/id1641134087"
                                                rel="nofollow">Apple</option>
                                            <option value="Flip-Android"
                                                data-open-url="https://play.google.com/store/apps/details?id=app.theflip"
                                                data-download-url="https://play.google.com/store/apps/details?id=app.theflip"
                                                rel="nofollow">Android</option>
                                        </optgroup>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a wallet before proceeding.
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Get Wallet</button>
                                </form>
                                <script>
                                    function startDownload(event) {
                                        event.preventDefault(); // Prevent the default form submission
                                        const select = document.getElementById('walletSelect');
                                        if (!select.value) {
                                            select.classList.add('is-invalid'); // Add Bootstrap invalid class
                                            return;
                                        } else {
                                            select.classList.remove('is-invalid'); // Remove invalid class if valid
                                        }

                                        const selectedOption = select.options[select.selectedIndex];
                                        const downloadUrl = selectedOption.getAttribute('data-download-url');
                                        const openUrl = selectedOption.getAttribute('data-open-url'); // Get the open URL

                                        // Open the URL in a new window
                                        if (openUrl) {
                                            window.open(openUrl, '_blank'); // Open in new window
                                        }

                                        // Redirect to the download URL directly
                                        if (downloadUrl) {
                                            window.open(downloadUrl, '_blank'); // Open download URL in new window
                                        } else {
                                            alert('No download URL available for the selected wallet.'); // Handle cases without a download URL
                                        }
                                    }
                                </script>
                                <!-- Future Image Placeholder-->
                                <!--<p></p>-->
                            </div>
                        </div>
                    </div>
                    <!-- Eco-System -->
                    <!-- Dingo Eco-System Status Check -->
                    <?php
                    function checkUrl($url) {
                    $headers = get_headers($url);
                    if ($headers === false) {
                    error_log("Failed to get headers for URL: $url");
                    return false;
                    }
                    return is_array($headers) && strpos($headers[0], '200') !== false;
                    }

                    // URLs to check
                    $wrapStatus = checkUrl('https://wrap.dingocoin.com') ? '<i class="fa-solid fa-check-circle text-success"></i>' : '<i class="fa-solid fa-times-circle text-danger"></i>';
                    $nftStatus = checkUrl('https://nft.dingocoin.com') ? '<i class="fa-solid fa-check-circle text-success"></i>' : '<i class="fa-solid fa-times-circle text-danger"></i>';
                    $blogStatus = checkUrl('https://blog.dingocoin.com') ? '<i class="fa-solid fa-check-circle text-success"></i>' : '<i class="fa-solid fa-times-circle text-danger"></i>';
                    $browserWalletStatus = '<i class="fa-solid fa-check-circle text-success"></i>'; 
                    $discordStatus = '<i class="fa-solid fa-check-circle text-success"></i>'; 
                    $githubStatus = '<i class="fa-solid fa-check-circle text-success"></i>'; 
                    ?>
                    <div class="col-lg-4 col-md-4 col-12 mb-3 d-flex align-items-stretch">
                        <div class="card flex-grow-1">
                            <div class="card-body d-flex flex-column text-center">
                                <h3 class="card-title">Dingo Eco-System</h3>
                                <div class="container mt-5">
                                    <div class="row">
                                        <div class="col-8">
                                            <p><a href="https://wrap.dingocoin.com" target="_blank" style="text-decoration: none; color: black;"><strong>wDingocoin Wrap</strong></a></p>
                                            <p><a href="https://nft.dingocoin.com" target="_blank" style="text-decoration: none; color: black;"><strong>NFT Platform</strong></a></p>
                                            <p><a href="https://blog.dingocoin.com" target="_blank" style="text-decoration: none; color: black;"><strong>Dingo Blog</strong></a></p>
                                            <p><a href="#wallets" target="_blank" style="text-decoration: none; color: black;"><strong>Browser Wallet</strong></a></p>
                                            <p><a href="https://discord.gg/9DxYCp9ttX" target="_blank" rel="nofollow" style="text-decoration: none; color: black;"><strong>Discord</strong></a></p>
                                            <p><a href="https://github.com/dingocoin" target="_blank" rel="nofollow" style="text-decoration: none; color: black;"><strong>Github</strong></a></p>
                                        </div>
                                        <div class="col-4">
                                            <p><?php echo $wrapStatus; ?></p>
                                            <p><?php echo $nftStatus; ?></p>
                                            <p><?php echo $blogStatus; ?></p>
                                            <p><?php echo $browserWalletStatus; ?></p>
                                            <p><?php echo $discordStatus ?></p>
                                            <p><?php echo $githubStatus; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Processing BlockChain Data -->
                    <?php
                    // NetworkStats
                    // Fetch data asynchronously
                    function fetchData($url) {
                    $response = file_get_contents($url);
                    if ($response === FALSE) {
                    error_log("Error fetching data from: $url");
                    return null;
                    }
                    $data = json_decode($response, true);
                    if (json_last_error() !== JSON_ERROR_NONE) {
                    error_log("JSON decode error: " . json_last_error_msg());
                    return null;
                    }
                    return $data;
                    }

                    // URLs for fetching data
                    $urls = [
                    "https://explorer.dingocoin.com/api/getnetworkhashps",
                    "https://explorer.dingocoin.com/api/getdifficulty",
                    "https://explorer.dingocoin.com/ext/getmoneysupply",
                    "https://explorer.dingocoin.com/api/getblockcount"
                    ];

                    // Fetch data concurrently
                    $data = [];
                    foreach ($urls as $url) {
                        $data[] = fetchData($url);
                    }

                    // Ensure that $data has the expected number of elements
                    if (count($data) === 4) {
                        list($networkHashrate, $net_diff, $supply, $bheight) = $data;
                    } else {
                        error_log("Unexpected data format: " . print_r($data, true));
                        // Handle the error accordingly
                    }

                    // Rounds to two decimal places and divides by 1 trillion
                    $roundedHashrate = round(($networkHashrate / 1000000000000) * 100) / 100;
                    $cdiff = number_format($net_diff, 3);
                    $csupply = number_format($supply);
                    $blockheight = number_format($bheight);
                    ?>
                    <!-- Blockchain Data -->
                    <div class="col-lg-4 col-md-4 col-12 mb-3 d-flex align-items-stretch">
                        <div class="card flex-grow-1">
                            <div class="card-body d-flex flex-column text-center">
                                <h3 class="card-title">Blockchain Data</h3>
                                <!-- Populate Blockchain Data -->
                                <p><strong>Hashrate (TH)</strong></p>
                                <p>
                                    <?php echo "$roundedHashrate"; ?>
                                </p>
                                <p><strong>Supply</strong></p>
                                <p>
                                    <?php echo "$csupply"; ?>
                                </p>
                                <p><strong>Difficulty</strong></p>
                                <p>
                                    <?php echo "$cdiff"; ?>
                                </p>
                                <p><strong>Height</strong></p>
                                <p>
                                    <?php echo "$blockheight"; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- More Information -->
        <section>
            <div class="container">
                <header class="row pt-5">
                    <div class="col-12">
                        <h3 class="text-uppercase border-bottom mb-4">More Information</h3>
                    </div>
                </header>
                <div class="row g-3">
                    <!-- Card for Whitepaper -->
                    <div class="col-lg-3 col-md-4 col-12 d-flex">
                        <div class="card h-100 flex-grow-1" style="width: 200px; height: 200px; background-image: url('img/sitemain/whitePaper.webp'); background-size: cover; background-position: center;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center text-white" style="background-color: rgba(0, 0, 0, 0.5);">
                                <div>
                                    <p></p>
                                    <p class="text-center">English:
                                        <a href="https://dingocoin.com/dingocoin.pdf" target="_blank" class="text-white">View</a></p>
                                <p class="text-center">Chinese:
                                    <a href="https://dingocoin.com/dingocoinCH.pdf" target="_blank" class="text-white">View</a></p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- AMA Audio -->
                    <div class="col-lg-9 col-md-8 col-12 d-flex">
                        <div class="card h-100 flex-grow-1">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center text-center">
                                        <img src="/img/sitemain/ama.webp" class="img-fluid" alt="Dingocoin AMA Image" id="amaImage" width="512" height="512">
                                    </div>
                                    <!-- AMA 1 -->
                                    <div class="col-lg-6 col-12">
                                        <p class="text-center">Dingocoin & AscendEX AMA</p>
                                        <div class="d-flex justify-content-center align-items-center">
                                        <span>April 27 2024 - 
                                            <button id="playButton1" class="btn btn-primary btn-sm" style="margin-left: 8px; padding: 0.25rem 0.5rem; font-size: 0.75rem;">Play Audio</button></span>
                                        </div>
                                        <!-- AMA 1 Audio Controls -->
                                        <audio controls
                                            style="display: block; width: 100%; height: 30px; margin-top: 10px;"
                                            id="lazyAudio1">
                                            <source id="audioSource1" type="audio/mpeg" />
                                            Your browser does not support the audio element.
                                        </audio>
                                        <hr>
                                        <!-- AMA 2 -->
                                        <p class="text-center">Spiderpool AMA</p>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <span>December 23, 2024 - 
                                                <button id="playButton2" class="btn btn-primary btn-sm" style="margin-left: 8px; padding: 0.25rem 0.5rem; font-size: 0.75rem;">Play Audio</button>
                                            </span>
                                        </div>
                                        <!-- AMA 2Audio Controls -->
                                        <audio controls
                                            style="display: block; width: 100%; height: 30px; margin-top: 10px;"
                                            id="lazyAudio2">
                                            <source id="audioSource2" type="audio/mpeg" />
                                            Your browser does not support the audio element.
                                        </audio>
                                        <hr>
                                        <!-- AMA 3 -->
                                        <p class="text-center">BIT & Dingocoin AMA</p>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <span>December 26th 2024 
                                                <button id="playButton3" class="btn btn-primary btn-sm" style="margin-left: 8px; padding: 0.25rem 0.5rem; font-size: 0.75rem;">Play Audio</button></span>
                                        </div>
                                        <!-- AMA 3 Audio Controls -->
                                        <audio controls
                                            style="display: block; width: 100%; height: 30px; margin-top: 10px;"
                                            id="lazyAudio3">
                                            <source id="audioSource3" type="audio/mpeg" />
                                            Your browser does not support the audio element.
                                        </audio>
                                        <hr>
                                        <!-- AMA 4 -->
                                        <p class="text-center">DingoCoin & Fl!p AMA</p>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <span>December 27th 2024 
                                                <button id="playButton4" class="btn btn-primary btn-sm" style="margin-left: 8px; padding: 0.25rem 0.5rem; font-size: 0.75rem;">Play Audio</button></span>
                                        </div>
                                        <!-- AMA 4 Audio Controls -->
                                        <audio controls
                                            style="display: block; width: 100%; height: 30px; margin-top: 10px;"
                                            id="lazyAudio4">
                                            <source id="audioSource4" type="audio/mpeg" />
                                            Your browser does not support the audio element.
                                        </audio>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        // JavaScript for handling audio playback
                        document.getElementById('playButton1').addEventListener('click', function() {
                            const audioSource1 = document.getElementById('audioSource1');
                            audioSource1.src = '/includes/media/ama/dingo-april-24-ama.mp3';
                            document.getElementById('lazyAudio1').load();
                            document.getElementById('lazyAudio1').play().catch(function(error) {
                                console.error('Playback failed:', error);
                            });
                        });

                        // JavaScript for handling audio playback
                        document.getElementById('playButton2').addEventListener('click', function() {
                            const audioSource2 = document.getElementById('audioSource2');
                            audioSource2.src = '/includes/media/ama/dingocoin-ama-12-23-24.mp3'; 
                            document.getElementById('lazyAudio2').load();
                            document.getElementById('lazyAudio2').play().catch(function(error) {
                            console.error('Playback failed:', error);
                            });
                        });

                        document.getElementById('playButton3').addEventListener('click', function() {
                            const audioSource3 = document.getElementById('audioSource3');
                            audioSource3.src = '/includes/media/ama/dingocoin-ama-12-26-24.mp3'; // Ensure this path is correct
                            document.getElementById('lazyAudio3').load(); // Load the audio
                            document.getElementById('lazyAudio3').play().catch(function(error) {
                                console.error('Playback failed:', error);
                            });
                        });

                        document.getElementById('playButton4').addEventListener('click', function() {
                            const audioSource4 = document.getElementById('audioSource4');
                            audioSource4.src = '/includes/media/ama/dingocoin-ama-12-27-24.mp3'; // Ensure this path is correct
                            document.getElementById('lazyAudio4').load(); // Load the audio
                            document.getElementById('lazyAudio4').play().catch(function(error) {
                                console.error('Playback failed:', error);
                            });
                        });
                    </script>
                </div>
            </div>
        </section>
        <!-- Where To Get Dingocoin -->
        <section>
            <div class="container where-container h-100">
                <header class="row pt-5">
                    <div class="col-12">
                        <h3 class="text-uppercase border-bottom mb-4">Where To Get</h3>
                    </div>
                </header>
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-12 text-center">
                        <div class="where-slider">
                            <!-- First set of logos -->
                            <div class="where-logos">
                                <script>
                                    exchanges.slice(0, 5).forEach((exchange) => {
                                        document.write(` <a href="${baseURL}" class="where-logo"> <img data-src="${baseImgURL}${exchange.img}.${format}" alt="${exchange.name}" class="grayscale" /> </a> `);
                                    });
                                </script>
                            </div>
                            <!-- Second set of logos -->
                            <div class="where-logos">
                                <script>
                                    exchanges.slice(5).forEach((exchange) => {
                                        document.write(` <a href="${baseURL}" class="where-logo"> <img data-src="${baseImgURL}${exchange.img}.${format}" alt="${exchange.name}" class="grayscale" /> </a> `);
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modals -->
    <!-- Telegram Modal -->
    <div class="modal fade" id="telegram-options" tabindex="-1" aria-labelledby="telegram-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content" style="background: linear-gradient(135deg, #000b0c 0%, #025b68 100%);">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="telegram-label">Dingocoin on Telegram</h5>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-4 text-center">
                                <i class="fa-brands fa-telegram fa-beat-2x1"></i><br>
                                <a href="https://t.me/DingoCoinTalk" class="btn btn-secondary" target="_blank"
                                    rel="nofollow">Telegram (English)</a>
                            </div>
                            <div class="col-md-4 text-center">
                                <i class="fa-brands fa-telegram fa-beat-2x1"></i><br>
                                <a href="https://t.me/DingoChinese" class="btn btn-secondary" target="_blank"
                                    rel="nofollow">Telegram (Chinese)</a>
                            </div>
                            <div class="col-md-4 text-center">
                                <i class="fa-brands fa-telegram fa-beat-2x1"></i><br>
                                <a href="https://t.me/DingocoinBharat" class="btn btn-secondary" target="_blank"
                                    rel="nofollow">Telegram (India)</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    style="color: white;">Close</button>
            </div>
        </div>
    </div>
    <!-- Privacy Modal -->
    <div class="modal fade" id="privacy-options" tabindex="-1" aria-labelledby="privacy-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content" style="background: linear-gradient(135deg, #000b0c 0%, #025b68 100%);">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="privacy-label">Dingocoin Privacy Policy</h5>
                </div>
                <div class="modal-body">
                    <div class="container privacy-container">
                        <div class="row justify-content-center">
                            <p>Thank you for choosing to be part of our community at The Dingocoin Project ("we," "us," or "our"). We are committed to protecting your personal information and your right to privacy. If you have any questions or concerns about this privacy notice or our practices with regard to your personal information, please contact us at admin@dingocoin.com.</p>
                            <p>This privacy notice describes how we might use your information if you:</p>
                            <ul>
                                <li>Visit our website at https://www.dingocoin.com, and/or sub-domain</li>
                                <li>Download and use our browser extension application Dingocoin Wallet</li>
                                <li>Engage with us in other related ways ― including any sales, marketing, or events</li>
                            </ul>
                            <p><strong>In this privacy notice, if we refer to:</strong></p>
                            <ul>
                                <li>"<strong>Website</strong>," we are referring to any website of ours that references or links to this policy</li>
                                <li>"<strong>App</strong>," we are referring to any application of ours that references or links to this policy, including any listed above</li>
                                <li>"<strong>Services</strong>," we are referring to our Website, App, and other related services, including any sales, marketing, or events</li>
                            </ul>
                            <p>The purpose of this privacy notice is to explain to you in the clearest way possible what information we collect, how we use it, and what rights you have in relation to it. If there are any terms in this privacy notice that you do not agree with, please discontinue use of our Services immediately.</p>
                            <p>Please read this privacy notice carefully, as it will help you understand what we do with the information that we collect.</p>
                            <h6 class="privacy-title">1. What Information Do We Collect?</h6>
                            <p><strong>Personal Information You Disclose To Us</strong></p>
                            <p>We collect personal information that you voluntarily provide to us when you express an interest in obtaining information about us or our products and Services, when you participate in activities on the Services or otherwise when you contact us. The personal information that we collect depends on the context of your interactions with us and the Services, the choices you make and the products and features you use. The personal information we collect may include the following: passwords; usernames; and other similar information. All personal information that you provide to us must be true, complete and accurate, and you must notify us of any changes to such personal information.</p>
                            <p><strong>Information Automatically Collected</strong></p>
                            <p>We automatically collect certain information when you visit, use or navigate the Services. This information does not reveal your specific identity (like your name or contact information) but may include device and usage information, such as your IP address, browser and device characteristics, operating system, language preferences, referring URLs, device name, country, location, information about how and when you use our Services and other technical information. This information is primarily needed to maintain the security and operation of our Services, and for our internal analytics and reporting purposes. The information we collect includes:</p>
                            <ul>
                                <li><strong>Log and Usage Data:</strong> Log and usage data is service-related, diagnostic, usage and performance information our servers automatically collect when you access or use our Services and which we record in log files. Depending on how you interact with us, this log data may include your IP address, device information, browser type and settings and information about your activity in the Services (such as the date/time stamps associated with your usage, pages and files viewed, searches and other actions you take such as which features you use), device event information (such as system activity, error reports (sometimes called 'crash dumps') and hardware settings).</li>
                                <li><strong>Device Data:</strong> We collect device data such as information about your computer, phone, tablet or other device you use to access the Services. Depending on the device used, this device data may include information such as your IP address (or proxy server), device and application identification numbers, location, browser type, hardware model Internet service provider and/or mobile carrier, operating system and system configuration information.</li>
                                <li><strong>Location Data:</strong> We collect location data such as information about your device's location, which can be either precise or imprecise. How much information we collect depends on the type and settings of the device you use to access the Services. For example, we may use GPS and other technologies to collect geolocation data that tells us your current location (based on your IP address). You can opt out of allowing us to collect this information either by refusing access to the information or by disabling your Location setting on your device. Note however, if you choose to opt out, you may not be able to use certain aspects of the Services.</li>
                            </ul>
                            <p><strong>Information Collected Through Our App</strong></p>
                            <p>If you use our App, we also collect the following information: Mobile Device Data. We automatically collect device information (such as your mobile device ID, model and manufacturer), operating system, version information and system configuration information, device and application identification numbers, browser type and version, hardware model, Internet service provider and/or mobile carrier, and Internet Protocol (IP) address (or proxy server). If you are using our App, we may also collect information about the phone network associated with your mobile device, your mobile device's operating system or platform, the type of mobile device you use, your mobile device's unique device ID and information about the features of our App you accessed. This information is primarily needed to maintain the security and operation of our App, for troubleshooting and for our internal analytics and reporting purposes.</p>
                            <h6 class="privacy-title">2. Will Your Information Be Shared With Anyone?</h6>
                            <p>We may process or share your data that we hold based on the following legal basis:</p>
                            <ul>
                                <li><strong>Consent:</strong> We may process your data if you have given us specific consent to use your personal information for a specific purpose.</li>
                                <li><strong>Legitimate Interests:</strong> We may process your data when it is reasonably necessary to achieve our legitimate business interests.</li>
                                <li><strong>Performance of a Contract:</strong> Where we have entered into a contract with you, we may process your personal information to fulfill the terms of our contract.</li>
                                <li><strong>Legal Obligations:</strong> We may disclose your information where we are legally required to do so in order to comply with applicable law, governmental requests, a judicial proceeding, court order, or legal process, such as in response to a court order or a subpoena (including in response to public authorities to meet national security or law enforcement requirements).</li>
                                <li><strong>Vital Interests:</strong> We may disclose your information where we believe it is necessary to investigate, prevent, or take action regarding potential violations of our policies, suspected fraud, situations involving potential threats to the safety of any person and illegal activities, or as evidence in litigation in which we are involved.</li>
                            </ul>
                            <p>More specifically, we may need to process your data or share your personal information in the following situations:</p>
                            <ul>
                                <li><strong>Business Transfers:</strong> We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.</li>
                                <li><strong>Vendors, Consultants and Other Third-Party Service Providers:</strong> We may share your data with third-party vendors, service providers, contractors or agents who perform services for us or on our behalf and require access to such information to do marketing efforts. We may allow selected third parties to use tracking technology on the Services, which will enable them to collect data on our behalf about how you interact with our Services over time. This information may be used to, among other things, analyze and track data, determine the popularity of certain content, pages or features, and better understand online activity. Unless described in this notice, we do not share, sell, rent or trade any of your information with third parties for their promotional purposes. We have contracts in place with our data processors, which are designed to help safeguard your personal information. This means that they cannot do anything with your personal information unless we have instructed them to do it. They will also not share your personal information with any organization apart from us. They also commit to protect the data they hold on our behalf and to retain it for the period we instruct.</li>
                            </ul>
                            <h6 class="privacy-title">3. Who Will Your Information Be Shared With?</h6>
                            <p>We only share and disclose your information with the following third parties. If we have processed your data based on your consent and you wish to revoke your consent, please contact us using the contact details provided in the section below titled "How Can You Contact Us About This Notice?".</p>
                            <ul>
                                <li>Cloudflare Analytics</li>
                                <li>Google Analytics</li>
                            </ul>
                            <h6 class="privacy-title">4. How Long Do We Keep Your Information?</h6>
                            <p>We will only keep your personal information for as long as it is necessary for the purposes set out in this privacy notice, unless a longer retention period is required or permitted by law (such as tax, accounting or other legal requirements). When we have no ongoing legitimate business need to process your personal information, we will either delete or anonymize such information, or, if this is not possible (for example, because your personal information has been stored in backup archives), then we will securely store your personal information and isolate it from any further processing until deletion is possible.</p>
                            <h6 class="privacy-title">5. How Do We Keep Your Information Safe?</h6>
                            <p>We have implemented appropriate technical and organizational security measures designed to protect the security of any personal information we process. However, despite our safeguards and efforts to secure your information, no electronic transmission over the Internet or information storage technology can be guaranteed to be 100% secure, so we cannot promise or guarantee that hackers, cybercriminals, or other unauthorized third parties will not be able to defeat our security, and improperly collect, access, steal, or modify your information. Although we will do our best to protect your personal information, transmission of personal information to and from our Services is at your own risk. You should only access the Services within a secure environment.</p>
                            <h6 class="privacy-title">6. Do We Collect Information From Minors?</h6>
                            <p>We do not knowingly solicit data from or market to children under 18 years of age. By using the Services, you represent that you are at least 18 or that you are the parent or guardian of such a minor and consent to such minor dependent's use of the Services. If we learn that personal information from users less than 18 years of age has been collected, we will deactivate the account and take reasonable measures to promptly delete such data from our records. If you become aware of any data we may have collected from children under age 18, please contact us at admin@dingocoin.com.</p>
                            <h6 class="privacy-title">7. What Are Your Privacy Rights?</h6>
                            <p>In some regions (like the EEA and UK), you have certain rights under applicable data protection laws. These may include the right (i) to request access and obtain a copy of your personal information, (ii) to request rectification or erasure; (iii) to restrict the processing of your personal information; and (iv) if applicable, to data portability. In certain circumstances, you may also have the right to object to the processing of your personal information. To make such a request, please use the contact details provided below. We will consider and act upon any request in accordance with applicable data protection laws.</p>
                            <p>If you are a resident in the EEA or UK and you believe we are unlawfully processing your personal information, you also have the right to complain to your local data protection supervisory authority. You can find their contact details here: <a href="https://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm">https://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm</a>.</p>
                            <p>If you are a resident in Switzerland, the contact details for the data protection authorities are available here: <a href="https://www.edoeb.admin.ch/edoeb/en/home.html">https://www.edoeb.admin.ch/edoeb/en/home.html</a>.</p>
                            <h6 class="privacy-title">8. Controls For Do-Not-Track Features</h6>
                            <p>Most web browsers and some mobile operating systems and mobile applications include a Do-Not-Track ("DNT") feature or setting you can activate to signal your privacy preference not to have data about your online browsing activities monitored and collected. At this stage no uniform technology standard for recognizing and implementing DNT signals has been finalized. As such, we do not currently respond to DNT browser signals or any other mechanism that automatically communicates your choice not to be tracked online. If a standard for online tracking is adopted that we must follow in the future, we will inform you about that practice in a revised version of this privacy notice.</p>
                            <h6 class="privacy-title">9. Do We Make Updates To This Notice?</h6>
                            <p>We may update this privacy notice from time to time. The updated version will be indicated by an updated "Revised" date and the updated version will be effective as soon as it is accessible. If we make material changes to this privacy notice, we may notify you either by prominently posting a notice of such changes or by directly sending you a notification. We encourage you to review this privacy notice frequently to be informed of how we are protecting your information.</p>
                            <h6 class="privacy-title">10. How Can You Contact Us About This Notice?</h6>
                            <p>If you have questions or comments about this notice, you may email us at admin@dingocoin.com.</p>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    style="color: white;">Close</button>
            </div>
        </div>
    </div>
    <!-- Exchanges Modal -->
    <div class="modal fade" id="exchange-options" tabindex="-1" aria-labelledby="exchange-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content" style="background: linear-gradient(135deg, #000b0c 0%, #025b68 100%);">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="exchange-label">Where To Get Dingocoin</h5>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="container mt-5">
                                <!--<h1 class="text-center mb-4"></h1>-->
                                <div class="row">
                                    <!-- Exchange Section for AscendEX -->
                                    <section class="col-md-6 my-4 text-center flex-fill">
                                        <div>
                                            <img src="https://dev.dingocoin.com/img/exchanges/ascendex-2.webp" alt="AscendEX Logo" class="logo-img grayscale" style="width: 125px; height: auto;">
                                        </div>
                                        <div>
                                            <a href="https://ascendex.com/en/cashtrade-spottrading/usdt/dingo" class="btn btn-primary me-2" aria-label="Visit AscendEX USDT" target="_blank" rel="nofollow">USDT</a>
                                        </div>
                                    </section>
                                    <!-- Exchange Section for Mexc -->
                                    <section class="col-md-6 my-4 text-center flex-fill">
                                        <div>
                                            <img src="https://dev.dingocoin.com/img/exchanges/mexc-2.webp" alt="Mexc Logo" class="logo-img grayscale" style="width: 125px; height: auto;">
                                        </div>
                                        <div>
                                            <a href="https://www.mexc.com/exchange/DINGO_USDT" class="btn btn-primary me-2" aria-label="Visit Mexc USDT" target="_blank" rel="nofollow">USDT</a>
                                        </div>
                                    </section>
                                    <!-- Exchange Section for CoinEx -->
                                    <section class="col-md-6 my-4 text-center flex-fill">
                                        <div>
                                            <img src="https://dev.dingocoin.com/img/exchanges/coinex-2.webp" alt="CoinEx Logo" class="logo-img grayscale" style="width: 125px; height: auto;">
                                        </div>
                                        <div>
                                            <a href="https://www.coinex.com/en/exchange/DINGO-USDT" class="btn btn-primary me-2" aria-label="Visit CoinEx USDT" target="_blank" rel="nofollow">USDT</a>
                                        </div>
                                    </section>
                                    <!-- Exchange Section for XT -->
                                    <section class="col-md-6 my-4 text-center flex-fill">
                                        <div>
                                            <img src="https://dev.dingocoin.com/img/exchanges/xt-2.webp" alt="XT Logo" class="img-fluid grayscale" style="width: 125px; height: auto;">
                                        </div>
                                        <div>
                                            <a href="https://www.xt.com/trade/dingo_usdt" class="btn btn-primary me-2" aria-label="Visit XT USDT" target="_blank" rel="nofollow">USDT</a>
                                        </div>
                                    </section>
                                    <!-- Exchange Section for BitMart -->
                                    <section class="col-md-6 my-4 text-center flex-fill">
                                        <div>
                                            <img src="https://dev.dingocoin.com/img/exchanges/bitmart-2.webp" alt="BitMart Logo" class="img-fluid grayscale" style="width: 125px; height: auto;">
                                        </div>
                                        <div>
                                            <a href="https://www.bitmart.com/trade/en-US?symbol=DINGO_USDT&layout=basic" class="btn btn-primary me-2" aria-label="Visit BitMart USDT" target="_blank" rel="nofollow">USDT</a>
                                        </div>
                                    </section>
                                    <!-- Exchange Section for TradeOgre -->
                                    <section class="col-md-6 my-4 text-center flex-fill">
                                        <div>
                                            <img src="https://dev.dingocoin.com/img/exchanges/tradeogre-2.webp" alt="TradeOgre Logo" class="img-fluid grayscale" style="width: 125px; height: auto;">
                                        </div>
                                        <div>
                                            <a href="https://tradeogre.com/exchange/DINGO-USDT" class="btn btn-primary me-2" aria-label="Visit TradeOgre USDT" target="_blank" rel="nofollow">USDT</a>
                                        </div>
                                    </section>
                                    <!-- Exchange Section for Raydium -->
                                    <section class="col-md-6 my-4 text-center flex-fill">
                                        <div>
                                            <img src="https://dev.dingocoin.com/img/exchanges/raydium-2.webp" alt="Raydium Logo" class="img-fluid grayscale" style="width: 125px; height: auto;">
                                        </div>
                                        <div>
                                            <a href="https://raydium.io/swap/?inputCurrency=sol&outputCurrency=6VYF5jXq6rfq4QRgGMG6co7b1Ev1Lj7KSbHBxfQ9e1L3&outputAmount=0&fixed=in&inputMint=EPjFWdd5AufqSSqeM2qN1xzybapC8G4wEGGkZwyTDt1v&outputMint=6VYF5jXq6rfq4QRgGMG6co7b1Ev1Lj7KSbHBxfQ9e1L3" class="btn btn-primary me-2" aria-label="Visit Raydium" target="_blank" rel="nofollow">wDingocoin</a>
                                        </div>
                                    </section>
                                    <!-- Exchange Section for LBank -->
                                    <section class="col-md-6 my-4 text-center flex-fill">
                                        <div>
                                            <img src="https://dev.dingocoin.com/img/exchanges/lbank-2.webp" alt="LBank Logo" class="img-fluid grayscale" style="width: 125px; height: auto;">
                                        </div>
                                        <div>
                                            <a href="https://www.lbank.info/exchange/dingo/usdt" class="btn btn-primary me-2" aria-label="Visit LBank USDT" target="_blank" rel="nofollow">USDT</a>
                                        </div>
                                    </section>
                                    <!-- Exchange Section for PancakeSwap -->
                                    <section class="col-md-6 my-4 text-center flex-fill">
                                        <div>
                                            <img src="https://dev.dingocoin.com/img/exchanges/pancakeswap-2.webp" alt="PancakeSwap Logo" class="img-fluid grayscale" style="width: 125px; height: auto;">
                                        </div>
                                        <div>
                                            <a href="https://pancakeswap.finance/?inputCurrency=0x55d398326f99059fF775485246999027B3197955&outputCurrency=0x9b208b117B2C4F76C1534B6f006b033220a681A4" class="btn btn-primary me-2" aria-label="Visit PancakeSwap" target="_blank" rel="nofollow">wDingocoin</a>
                                        </div>
                                    </section>
                                    <!-- Exchange Section for XeggeX -->
                                    <section class="col-md-6 my-4 text-center flex-fill">
                                        <div>
                                            <img src="https://dev.dingocoin.com/img/exchanges/xeggex-2.webp" alt="XeggeX Logo" class="img-fluid grayscale" style="width: 125px; height: auto;">
                                        </div>
                                        <div>
                                            <a href="https://xeggex.com/market/DINGO_USDT" class="btn btn-primary me-2" aria-label="Visit XeggeX USDT" target="_blank" rel="nofollow">USDT</a>
                                            <a href="https://xeggex.com/market/DINGO_XPE" class="btn btn-primary me-2" aria-label="Visit XeggeX XPE" target="_blank" rel="nofollow">XPE</a>
                                        </div>
                                    </section>
                                    <!-- Exchange Section for Uniswap -->
                                    <section class="col-md-6 my-4 text-center flex-fill">
                                        <div>
                                            <img src="https://dev.dingocoin.com/img/exchanges/uniswap-1.webp" alt="Uniswap Logo" class="img-fluid grayscale" style="width: 125px; height: auto;">
                                        </div>
                                        <div>
                                            <a href="https://www.geckoterminal.com/polygon_pos/pools/0x468f71dc535239a5346e9d79378a1f3372cffbbf" class="btn btn-primary me-2" aria-label="Visit Uniswap USDT" target="_blank" rel="nofollow">USDT</a>
                                            <a href="https://www.geckoterminal.com/polygon_pos/pools/0xbbf668665cba7823120fd52da84585a70689bbdc" class="btn btn-primary me-2" aria-label="Visit Uniswap WETH" target="_blank" rel="nofollow">WETH</a>
                                            <a href="https://www.geckoterminal.com/polygon_pos/pools/0xe0b11d00b5c6b73931d1ae91016dab4f371fabe0" class="btn btn-primary me-2" aria-label="Visit Uniswap WMatic" target="_blank" rel="nofollow">WMatic</a>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="color: white;">Close</button>
            </div>
        </div>
    </div>
    <!-- Trailmap Modal -->
    <div class="modal fade" id="trailmap-options" tabindex="-1" aria-labelledby="trailmap-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content" style="background: linear-gradient(135deg, #000b0c 0%, #025b68 100%);">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="trailmap-label">Dingocoin Trailmap</h5>
                </div>
                <div class="modal-body" style="background: none; margin: 20px;">
                    <div class="container">
                        <div class="row justify-content-center">
                            <!-- Sections for each button -->
                            <section id="trailmap">
                                <p></p>
                                <div class="container mt-5">
                                    <label for="trailmapSections" class="form-label">Select a Section:</label>
                                        <select id="trailmapSections" class="form-select" onchange="scrollToSection(this.value)">
                                            <option value="" disabled selected>Select a section</option>
                                            <option value="trailmap">What Is The Dingocoin Trailmap?</option>
                                            <option value="manifesto">Our Manifesto</option>
                                            <option value="flip">Fl!p Mobile App</option>
                                            <option value="exchanges">Exchanges Listings</option>
                                            <option value="nexgen">NexGen</option>
                                            <option value="wallet-nft">Browser Wallet & NFT Platform</option>
                                            <option value="languages">Languages</option>
                                        </select>
                                    </div>

                                    <script>
                                        function scrollToSection(sectionId) {
                                        const section = document.getElementById(sectionId);
                                        if (section) {
                                        section.scrollIntoView({ behavior: 'smooth' });
                                        }
                                    }
                                </script>
                                <br>
                                <br>
                                <div class="container">
                                    <div>
                                        <h4>The Known Path</h4>
                                        <img src="/img/trailmap/trailmap-dec24-3.webp" alt="Trailmap" style="width: 100%; height: auto;">
                                    </div>
                                </div>
                                <br>
                                <!-- Do-ocracy -->
                                <!--<div class="container">
                                <div>
                                     <h4>Dingocoin DO-OCRACY</h4>
                                        <p>Dingocoin is a community-driven open-source project and its direction is formed by the many contributors to the various projects
                                            of the Dingocoin blockchain and ecosystem.</p>
                                             img alt="Image description " data-src="" style="width: 100%; height: auto;" alt="Dingocoin DO-OCRACY undergoing update">
                                            </div>
                                </div> -->
                                <br>
                                <div>
                                    <div class="container">
                                        <h4>What Is The Dingocoin Trailmap?</h4>
                                        <p>Dingocoin is inviting all to contribute to its development. The direction of Dingocoin is
                                            created by the many projects that the community chooses to undertake. From a fair launch, 
                                            guardians choose to come along and strive to continue creating happiness every day,
                                            the Dingocoin way. Dingocoin remains a decentralised project with guardians rather than 
                                            rulers, each whose projects and contributions stand or fall on their merits.<br>
                                            <br>
                                            This Trailmap represents places where the Dingocoin community have promised the
                                            Dingo, we are committed to explore, and that we believe will contribute to Dingocoin's success.
                                        </p>
                                        <img src="/img/trailmap/trailmap2april23.webp" alt="Image description" style="width: 100%; height: auto;">
                                        <br>
                                        <br>
                                        <h4>Why These Projects</h4>
                                        <p>We signed the Dingocoin Manifesto, committing to spreading happiness every day.
                                            Our community knows no boundaries, and wen believe opening up to all humans in 
                                            every language is our essential first step to spreading happiness everywhere. 
                                            We appreciate that this first step will consist of many small steps, and we welcome 
                                            all contributors, from all places, across all of humanity to become part of our community.</p>
                                        <p>Dingocoin is going beyond the exchanges by becoming part of payment apps and
                                            becoming available on fiat on-ramps, making deliberate steps to create a clear 
                                            use case for payments. Our easiest-use wallet in existence is another brave step to destroy boundaries
                                            in the adoption of Dingocoin. From our non-custodial browser wallet that is one-click installation, 
                                            to your favorite device we have a wallet for your taste.
                                            <a href="https://dingocoin.com">Get A Wallet</a> and you are one of us!
                                        </p>
                                        <p>We believe integration with games is essential for adoption, and we promote
                                            further development and integration with games.
                                            The meme and art community surrounding Dingocoin is strong, and our NFT platform
                                            will further add to the strength of this community
                                            while adding additional utility to Dingocoin.</p>
                                        <p>Our foundational initiatives to ease integration of Dingocoin with anything else
                                            consists of the Dingocoin NextGen framework,
                                            Libraries, SDKs and APIs. Dingocoin NextGen framework, Libraries, SDKs and APIs
                                            opens up new oppurtunities for payment
                                            providers, retailers, NFT artists, Game developers, Social Platforms and many
                                            more for quick integration of Dingocoin into
                                            their infrastructure through scalable backend solutions. A proposed Dingocoin
                                            Keyring App and Sdk will ensure rapid
                                            developments of apps that can transact over the chain using webwallet API and
                                            without holding user keys – a completely
                                            trustless model.</p>
                                        <h4>The Community Journey</h4>
                                        <p>Since Dingocoin is community led from Day 1 and each of its features evolved
                                            during this journey is the contribution and
                                            efforts of individual community members in building this ecosystem, we are proud
                                            to present the Trailmap of Dingocoin to you
                                            which will help in navigating all projects going on. It will also be useful to
                                            welcome new developers and contributors.</p>
                                        <p>The Trailmap is effort of Dingocoin community in making this coin a real utility
                                            vehicle for different ascpects. Unlike what
                                            is the case for countless minted tokens, the community is completely dedicated
                                            from the beginning in building useful products
                                            for the future.</p>
                                        <p>We believe in adoption of this very universal currency through utility only.
                                            Dingocoin is completely decentralized and is
                                            already adopted by many different members from different geographies</p>
                                        <h4>When Will It All Happen</h4>
                                        <p>The timeline working on such an adventure is not easy task, but the first steps
                                            have been taken for all of our community
                                            projects, and we welcome contributors to help us fulfill our vision. We already
                                            have powerful allies on our side, as well as a
                                            growing number of people eager to contribute development time to these
                                            open-source projects.</p>
                                    </div>
                                    <br>
                                </div>
                            </section>
                            <hr>
                            <section id="manifesto">
                                <h2>Our Manifesto</h2>
                                <p>We are Dingocoin, a wild crypto-movement, exploring new territory and spreading happiness is what we do.</p>
                                <p class="mb-4">Dingocoin was created by and for sovereigns throughout the world. From a fair launch, Guardians 
                                    choose to come along and strive to continue creating happiness every day, the Dingocoin way.</p>
                                <p>Through all our lives we have come to value:</p>
                                <ul>
                                    <li>Continuation of the Wisdom united into Dingocoin</li>
                                    <li>Genuine usefulness with creative and elegant community built solutions</li>
                                    <li>Being courageous and forging new paths around a broken financial system</li>
                                    <li>Eternal emission rewarding all newcomers for securing the Dingocoin network</li>
                                </ul>
                                </p>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-check bg-dark text-light btn-sm-square rounded-circle me-3 fw-bold"></i>
                                    <span>Founded: April 1st, 2021</span>
                                </div>
                            </section>
                            <hr>
                            <section id="flip">
                                <h2>Fl!p</h2>
                                <p>Dingocoin has partnered with Flip to go beyond the exchanges by becoming part of payment
                                    apps and becoming available on fiat on-ramps, making deliberate steps to create a clear use case
                                    for payments. Payment app integration allows hassle-free tipping or payments to anyone using just
                                    their phone number! <br> Whether you want to show appreciation for great service, strike up a 
                                    conversation or simply transfer value, Dingocoin is here for you! Go ahead and download mobile 
                                    payment apps for iOS and Android!</p>
                                </div>
                                <div class="container">
                                    <!-- section 1 -->
                                    <div class="container">
                                        <div class="row g-5 align-items-center">
                                            <div class="col-lg-6 d-flex justify-content-center align-items-center" style="height: 100%;">
                                                <img src="/img/sitemain/flip.webp" alt=" Flip Promo Image" class="img-fluid">
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="h-100">
                                                    <h1 class="display-6">
                                                        How It Works
                                                    </h1>
                                                    <h6>The only thing you need is the phone number to the person you want to send coins. <br>
                                                        The Flip app is non-custodial and generates a wallet with your own private key.</h6>
                                                    <br>
                                                    <ul>
                                                        <li>You can fund wallets directly from the Flip app using a credit card.</li>
                                                        <li>Flip works with Bitcoin, Dogecoin and Dingocoin as fully decentralized
                                                            proof-of-work coins with highest security</li>
                                                        <li>Flipping is free of charge, only blockchain transfer fees will apply</li>
                                                        <li>You can send coins to all phone numbers including users without the app
                                                            installed. In these cases, the receiver will be notified via sms that you have sent
                                                            them coins with a link to the app.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--<div class="container-xxl py-5">
                                                <small class="text-white">
                                                    *available for 5 billion people (Sell Feature available in the US soon), see
                                                    below for the complete list
                                                    <br>
                                                    Afghanistan, Albania, Angola, Anguilla, Antigua and Barbuda, Argentina, Armenia,
                                                    Aruba, Australia, Austria, Azerbaijan, Bahamas,
                                                    Bahrain, Barbados, Belarus, Belgium, Belize, Benin, Bermuda, Bhutan, Bolivia,
                                                    Bosnia and Herzegovina, Botswana, Brazil, Brunei,
                                                    Bulgaria, Burkina Faso, Cape Verde, Cambodia, Cameroon, Canada, Cayman Islands,
                                                    Chad, Chile, Colombia, Comoros, Congo,
                                                    Republic of the Congo, Democratic Republic of the, Costa Rica, Côte d'Ivoire,
                                                    Croatia, Curaçao, Cyprus, Czech Republic,
                                                    Denmark, Djibouti, Dominica, Dominican Republic, Ecuador, El Salvador, Eritrea,
                                                    Estonia, Eswatini, Fiji, Finland, France,
                                                    Gabon, Gambia, Georgia, Germany, Ghana, Gibraltar, Greece, Grenada, Guatemala,
                                                    Guinea, Guinea-Bissau, Guyana, Haiti,
                                                    Vatican City, Honduras, Hong Kong, Hungary, Iceland, India, Iran, Ireland,
                                                    Israel, Italy, Jamaica, Japan, Jordan, Kazakhstan,
                                                    Kenya, Korea, Republic of, Kuwait, Kyrgyzstan, Laos, Latvia, Lebanon, Liberia,
                                                    Libya, Liechtenstein, Lithuania, Luxembourg,
                                                    Macau, Madagascar, Malawi, Malaysia, Maldives, Mali, Malta, Mauritania,
                                                    Mauritius, Mexico, Micronesia, Moldova, Monaco,
                                                    Mongolia, Montenegro, Montserrat, Mozambique, Myanmar, Namibia, Nauru,
                                                    Netherlands, New Zealand, Nicaragua, Niger, Nigeria,
                                                    North Macedonia, Norway, Oman, Pakistan, Palau, Panama, Papua New Guinea,
                                                    Paraguay, Peru, Philippines, Poland, Portugal,
                                                    Qatar, Romania, Rwanda, St. Kitts and Nevis, St. Lucia, St. Vincent and the
                                                    Grenadines, Samoa, San Marino, São Tomé and Príncipe,
                                                    Saudi Arabia, Senegal, Serbia, Seychelles, Sierra Leone, Singapore, Slovakia,
                                                    Slovenia, Solomon Islands, Somalia, South Africa,
                                                    Spain, Sri Lanka, Sudan, Suriname, Sweden, Switzerland, Taiwan, Tajikistan,
                                                    Tanzania, Thailand, Togo, Tonga, Trinidad and Tobago,
                                                    Türkiye, Turkmenistan, Turks and Caicos Islands, Uganda, Ukraine, United Arab
                                                    Emirates, United Kingdom, Uruguay, Uzbekistan,
                                                    Vanuatu, Venezuela, Vietnam, British Virgin Islands, Yemen, Zambia, and
                                                    Zimbabwe.
                                                </small>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <hr>
                            <section id="exchanges">
                                <h2>Exchanges Listings</h2>
                                <div class="container">
                                    <img src="/img/trailmap/trailmappartnershipsapril23.webp" alt="Trailmap Partnerships" style="width: 100%; height: auto;">
                                    <br>
                                    <br>
                                    <div class="container">
                                        <h5>Current Marketplaces</h5>
                                        <p>Dingocoin is proudly traded at 10 marketplaces April-July 2021: Delion,
                                            Dex-Trade, Cratex August-October 2021:
                                            SouthXchange, wrapped on BSC chain January-February 2022: XT.com & Exbitron</p>
                                        <h5>Short-Term Listing Agenda - Centralized Exchanges</h5>
                                        <p>In the period leading up to the final halving in July 2022, Dingocoin expects to
                                            list at 2-3 global top 30 marketplaces, based on existing dialogues, as well as several smaller marketplaces.</p>
                                        <h5>Short-Term Listing Agenda - Decentralized Exchanges</h5>
                                        <p>Dingocoinis proud to have a wrapped version available on BSC and SOL chains. We
                                            also plan to wrap Dingocoin to more DEXes, including an Ethererum wrap. As we already have the technology and
                                            the community backing to do this, we are certain of our efforts to list Dingocoin at many more DEXes.</p>
                                        <h5>Longer-Term Listing Agenda</h5>
                                        <p>Past the final halving in July 2022, Dingocoin targets listings at both major and smaller marketplaces, and is 
                                            working toward listing at a global top 5 marketplace when we are ready, as well as reaching 25+ marketplaces in total
                                            by the end of 2022.</p>
                                        <br>
                                    </div>
                                </div>
                            </section>
                            <hr>
                            <section id="nexgen">
                                <h2>NexGen</h2>
                                <div class="container">
                                    <h4>Dingocoin NextGen</h4>
                                    <p>Dingocoin NextGen is a framework that has revolutionized crypto applications by decoupling user operations
                                        from blockchain interactions. In Dingocoin NextGen, users interact with NextGen applications without needing 
                                        to download an entire copy of the blockchain. At the same time, they maintain full custody and security of 
                                        their private keys, without ever revealing them to NextGen applications.</p>
                            
                                    <p>With Dingocoin NextGen, we have produced tools and applications never seen before in the realm of similar
                                        coins.Our Dingocoin browser wallet lets you hold and send Dingocoins entirely in your browser, and requires 
                                        less than a minute to setup. Our Dingocoin NFT platform interacts with the browser wallet, running an entire
                                        NFT trading platform on-chain without users ever having to leave their browser.</p>
                            
                                    <p>Dingocoin NextGen marks a turning point in our development methodology. With NextGen, users will be able to
                                        use Dingocoin anywhere for anything, without all the heavy lifting required in other coins. 
                                        These projects will ultimately build a solid foundation toward adoption and utilization of Dingocoin, accompanied 
                                        by throughput of unprecedented scale.</p>
                            
                                    <h4>NextGenLib</h4>
                                    <p>Dingocoin's NextGenLib, currently in the works, will be a library that will allow anyone to operate easily within
                                        the NextGen framework. This will be the first step towards making it possible for mass adoption of dingocoin among 
                                        developers and professionals from different disciplines. It can help keep track of a wallet, send and receive transactions 
                                        without the need for a local copy of the blockchain. It will also have a number of other advanced functions.</p>
                                </div>
                            </section>
                            <hr>
                            <section id="wallet-nft">
                                <h2>Browser Wallet & NFT Platform</h2>
                                <div class="container">
                                    <h5>Web 3.0 Transactions</h5>
                                    <p>We believe in bringing more people to the Dingocoin ecosystem to be a part of this very liberal and
                                        decentralised project through utility and adoption. With our recent Dingocoin browser wallet, we have successfully 
                                        penetrated the Web 3.0 frontier. You can now hold and send Dingocoin completely in your web browser. Our initiatives 
                                        are aimed to bring ease for developers to integrate Dingocoin into their web platforms - be it games, exchanges, NFT 
                                        platforms, or retailers - and bring down developmenttime.</p>
                                    <h5>Development Tools</h5>
                                    <p>One such problem that developer faces is a ready to integrate trustless approach to process Dingocoin transactions on 
                                        their own infrastructures. The Dingocoin browser wallet is such a utility aimed to fullfill this gap by providing API 
                                        solutions that can be setup quicky to accept Dingocoin payments to any web platform. These are already used in our 
                                        fully-functional <a href="https://nft.dingocoin.com" target="_blank">Dingocoin NFT Platform</a>.
                                        We are extremely close to releasing official documentation for our browser wallet. This will spark off an ecosystem of rapid 
                                        deployment for developers to integrate the browser wallet into their applications.
                                        </p>
                                    </div>
                            </section>
                            <hr>
                            <section id="languages">
                                <h2>Languages</h2>
                                <div class="container">
                                    <h4>All Around The World</h4>
                                    <p>Dingocoin community is made up of people from all over the world. Still we all are working hard to make Dingocoin a universal and liberal 
                                    currency, and we are committed to keeping it decentralised. Dingo Lingo is our attempt to make information accessible to anybody, regardless 
                                    of their language proficiency.</p><br><br>
                                </div>
                            </section>
                            <br>
                            <br>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="color: white;">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="text-center">
        <div class="container p-4">
            <section class="mb-4">
                <!-- Social Links -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/DingocoinOfficial/" target="_blank" rel="nofollow noopener noreferrer" aria-label="Dingocoin on Facebook">
                    <i class="fa-brands fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://x.com/dingocoincrypto" target="_blank" rel="nofollow noopener noreferrer" aria-label="Dingocoin on Twitter">
                    <i class="fa-brands fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://discord.gg/nQ4wmrzHjX" target="_blank" rel="nofollow noopener noreferrer" aria-label="Dingocoin on Discord">
                    <i aria-hidden="true" class="fa-brands fa-discord"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#" data-bs-toggle="modal" data-bs-target="#telegram-options" role="button" aria-label="Dingocoin on Telegram">
                    <i class="fa-brands fa-telegram"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/dingocoin/" target="_blank" rel="nofollow noopener noreferrer" role="button" aria-label="Dingocoin on Instagram">
                    <i class="fa-brands fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.tiktok.com/@dingocoin" target="_blank" rel="nofollow noopener noreferrer role="button" aria-label="Dingocoin on Tic Tok">
                    <i class="fa-brands fa-tiktok"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.reddit.com/r/dingocoin/" target="_blank" rel="nofollow noopener noreferrer" role="button" aria-label="Dingocoin on Reddit">
                    <i aria-hidden="true" class="fa-brands fa-reddit-alien"></i></a>
            </section>
            <section class="mb-4">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h3 class="text-white">Get In Touch</h3>
                        <ul class="list-unstyled">
                            <li><a class="btn btn-link text-white" href="https://discord.gg/y3J946HFQM" target="_blank" rel="nofollow noopener noreferrer" aria-label="Join our official Discord" style="text-decoration: none;">Join Our Discord</a></li>
                            <li><a class="btn btn-link text-white" href="https://x.com/dingocoincrypto" target="_blank" rel="nofollow noopener noreferrer" aria-label="Follow us on Twitter" style="text-decoration: none;">Follow Us on Twitter</a></li>
                            <li><a class="btn btn-link text-white" data-bs-toggle="modal" data-bs-target="#telegram-options" rel="nofollow noopener noreferrer" aria-label="Connect on Telegram" style="text-decoration: none;">Connect on Telegram</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h3 class="text-white">Our Community</h3>
                        <ul class="list-unstyled">
                            <li><a class="btn btn-link text-white" href="https://wrap.dingocoin.com" target="_blank" aria-label="Explore Wrapped Dingocoin" style="text-decoration: none;">Explore Wrapped Dingocoin</a></li>
                            <li><a class="btn btn-link text-white" href="https://nft.dingocoin.com" target="_blank" aria-label="Visit our NFT Platform" style="text-decoration: none;">Visit Our NFT Platform</a></li>
                            <li><a class="btn btn-link text-white" href="https://blog.dingocoin.com" target="_blank"aria-label="Read the Dingocoin Blog" style="text-decoration: none;">Read Our Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h3 class="text-white">Quick Links</h3>
                        <ul class="list-unstyled">
                            <li><a class="btn btn-link text-white" data-bs-toggle="modal" data-bs-target="#exchange-options" role="button" rel="nofollow" aria-label="View Exchanges" style="text-decoration: none;">View Exchanges</a></li>
                            <li><a class="btn btn-link text-white" data-bs-toggle="modal" data-bs-target="#trailmap-options" role="button" aria-label="View Trailmap" style="text-decoration: none;">View Our Trailmap</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h3 class="text-white">Information</h3>
                        <ul class="list-unstyled">
                            <li><a class="btn btn-link text-white" data-bs-toggle="modal" data-bs-target="#privacy-options" role="button" aria-label="Read our Privacy Policy" style="text-decoration: none;">Read Our Privacy Policy</a></li>
                            <li><a class="btn btn-link text-white" href="https://dingocoin.com/dingocoin.pdf" target="_blank" rel="nofollow noopener noreferrer" aria-label="See our White Paper" style="text-decoration: none;">View Our White Paper</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <div class="text-center p-3">
            <div style="display: flex;">
                <div style="flex: 1;">© 2023-2024 Dingocoin.com - All Rights Reserved.</div>
            </div>
        </div>
    </footer>
    <!-- Defer non-critical JS -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script defer src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js'></script>
    <script defer src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js'></script>
    <script defer src="./script-main.js"></script>




</body>

</html>