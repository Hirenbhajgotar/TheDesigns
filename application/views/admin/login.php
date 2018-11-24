<?php include "login_signup_header.php"; ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col s12 m6 l6 offset-m3 offset-l3">
                <div class="section">
                    <div class="card">
                        <div class="card-content">
                            <h4 class="center blue-grey-text text-darken-1">Login</h4>
                            <div class="section">
                                <?= form_open('admin/login',['id'=>'form']) ?>
                                    <div class="input-field">
                                        <i class="material-icons prefix">email</i>
                                        <input type="text" name="email" id="email" data-parsley-required data-parsley-type="email" data-parsley-trigger="keyup">
                                        <label for="email">EMAIL</label>
                                    </div>
                                    <?= form_error('email') ?>

                                    <div class="input-field">
                                        <i class="material-icons prefix">phone</i>
                                        <input type="password" name="password" id="password" data-parsley-required data-parsley-length="[3, 25]" data-parsley-pattern="^[a-zA-Z0-9_]*$" data-parsley-trigger="keyup">
                                        <label for="password">PASSWORD</label>
                                    </div>
                                    <?= form_error('password') ?>
                                    <button type="submit" class="btn indigo lighten-1 waves-effect waves-light">Login</button>
                                    New to theDesigns? <a href="<?= base_url('admin/signup') ?>">Create an account</a>
                                <?= form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>




<?php include "footer.php"; ?>

<?php
if($msg = $this->session->flashdata('msg')){
    if(isset($msg)){
        $message = $msg;
        echo "
            <script>
                $(document).ready(function(){
                    M.toast({html:'$message',classes:'deep-orange-text text-accent-2'});
                });
            </script>
        ";

    }
}
?>