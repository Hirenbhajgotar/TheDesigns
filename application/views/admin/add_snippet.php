<?php include 'header.php' ?>
<main id="add_snipp">
	<div class="row">
		<div class="col s12 m12 l10 offset-l1">
			<div class="section">
				<form>
					<div class="input-field" id="head_snip">
						<i class="material-icons prefix">edit</i>
					 	<input type="text" name="snip_header" id="snip_header">
						<label for="snip_header">Header</label>
					</div>
					<div class="file-field input-field">
					  	<div class="btn btn-flat transparent ">
					    	<!-- <span>File</span> -->
					    	<i class="material-icons">image</i>
					    	<input type="file">
					  	</div>
					  	<div class="file-path-wrapper">
					    	<input class="file-path validate" type="text" placeholder="Upload one image for snippet">
					  	</div>
					</div>
					<div class="input-field">
						<textarea name="editor1" id="editor1" rows="10" cols="80"></textarea>
					</div>
			        <button type="submit" class="btn">submit</button>
			        <button type="reset" class="btn">cansel</button>

			    </form>
			</div>
		</div>
	</div>
	
</main>
<?php include 'footer.php' ?>

<!-- ckeditor -->
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor1' );
</script>