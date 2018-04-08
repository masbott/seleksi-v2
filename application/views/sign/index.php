<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-header">
					<h2> Sign <small>In</small></h2>	
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form"  class="register-form" action="" method="POST" id="signin">
			<h2>Sign in <small>use your account</small></h2>
			<hr class="colorgraph">

			<div class="form-group">
				<input type="text" name="username" id="username" class="form-control input-lg" placeholder="Masukkan NIP Anda" tabindex="4">
			</div>
			<div class="form-group">
				<input type="password" class="form-control input-lg" name="password" placeholder="Masukkan Kata Sandi Anda">
			</div>

			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" name="remember_me" data-color="info" tabindex="7">Remember me</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>

				</div>

			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" name="submit" value="Sign in" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
				<div class="col-xs-12 col-md-6">Belum punya akun pada periode ini? <a href="index.html#madya">Daftar JPT Madya</a> atau <a href="index.html#pratama">Daftar JPT Pratama</a></div>
			</div>
		</form>

		<?php if( $this->session->flashdata('error') == TRUE ): ?>
			<div class="alert alert-danger" role="alert" style="margin-top: 10px;"><strong>Maaf</strong> <?php echo $this->session->flashdata('error'); ?></div>
		<?php endif; ?>
		
	</div>

</div>

</div>
	</section>