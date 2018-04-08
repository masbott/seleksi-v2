<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="#">Admin</a><i class="icon-angle-right"></i></li>
					<li><a href="#">Daftar</a><i class="icon-angle-right"></i></li>
					<li class="active">Pelamar<i class="icon-angle-right"></i></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Pelamar</h3>
				<ul class="nav nav-tabs">
					<li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> JPT Madya</a></li>
					<li><a href="#two" data-toggle="tab">JPT Pratama</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="one">
						<form role="form" class="register-form">
							<div class="form-group">
								<select name="eselon" id="jpt_madya" class="form-control input-lg" tabindex="5">
								</select>
							</div>
						</form>
						<table class="table table-striped table-responsive">
							<thead>
								<tr>
									<th width="2%">No</th>
									<th width="10%">Nama Lengkap</th>
									<th width="10%">NIP</th>
									<th width="10%">Jabatan/Eselon</th>
									<th width="10%">Gol/Pangkat</th>
									<th width="10%">Jabatan Dilamar</th>
									<th width="10%">Status Diterima</th>
									<th width="10%">Aksi</th>
								</tr>
							</thead>
							<tbody id="pelamar_madya">
								<tr>
									<td colspan="7">SILAHKAN PILIH PERIODE TERLEBIH DAHULU</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="two">	
						<form role="form" class="register-form">
							<div class="form-group">
								<select name="eselon" class="form-control input-lg" tabindex="5" id="jpt_pratama">
								</select>
							</div>
						</form>
						<table class="table table-striped table-responsive">
							<thead>
								<tr>
									<th width="2%">No</th>
									<th width="10%">Nama Lengkap</th>
									<th width="10%">NIP</th>
									<th width="10%">Jabatan/Eselon</th>
									<th width="10%">Gol/Pangkat</th>
									<th width="10%">Jabatan Dilamar</th>
									<th width="10%">Status Diterima</th>
									<th width="10%">Aksi</th>
								</tr>
							</thead>
							<tbody id="pelamar_pratama">
								<tr>
									<td colspan="7">SILAHKAN PILIH PERIODE TERLEBIH DAHULU</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="pelamar_detail">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Detail Pelamar</h4>
      </div>
      <div class="modal-body">
        <table class="table table-striped">
        	<tr>
        		<td>NIP</td>
        		<td>:</td>
				<td class="nip"></td>
        	</tr>
        	<tr>
        		<td>Nama Lengkap</td>
        		<td>:</td>
        		<td class="nama_lengkap"></td>
        	</tr>
        	<tr>
        		<td>Jabatan/Eselon</td>
        		<td>:</td>
        		<td class="jabatan"></td>
        	</tr>
        	<tr>
        		<td>Golongan/Pangkat</td>
        		<td>:</td>
        		<td class="golongan"></td>
        	</tr>
        	<tr>
        		<td>Jabatan Dilamar</td>
        		<td>:</td>
        		<td class="formasi"></td>
        	</tr>
        	<tr>
        		<td>Status Diterima</td>
        		<td>:</td>
        		<td class="status"></td>
        	</tr>
        </table>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="pelamar_edit">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Pelamar</h4>
      </div>
      <div class="modal-body">
        <form>
		  <div class="form-group">
		    <label for="exampleInputEmail1">NIP</label>
		    <input type="text" class="form-control" placeholder="Email" id="edit_nip">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Nama</label>
		    <input type="text" class="form-control nama_lengkap" placeholder="Password">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Jabatan</label>
		    <input type="text" class="form-control jabatan" placeholder="Password">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Golongan</label>
		    <input type="text" class="form-control golongan" placeholder="Golongan">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Jabatan Dilamar</label>
		    <div class="checkbox formasi">
			    
			</div>
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Status Diterima</label>
		    <select name="status" class="form-control status">
		    	<option value="blm_proses">Belum Proses</option>
		    	<option value="lolos">Terima</option>
		    	<option value="tidak_lolos">Tidak Diterima</option>
		    </select>
		  </div>

		  <button type="submit" class="btn btn-primary">Simpan</button>
		</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script src="<?php echo base_url() ?>resources/js/jquery-3.2.1.js"></script>

