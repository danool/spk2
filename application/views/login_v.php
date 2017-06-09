
<div class="container">
	<div class="row">
		<div class="col-md-3 pull-left">
			<div class="login-grids">

					<div class="login-right">
						<h3>Silahkan Masuk</h3>
						<!-- <form action="#" method="post"> -->
						<?php echo form_open(base_url().'Login/')	?>	
						<?php echo validation_errors(); ?>	
						<span><b><?php echo $login_failed; ?></b></span>	

						<div class="sign-in">
							<h4>Username :</h4>
							<input type="text" name="username" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="" placeholder="username">	
						</div>
						<div class="sign-in">
							<h4>Password :</h4>
							<input type="password" name="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="" placeholder="password">
						</div>
						<div class="single-bottom">
							<input type="checkbox"  id="brand" value="">
							<label for="brand"><span></span>Ingat Saya</label>
						</div>
						<div class="sign-in">
							<input type="submit" name="submit_login" value="Masuk" >
						</div>
						<!-- </form> -->
						<?php echo form_close()?>	
					</div>

					<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
				</div>
			</div>
		</div>
	


	</div>
</div>