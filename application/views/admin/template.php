<?php include "header.php"; ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12">
                <!-- <h3>Template</h3> -->
                <div class="section">
                    <button class="btn waves-effect waves-light indigo lighten-1">Add template</button>
                </div>
                <div class="section">
                    <table class="">
                        <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Template</th>
                                <th>Preview</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img class="responsive-img" style="width:150px;" src="<?= base_url('/assets/images/pexels-photo-356056.jpeg') ?>" alt=""></td>
                                <td><button class="btn  blue darken-2"><i class="material-icons">pageview</i></button></td>
                                <td><button class="btn yellow darken-3"><i class="material-icons">edit</i></button></td>
                                <td><button class="btn red lighten-1"><i class="material-icons">delete</i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        

    </div>
</main>

<?php include "footer.php"; ?>