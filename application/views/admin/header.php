<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TheDesigns</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/assets/css/materialize.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/parsley.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/adminStyle.css') ?>">
</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper container">
                <a href="<?= base_url('Admin/login') ?>" class="brand-logo">TheDesign</a>
                <?php if($this->session->userdata('id')): ?>
                    <ul class="right">
                        <li>
                            <a href="<?= base_url('admin/logout') ?>" class="btn waves-effect waves-light transparent">logout</a>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </nav>
    </header>
