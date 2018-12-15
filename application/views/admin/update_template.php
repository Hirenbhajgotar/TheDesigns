<?php include "header.php" ?>
<main>
    <div class="container" id="update_temp">
        <div class="row">
            <div class="col s12 m10 l10 offset-m1 offset-l1">
                    
                <div class="card">
                    <?php echo form_open_multipart("Deshbord/update_temp_data/{$templates_data->id}",['id'=>'update_form']) ?>
                        <div class="card-content">
                            <div class="section">
                                <h4 class="center blue-grey-text text-darken-1">
                                    update template
                                </h4>
                            </div>
                            
                       
                            <div class="input-field" id="head_input">
                                <i class="material-icons prefix">create</i>
                                <label for="template_header">template header</label>
                                <input type="text" name="template_header" id="template_header" value="<?= set_value('template_header',$templates_data->template_header) ?>" data-parsley-required data-parsley-trigger="keyup" data-parsley-pattern="^[a-zA-Z0-9_ ]*$">
                            </div>
                            <?php echo form_error('template_header') ?>
                            
                            <div class="input-field file-field">
                                <div class="btn btn-flat transparent black-text">
                                    <!-- <span class="">img</span> -->
                                    <i class="material-icons">image</i>
                                    <input type="file" name="template_image" id="template_image">
                                    
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path" type="text" value="<?php set_value('template_image',$templates_data->template_image) ?>" placeholder="update template image" data-parsley-required>
                                </div>
                            </div>
                            <?php if(isset($err_img)){
                                echo $err_img;
                            } ?>
                            
                            <div class="input-field file-field">
                                <div class=" btn btn-flat transparent black-text">
                                    <!-- <span class="">zip</span> -->
                                    <i class="fas fa-file-archive"></i>
                                    <input type="file" name="template_zip" id="template_zip" >
                                    
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path" type="text" value="<?php set_value($templates_data->template_image) ?>" placeholder="update template zip file" data-parsley-required >
                                </div>    
                            </div>
                            <?php if(isset($err_zip)){
                                echo $err_zip;
                            } ?>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn waves-effect waves-light indigo lighten-1">update</button>
                            <!-- <a type="reset" class="btn waves-effect waves-light red lighten-1">Reset</a> -->
                        </div>
                        
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "footer.php" ?>