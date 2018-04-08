<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-lg-3">
				<div class="widget">
					<h4>Kontak teknis</h4>
					<address>
					<strong>Biro Kepegawaian BKKBN</strong><br>
					 Jl. Permata No. 1 - Halim Perdanakusuma<br>
					 Jakarta Timur 13650 </address>
					<p>
						<i class="icon-phone"></i> (021) 8098018 - ext 222 <br>
						<i class="icon-envelope-alt"></i> pansel_bkkbn@gmail.com
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h4>Information</h4>
					<ul class="link-list">
						<li><a href="#">Press release</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career center</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h4>Pages</h4>
					<ul class="link-list">
						<li><a href="#">Press release</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career center</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h4>Newsletter</h4>
					<p>Fill your email and sign up for monthly newsletter to keep updated</p>
                    <div class="form-group multiple-form-group input-group">
                        <input type="email" name="email" class="form-control">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-theme btn-add">Subscribe</button>
                        </span>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>&copy; Sailor Theme - All Right Reserved</p>
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                            -->
                            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
	
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url() ?>resources/js/jquery-3.2.1.js"></script>
<script src="<?php echo base_url() ?>resources/js/modernizr.custom.js"></script>
<script src="<?php echo base_url() ?>resources/js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url() ?>resources/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>resources/js/jquery.appear.js"></script>
<script src="<?php echo base_url() ?>resources/js/stellar.js"></script>
<script src="<?php echo base_url() ?>resources/js/classie.js"></script>
<script src="<?php echo base_url() ?>resources/js/uisearch.js"></script>
<script src="<?php echo base_url() ?>resources/js/jquery.cubeportfolio.min.js"></script>
<script src="<?php echo base_url() ?>resources/js/prettify.js"></script>
<script src="<?php echo base_url() ?>resources/js/animate.js"></script>
<script src="<?php echo base_url() ?>resources/js/jquery.validate.js"></script>
<script src="<?php echo base_url() ?>resources/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url() ?>resources/js/on-off-switch.js"></script>
<script src="<?php echo base_url() ?>resources/js/on-off-switch-onload.js"></script>
<script src="<?php echo base_url() ?>resources/js/datatables.min.js"></script>
<script src="<?php echo base_url() ?>resources/js/custom.js"></script>

	
</body>
</html>

<script type="text/javascript">
	$('#signin').validate({
		rules: {
			username: "required",
			password: "required"
		},
		messages: {
			username: "Kolom NIP harus diisi.",
			password: "Kolom Kata Sandi harus diisi."
		}
	});
</script>

<script type="text/javascript">
	$('.datepicker').datepicker({
		format: 'yyyy/mm/dd',
		autoclose: true
	});
</script>


<script type="text/javascript">
	$('.btn-hapus').on('click' , function(){
		var konfirm = confirm('Yakin akan menghapus data ini?');

		return konfirm;
	});
</script>


