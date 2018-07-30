<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(). 'assets/images/favicon.png' ?>"/>

    <title>Permutasi Pegawai</title>

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
                <h3 class="page-header"><i class="fa fa-briefcase" aria-hidden="true"></i> Permutasi Pegawai dan dosen</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Pegawai</a></li>
                <li><a data-toggle="tab" href="#menu1">Dosen</a></li>
              </ul>

              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                <br>
                  <div class="row">
                    <div class="col-lg-12">
                      <table class="table table-striped table-bordered" id="mydata">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Pegawai</th>
                                <th>Fakultas</th>
                                <th>Sejak</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="show_data_pegawai">
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div id="menu1" class="tab-pane fade">
                <br>
                  <div class="row">
                    <div class="col-lg-12">
                      <table class="table table-striped table-bordered" id="mydata2">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Dosen</th>
                                <th>Fakultas</th>
                                <th>Sejak</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="show_data_dosen">

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Import Modal -->
    <?php $this->load->view('V_Admin/V_Permutasi_Pegawai/Modal_Edit_Permutasi_Pegawai.php'); ?>

  <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

  <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/bootstrap.min.js')?>"></script>

  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dataTables.js')?>"></script>

  <script type="text/javascript" src="<?php echo base_url('assets/js/datepicker.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/dataTables.bootstrap.min.js')?>"></script>
    

  <!-- Metis Menu Plugin JavaScript -->
  <script src="<?php echo base_url('assets/metisMenu/metisMenu.min.js') ?>"></script>


  <script src="<?php echo base_url('assets/js/sb-admin-2.js') ?>"></script>

<script type="text/javascript">

$(document).ready(function(){

  // Load data ketika dokumen html siap
  show_data_pegawai();
  show_data_dosen();
  // Catatan apakah ini adalah cara yang baik dalam performance ?
  $('#mydata').DataTable();
  $('#mydata2').DataTable();

});

function show_data_pegawai(){

  $.ajax({
    type  : 'ajax',
    url   : '<?php echo base_url() . 'C_Permutasi_Pegawai/getFakultasPegawai' ?>',
    async : false,
    dataType : 'json',
    success : function(data){
      var html = '';
      var i;
      for(i=0; i<data.length; i++){
          html += '<tr>'+
                  '<td>' + (i + 1) + '</td>'+
                  '<td>'+data[i].nama_pegawai+'</td>'+
                  '<td>'+data[i].nama_fakultas+'</td>'+
                  '<td>'+data[i].sejak_tanggal+'</td>'+

                  '<td>'+
                      '<a href="javascript:void(0);" class="btn btn-primary btn-sm" id="show_modal_edit" ' +
                      'data-nip="'+ data[i].NIP + '"' +
                      'data-kd_fakultas="'+ data[i].kd_fakultas + '"' +
                      'data-nama_pegawai="'+ data[i].nama_pegawai + '"' +
                      'data-nama_fakultas="'+ data[i].nama_fakultas + '">' +
                      '<i class="fa fa-pencil" aria-hidden="true"></i>  Edit</i></a>' +
                  '</td>'+ '</tr>';
        }
        $('#show_data_pegawai').html(html);
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert(textStatus);
      }
  });

}

// Munculkan Modal Edit Fakultas Pegawai
$('#show_data_pegawai').on('click', '#show_modal_edit', function(){

  var nip = $(this).data('nip');
  var nama_pegawai = $(this).data('nama_pegawai');
  var nama_fakultas = $(this).data('nama_fakultas');
  var kd_fakultas = $(this).data('kd_fakultas');

  // Mengisi data select di modal edit
  $.ajax({
    type  : 'ajax',
    url   : '<?php echo base_url() . 'C_Permutasi_Pegawai/getFakultasList' ?>',
    async : false,
    dataType : 'json',
    success : function(data){

      var html = '';
      for (var i = 0; i < data.length; i++) {
        html += '<option value="' + data[i].kd_fakultas + 
          '" data-nama="' + data[i].nama_fakultas + '">' +
          data[i].nama_fakultas +'</option>';
      }
      $('#select_fakultas_pegawai').html(html);

    },
    error: function(jqXHR, textStatus, errorThrown){
      alert(textStatus);
    }
  });
  
  // Mengisi input 
  $('#nip_pegawai').val(nip);
  $('#kd_fakultas').val(kd_fakultas);
  $('#nama_pegawai').val(nama_pegawai);
  $('#fakultas_pegawai').val(nama_fakultas);
  $('#Modal_Edit_Fakultas_Pegawai').modal('show');
});

    // ============================== DATA DOSEN ==================================
function show_data_dosen(){

  $.ajax({
    type  : 'ajax',
    url   : '<?php echo base_url() . 'C_Permutasi_Pegawai/getFakultasDosen' ?>',
    async : false,
    dataType : 'json',
    success : function(data){
      var html = '';
      var i;
      for(i=0; i<data.length; i++){
          html += '<tr>'+
                  '<td>' + (i + 1) + '</td>'+
                  '<td>'+data[i].nama_pegawai+'</td>'+
                  '<td>'+data[i].nama_fakultas+'</td>'+
                  '<td>'+data[i].sejak_tanggal+'</td>'+

                  '<td>'+
                      '<a href="javascript:void(0);" class="btn btn-primary btn-sm" id="show_modal_edit" ' +
                      'data-nip="'+ data[i].NIP + '"' +
                      'data-kd_fakultas="'+ data[i].kd_fakultas + '"' +
                      'data-nama_pegawai="'+ data[i].nama_pegawai + '"' +
                      'data-nama_fakultas="'+ data[i].nama_fakultas + '">' +
                      '<i class="fa fa-pencil" aria-hidden="true"></i>  Edit</i></a>' +
                  '</td>'+ '</tr>';
        }
        $('#show_data_dosen').html(html);
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert(textStatus);
      }
  });
}

// Munculkan Modal Edit Fakultas Dosen
$('#show_data_dosen').on('click', '#show_modal_edit', function(){

  var nip = $(this).data('nip');
  var nama_pegawai = $(this).data('nama_pegawai');
  var nama_fakultas = $(this).data('nama_fakultas');
  var kd_fakultas = $(this).data('kd_fakultas');

  // Mengisi data select di modal edit
  $.ajax({
    type  : 'ajax',
    url   : '<?php echo base_url() . 'C_Permutasi_Pegawai/getFakultasList' ?>',
    async : false,
    dataType : 'json',
    success : function(data){

      var html = '';
      for (var i = 0; i < data.length; i++) {
        html += '<option value="' + data[i].kd_fakultas + 
          '" data-nama="' + data[i].nama_fakultas + '">' +
          data[i].nama_fakultas +'</option>';
      }
      $('#select_fakultas_pegawai').html(html);

    },
    error: function(jqXHR, textStatus, errorThrown){
      alert(textStatus);
    }
  });

  // Mengisi input 
  $('#nip_pegawai').val(nip);
  $('#kd_fakultas').val(kd_fakultas);
  $('#nama_pegawai').val(nama_pegawai);
  $('#fakultas_pegawai').val(nama_fakultas);
  $('#Modal_Edit_Fakultas_Pegawai').modal('show');
});


  </script>

</body>

</html>
