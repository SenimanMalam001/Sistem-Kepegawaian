<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Olah Pegawai</title>
    <link rel="icon" type="image/png" href="<?php echo base_url() .'assets/images/uin_logo.png'?> "/>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link href="<?php echo base_url('assets/bootstrap/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
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

</head>

<body>

    <div id="wrapper">

        <?php $this->load->view('V_Admin/partials/side-nav') ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-9">
                  <h3 class="page-header"><i class="fa fa-user" aria-hidden="true"> Profil</i></h3>
                    <!-- <a href="javascript:void(0);" style="margin-bottom:20px;" id="show_modal_add" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a> -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
              <div class="col-lg-12">
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Pegawai</a></li>
                <li><a data-toggle="tab" href="#menu1">Dosen</a></li>
              </ul>

              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                <div class="row">
                    <div class="col-lg-12" style="padding-bottom: 8px; padding-top: 20px">
                        <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" id="tambah" data-target="#Modal_Add_Pegawai"><span class="fa fa-plus"></span> Tambah</a></div>
                    </div>
                </div>
                  <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                      <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>NO Telp</th>
                        <th>Golongan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody id="show_data">
                      <?php foreach($pegawai as $p) { ?>
                          <tr>
                            <td><?php echo $p->NIP; ?></td>
                            <td><?php echo $p->nama_pegawai; ?></td>
                            <td><?php echo $p->jenis_kelamin; ?></td>
                            <td><?php echo $p->no_telepon; ?></td>
                            <td><?php echo $p->nama_golongan; ?></td>
                            <td><?php echo $p->status_aktif; ?></td>
                            <td>
                              <a href="<?php echo base_url() . 'admin/profil/detail_pegawai/' . $p->NIP ?>" class="btn btn-primary fa fa-user btn-sm"> Detail</a>
                              <a href="javascript:void(0);" class="btn btn-danger fa fa-trash btn-sm item_delete" <?php echo $p->NIP; ?> > Hapus</a>
                            </td>

                          </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <div id="menu1" class="tab-pane fade">
                  <div class="row">
                    <div class="col-lg-12" style="padding-bottom: 8px; padding-top: 20px">
                        <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" id="tambah" data-target="#Modal_Add_Pegawai"><span class="fa fa-plus"></span> Tambah</a></div>
                    </div>
                </div>
                  <table class="table table-striped table-bordered" id="table_dosen">
                    <thead>
                      <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>NO Telp</th>
                        <th>Golongan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody id="show_data_dosen">
                      <?php foreach($dosen as $p) { ?>
                          <tr>
                            <td><?php echo $p->NIP; ?></td>
                            <td><?php echo $p->nama_pegawai; ?></td>
                            <td><?php echo $p->jenis_kelamin; ?></td>
                            <td><?php echo $p->no_telepon; ?></td>
                            <td><?php echo $p->nama_golongan; ?></td>
                            <td><?php echo $p->status_aktif; ?></td>
                            <td>
                              <a href="<?php echo base_url() . 'admin/profil/detail_dosen/' . $p->NIP ?>" class="btn btn-primary fa fa-user btn-sm"> Detail</a>
                              <a href="javascript:void(0);" class="btn btn-danger fa fa-trash btn-sm item_delete" <?php echo $p->NIP; ?> > Hapus</a>
                            </td>

                          </tr>
                      <?php } ?>
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

    <!-- Include semua modal -->
    <?php $this->load->view('V_Admin/V_Pegawai_Admin/Modal_Add') ?>
    <?php $this->load->view('V_Admin/V_Pegawai_Admin/Modal_Add_Pegawai') ?>

<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/bootstrap.min.js')?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dataTables.js')?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/datepicker.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/dataTables.bootstrap.min.js')?>"></script>
   

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url('assets/metisMenu/metisMenu.min.js') ?>"></script>


