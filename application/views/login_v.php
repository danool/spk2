<!-- <div>	
	 <h1>Login</h1>	
	 <?php #echo form_open(base_url().'login/')	?>	
	 <?php #echo validation_errors(); ?>	
	 <span><b><?php #echo $login_failed; ?></b></span>	
	 <div>
	 	 <div>Username:	</div>	
	 	 <div><input type="text" name="username" value="<?php #echo set_value('username');?>"/></div>	
	 </div>	
	 <div>	
	 	 <div>Password:	</div>	
	 	 <div><input type="password" name="password" value="<?php #echo set_value('password');?>"/><br/></div>	
	 </div>	
	 <div>	
	 	 <input	type="submit" value="Login" name="submit_login"/>	
	 </div>
	 <div>	
	 	 Apakah Anda belum register? <?php #echo anchor('register', 'Register');?>	
	 </div>
	 <?php #echo form_close()?>	
</div> --><!-- 
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-info">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div>
			<div class="modal-body modal-spa">
				
		</div>
	</div>
</div> -->
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
		<!-- <div class="col-md-5 pull-right">
		<p> ini rata kanan</p>
		</div> -->


	</div>
</div>