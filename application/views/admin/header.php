<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TheDesign/Deshbord</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/assets/css/materialize.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/parsley.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/adminStyle.css') ?>">
    <style>
        header,
        main,
        footer {
            padding-left: 300px;
        }

        @media only screen and (max-width : 992px) {

            header,
            main,
            footer {
                padding-left: 0;
            }
        }
    </style>
</head>
<body>
    <header >
        <nav class="white" >
            <div class="nav-wrapper ">
                <a href="#" class="sidenav-trigger" data-target="slide-out"><i class="material-icons">menu</i> </a>
                <a href="<?= base_url() ?>" class="brand-logo">Deshbord</a>
            </div>
        </nav>
        <ul class="sidenav sidenav-fixed" id="slide-out" style="background-color: #1b1e24;">
            <li>
                <div class="user-view">
                    <div class="background" style="background-color: #22262e">
                        <!-- <img src="<?= base_url('/assets/images/charts-computer-data-669615.jpg') ?>" alt=""> -->
                    </div>
                    <div>
                        <!-- <img src="<?= base_url('/assets/images/hal-gatewood-613602-unsplash.jpg') ?>" class="circle" alt=""> -->
                        <h5 class="center">
                            <div class="section">
                                <a href="<?= base_url('deshbord') ?>" style="" class=""><span style="">T H E</span> D E S I G N S</a>
                            </div>    
                            <br><br>
                        </h5>
                    </div>
                </div>
            </li>
            <!-- <li><div class="divider"></div></li> -->
            <li><a href="<?= base_url('deshbord') ?>" class="waves-effect waves-light">Home</a></li>
            <li><a href="<?= base_url('Deshbord/template') ?>" class="waves-effect waves-light">Template</a></li>
            <li><a href="<?= base_url() ?>" class="waves-effect waves-light">Snippet</a></li>
            <li><a href="<?= base_url() ?>" class="waves-effect waves-light">Feedback</a></li>
            <li><div class="divider"></div></li>
            <?php if($this->session->userdata('id')): ?>
                <li><a href="<?= base_url('admin/logout') ?>" id="logout_btn" style="" class="btn waves-effect waves-light">Logout</a></li>
            <?php endif; ?>
        </ul>
    </header>