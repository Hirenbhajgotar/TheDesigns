<?php include "header.php"; ?>
    <main>
        <!-- ------ SLIDER ----- -->
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="<?= base_url('/assets/images/book-computer-design-326424.jpg') ?>" class="responsive-img" alt="">
                    <div class="caption center-align">
                        <h3>THE DESIGNS</h3>
                        <h5>Use our templates and snippets for any project, personal or commercial. 
                            All of the item your see are built in the Bootstrap or MaterializeCSS.
                        </h5>
                    </div>
                </li>
                <li>
                    <img src="<?= base_url('/assets/images/hal-gatewood-613602-unsplash.jpg') ?>" class="responsive-img" alt="">
                    <div  class="caption left-align">
                        <h3>Templates</h3>
                        <h5>Fully Awsome and Cool Responsive Templates</h5>
                    </div>
                </li>
                <li>
                    <img src="<?= base_url('/assets/images/charts-computer-data-669615.jpg') ?>" class="responsive-img" alt="">
                    <div class="caption right-align">
                        <h3>Snippets</h3>
                        <h5>Awsome Vareint framework's Snippets</h5>
                    </div>
                </li>
            </ul>
        </div>
        <!-- ------ !SLIDER ----- -->


        <!-- ------ TEMPLATE SECTION ------ -->
        <div class="container">
            <h2 class="center template_header" data-aos="fade-down">Templates</h2>
            <hr class="my_hr" id="hr1" style="width: 28%;">
            <br>
            <div class="row">
                <?php foreach($template_data as $data): ?>
                <div class="col s12 m4 l4">
                    <div class="card">
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
                            <a href="Templates" class="btn-floating halfway-fab waves-effect waves-light btn-large red tooltipped"><i class="material-icons">chevron_right</i></a>
                            
                        </div>
                        <div class="card-content">
                            <span class="card-title"><?= $data->template_header ?></span>
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
            <h2 class="center snippet_header"><span>S</span>nippets</h2>
            <hr class="my_hr" id="hr2">
            <br>
            <div class="row">
                <div class="col s12 m4 l4">
                    <a href="#">
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="<?= base_url('/assets/images/adult-book-business-297755.jpg') ?>" class="responsive-img large" alt="">
                            </div>
                            <div class="card-content">
                                <span class="card-title">materialize Login</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s12 m4 l4">
                    <a href="#">
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="<?= base_url('/assets/images/pexels-photo-356056.jpeg') ?>" class="responsive-img" alt="">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Materialize Carousel</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s12 m4 l4">
                    <a href="#">
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="<?= base_url('/assets/images/pexels-photo-373076.jpeg') ?>" class="responsive-img" alt="">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Materialize Slider</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div><!-- end row -->
            <div class="center">
                <button id="snippet_btn" class="btn-large indigo lighten-1 waves-effect waves-light">View More Snippets..</button>
            </div>
            <br>
            <hr class="grey-text text-lighten-3">
            <br>
        </div>
        <!-- !SNIPPETS SECTION -->
    </main>
    
<?php include "footer.php"; ?>