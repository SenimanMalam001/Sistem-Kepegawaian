<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Surat Keputusan</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link href="<?php echo base_url('assets/bootstrap/dataTables.bootstrap.min.css') ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.min.css'); ?>">
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/sb-admin-2.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/fonts/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/bootstrap-datepicker3.css') ?>"/>

  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">


</head>

<body>

<div id="wrapper">
  <?php $this->load->view('V_Admin/partials/side-nav') ?>

  <!-- CONTENT -->
  <div id="page-wrapper">
    <div class="row">
    	<div class="col-lg-12">
      <h2 class="page-header"><i class="fa fa-envelope" aria-hidden="true"></i> Surat Keputusan</h2>
        <a href="javascript:void(0);" style="margin-bottom:20px;" id="show_modal_add" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a>
    	</div>
    </div>
    <div class="row">
  		<div class="col-lg-12">
  			<table class="table table-hover" id="mydata">
					<thead>
							<tr>
									<th>#</th>
									<th>Nama SK</th>
                  <th>Jumlah Anggota</th>
									<th>Tanggal Awal</th>
									<th>Tanggal Akhir</th>
                  <th>Berkas</th>
									<th style="text-align: right;">Actions</th>
							</tr>
					</thead>
					<tbody id="show_data">

					</tbody>
  			</table>

  		</div>
      </div>
      </div>
    </div>

  </div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<?php $this->load->view('V_Admin/V_Surat_Keterangan/V_Modal') ?>

<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/bootstrap.min.js')?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dataTables.js')?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/datepicker.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/dataTables.bootstrap.min.js')?>"></script>
   

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url('assets/metisMenu/metisMenu.min.js') ?>"></script>


<script src="<?php echo base_url('assets/js/sb-admin-2.js') ?>"></script>

  <script type="text/javascript" src="<?php echo base_url('assets/js/datepicker.js') ?>"></script>

  <!-- Page Spesifict -->
  <?php $this->load->view('V_Admin/V_Surat_Keterangan/Script_Surat_Keterangan') ?>
  
</body>

</html>
