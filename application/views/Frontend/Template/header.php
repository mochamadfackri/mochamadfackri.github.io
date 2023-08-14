<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Inventarisir E-Goverment</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?php echo base_url().'assets/Frontend/images/favicon.png'?>" type="image/png">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url().'assets/Frontend/css/animate.css'?>">
        
    <!--====== Glide CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url().'assets/Frontend/css/tiny-slider.css'?>">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url().'assets/Frontend/css/LineIcons.2.0.css'?>">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url().'assets/Frontend/css/bootstrap-5.0.0-beta1.min.css'?>">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url().'assets/Frontend/css/default.css'?>">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url().'assets/Frontend/css/style.css'?>">

    <!--====== My CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url().'assets/Frontend/mycss/mystyle.css'?>">

    <!-- <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" /> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>

    <!-- <link href="<?php //echo base_url().'assets/Frontend/datatables/datatables.net-bs/css/dataTables.bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php //echo base_url().'assets/Frontend/datatables/datatables.net-buttons-bs/css/buttons.bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php //echo base_url().'assets/Frontend/datatables/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php //echo base_url().'assets/Frontend/datatables/datatables.net-responsive-bs/css/responsive.bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php //echo base_url().'assets/Frontend/datatables/datatables.net-scroller-bs/css/scroller.bootstrap.min.css'?>" rel="stylesheet"> -->
    

    <!-- <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    
</head>
<body>
   <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

 

    <!--====== HEADER PART START ======-->

    <section id="home" class="header_area">
        <div id="header_navbar" class="header_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="<?php echo base_url().'index.php/Frontend/index'?>">
                                <img id="" src="<?php echo base_url().'assets/Frontend/img/egov.png'?>" alt="Logo">
                            </a>
                            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class=" " href="<?php echo base_url().'index.php/Frontend/index'?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="<?php echo base_url().'index.php/Frontend/about'?>">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="<?php echo base_url().'index.php/Frontend/contacs'?>">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url().'index.php/Frontend/login'?>">Login</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->

        <div class="header_hero">
            <div class="">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="hero_content text-center">
                                <h2 class="" data-wow-duration="1.3s" data-wow-delay="0.2s">Welcome to Inventarisir</br>E-Government</h2><br><br><br><br>
                                <!-- <a href="#features" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Explore</a> -->
                            </div> <!-- hero content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single hero -->
        </div> <!-- header hero -->
    </section>    