<script type="text/javascript">
	$(document).ready(function(){
		show_periode();
		show_periode_pratama();
		/*menampilkan data periode JPT Madya*/
		function show_periode() {

		var ajax = new XMLHttpRequest();
        var method = "GET";
        var url = "<?php echo site_url('master/list_periode') ?>";
        var asynchronous = true;

        ajax.open(method, url, asynchronous);
        ajax.send();

        ajax.onreadystatechange = function(){
            if ( this.readyState == 4 && this.status == 200 ) {
                var data = JSON.parse(this.responseText);
                
                var html = "";
                var nomor = 1;
                for( var a = 0; a < data.length; a++ ) {
                    var no = data[a].nomor;
                    var nama = data[a].nama;
                    var waktu = data[a].waktu;
                    var status = data[a].status;
                    var aksi = data[a].aksi;

                    html += "<tr>";
                        html += "<td>" + no + "</td>";
                        html += "<td>" + nama + "</td>";
                        html += "<td>" + waktu + "</td>";
                        html += "<td>" + status + "</td>";
                        html += "<td>" + aksi + "</td>";
                    html += "</tr>";
                }
                document.getElementById("list_periode_jpt_madya").innerHTML = html;
            }
        }

	};
	/*list data periode pratama*/
	function show_periode_pratama() {

		var ajax = new XMLHttpRequest();
        var method = "GET";
        var url = "<?php echo site_url('master/list_periode_pratama') ?>";
        var asynchronous = true;

        ajax.open(method, url, asynchronous);
        ajax.send();

        ajax.onreadystatechange = function(){
            if ( this.readyState == 4 && this.status == 200 ) {
                var data = JSON.parse(this.responseText);
                
                var html = "";
                var nomor = 1;
                for( var a = 0; a < data.length; a++ ) {
                    var no = data[a].nomor;
                    var nama = data[a].nama;
                    var waktu = data[a].waktu;
                    var status = data[a].status;
                    var aksi = data[a].aksi;

                    html += "<tr>";
                        html += "<td>" + no + "</td>";
                        html += "<td>" + nama + "</td>";
                        html += "<td>" + waktu + "</td>";
                        html += "<td>" + status + "</td>";
                        html += "<td>" + aksi + "</td>";
                    html += "</tr>";
                }
                document.getElementById("list_periode_jpt_pratama").innerHTML = html;
            }
        }

	};


	/*simpan data periode JPT Madya*/
	$('#btn_simpan').on('click' , function(){

		$('#add_jpt_madya').validate({
			rules: {
				nama_periode: "required"
			}, 
			messages: {
				nama_periode: "Kolom Nama Periode harus diisi."
			}
		});

		//return false;
		var nama_periode = $('#add_jpt_madya_nama_periode').val();
		var tanggal_mulai = $('#add_jpt_madya_tanggal_mulai').val();
		var tanggal_selesai = $('#add_jpt_madya_tanggal_selesai').val();
		var eselon = '1';

		$.ajax({
		type: "POST",
		url: "<?php echo site_url('master/add_periode') ?>",
		data: {nama_periode:nama_periode, eselon:eselon, tanggal_mulai:tanggal_mulai, tanggal_selesai:tanggal_selesai},
		success: function(data){
			$('#myModal').modal('hide');
			$( ".alert-simpan" ).removeClass('hide').fadeIn( 2000 ).delay( 1500 ).fadeOut( 400 );
			show_periode();
		}
	});
	return false;
	});

	/*simpan data periode JPT Pratama*/
	$('#btn_simpan_pratama').on('click' , function(){
		var nama_periode = $('#add_jpt_pratama_nama_periode').val();
		var tanggal_mulai = $('#add_jpt_pratama_tanggal_mulai').val();
		var tanggal_selesai = $('#add_jpt_pratama_tanggal_selesai').val();
		var eselon = '2';

		$.ajax({
		type: "POST",
		url: "<?php echo site_url('master/add_periode') ?>",
		data: {nama_periode:nama_periode, eselon:eselon, tanggal_mulai:tanggal_mulai, tanggal_selesai:tanggal_selesai},
		success: function(data){
			$('#myModals').modal('hide');
			$( ".alert-simpan" ).removeClass('hide').fadeIn( 2000 ).delay( 1500 ).fadeOut( 400 );
			show_periode_pratama();
		}
	});
	return false;
	});

	/*hapus data periode JPT Madya*/
	$('body').on('click' , '.hapus' , function(){
		var konfirm = confirm('Yakin akan menghapus data ini?');

		if ( konfirm == true ) {
			var id = $(this).data('id');
			//alert(id);
			$.ajax({
				type : "POST",
				url : "<?php echo site_url('master/delete_periode') ?>",
				dataType	: "JSON",
				data : {id:id},
				success: function() {
					$( ".alert-hapus" ).removeClass('hide').fadeIn( 2000 ).delay( 1500 ).fadeOut( 400 );
					show_periode();
				}
			});
			return false;
		} else {
			return false;
		}


	});

	$('body').on('click' , '.hapus-jpt-pratama' , function(){
		var konfirm = confirm('Yakin akan menghapus data ini?');

		if ( konfirm == true ) {
			var id = $(this).data('id');
			$.ajax({
				type : "POST",
				url : "<?php echo site_url('master/delete_periode') ?>",
				dataType	: "JSON",
				data : {id:id},
				success: function() {
					$( ".alert-hapus" ).removeClass('hide').fadeIn( 2000 ).delay( 1500 ).fadeOut( 400 );
					show_periode_pratama();
				}
			});
			return false;
		} else {
			return false;
		}


	});

});
	
</script>