<script type="text/javascript">
	pilih_jpt_madya();
	pilih_jpt_pratama();
	/*select option periode on JPT Madya*/
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
                document.getElementById("jpt_madya").innerHTML = html;
            }
        }
	};
	/*select option periode on JPT Pratama*/
	function pilih_jpt_pratama() {
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
                html += "<option>Pilih Periode</option>";
                for( var a = 0; a < data.length; a++ ) {
                	var nilai = data[a].id;
                    var nama = data[a].nama;
                    html += "<option value="+nilai+">" + nama + "</option>";
                }
                document.getElementById("jpt_pratama").innerHTML = html;
            }
        }
	}

	$('body').on('change' , '#jpt_madya' , function(){
		var id = $(this).val();
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('daftar/pelamar_madya') ?>",
			dataType: "json",
			data: {id:id},
			success: function(data) {
				html = "";
				var no = 1;
				if ( data.length > 0 ) {
					for( var a = 0; a < data.length; a++ ) {
						var nama = data[a].nama;
						html += '<tr>';
							html += '<td>'+ no++ +'</td>';
							html += '<td>'+ nama +'</td>';
							html += '<td>'+ data[a].nip +'</td>';
							html += '<td>'+ data[a].jabatan +'</td>';
							html += '<td>'+ data[a].golongan +'</td>';
							html += '<td>'+ data[a].formasi +'</td>';
							html += '<td>'+ data[a].status +'</td>';
							html += '<td>'+ data[a].aksi +'</td>';
						html += '</tr>';
					}
				} else {
					html += '<tr>';
						html += '<td colspan="7">DATA TIDAK TERSEDIA</td>';
					html += '</tr>';
				}
				$('#pelamar_madya').html(html);
			}
		});
	});

	$('body').on('change' , '#jpt_pratama' , function() {
		var id = $(this).val();
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('daftar/pelamar_madya') ?>",
			dataType: "json",
			data: {id:id},
			success: function(data) {
				html = "";
				var no = 1;
				if ( data.length > 0 ) {
					for( var a = 0; a < data.length; a++ ) {
						var nama = data[a].nama;
						html += '<tr>';
							html += '<td>'+ no++ +'</td>';
							html += '<td>'+ nama +'</td>';
							html += '<td>'+ data[a].nip +'</td>';
							html += '<td>'+ data[a].jabatan +'</td>';
							html += '<td>'+ data[a].golongan +'</td>';
							html += '<td>'+ data[a].formasi +'</td>';
							html += '<td>'+ data[a].status +'</td>';
							html += '<td>'+ data[a].aksi +'</td>';
						html += '</tr>';
					}
				} else {
					html += '<tr>';
						html += '<td colspan="7">DATA TIDAK TERSEDIA</td>';
					html += '</tr>';
				}
				$('#pelamar_pratama').html(html);
			}
		});
	});

	$('body').on('click' , '.detail' , function(){
		var id = $(this).data('pelamar');
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('daftar/pelamar_one') ?>",
			dataType: "json",
			data: {id:id},
			success: function(data) {
				$('#pelamar_detail').modal('show');
				$('#pelamar_detail').find('.nip').text(data.nip);
				$('#pelamar_detail').find('.nama_lengkap').text(data.nama);
				$('#pelamar_detail').find('.jabatan').text(data.jabatan);
				$('#pelamar_detail').find('.golongan').text(data.golongan);
				$('#pelamar_detail').find('.formasi').text(data.formasi);
				$('#pelamar_detail').find('.status').text(data.status);
			}
		});
	});

	$('body').on('click' , '.edit' , function(){
		var id = $(this).data('pelamar');
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('daftar/pelamar_one') ?>",
			dataType: "json",
			data: {id:id},
			success: function(data) {
				$('#pelamar_edit').modal('show');
				$('#pelamar_edit').find('#edit_nip').val(data.nip);
				$('#pelamar_edit').find('.nama_lengkap').val(data.nama);
				$('#pelamar_edit').find('.jabatan').val(data.jabatan);
				$('#pelamar_edit').find('.golongan').val(data.golongan);
				$('#pelamar_edit').find('.formasi').html(data.data_formasi);
				// $('.status option[value="'+val(data.status)+'"]').prop("selected",true);
				// $('.status option[value="lolos"]').attr('selected', 'selected');
				$('select.status option:selected').text(data.orig_status);
			}
		});
		
	});
</script>