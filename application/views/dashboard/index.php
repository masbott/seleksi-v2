<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li><a href="#">Admin</a><i class="icon-angle-right"></i></li>
						<li class="active">Dashboard</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3>Periode Aktif</h3>		
					<table class="table table-striped table-responsive">
						<thead>
							<tr>
								<th>No</th>
								<th>Periode</th>
								<th>Waktu</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; foreach( $periode->result() as $p ): ?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $p->nama ?></td>
									<td><?php echo date_translate(date('j F Y' , strtotime( $p->tanggal_mulai ) ) ) . ' s.d ' . date_translate(date('j F Y' , strtotime( $p->tanggal_selesai ) ) ) ; ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<h3>Pelamar</h3>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> JPT Madya</a></li>
						<li><a href="#two" data-toggle="tab">JPT Pratama</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="one">
							<table class="table table-striped table-responsive" width="100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Periode</th>
										<th>Jumlah Pelamar</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; if( !empty( $madya ) ): ?>
										<?php foreach( $madya as $m ): ?>
											<tr>
												<td><?php echo $no++; ?></td>
												<td><?php echo $m['nama_periode'] ?></td>
												<td><?php echo count( $m['jumlah'] ) ?></td>
											</tr>
										<?php endforeach; ?>
									<?php else: ?>
										<tr>
											<td colspan="3">DATA TIDAK TERSEDIA</td>
										</tr>
									<?php endif; ?>
								</tbody>
							</table>
						</div>
						<div class="tab-pane" id="two">
							<table class="table table-striped table-responsive" width="100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Periode</th>
										<th>Jumlah Pelamar</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; if( !empty( $pratama ) ): ?>
										<?php foreach( $pratama as $p ): ?>
											<tr>
												<td><?php echo $no++; ?></td>
												<td><?php echo $p['nama_periode'] ?></td>
												<td><?php echo count( $p['jumlah'] ) ?></td>
											</tr>
										<?php endforeach; ?>
									<?php else: ?>
										<tr>
											<td colspan="3">DATA TIDAK TERSEDIA</td>
										</tr>
									<?php endif; ?>
								</tbody>
							</table>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>