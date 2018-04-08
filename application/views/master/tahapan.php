<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li><a href="#">Admin</a><i class="icon-angle-right"></i></li>
						<li><a href="#">Master</a><i class="icon-angle-right"></i></li>
						<li class="active">Tahapan<i class="icon-angle-right"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3>Tahapan</h3>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> JPT Madya</a></li>
						<li><a href="#two" data-toggle="tab">JPT Pratama</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="one">
							<button type="submit" class="btn btn-xs btn-info" data-toggle="modal" data-target="#myModal" style="margin-bottom: 15px;">+ Tambah</button>		
							<div class="alert alert-success alert-hapus hide" role="alert"><strong>Berhasil!</strong> Menghapus data.</div>
							<table class="table table-striped table-responsive" width="100%">
								<thead>
									<tr>
										<th width="2%">No</th>
										<th width="10%">Periode</th>
										<th width="20%">Tahapan</th>
										<th width="10%">Waktu</th>
										<th width="10%">File Pengumuman</th>
										<th width="10%">Aksi</th>
									</tr>
								</thead>
								<tbody id="list_tahapan_madya">
									
								</tbody>
							</table>
						</div>
						<div class="tab-pane" id="two">
							<button type="submit" class="btn btn-xs btn-info" data-toggle="modal" data-target="#myModals" style="margin-bottom: 15px;">+ Tambah</button>		
							<table class="table table-striped table-responsive">
								<thead>
									<tr>
										<th width="2%">No</th>
										<th width="10%">Periode</th>
										<th width="20%">Tahapan</th>
										<th width="10%">Waktu</th>
										<th width="10%">File Pengumuman</th>
										<th width="10%">Aksi</th>
									</tr>
								</thead>
								<tbody id="list_tahapan_pratama">
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
	pilih_jpt_madya();
	pilih_jpt_pratama();
	list_tahapan_madya();
	list_tahapan_pratama();
	/*pilih periode JPT Mady
	a*/
	function pilih_jpt_madya() {

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
                html += "<option>Pilih Periode</option>";
                for( var a = 0; a < data.length; a++ ) {
                	var nilai = data[a].id;
                    var nama = data[a].nama;
                    html += "<option value="+nilai+">" + nama + "</option>";
                }
                document.getElementById("pilih_periode").innerHTML = html;
            }
        }
	};

	/*pilih periode JPT Pratama*/
	function pilih_jpt_pratama() {

		var ajax = new XMLHttpRequest();
        var method = "GET";
        var url = "<?php echo site_url('master/periode_pratama') ?>";
        var asynchronous = true;

        ajax.open(method, url, asynchronous);
        ajax.send();

        ajax.onreadystatechange = function(){
            if ( this.readyState == 4 && this.status == 200 ) {
                var data = JSON.parse(this.responseText);
                
                var html = "";
                var nomor = 1;
                html += "<option>Pilih Periode</option>";
                for( var a = 0; a < data.length; a++ ) {
                	var nilai = data[a].id;
                    var nama = data[a].nama;
                    html += "<option value="+nilai+">" + nama + "</option>";
                }
                document.getElementById("pilih_periode_pratama").innerHTML = html;
            }
        }
	};

	/*menampilkan tahapan madya*/
	function list_tahapan_madya() {
		/*list_tahapan_madya()*/

		var ajax = new XMLHttpRequest();
        var method = "GET";
        var url = "<?php echo site_url('master/list_tahapan_madya') ?>";
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
                    var nama_tahapan = data[a].nama_tahapan;
                    var waktu = data[a].waktu;
                    var dokumen = data[a].dokumen;
                    var aksi = data[a].aksi;

                    html += "<tr>";
                        html += "<td>" + no + "</td>";
                        html += "<td>" + nama_periode + "</td>";
                        html += "<td>" + nama_tahapan + "</td>";
                        html += "<td>" + waktu + "</td>";
                        html += "<td>" + dokumen + "</td>";
                        html += "<td>" + aksi + "</td>";
                    html += "</tr>";
                }
                document.getElementById("list_tahapan_madya").innerHTML = html;
            }
        }
	}

	/*menampilkan tahapan pratama*/
	function list_tahapan_pratama() {
		/*list_tahapan_madya()*/

		var ajax = new XMLHttpRequest();
        var method = "GET";
        var url = "<?php echo site_url('master/list_tahapan_pratama') ?>";
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
	                    var nama_tahapan = data[a].nama_tahapan;
	                    var waktu = data[a].waktu;
	                    var dokumen = data[a].dokumen;
	                    var aksi = data[a].aksi;

	                    html += "<tr>";
	                        html += "<td>" + no + "</td>";
	                        html += "<td>" + nama_periode + "</td>";
	                        html += "<td>" + nama_tahapan + "</td>";
	                        html += "<td>" + waktu + "</td>";
	                        html += "<td>" + dokumen + "</td>";
	                        html += "<td>" + aksi + "</td>";
	                    html += "</tr>";
	                }
                } else {
                	html += '<tr>';
                		html += "<td colspan='6'>DATA TIDAK TERSEDIA</td>";
                	html += '</tr>';
                }
                document.getElementById("list_tahapan_pratama").innerHTML = html;
            }
        }
	}

	$('body').on('click' , '.btn-hapus-madya' , function(){
		var konfirm = confirm('Yakin akan menghapus data ini?');
		var id = $(this).data('id');
		if ( konfirm == true ) {
			$.ajax({
				type : "POST",
				url : "<?php echo site_url('master/delete_tahapan') ?>",
				dataType	: "JSON",
				data : {id:id},
				success: function() {
					$( ".alert-hapus" ).removeClass('hide').fadeIn( 2000 ).delay( 1500 ).fadeOut( 400 );
					list_tahapan_madya();
				}
			});
		}
	});
