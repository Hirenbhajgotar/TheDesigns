<?php include "header.php"; ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12">
                <!-- <h3>Template</h3> -->
                <div class="section">
                    <!-- <a data-target="template_modal" href="<?= base_url('deshbord/add_template') ?>" class="btn waves-effect waves-light indigo lighten-1 modal-trigger">Add template</a> -->
                    <a data-target="template_modal" href="" class="btn waves-effect waves-light indigo lighten-1 modal-trigger">Add template</a>
                </div>
                <div class="section">
                    <table class="">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Header</th>
                                <th>Template</th>
                                <th>Preview</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($templates as $data): ?>
                            <tr>
                                <td>1</td>
                                <td><p class="truncate"><?= $data->template_header; ?></p></td>
                                <?php if(! is_null($data->template_image)){ ?>
                                    <td><img style="width:150px;" src="<?= $data->template_image ?>" alt="template image"></td>
                                <?php }else{ echo "not found";} ?>
                                <!-- <td><button class="btn  blue darken-2"><i class="material-icons">pageview</i></button></td> -->
                                <td><button class="btn  blue darken-2"><i class="material-icons">visibility</i></button></td>
                                <td><button class="btn yellow darken-3"><i class="material-icons">edit</i></button></td>
                                <td><button class="btn red lighten-1"><i class="material-icons">delete</i></button></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- add template -->
        <div class="modal" id="template_modal">
            <?php echo form_open_multipart('deshbord/add_template_data',['id'=>'form']) ?>
                <div class="modal-content">
                    <div class="section">
                        <h4>Add template</h4>
                    </div>
                    
                    <div class="input-field">
                        <i class="material-icons prefix">edit</i>
                        <label for="template_header">template header</label>
                        <input type="text" name="template_header" id="template_header" data-parsley-required data-parsley-trigger="keyup" data-parsley-pattern="^[a-zA-Z0-9_ ]*$">
                    </div>
                    <?php echo form_error('template_header') ?>
                    
                    <div class="input-field file-field">
                        <div class="btn ">
                            <span class="">img</span>
                            <input type="file" name="template_image" id="template_image">
                            
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path" type="text" data-parsley-required>
                        </div>    
                    </div>
                    <!-- <?php   if (isset($massage2)) {
                                echo $massage2;
                            }
                    ?> -->

                    <div class="input-field file-field">
                        <div class="btn ">
                            <span class="">zip</span>
                            <input type="file" name="template_zip" id="template_zip">
                            
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path" type="text" data-parsley-required>
                        </div>    
                    </div>
                    <!-- <?php   if (isset($massage)) {
                                echo $massage;
                            }
                    ?> -->
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn waves-effect waves-light indigo lighten-1"  >submit</button>
                        <button type="reset" class="btn modal-close waves-effect waves-light red lighten-1">Reset & close</button>
                    </div>
                    
                
            <!-- </form> -->
            <?php echo form_close(); ?>

        </div>
    </div>
</main>

<?php include "footer.php"; ?>

<?php 

// error massage for IMAGE filed
if(isset($err_img)){
    $error_image = $err_img;
    echo "
        <script>
            $(document).ready(function(){
                M.toast({html: '$error_image', classes:'deep-orange-text text-accent-2'});
            });
        </script>
    ";

}

// error massage for ZIP field
if(isset($err_zip)){
    $error_zip = $err_zip;
    echo "
        <script>
            $(document).ready(function(){
                M.toast({html: '$error_zip', classes:'deep-orange-text text-accent-2'});
            });
        </script>
    ";

}
?>

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
