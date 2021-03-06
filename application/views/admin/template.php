<?php include "header.php"; ?>
<main>
    <div class="container" id="add_temp">
        <div class="row">
            <div class="col s12 m12 l12">
                <!-- <h3>Template</h3> -->
                <div class="section">
                    <!-- <a data-target="template_modal" href="<?= base_url('deshbord/add_template') ?>" class="btn waves-effect waves-light indigo lighten-1 modal-trigger">Add template</a> -->
                    <a data-target="template_modal" id="temp-m-trigger" href="" class="btn waves-effect waves-light modal-trigger">Add template</a>
                </div>
                <div class="section">
                    <table id="template_table" class="highlight responsive-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Header</th>
                                <th>Template</th>
                                <th>Upload at</th>
                                <th>Update at</th>
                                <th>Preview</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            if(isset($templates)):
                                if(count($templates)):
                                // for serial no. in table
                                $count = $this->uri->segment(3);
                        ?>
                            <?php foreach ($templates as $data): ?>
                                <tr>
                                    <td><?= ++$count ?></td>
                                    <td><?= $data->template_header; ?></td>
                                    
                                    <?php if(! is_null($data->template_image)){?>
                                        <td><img class="materialboxed responsive-img" style="width:120px"  src="<?php echo base_url('file_upload/'.$data->template_image) ?>" alt="template image"></td>
                                    <?php }else{ echo "not found";} ?>
                                    <td><?= $data->upload_at ?></td>
                                    <td><?= $data->update_at ?></td>
                                    <!-- <td><a href="Deshbord/<?php $data->id ?>" class="btn  blue darken-2"><i class="far fa-eye"></i></a></td> -->
                                    <!-- <?php $zip = base_url('zip_upload/'.$data->template_zip); ?> -->
                                    <td><?php echo anchor("Deshbord/archive_zip/{$data->id}","<i class='far fa-eye'></i>", ['class'=>'btn blue darken-2','terget'=>'_blank']) ?></td>
                                    <td><?php echo anchor("Deshbord/update_template/{$data->id}","<i class='material-icons'>edit</i>",['class'=>'btn yellow darken-3']); ?></td>
                                    <?php
                                        echo form_open('Deshbord/delet_template');
                                        echo form_hidden('id',$data->id);
                                        echo form_hidden('template_image',$data->template_image);
                                        echo form_hidden('template_zip',$data->template_zip);
                                    ?>
                                        <td><button type="submit" class="btn red lighten-1"><i class="material-icons">delete</i></button></td>
                                    <?= form_close() ?>
                                </tr>
                            <?php endforeach; ?>
                            <?php else: ?>
                            <tr>
                                <td colspan="6">
                                    <blockquote>No data available !</blockquote>
                                </td>
                            </tr>
                            <?php endif; ?>
                        <?php endif; ?>

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
                        <h4 class="center blue-grey-text text-darken-1">Add template</h4>
                    </div>
                    
                    <div class="input-field" id="head_temp">
                        <i class="material-icons prefix">edit</i>
                        <label for="template_header">template header</label>
                        <input type="text" name="template_header" id="template_header" data-parsley-required data-parsley-trigger="keyup" data-parsley-pattern="^[a-zA-Z0-9_ ]*$">
                    </div>
                    <?php echo form_error('template_header') ?>

                    <div class="input-field" id="head_temp">
                        <i class="material-icons prefix">edit</i>
                        <label for="template_header">sub heading</label>
                        <input type="text" name="sub_heading" id="sub_heading" data-parsley-required data-parsley-trigger="keyup" data-parsley-pattern="^[a-zA-Z0-9_ ]*$">
                    </div>
                    <?php echo form_error('sub_heading') ?>
                    
                    <div class="input-field file-field">
                        <div class="btn btn-flat transparent black-text">
                            <!-- <span class="">img</span> -->
                            <i class="material-icons">image</i>
                            <input type="file" name="template_image" id="template_image">
                            
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path" placeholder="upload template image" type="text" data-parsley-required>
                        </div>    
                    </div>
                    <!-- <?php   if (isset($massage2)) {
                                echo $massage2;
                            }
                    ?> -->

                    <div class="input-field file-field">
                        <div class="btn btn-flat transparent">
                            <!-- <span class="">zip</span> -->
                            <i class="fas fa-file-archive"></i>
                            <input type="file" name="template_zip" id="template_zip">
                            
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path" type="text" placeholder="upload template zip file" data-parsley-required>
                        </div>    
                    </div>
                    <!-- <?php   if (isset($massage)) {
                                echo $massage;
                            }
                    ?> -->
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn waves-effect waves-light"  >submit</button>
                    <button type="reset" class="btn modal-close waves-effect waves-light">Reset & close</button>
                </div>
            <!-- </form> -->
            <?php echo form_close(); ?>

        </div>
        

        

    </div><!-- end container -->

</main>

<?php include "footer.php"; ?>


<?php
    // if updata is set update modal is open
    if(isset($templates_data)): ?>
    <script>
        $(document).ready(function(){
            $('#modal_demo').modal('open');
        });
    </script>
<?php endif; ?>

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


if(isset($zip_msg)){
    $error_zip_msg = $zip_msg;
    echo "
        <script>
            $(document).ready(function(){
                M.toast({html: '$error_zip_msg', classes:'deep-orange-text text-accent-2'});
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
