<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li><a href="#">Admin</a><i class="icon-angle-right"></i></li>
						<li><a href="#">Master</a><i class="icon-angle-right"></i></li>
						<li class="active">Periode<i class="icon-angle-right"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3>Periode</h3>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> JPT Madya</a></li>
						<li><a href="#two" data-toggle="tab">JPT Pratama</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="one">
							<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal" style="margin-bottom: 15px;">+ Tambah</button>	
							<div class="alert alert-success alert-simpan hide" role="alert"><strong>Berhasil!</strong> Menyimpan data.</div>
							<div class="alert alert-success alert-hapus hide" role="alert"><strong>Berhasil!</strong> Menghapus data.</div>
							<table class="table table-striped table-responsive" id="list_data_jpt_madyaa">
								<thead>
									<tr>
										<th>No</th>
										<th>Periode</th>
										<th>Waktu</th>
										<th>Status</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody id="list_periode_jpt_madya">
								</tbody>
							</table>
						</div>
						<div class="tab-pane" id="two">
							<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModals">+ Tambah</button>		
							<div class="alert alert-success alert-simpan hide" role="alert"><strong>Berhasil!</strong> Menyimpan data.</div>
							<div class="alert alert-success alert-hapus hide" role="alert"><strong>Berhasil!</strong> Menghapus data.</div>
							<table class="table table-striped table-responsive">
								<thead>
									<tr>
										<th>No</th>
										<th>Periode</th>
										<th>Waktu</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody id="list_periode_jpt_pratama">
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		    <h4 class="modal-title">Tambah Periode JPT Madya</h4>
		  </div>
		  <div class="modal-body">
		    <form id="add_jpt_madya">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Periode</label>
			    <input type="text" name="nama_periode" class="form-control" id="add_jpt_madya_nama_periode" placeholder="Masukkan Nama Periode" required="">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Tanggal Mulai</label>
			    <input type="text" name="tanggal_mulai" class="form-control datepicker" id="add_jpt_madya_tanggal_mulai" placeholder="Masukkan Tanggal Mulai" required="">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Tanggal Selesai</label>
			    <input type="text" name="tanggal_selesai" class="form-control datepicker" id="add_jpt_madya_tanggal_selesai" placeholder="Masukkan Tanggal Selesai" required="">
			  </div>
			  <button type="submit" class="btn btn-primary" id="btn_simpan">Simpan</button>
			</form>
		  </div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="myModals">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		    <h4 class="modal-title">Tambah Periode JPT Pratama</h4>
		  </div>
		  <div class="modal-body">
		    <form id="add_jpt_madya">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Periode</label>
			    <input type="text" name="nama_periode" class="form-control" id="add_jpt_pratama_nama_periode" placeholder="Masukkan Nama Periode" required="">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Tanggal Mulai</label>
			    <input type="text" name="tanggal_mulai" class="form-control datepicker" id="add_jpt_pratama_tanggal_mulai" placeholder="Masukkan Tanggal Mulai" required="">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Tanggal Selesai</label>
			    <input type="text" name="tanggal_selesai" class="form-control datepicker" id="add_jpt_pratama_tanggal_selesai" placeholder="Masukkan Tanggal Selesai" required="">
			  </div>
			  <button type="submit" class="btn btn-primary" id="btn_simpan_pratama">Simpan</button>
			</form>
		  </div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->