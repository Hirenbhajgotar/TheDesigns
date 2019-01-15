<?php include 'header.php'; ?>

<div class="" id="template_preview">

	<div class="row">
		<div class="col s12 m10 l10 offset-m1 offset-l1">
			<div class="section">
				<h3 class="temp_header"><?= $template_data->template_header ?></h3>
		        <?php if(!empty($template_data->update_at)): ?>
		        	<pre><i class="far fa-clock"></i> <?= $template_data->update_at ?></pre>
		        	<?php else: ?>
		        		<pre><i class="far fa-clock"></i> <?= $template_data->upload_at ?></pre>
		    	<?php endif ?>
		    </div>
		</div>
	</div>
	<div class="row">
		<div class="col s12 m10 l10 offset-m1 offset-l1">
			<div class="section">
				<img src="<?= base_url('file_upload/'.$template_data->template_image) ?>" class="responsive-img z-depth-4">
		    </div>
		</div>
		
	</div>
	<div class="row">
		<div class="col s8 m12 l12 center-align offset-s2">
			
			<ul class="down-pre-btn">
				<!-- <li style="display: inline;"><a href="zip_upload/.$template_data->template_zip"  id="down_btn" class="btn"><i class="fas fa-cloud-download-alt"></i> Download</a></li> -->
				<li class="valign-wrapper"><?php echo anchor("User/download_zip/{$template_data->id}", "<i class='fas fa-cloud-download-alt'></i> Download", ['class'=>'btn btn-large', 'id'=>'down_btn', 'data-aos'=>'zoom-in']) ?></li>
				<li class="valign-wrapper"><?php echo anchor("User/archive_zip/{$template_data->id}", "<i class='far fa-eye'></i> live Preview", ['class'=>'btn btn-large', 'id'=>'pre_btn', 'data-aos'=>'zoom-in']) ?></li>
				<!-- <li style="display: inline;" class="valign-wrapper"><button id="pre_btn" class="btn"><i class="far fa-eye"></i> live Preview</button></li> -->
			</ul>
			<!-- <div class="section">
				<div class="card-panel" style="background-color: #f9f9f9">
					<p class="featur_head"><strong>Main Features</strong></p>
					<p>
						<ul class="features">
							<li></i> Amazing CSS3 Effects/Animations</li>
							<li></i> Simple & Easy to Use/Customize</li>
							<li></i> Font Awesome icons</li>
							<li></i> Clean Design</li>
						</ul>
					</p>
				</div>
			</div> -->
		</div>
	</div>
	<div class="container">
		<div class="divider"></div>
	</div>
	
    
	<div class="row">
		<div class="col s12 m4 l4 offset-m1 offset-l1">
			<div class="temp_dtl_head">
				<p><strong>Template Detail</strong></p>
			</div>
			<div class="temp_dtl_desc">
				<p><strong>Author:</strong> THEDESIGNS</p>
				<?php if (!empty($template_data->update_at)): ?>
					<P><strong>Released:</strong> <?= $template_data->update_at ?></P>
					<?php else: ?>
						<P><strong>Released:</strong> <?= $template_data->upload_at ?></P>
				<?php endif; ?>
			</div>
		</div>
		<div class="col s12 m6 l6">
			<div class="desc_head">
				<p><strong>Description</strong></p>
			</div>
			<div class="dasc">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat vero mollitia quae sed sequi facere illo, excepturi expedita tempora quasi molestias iure maiores praesentium repudiandae id. Perspiciatis ducimus mollitia voluptas?</p>
			</div>
			
		</div>
	</div>

</div> <!-- main div tag -->

<?php include 'footer.php' ?>