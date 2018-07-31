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
    <link href="<?php echo base_url('assets/bootstrap/dataTables.bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/sb-admin-2.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/fonts/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <?php $this->load->view('V_Pegawai/partials/side-nav') ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-suitcase" aria-hidden="true"></i> Surat Tugas</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
              <div class="col-lg-12">
                <table class="table table-striped table-bordered" id="myTable">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Kegiatan</th>
                      <th>Sebagai</th>
                      <th>Tanggal Awal</th>
                      <th>Tanggal Akhir</th>
                      <th>Download</th>
                    </tr>
                  </thead>
                  <tbody id="show_data">
                  <?php $i = 1; ?>
                    <?php foreach($surattugas as $sk) { ?>
                        <tr>
                          <td><?php echo $i ?></td>
                          <td><?php echo $sk->deskripsi_rubrik; ?></td>
                          <td><?php echo $sk->deskripsi; ?></td>
                          <td><?php echo $sk->tgl_awal; ?></td>
                          <td><?php echo $sk->tgl_akhir; ?></td>
                          <td><a href="<?php echo base_url() . 'files/surat_keputusan/' . $sk->sk_fileurl; ?>" class="btn btn-success btn-sm" download><i class="fa fa-download" aria-hidden="true"></i> Download </a></td>
                        </tr>
                    <?php $i++; } ?>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/bootstrap/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/dataTables.bootstrap.min.js') ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/metisMenu/metisMenu.min.js') ?>"></script>


    <script src="<?php echo base_url('assets/js/sb-admin-2.js') ?>"></script>

    <script src="<?php echo base_url() . 'assets/js/notification.js' ?>"></script>

    <script type="text/javascript">
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
    </script>

</body>

</html>
