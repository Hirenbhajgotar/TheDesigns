<?php include "header.php"; ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col s12 m6 l6 offset-m3 offset-l3">
                <div class="section">
                    <div class="card">
                        <div class="card-content">
                            <h4 class="center blue-grey-text text-darken-1">Login</h4>
                            <div class="section">
                                <?= form_open('admin/login') ?>
                                    <div class="input-field">
                                        <i class="material-icons prefix">email</i>
                                        <input type="text" name="email" id="email">
                                        <label for="email">EMAIL</label>
                                    </div>
                                    <?= form_error('email') ?>

                                    <div class="input-field">
                                        <i class="material-icons prefix">phone</i>
                                        <input type="text" name="password" id="password">
                                        <label for="password">PASSWORD</label>
                                    </div>
                                    <?= form_error('password') ?>
                                    <button type="submit" class="btn waves-effect waves-light">Login</button>
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