<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="#">Admin</a><i class="icon-angle-right"></i></li>
					<li><a href="#">Daftar</a><i class="icon-angle-right"></i></li>
					<li class="active">Pengguna<i class="icon-angle-right"></i></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Pengguna</h3>
				<ul class="nav nav-tabs">
					<li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> JPT Madya</a></li>
					<li><a href="#two" data-toggle="tab">JPT Pratama</a></li>
					<li><a href="#tri" data-toggle="tab">Admin</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="one">
						<form role="form" class="register-form">
							<div class="form-group">
								<select name="eselon" class="form-control input-lg" tabindex="5" id="pilih_pengguna_madya">
								</select>
							</div>
						</form>
						<table class="table table-striped table-responsive" width="100%">
							<thead>
								<tr>
									<th width="2%">No</th>
									<th width="10%">Nama Lengkap</th>
									<th width="10%">NIP</th>
									<th width="10%">Jabatan/Eselon</th>
									<th width="10%">Gol/Pangkat</th>
									<th width="10%">Jabatan Dilamar</th>
									<th width="10%">Aksi</th>
								</tr>
							</thead>
							<tbody id="pengguna_madya">
								<tr>
									<td colspan="7">SILAHKAN PILIH PERIODE TERLEBIH DAHULU</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="two">	
						<form role="form" class="register-form">
							<div class="form-group">
								<select name="eselon" class="form-control input-lg" tabindex="5" id="pilih_pengguna_pratama">
								</select>
							</div>
						</form>
						<table class="table table-striped table-responsive" width="100%">
							<thead>
								<tr>
									<th width="2%">No</th>
									<th width="10%">Nama Lengkap</th>
									<th width="10%">NIP</th>
									<th width="10%">Jabatan/Eselon</th>
									<th width="10%">Gol/Pangkat</th>
									<th width="10%">Jabatan Dilamar</th>
									<th width="10%">Aksi</th>
								</tr>
							</thead>
							<tbody id="pengguna_pratama">
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
                document.getElementById("pilih_pengguna_madya").innerHTML = html;
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
                document.getElementById("pilih_pengguna_pratama").innerHTML = html;
            }
        }
	}

	$('body').on('change' , '#pilih_pengguna_madya' , function(){
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
							html += '<td>'+ data[a].aksi +'</td>';
						html += '</tr>';
					}
				} else {
					html += '<tr>';
						html += '<td colspan="7">DATA TIDAK TERSEDIA</td>';
					html += '</tr>';
				}
				$('#pengguna_madya').html(html);
			}
		});
	});

	$('body').on('change' , '#pilih_pengguna_pratama' , function() {
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
							html += '<td>'+ data[a].aksi +'</td>';
						html += '</tr>';
					}
				} else {
					html += '<tr>';
						html += '<td colspan="7">DATA TIDAK TERSEDIA</td>';
					html += '</tr>';
				}
				$('#pengguna_pratama').html(html);
			}
		});
	});
</script>
