<?php include "header.php"; ?>
    <main>
        <!-- particle js -->
        <div id="particles-js" class="">
            <div class="header">
                <h2 id="head">THEDESIGNS.com</h2>
                <h3 id="para">Right way to find<span class="ityped"></span></h3>    
            </div>
         </div>
        

        <!-- introductio -->
        <div class="container" id="intro">
            <div class="row">
                <div class="section center" style="">
                    <div class="col s-12 m12 l12">
                        <h3>Forever free, open source and easy to use</h3>
                        <p class="">Use our <strong>template, theme and snippet free</strong> for any project, personal or commercial. 
                            All of the item your see are built in the <strong>HTML5, CSS3 and Bootstrap or MaterializeCSS or other awsome freamworks</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>



        <!-- ------ TEMPLATE SECTION ------ -->
        <div class="container">
            <h2 class="center template_header" data-aos="zoom-in-up" data-aos-duration="400">Templates</h2>
            <br>
            <div class="row">
                <?php foreach($template_data as $data): ?>
                <div class="col s12 m4 l4">
                    <div class="card" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <div class="card-image">
                            <!-- <a href="Templates/"> -->
                            <?php 
                                $img = array(
                                    'src'=>base_url('file_upload/'.$data->template_image),
                                    'class'=>'responsive-img',
                                    
                                );
                            ?>
                            <?= anchor("Templates/templateView/{$data->id}", img($img)) ?>
                                <!-- <img src="<?= base_url('file_upload/'.$data->template_image) ?>" class="responsive-img" alt=""> -->
                            <!-- </a> -->
                            <!-- <a href="Templates" class="btn-floating halfway-fab waves-effect waves-light red tooltipped"><i class="material-icons">chevron_right</i></a> -->
                            <?= anchor("Templates/templateView/{$data->id}", "<i class='material-icons'>chevron_right</i>", ['class'=>'btn-floating halfway-fab waves-effect waves-light red tooltipped']) ?>

                        </div>
                        <div class="card-content">
                            <span class="card-title truncate"><h5><?= $data->template_header ?></h5></span>
                            <p class="truncate"><?= $data->sub_heading ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div><!--end row-->
            <hr class="grey-text text-lighten-3">
        </div>
        <!-- ------ !TEMPLATE SECTION ------ -->


        <!-- SNIPPETS SECTION -->
        <div class="container">
            <h2 class="center snippet_header" data-aos="zoom-in-up" data-aos-duration="400">Snippets</h2>
            <br>
            <div class="row">
                <div class="col s12 m4 l4">
                    <a href="#">
                        <div class="card hoverable" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="<?= base_url('/assets/images/adult-book-business-297755.jpg') ?>" class="responsive-img large" alt="">
                            </div>
                            <div class="card-content">
                                <span class="card-title snip-title truncate">materialize Login</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s12 m4 l4">
                    <a href="#">
                        <div class="card hoverable" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="<?= base_url('/assets/images/pexels-photo-356056.jpeg') ?>" class="responsive-img" alt="">
                            </div>
                            <div class="card-content">
                                <span class="card-title snip-title">Materialize Carousel</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s12 m4 l4">
                    <a href="#">
                        <div class="card hoverable" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="<?= base_url('/assets/images/pexels-photo-373076.jpeg') ?>" class="responsive-img" alt="">
                            </div>
                            <div class="card-content">
                                <span class="card-title snip-title">Materialize Slider</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div><!-- end row -->
            <div class="center" data-aos="zoom-in" data-aos-duration="500">
                <button id="snippet_btn" class="btn-large indigo lighten-1 waves-effect waves-light">View More Snippets..</button>
            </div>
            <br>
            <hr class="grey-text text-lighten-3">
            <br>
        </div>
        <!-- !SNIPPETS SECTION -->

        <!-- <iframe src="http://[::1]/TheDesigns/index.php/Templates/templateView/69">
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Document</title>
            </head>
            <body>
                <h3>hiren</h3>
            </body>
            </html>
        </iframe> -->

    </main>
    
<?php include "footer.php"; ?>