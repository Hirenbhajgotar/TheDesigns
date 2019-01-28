<?php include 'header.php'; ?>

<main id="contect">
	<!-- particle js -->
	<div id="contect">
		<div id="particles-js" class="">
	        <div class="container">
	        	<div class="row">
	        		<div class="col s12 m12 l12">
	        			<h2 id="contect_head">Contect</h2>
			            <p id="contect_para">Contact Start Bootstrap if you have suggestions for a new template, have feedback for us, or if you need help.</p>
	        		</div>
	        	</div>
	        </div>
	     </div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col s12 m8 l8 offset-m2 offset-l2">
				
				<!-- <iframe src="<?= base_url(''); ?>" frameborder="0"></iframe> -->
				<div class="section">
					<form action="" id="form">
						<div class="input-field col s12">
						 	<i class="material-icons prefix">account_circle</i>
					        <input id="name" type="text">
					        <label for="name">Full name</label>
				        </div>
				        <div class="input-field col s12">
				        	<i class="material-icons prefix">email</i>
				          	<input id="email" type="email">
				         	<label for="email">Email</label>
				        </div>
				        <div class="input-field col s12">
						 	<i class="material-icons prefix">subject</i>
					        <input id="subject" type="text" data-parsley-required data-parsley-trigger="keyup" data-parsley-pattern="^[a-zA-Z0-9_ ]*$">
					        <label for="subject">Subject</label>
				        </div>
				        <div class="input-field col s12">
				          	<i class="material-icons prefix">mode_edit</i>
				          	<textarea id="massage" class="materialize-textarea"></textarea>
				          	<label for="massage">Massage</label>
				        </div>
				        <div class="section">
				        	<button type="submit" class="btn btn-large right valign-wrapper">Send massage &nbsp;<i class="fas fa-paper-plane"></i></button>
				        </div>

					</form>
				</div>
			</div>
		</div>
	</div>

</main>

<?php include 'footer.php' ?>

