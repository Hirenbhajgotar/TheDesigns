<?php include "login_signup_header.php"; ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6 offset-m3 offset-l3">
                    <div class="section">
                        <div class="card">
                            <div class="card-content">
                                <h4 class="center blue-grey-text text-darken-1">Sign up</h4>
                                <div class="section">
                                    <?= form_open('Admin/Signup',['id'=>'form']) ?>
                                        <div class="input-field">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input type="text" name="username" id="username" data-parsley-required data-parsley-length="[4, 15]" data-parsley-trigger="keyup" data-parsley-pattern="^[a-zA-Z0-9_]*$">
                                            <label for="username">USERNAME</label>
                                        </div>
                                        <?= form_error('username') ?>

                                        <div class="input-field">
                                            <i class="material-icons prefix">email</i>
                                            <input type="email" name="email" id="email" data-parsley-required data-parsley-type="email" data-parsley-trigger="keyup">
                                            <label for="email">EMAIL</label>
                                        </div>
                                        <?= form_error('email') ?>

                                        <div class="input-field">
                                            <i class="material-icons prefix">phone</i>
                                            <input type="password" name="password" id="password" data-parsley-required data-parsley-length="[3, 25]" data-parsley-pattern="^[a-zA-Z0-9_]*$" data-parsley-trigger="keyup">
                                            <label for="password">PASSWORD</label>
                                        </div>
                                        <?= form_error('password') ?>

                                        <div class="input-field">
                                            <i class="material-icons prefix">phone</i>
                                            <input type="password" id="confirm_password" data-parsley-required data-parsley-equalto="#password" data-parsley-pattern="^[a-zA-Z0-9_]*$" data-parsley-length="[3, 25]">
                                            <label for="confirm_password">CONFIRM PASSWORD</label>
                                        </div>
                                        
                                        <button type="submit" class="btn indigo lighten-1 waves-effect waves-light">Sign up</button>
                                        Have an account? <a href="<?= base_url('admin/login') ?>">Login</a>
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