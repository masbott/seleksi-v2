<?php $this->load->view('header') ?>
	<!-- end header -->
	<style>
		.page-header {
		  	margin-top: 20px;
			margin-bottom: 5px;
			padding-bottom: 10px;
			border-bottom: 1px solid #e4e4e4;
			display: block;
		}

		.page-header h1,.page-header h2{
			margin-top: 0;
			margin-bottom: 0;
			font-size: 40px;
			line-height: 24px;
			color: #34495E;
			font-weight: 400;
			display:inline-block;
			padding : 0 10px 0 0;
		}
	</style>
	

	<?php (!empty($content) && isset($content)) ? $this->load->view($content) : ''; ?>

<?php $this->load->view('footer'); ?>