<?php include "login_signup_header.php"; ?>
<body>
<div class="container">
    <div class="row">
        <div class="col s12 m6 l6 offset-m3 offset-l3">
            
            <?php echo form_open_multipart('deshbord/add_template_data') ?>
                <div class="input-field">
                    <label for="template_header">template header</label>
                    <input type="text" name="template_header" id="template_header">
                </div>
                <?php echo form_error('template_header') ?>
                
                <div class="input-field file-field">
                    <div class="btn">
                        <span>template image</span>
                        <input type="file" name="template_image" id="template_image">
                        
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path" type="text">
                    </div>    
                </div>
                <?php   if (isset($massage2)) {
                            echo $massage2;
                        }
                ?>

                <div class="input-field file-field">
                    <div class="btn">
                        <span>template image</span>
                        <input type="file" name="template_zip" id="template_zip">
                        
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path" type="text">
                    </div>    
                </div>
                <?php   if (isset($massage)) {
                            echo $massage;
                        }
                ?>
                
                <input type="submit" class="btn"  value="submit">
            <!-- </form> -->
            <?php echo form_close(); ?>
            
        </div>
    </div>
</div>
    


<?php include "footer.php"; ?>
<?php

// success massage
if($success = $this->session->flashdata('success')){
    if(isset($success)){
        $success_msg = $success;
        echo "
            <script>
                $(document).ready(function(){
                    M.toast({html: '$success_msg', classes:'green-text text-darken-1'});
                });
            </script>
        ";
    }
}

// error massage
if($error = $this->session->flashdata('error')){
    if(isset($error)){
        $error_msg = $error;
        echo "
            <script>
                $(document).ready(function(){
                    M.toast({html: '$error_msg', classes:'deep-orange-text text-accent-2'});
                });
            </script>
        ";
    }
}
?>