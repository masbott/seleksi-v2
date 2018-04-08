<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="#">Admin</a><i class="icon-angle-right"></i></li>
					<li><a href="#">Daftar</a><i class="icon-angle-right"></i></li>
					<li class="active">Pengaturan<i class="icon-angle-right"></i></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Ubah Password Admin</h3>
				<form role="form" class="register-form">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
		                        <input type="password" name="passbaru" id="pass1" class="form-control input-lg" placeholder="Password Baru">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
		                        <input type="password" name="pass2" id="pass2" class="form-control input-lg" placeholder="Ulangi Password Baru">
							</div>
						</div>
					</div>
						<button class="btn btn-lg btn-success">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</section>
<script src="<?php echo base_url() ?>resources/js/jquery-3.2.1.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		//var passbaru = document.getElementById('pass1').value;
		var passbaru = $('.register-form').find('#pass1').val();
		var konfirm_passbaru = $('#pass2').val();

		$('body').on('keyup' , '#pass2' ,function(){
			console.log(passbaru);
			if ( passbaru != konfirm_passbaru ) {
				console.log('tidak sesuai');
			} else {
				console.log('sesuai');
			}
		});
	});
	
</script>