	<img class="wave" src="<?= base_url('assets/');?>img/wave.svg">
	<div class="container">
		<div class="img">
			<img src="<?= base_url('assets/');?>img/web.svg">
		</div>
		<div class="login-content">
			<form class="user" method="post" action="<?= base_url('auth');?>">
				<h2 class="title">Administrator</h2>
				<?= $this->session->flashdata('message'); ?>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
					<div class="form-group">
						<input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email');?>">
						<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="form-group">
						<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
						<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
            	</div>
            	<a href=<?= base_url('auth/registration'); ?>>Create Account</a>
            	<button type="submit" class="btn btn-primary btn-user btn-block">LOGIN</button>
            </form>
        </div>
    </div>