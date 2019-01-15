<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Designs</title>

    <!-- Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- fontawsome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500|Open+Sans:300,400,600|Poppins:300,400,500|Source+Sans+Pro:300,400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,700" rel="stylesheet">
    
    <!-- AOS Scroll Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/materialize.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/parsley.css') ?>">

    <!-- normalize css/ reset css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/normalize.css') ?>">

    <!-- Custom Style -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <!-- NAVBAR -->
    <header>
        <nav>
            <div class="nav-wrapper container">
                <a href="#mobile-ver" class="modal-trigger hide-on-large-only right"><i class="material-icons">menu</i></a>
                <!-- <a href="#" class="sidenav-trigger right" data-target="mobile-demo"><i class="material-icons">menu</i></a> -->
                <a href="<?= base_url('') ?>" class="brand-logo left valign-wrapper"><span>THE</span>DESIGNS</a>
                <ul id="links" class=" right hide-on-med-and-down"> 
                    <li><a href="" >ABOUT US</a></li>
                    <!--DROPDOWN TRIGGER-->
                    <li><a href="" class="dropdown-trigger valign-wrapper" data-target="templates">TEMPLATES </a></li>
                    <!-- DROPDOWON CONTENT -->
                    <ul id="templates" class="dropdown-content">
                        <li><a href="">Bootstrap</a></li>
                        <li><a href="">MaterializeCSS</a></li>
                        <li><a href="">Other Templates</a></li>
                    </ul>
                    <!-- !DROPDOWON CONTENT -->
                    <li><a href="">SNIPPETS</a></li>
                    <li><a href="">CONTECT US</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- !NAVBAR -->



    <!-- sidenav modal -->
        <div class="modal" id="mobile-ver">
            <div class="modal-content ">
                <i class="material-icons right modal-close">close</i>
                <div class="section">
                    <h4 id="get_start">get started</h4>    
                </div>
                <div class="divider"></div>
                <div class="section" id="temp">
                    <h4 >templates</h4>
                    <ul>
                        <li><a href="">Bootstrap</a></li>
                        <li><a href="">Materialize Css</a></li>
                        <li><a href="">Other templates</a></li>
                    </ul>
                </div>
                <div class="divider"></div>
                <div class="section" id="snip">
                    <h4>Snippets</h4>
                    <ul>
                        <li><a href="">Bootstrap</a></li>
                        <li><a href="">Materialize Css</a></li>
                        <li><a href="">Other snippet</a></li>
                    </ul>
                </div>
                <div class="divider"></div>
                <div class="section" id="cont">
                    <h4><a href="">Contect us</a></h4>
                </div>
            </div>
        </div>
    <!-- !sidenav modal -->
