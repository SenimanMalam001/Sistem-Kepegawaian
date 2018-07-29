<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Jabatan Struktural</title>

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
                <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-briefcase" aria-hidden="true"></i> Jabatan Struktural</h3>
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
                <br>
                  <table class="table table-striped table-bordered" id="tableJabatanDosen">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Sejak</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody id="show_data_dosen">
                      <?php foreach($jabtan_dosen as $jabatan) { ?>
                        <tr>
                          <td><?php echo $jabatan->nama_pegawai; ?></td>
                          <td><?php echo $jabatan->nama_jabatan; ?></td>
                          <td><?php echo $jabatan->sejak_tanggal; ?></td>
                          <td>
                            <a href="#" id="show_modal_edit_dosen" data-nip="<?php echo $jabatan->NIP; ?>" data-nama="<?php echo $jabatan->nama_pegawai; ?>" data-jabatan="<?php echo $jabatan->nama_jabatan; ?>" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                          </td>

                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <div id="menu1" class="tab-pane fade">
                <br>
                  <table class="table table-striped table-bordered" id="tableJabatanPegawai">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Jabatan</th>
                      <th>Sejak</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody id="show_data_pegawai">
                    <?php foreach($jabtan_pegawai as $jabatan) { ?>
                        <tr>
                          <td><?php echo $jabatan->nama_pegawai; ?></td>
                          <td><?php echo $jabatan->nama_jabatan; ?></td>
                          <td><?php echo $jabatan->sejak_tanggal; ?></td>
                          <td>
                            <a href="#" id="show_modal_edit_pegawai" data-nip="<?php echo $jabatan->NIP; ?>" data-nama="<?php echo $jabatan->nama_pegawai; ?>" data-jabatan="<?php echo $jabatan->nama_jabatan; ?>" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></i></a>
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

    <!-- Import Modal -->
    <?php $this->load->view('V_Admin/V_Jabatan_Struktural/Modal_Edit_Dosen'); ?>
    <?php $this->load->view('V_Admin/V_Jabatan_Struktural/Modal_Edit_Pegawai'); ?>

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
  
  $('#tableJabatanDosen').DataTable();
  $('#tableJabatanPegawai').DataTable();

  $('.divDosenLalu').hide();
  $('.divPegawaiLalu').hide();
});


// Bagian Dosen
$('#show_data_dosen').on('click', '#show_modal_edit_dosen', function(){

  var NIP = $(this).data('nip');
  var nama_pegawai = $(this).data('nama');
  var jabatan = $(this).data('jabatan');

  // Set data pada text field biasa
  $('#id_dosen_baru').val(NIP);
  $('[name="nama_dosen"]').val(nama_pegawai);
  $('#jabatan_dosen').val(jabatan);
  console.log(jabatan);

  $('#Modal_Edit_Jabatan_Dosen').modal('show');

  // Mengambil data jabatan dosen tersedia
  $.ajax({
    type  : 'POST',
    url   : '<?php echo base_url() . 'C_Jabatan_Struktural/getJabatanDosen' ?>',
    async : false,
    dataType : 'json',
    success : function(data){
      console.log(data);
      
      var html = '';
      for (var i = 0; i < data.length; i++) {
        html += '<option value="' + data[i].id + '">' + data[i].nama_jabatan +'</option>';
      }
      
      $('#select_jabatan_dosen').html(html);

    },
    error: function(jqXHR, textStatus, errorThrown){
      alert(textStatus);
    }
  });

});

$('#pilih_jabatan_baru').on('click', function(){
  var id_jab = $('#select_jabatan_dosen').val();
  
  // Ambil Pemilik Jabatan
  $.ajax({
    type  : 'POST',
    url   : '<?php echo base_url() . 'C_Jabatan_Struktural/getPemilikJabatan' ?>',
    async : false,
    data : {id_jab : id_jab},
    dataType : 'json',
    success : function(data){
      $('#nama_dosen_digantikan').val(data.nama_pegawai);
      $('#id_dosen_lama').val(data.NIP);
    },
    error: function(jqXHR, textStatus, errorThrown){
      alert(textStatus);
    }
  });

  // Ambil Jabatan Yang Tersedia
  $.ajax({
    type  : 'POST',
    url   : '<?php echo base_url() . 'C_Jabatan_Struktural/getJabatanKosong' ?>',
    async : false,
    dataType : 'json',
    success : function(data){

      var html = '';
      for (var i = 0; i < data.length; i++) {
        html += '<option value="' + data[i].id + '">' + data[i].nama_jabatan +'</option>';
      }
      $('#select_jabatan_pergantian').html(html);

      $('.divDosenLalu').show();

    },
    error: function(jqXHR, textStatus, errorThrown){
      alert(textStatus);
    }
  });

});