</script>

<!-- Begin JPT Madya -->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		    <h4 class="modal-title">Tambah Tahapan JPT Madya</h4>
		  </div>
		  <div class="modal-body">
		    <form id="add_tahapan_jpt_madya">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Periode</label>
			    <select name="nama_periode" id="pilih_periode" class="form-control">
			    	
			    </select>
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Tahapan</label>
			    <input type="text" name="nama_tahapan" class="form-control" id="add_jpt_madya_nama_periode" placeholder="Masukkan Nama Periode" required="">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">Tanggal Mulai</label>
			    <input type="text" name="tanggal_mulai" class="form-control datepicker" id="add_jpt_madya_tanggal_mulai" placeholder="Masukkan Tanggal Mulai" required="">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Tanggal Selesai</label>
			    <input type="text" name="tanggal_selesai" class="form-control datepicker" id="add_jpt_madya_tanggal_selesai" placeholder="Masukkan Tanggal Selesai" required="">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">Dokumen</label>
			    <input type="file" name="userfile_jpt_madya">
			    <i>Opsional</i>
			  </div>

			  <button type="submit" class="btn btn-primary" id="btn_simpan">Simpan</button>
			</form>
		  </div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End JPT Madya -->

<!-- Begin JPT Pratama -->
<div class="modal fade" tabindex="-1" role="dialog" id="myModals">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		    <h4 class="modal-title">Tambah Tahapan JPT Pratama</h4>
		  </div>
		  <div class="modal-body">
		    <form id="add_tahapan_jpt_madya">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Periode</label>
			    <select name="nama_periode" id="pilih_periode_pratama" class="form-control">
			    	
			    </select>
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Tahapan</label>
			    <input type="text" name="nama_tahapan" class="form-control" id="add_jpt_madya_nama_periode" placeholder="Masukkan Nama Periode" required="">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">Tanggal Mulai</label>
			    <input type="text" name="tanggal_mulai" class="form-control datepicker" id="add_jpt_madya_tanggal_mulai" placeholder="Masukkan Tanggal Mulai" required="">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Tanggal Selesai</label>
			    <input type="text" name="tanggal_selesai" class="form-control datepicker" id="add_jpt_madya_tanggal_selesai" placeholder="Masukkan Tanggal Selesai" required="">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">Dokumen</label>
			    <input type="file" name="userfile_jpt_madya">
			    <i>Opsional</i>
			  </div>

			  <button type="submit" class="btn btn-primary" id="btn_simpan">Simpan</button>
			</form>
		  </div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End JPT Pratama -->