<?php include "header.php"; ?>
    <main>
        <!-- ------ SLIDER ----- -->
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="<?= base_url('/assets/images/book-computer-design-326424.jpg') ?>" class="responsive-img" alt="">
                    <div class="caption center-align">
                        <h3>TheDesigns</h3>
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
            <h2 class="center template_header">Templates</h2>
            <hr class="my_hr" style="width: 28%;">
            <br>
            <div class="row">
                <div class="col s12 m4 l4">
                    <div class="card">
                        <div class="card-image">
                            <img src="<?= base_url('/assets/images/ai-close-up-code-160107.jpg') ?>" class="responsive-img" alt="">
                            
                            <button class="btn-floating halfway-fab waves-effect waves-light btn-large red tooltipped"><i class="material-icons">chevron_right</i></button>
                        </div>
                        <div class="card-content">
                            <span class="card-title">Template 1</span>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus dolorem corrupti accusamus maiores ab excepturi aliquid nesciunt expedita dolorum mollitia?</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="card">
                        <div class="card-image">
                            <img src="<?= base_url('/assets/images/dan-burton-682986-unsplash.jpg') ?>" class="responsive-img" alt="">
                            <button class="btn-floating halfway-fab waves-effect waves-light btn-large red tooltipped"><i class="material-icons">chevron_right</i></button>
                        </div>
                        <div class="card-content">
                            <span class="card-title">Template 2</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis officiis sunt incidunt porro repellendus impedit nostrum nulla sint quasi quis.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="card">
                        <div class="card-image">
                            <img src="<?= base_url('/assets/images/pexels-photo.jpg') ?>" class="responsive-img" alt="">
                            <button class="btn-floating halfway-fab waves-effect waves-light btn-large red tooltipped"><i class="material-icons">chevron_right</i></button>
                        </div>
                        <div class="card-content">
                            <span class="card-title">Template 3</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis voluptate laborum non omnis neque corporis magnam inventore laboriosam in totam.</p>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
            <hr class="grey-text text-lighten-3">
        </div>
        <!-- ------ !TEMPLATE SECTION ------ -->


        <!-- SNIPPETS SECTION -->
        <div class="container">
            <h2 class="center snippet_header">Snippets</h2>
            <hr class="my_hr">
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
                <button id="snippet_btn" class="btn-large waves-effect waves-light">View More Snippets..</button>
            </div>
            <br>
            <hr class="grey-text text-lighten-3">
            <br>
        </div>
        <!-- !SNIPPETS SECTION -->
    </main>
    
<?php include "footer.php"; ?>