$('#btn_update_jabatan_dosen').on('click', function(){
  // Ambil Data yang dibutuhkan
  var id_dosen = $('#id_dosen_lama').val();
  var id_jabatan = $('#select_jabatan_pergantian').val();

  console.log('Updating Data : ' + id_dosen + ', ' + id_jabatan);
  

  // Update Data Dosen Lama Jabatan Baru
  $.ajax({
    type  : 'POST',
    url   : '<?php echo base_url() . 'C_Jabatan_Struktural/updateJabatanBaru' ?>',
    async : false,
    dataType : 'json',
    data : {id_dosen : id_dosen, id_jabatan : id_jabatan},
    success : function(data){
      console.log('Berhasil Update Data Dosen Lama');
    },
    error: function(jqXHR, textStatus, errorThrown){
      alert(textStatus);
    }
  });

  id_dosen = $('#id_dosen_baru').val();
  id_jabatan = $('#select_jabatan_dosen').val();

  console.log('Updating Data : ' + id_dosen + ', ' + id_jabatan);

  // Update Data Dosen Baru Jabatan Baru
  $.ajax({
    type  : 'POST',
    url   : '<?php echo base_url() . 'C_Jabatan_Struktural/updateJabatanBaru' ?>',
    async : false,
    dataType : 'json',
    data : {id_dosen : id_dosen, id_jabatan : id_jabatan},
    success : function(data){
      console.log('Berhasil Update Data Dosen Baru');
      $('#Modal_Edit_Jabatan_Dosen').modal('hide');
    },
    error: function(jqXHR, textStatus, errorThrown){
      alert(textStatus);
    }
  });

});

// ======================================= BAGIAN DATA PEGAWAI ===================================
$('#show_data_pegawai').on('click', '#show_modal_edit_pegawai', function(){

var NIP = $(this).data('nip');
var nama_pegawai = $(this).data('nama');
var jabatan = $(this).data('jabatan');

// Set data pada text field biasa
$('#id_pegawai_baru').val(NIP);
$('[name="nama_pegawai"]').val(nama_pegawai);
$('#jabatan_pegawai').val(jabatan);
console.log(jabatan);

$('#Modal_Edit_Jabatan_pegawai').modal('show');

// Mengambil data jabatan pegawai
$.ajax({
  type  : 'POST',
  url   : '<?php echo base_url() . 'C_Jabatan_Struktural/getJabatanPegawai' ?>',
  async : false,
  dataType : 'json',
  success : function(data){
    console.log(data);
    
    var html = '';
    for (var i = 0; i < data.length; i++) {
      html += '<option value="' + data[i].id + '">' + data[i].nama_jabatan +'</option>';
    }
    
    $('#select_jabatan_pegawai').html(html);

  },
  error: function(jqXHR, textStatus, errorThrown){
    alert(textStatus);
  }
});

});


            
$('#pilih_jabatan_baru_pegawai').on('click', function(){
var id_jab = $('#select_jabatan_pegawai').val();

// Ambil Pemilik Jabatan
$.ajax({
  type  : 'POST',
  url   : '<?php echo base_url() . 'C_Jabatan_Struktural/getPemilikJabatanPegawai' ?>',
  async : false,
  data : {id_jab : id_jab},
  dataType : 'json',
  success : function(data){
    $('#nama_pegawai_digantikan').val(data.nama_pegawai);
    $('#id_pegawai_lama').val(data.NIP);
  },
  error: function(jqXHR, textStatus, errorThrown){
    alert(textStatus);
  }
});

// Ambil Jabatan Kosong Tersedia
$.ajax({
  type  : 'POST',
  url   : '<?php echo base_url() . 'C_Jabatan_Struktural/getJabatanKosongPegawai' ?>',
  async : false,
  dataType : 'json',
  success : function(data){

    var html = '';
    for (var i = 0; i < data.length; i++) {
      html += '<option value="' + data[i].id + '">' + data[i].nama_jabatan +'</option>';
    }
    $('#select_jabatan_pergantian_pegawai').html(html);

    $('.divPegawaiLalu').show();

  },
  error: function(jqXHR, textStatus, errorThrown){
    alert(textStatus);
  }
});

});

$('#btn_update_jabatan_pegawai').on('click', function(){
  // Ambil Data yang dibutuhkan
  var id_dosen = $('#id_pegawai_lama').val();
  var id_jabatan = $('#select_jabatan_pergantian_pegawai').val();

  console.log('Updating Data : ' + id_dosen + ', ' + id_jabatan);


  // Update Data pegawai Lama Jabatan Baru
  $.ajax({
    type  : 'POST',
    url   : '<?php echo base_url() . 'C_Jabatan_Struktural/updateJabatanBaru' ?>',
    async : false,
    dataType : 'json',
    data : {id_dosen : id_dosen, id_jabatan : id_jabatan},
    success : function(data){
      console.log('Berhasil Update Data pegawai Lama');
    },
    error: function(jqXHR, textStatus, errorThrown){
      alert(textStatus);
    }
  });

  id_dosen = $('#id_pegawai_baru').val();
  id_jabatan = $('#select_jabatan_pegawai').val();

  console.log('Updating Data : ' + id_dosen + ', ' + id_jabatan);

  // Update Data pegawai Baru Jabatan Baru
  $.ajax({
    type  : 'POST',
    url   : '<?php echo base_url() . 'C_Jabatan_Struktural/updateJabatanBaru' ?>',
    async : false,
    dataType : 'json',
    data : {id_dosen : id_dosen, id_jabatan : id_jabatan},
    success : function(data){
      console.log('Berhasil Update Data pegawai Baru');
      $('#Modal_Edit_Jabatan_pegawai').modal('hide');

      
    },
    error: function(jqXHR, textStatus, errorThrown){
      alert(textStatus);
    }

    
  });

});

</script>

</body>

</html>