<script src="<?php echo base_url('assets/js/sb-admin-2.js') ?>"></script>

    <script type="text/javascript">
    $(document).ready(function() {
      $('#myTable').DataTable();
      $('#table_dosen').DataTable();

      // ============================== Add Pegawai Baru =========================
      $('#btn_save_biodata').on('click',function(){
                var NIP        = $('#NIP').val();
                var nama_pegawai = $('#nama_pegawai').val();
                var no_ktp = $('#no_ktp').val();
                var no_telepon = $('#no_telepon').val();
                var no_telepon_rumah = $('#no_telepon_rumah').val();
                var alamat_tinggal = $('#alamat_tinggal').val();
                var alamat_tetap = $('#alamat_tetap').val();
                var jenis_kelamin = $('#jenis_kelamin').val();
                var tanggal_lahir = $('#tanggal_lahir').val();
                var tempat_lahir = $('#tempat_lahir').val();
                var agama = $('#agama').val();
                var status_aktif = $('#status_aktif').val();
                var email = $('#email').val();
                var status_kepegawaian = $('#status_kepegawaian').val();


                $.ajax({
                    type : "POST",
                    url  : '<?php echo base_url().'C_Pegawai_Admin/save_pegawai' ?>',
                    dataType : "JSON",
                    data : {NIP:NIP, nama_pegawai:nama_pegawai, no_ktp:no_ktp, no_telepon:no_telepon, no_telepon_rumah:no_telepon_rumah, alamat_tinggal:alamat_tinggal, alamat_tetap:alamat_tetap, jenis_kelamin:jenis_kelamin, tanggal_lahir:tanggal_lahir, tempat_lahir:tempat_lahir, agama:agama, status_aktif:status_aktif, email:email, status_kepegawaian:status_kepegawaian},
                    success: function(data)
                        {$nip = $('#NIP').val();
                        $('#nip').val($nip);
                        $('[name="NIP"]').val("");
                        $('[name="nama_pegawai"]').val("");
                        $('[name="no_ktp"]').val("");
                        $('[name="no_telepon"]').val("");
                        $('[name="no_telepon_rumah"]').val("");
                        $('[name="alamat_tinggal"]').val("");
                        $('[name="alamat_tetap"]').val("");
                        $('[name="jenis_kelamin"]').val("");
                        $('[name="tanggal_lahir"]').val("");
                        $('[name="tempat_lahir"]').val("");
                        $('[name="agama"]').val("");
                        $('[name="status_aktif"]').val("");
                        $('[name="email"]').val("");
                        $('[name="status_kepegawaian"]').val("");
                        $("#tab_golongan").click();

                    }
                });
                return false;
            });

      //===========================ADD Golongan======================================
      $('#btn_save_golongan').on('click',function(){
                var nip        = $('#nip').val();
                var kd_golongan = $('#kd_golongan').val();
                var tanggal_mulai = $('#tanggal_mulai').val();
                var sk_file = $('#sk_file').val();

                $.ajax({
                    type : "POST",
                    url  : '<?php echo base_url().'C_Pegawai_Admin/save_golongan' ?>',
                    dataType : "JSON",
                    data : {nip:nip, kd_golongan:kd_golongan, tanggal_mulai:tanggal_mulai, sk_file:sk_file},
                    success: function(data){
                        $nip = $('#nip').val();
                        $('#nip_pegawai').val($nip);
                        $('[name="nip"]').val("");
                        $('[name="kd_golongan"]').val("");
                        $('[name="tanggal_mulai"]').val("");
                        $('[name="sk_file"]').val("");
                        $("#tab_jabatan_fungsional").click();
                    }
                });
                return false;
            });

      //===========================ADD Jabatan Fungsional======================================
      $('#btn_save_jabatan_fungsional').on('click',function(){
                var nip_pegawai        = $('#nip_pegawai').val();
                var jabFa = $('#jabFa').val();
                var sejak_tanggal = $('#sejak_tanggal').val();
                var surat_keputusan = $('#surat_keputusan').val();

                $.ajax({
                    type : "POST",
                    url  : '<?php echo base_url().'C_Pegawai_Admin/save_jabatan_fungsional' ?>',
                    dataType : "JSON",
                    data : {nip_pegawai:nip_pegawai, jabFa:jabFa, sejak_tanggal:sejak_tanggal, surat_keputusan:surat_keputusan},
                    success: function(data){
                        $nip = $('#nip_pegawai').val();
                        $('#nip_pegawai_fakultas').val($nip);
                        $('[name="nip_pegawai"]').val("");
                        $('[name="jabFa"]').val("");
                        $('[name="sejak_tanggal"]').val("");
                        $('[name="surat_keputusan"]').val("");
                        $("#tab_fakultas_pegawai").click();
                    }
                });
                return false;
            });

      //===========================ADD Fakultas Pegawai======================================
      $('#btn_save_fakultas_pegawai').on('click',function(){
                var nip_pegawai_fakultas       = $('#nip_pegawai_fakultas').val();
                var kd_fakultas = $('#kd_fakultas').val();
                var sejak_tanggal = $('#sejak_tanggal_fakultas').val();
                var surat_keputusan = $('#surat_keputusan_fakultas').val();

                $.ajax({
                    type : "POST",
                    url  : '<?php echo base_url().'C_Pegawai_Admin/save_fakultas_pegawai' ?>',
                    dataType : "JSON",
                    data : {nip_pegawai_fakultas:nip_pegawai_fakultas, kd_fakultas:kd_fakultas, sejak_tanggal:sejak_tanggal, surat_keputusan:surat_keputusan},
                    success: function(data){
                        $nip = $('#nip_pegawai_fakultas').val();
                        $('[name="nip_pegawai_fakultas"]').val("");
                        $('[name="kd_fakultas"]').val("");
                        $('[name="sejak_tanggal"]').val("");
                        $('[name="surat_keputusan"]').val("");
                        $('#Modal_Add_Pegawai').modal('hide');
                    }
                });
                return false;
            });

      //get data for delete record
      $('.item_delete').on('click',function(){
          var NIP = $(this).data('NIP');
          
          $('#Modal_Delete_Pegawai').modal('show');
          $('[name="NIP"]').val(NIP);
      });

      //delete record to database
       $('#btn_delete').on('click',function(){
          var NIP = $('#NIP').val();
          $.ajax({
              type : "POST",
              url  : '<?php echo base_url().'C_Pegawai_Admin/delete' ?>',
              dataType : "JSON",
              data : {NIP:NIP},
              success: function(data){
                  $('[name="NIP"]').val("");
                  $('#Modal_Delete_Pegawai').modal('hide');
              }
          });
          return false;
      });

    });

    
    // ============================== SET GET nama_golongan & nama_jabatan variable =========================
    function setNamaGolongan(sel){
      nama_golongan = sel.options[sel.selectedIndex].text;
    }
    function setNamaJabatan(sel){
      nama_jabatan = sel.options[sel.selectedIndex].text;
    }
    function getNamaGolongan(){
      return nama_golongan;
    }
    function getNamaJabatan(){
      return nama_jabatan;
    }
    </script>

</body>

</html>
