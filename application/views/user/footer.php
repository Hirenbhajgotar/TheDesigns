
    <!-- ------- FOOTER ------- -->
    <footer class="page-footer blue-grey darken-4">
        <div class="container">
            <div class="row">
                <div class="col s12 m4 l4">
                    <h5 class="grey-text text-lighten-3 valign-wrapper"><i class="material-icons">link</i>&nbsp;Quick Links</h5>
                    <ul id="links">
                        <li><a href="#" class="valign-wrapper"><i class="material-icons">person</i>&nbsp; ABOUT</a></li>
                        <li><a href="#" class="valign-wrapper"><i class="material-icons">art_track</i>&nbsp; SNIPPETS</a></li>
                        <li><a href="#" class="valign-wrapper"><i class="material-icons">call</i>&nbsp; CONTECT US</a></li>
                    </ul>
                </div>
                <div class="col s12 m5 l5 offset-m1 offset-l1">
                    <h5 class="grey-text text-lighten-3 valign-wrapper"><i class="material-icons">public</i>&nbsp;Social</h5>
                    <ul id="social">
                        <li><a href="#!"><i class="fab fa-google-plus-square fa-2x"></i></a></li>
                        <li><a href="#!"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                        <li><a href="#!"><i class="fab fa-instagram fa-2x"></i></a></li>
                    </ul>
                </div>
            </div><!-- !end row -->
        </div>
        <div class="footer-copyright">
            <div class="container">
                &copy; All Rights Reseved
            </div>
        </div>
    </footer>
    <!-- ------- !FOOTER ------- -->

    <!-- <script src="materialize/js/jquery.js"></script>
    <script src="materialize/js/materialize.min.js"></script>
    <script src="materialize/js/init.js"></script>
    <script src="materialize/fontawesome-free-5.1.1-web/js/all.min.js"></script> -->
    <script src="<?= base_url('/assets/js/jquery.js') ?>"></script>
    <script src="<?= base_url('/assets/js/materialize.min.js') ?>"></script>
    <script src="<?= base_url('/assets/js/dist/parsley.min.js') ?>"></script>


    <!-- AOS Scroll Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?= base_url('/assets/js/init.js') ?>"></script>
    <script>
      AOS.init();
    </script>

    <!-- particle js -->
    <script type="text/javascript" src="<?= base_url('assets/js/particles.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/app.js') ?>"></script>

    <!-- ityped js -->
    <script src="<?= base_url('assets/js/ityped.js') ?>"></script>
    <script type="text/javascript">
        window.ityped.init(document.querySelector('.ityped'),{
            strings   : [' template',' theme',' snippet'],
            showCursor: false,
            typeSpeed : 80,
            backSpeed : 30,
             backDelay: 1000,
        })
    </script>
</body>
</html>