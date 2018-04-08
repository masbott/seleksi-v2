<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li><a href="#">Admin</a><i class="icon-angle-right"></i></li>
						<li><a href="#">Master</a><i class="icon-angle-right"></i></li>
						<li class="active">Formasi<i class="icon-angle-right"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3>Formasi</h3>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> JPT Madya</a></li>
						<li><a href="#two" data-toggle="tab">JPT Pratama</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="one">
							<button type="submit" class="btn btn-xs btn-info">+ Tambah</button>		
							<div class="alert alert-success alert-hapus hide" role="alert"><strong>Berhasil!</strong> Menghapus data.</div>
							<table class="table table-striped table-responsive">
								<thead>
									<tr>
										<th>No</th>
										<th>Periode</th>
										<th>Jabatan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody id="list_formasi_madya">
								</tbody>
							</table>
						</div>
						<div class="tab-pane" id="two">
							<button type="submit" class="btn btn-xs btn-info">+ Tambah</button>	
							<div class="alert alert-success alert-hapus hide" role="alert"><strong>Berhasil!</strong> Menghapus data.</div>	
							<table class="table table-striped table-responsive">
								<thead>
									<tr>
										<th>No</th>
										<th>Periode</th>
										<th>Jabatan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody id="list_formasi_pratama">
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo base_url() ?>resources/js/jquery-3.2.1.js"></script>

	<script type="text/javascript">
		list_formasi_madya();
		list_formasi_pratama();
		function list_formasi_madya() {

			var ajax = new XMLHttpRequest();
	        var method = "GET";
	        var url = "<?php echo site_url('master/formasi_madya') ?>";
	        var asynchronous = true;

	        ajax.open(method, url, asynchronous);
	        ajax.send();

	        ajax.onreadystatechange = function(){
	            if ( this.readyState == 4 && this.status == 200 ) {
	                var data = JSON.parse(this.responseText);
	                
	                var html = "";
	                var nomor = 1;
	                if ( data.length > 0 ) { 
	                	for( var a = 0; a < data.length; a++ ) {
		                    var no = data[a].nomor;
		                    var nama_periode = data[a].nama_periode;
		                    var jabatan = data[a].jabatan;
		                    var aksi = data[a].aksi;

		                    html += "<tr>";
		                        html += "<td>" + no + "</td>";
		                        html += "<td>" + nama_periode + "</td>";
		                        html += "<td>" + jabatan + "</td>";
		                        html += "<td>" + aksi + "</td>";
		                    html += "</tr>";
	                	}
	                
	                } else {
	                	html += '<tr>';
	                		html += '<td colspan="4">DATA TIDAK TERSEDIA</td>';
	                	html += '</tr>';
	                }

	                document.getElementById("list_formasi_madya").innerHTML = html;	
	            }
	        }
		}

		function list_formasi_pratama() {
			var ajax = new XMLHttpRequest();
	        var method = "GET";
	        var url = "<?php echo site_url('master/formasi_pratama') ?>";
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
	                    var nama_periode = data[a].nama_periode;
	                    var jabatan = data[a].jabatan;
	                    var aksi = data[a].aksi;

	                    html += "<tr>";
	                        html += "<td>" + no + "</td>";
	                        html += "<td>" + nama_periode + "</td>";
	                        html += "<td>" + jabatan + "</td>";
	                        html += "<td>" + aksi + "</td>";
	                    html += "</tr>";
	                }
	                document.getElementById("list_formasi_pratama").innerHTML = html;
	            }
	        }
		}

		$('body').on('click' , '.hapus-formasi' , function(){
			var konfirm = confirm('Yakin akan menghapus data ini?');

			if ( konfirm == true ) {
				var id = $(this).data('id');

				$.ajax({
					type : "POST",
					url : "<?php echo site_url('master/delete_formasi') ?>",
					dataType	: "JSON",
					data : {id:id},
					success: function() {
						$( ".alert-hapus" ).removeClass('hide').fadeIn( 2000 ).delay( 1500 ).fadeOut( 400 );
						list_formasi_madya();
					}
				});
			} else {
				return false;
			}
		});

		$('body').on('click' , '.hapus-formasi-pratama' , function(){
			var konfirm = confirm('Yakin akan menghapus data ini?');

			if ( konfirm == true ) {
				var id = $(this).data('id');

				$.ajax({
					type : "POST",
					url : "<?php echo site_url('master/delete_formasi') ?>",
					dataType	: "JSON",
					data : {id:id},
					success: function() {
						$( ".alert-hapus" ).removeClass('hide').fadeIn( 2000 ).delay( 1500 ).fadeOut( 400 );
						list_formasi_pratama();
					}
				});
			} else {
				return false;
			}
		});
	</script>