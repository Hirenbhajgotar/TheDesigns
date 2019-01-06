<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Designs</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <!-- AOS Scroll Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/materialize.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/parsley.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <!-- NAVBAR -->
    <header>
        <nav>
            <div class="nav-wrapper container">
                <a href="#" class="sidenav-trigger right" data-target="mobile-demo"><i class="material-icons">menu</i></a>
                <a href="<?= base_url('') ?>" class="brand-logo left valign-wrapper"><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-right"></i><span>THE</span>DESIGNS</a>
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
            <!-- SIDENAV -->
            <ul class="sidenav" id="mobile-demo">
                <li class="section">
                    <div class="user-view">
                        <h3 href="#" class="teal-text center">THEDESIGNS</h3>
                    </div>
                </li>
                <div class="divider"></div>
                <li><a href="#" class="waves-effect waves-teal">ABOUT <i class="material-icons">person</i></a></li>
                <!-- <li><a href="">TEMPLATES <i class="material-icons right">arrow_drop_down</i></a></li> -->
                <li>
                    <ul class="collapsible">
                        <li> 
                            <a href="#" class="collapsible-header waves-effect waves-teal">TEMPLATES <i class="material-icons left">art_track</i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="#" class="waves-effect waves-teal">Bootstrap</a></li>
                                    <li><a href="#" class="waves-effect waves-teal">MaterializeCSS</a></li>
                                    <li><a href="#" class="waves-effect waves-teal">Other Templates</a></li>
                                </ul>
                            </div>                            
                        </li>
                    </ul>
                </li>
                <li><a href="#" class="waves-effect waves-teal">SNIPPETS <i class="material-icons">view_quilt</i></a></li>
                <li><a href="#" class="waves-effect waves-teal">CONTECT US <i class="material-icons">call</i></a></li>
            </ul>
            <!-- !SIDENAV -->
        </nav>
    </header>
    <!-- !NAVBAR -->

