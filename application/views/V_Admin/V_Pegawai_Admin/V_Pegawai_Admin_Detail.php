<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>
    <link rel="icon" type="image/png" href="<?php echo base_url() .'assets/images/uin_logo.png'?> "/>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/dataTables.bootstrap.min.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/metisMenu/metisMenu.min.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/sb-admin-2.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/fonts/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <?php $this->load->view('V_Admin/partials/side-nav') ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"><i class="fa fa-user" aria-hidden="true"> Profil</i></h2>
                </div>
            </div>
                <div class="row" style="padding-top: 10px">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Biodata</a></li>
                        <li><a data-toggle="tab" href="#pendidikan">Pendidikan</a></li>
                        <li><a data-toggle="tab" href="#golongan">Golongan</a></li>
                        <li><a data-toggle="tab" href="#jabatan_fungsional">Jabatan Fungsional</a></li>
                    </ul>
                    <!-- Tab panes, ini content dari tab di atas -->
                    
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="row col-lg-12" style="padding-top: 20px">
                            <!-- row 1  -->
                            <form role="form" name="form" action="<?php echo base_url() ?>C_profil/simpan_edit" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-4">
                                    <!-- box 1 -->
                                    <div class="panel panel-default">
                                        <div class="panel-header">
                                            <h3 class="box-title"><?php echo $pegawai->nama_pegawai; ?></h3>
                                        </div><!-- /.box-header -->
                                        
                                        <div class="panel-body">
                                            <img class="profil-image" src="<?php echo base_url() . 'images/' . $pegawai->foto_profil ?>" width="130px" height="140px" alt="Placeholder image">
                                        </div><!-- /.box-body -->
                                        
                                        <div class="panel-footer">
                                            <small>DOSEN PROGRAM STUDI MAIN DOTA                               
                                                <br>FUNGSIONAL: LEKTOR KEPALA</small>
                                            
                                                <div class="form-group">
                                                    <input class="upload" name="filefoto" type="file">
                                                    <button type="button" type="submit" id="btn_edit_profil" class="btn btn-primary btn-xs pull-right"> Edit Profil</button>
                                                    <button type="hide" type="button" type="submit" id="btn_simpan_profil" class="btn btn-primary btn-xs pull-right" hidden onclick="<?php echo base_url().'C_profil/simpan_edit'?>"> Simpan</button>
                                                </div>
                                                                     
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <!-- middle column -->
                                <div class="col-md-4"> <!-- col-md-4 -->                 
                                    <!-- box 2 -->
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="nip">NIP</label>
                                                <input type="text" name="nip" class="form-control" placeholder="NIP" value="<?php echo $pegawai->NIP; ?>" disabled="disabled" >
                                            </div>
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" name="nama_pegawai" class="form-control edit" placeholder="nama" value="<?php echo $pegawai->nama_pegawai; ?>" disabled="disabled">
                                                <input type="hidden" name="idfoto" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="noktp">No.KTP</label>
                                                <input type="text" name="no_ktp" class="form-control edit" placeholder="No.KTP" value="<?php echo $pegawai->no_ktp; ?>" disabled="disabled">
                                            </div> 
                                            <div class="form-group">
                                                <label for="agama">Agama</label>                                 
                                                <input type="text" name="agama" class="form-control edit" placeholder="Agama" value="<?php echo $pegawai->agama; ?>" disabled="disabled">
                                            </div>                              
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box 2 -->
                                </div><!-- /.col-md-4 -->
                                <!-- right column -->
                                <div class="col-md-4"> <!-- col-md-4 -->     
                                    <!-- box 3 -->
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label>Lahir di</label>
                                                <input type="text" name="tempat_lahir" class="form-control edit" placeholder="tempat lahir" value="<?php echo $pegawai->tempat_lahir; ?>" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label>Tgl Lahir</label>
                                                    <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control edit" data-provide="datepicker" value="<?php echo $pegawai->tanggal_lahir; ?>" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <input type="text" name="jenis_kelamin" class="form-control edit" placeholder="Jenis Kelamin" value="<?php echo $pegawai->jenis_kelamin; ?>" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label>Status Aktif</label>
                                                <input type="text" name="status_aktif" class="form-control edit" placeholder="Status" value="<?php echo $pegawai->status_aktif; ?>" disabled="disabled">
                                            </div>               
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box 3 -->
                                </div><!-- /.col-md-4 -->               
                            </div><!-- /.row -->

                            <!-- row 2  -->
                            <div class="row">
                                <!-- leftt column -->
                                <div class="col-md-4" style="padding-top: 10px"> <!-- col-md-4 -->
                                    <!-- box 1 -->
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label>Alamat Tetap</label>
                                                <input type="text" name="alamat_tetap" class="form-control edit" placeholder="Alamat" value="<?php echo $pegawai->alamat_tetap; ?>" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat Tinggal</label>
                                                <input type="text" name="alamat_tinggal" class="form-control edit" placeholder="Alamat" value="<?php echo $pegawai->alamat_tinggal; ?>" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label>No.Telepon Rumah</label>
                                                <input type="text" name="no_telepon_rumah" class="form-control edit" placeholder="No Telepon rumah" value="<?php echo $pegawai->no_telepon_rumah; ?>" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label>No.Ponsel</label>
                                                <input type="text" name="no_telepon" class="form-control edit" placeholder="no.ponsel" value="<?php echo $pegawai->no_telepon; ?>" disabled="disabled">
                                            </div>                             
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box 1 -->
                                </div><!-- /.col-md-4 -->
                                <!-- middle column -->
                                <div class="col-md-4" style="padding-top: 10px">  <!-- col-md-4 -->
                                    <!-- box 2 -->
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="kg">Golongan</label>
                                                <input type="text" name="golongan" class="form-control" placeholder="Golongan" value="<?php echo $pegawai->nama_golongan; ?>" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label for="tmtgol">Fakultas</label>
                                                <input type="text" name="fakultas" class="form-control" placeholder="Fakultas" value="" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label for="tmtjab">t.m.t. Fungsional</label>
                                                <input type="text" name="fungsional" class="form-control" placeholder="t.m.t. Fungsional" value="" disabled="disabled">
                                            </div>                             
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box 2 -->
                                </div><!-- /.col-md-4 -->

                                <!-- right column -->  
                                <div class="col-md-4" style="padding-top: 10px">  <!-- col-md-4 -->
                                    <!-- box 3 -->
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="kg">Graderemunerasi</label>
                                                <input type="text" name="tmtgol" class="form-control" placeholder="Golongan" value="" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label for="tmtgol">Jabatan Fungsional</label>
                                                <input type="text" name="tmtgol" class="form-control" placeholder="t.m.t. Golongan" value="" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label for="tmtjab">Jabatab Struktural</label>
                                                <input type="text" name="tmtjab" class="form-control" placeholder="t.m.t. Fungsional" value="" disabled="disabled">
                                            </div>                             
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                            </form> 
                        </div>
                    </div>

                <!-- Tab Pendidikan --> 
                <div id="pendidikan" class="tab-pane fade" >
                    <div class="row col-lg-12" style="padding-top: 10px">
                 
                            <div class="row">
                              <div class="col-md-12" style="padding-left: 50px;">
                                <h2 class="page-header" style="text-align: center;"><i class="fa fa-graduation-cap" aria-hidden="true"> Riwayat Pendidikan</i></h2>
                                <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" id="tambah" data-target="#Modal_Add"><span class="fa fa-plus"></span> Tambah</a>
                                </div>
                                <table class="table table-hover">
                                  <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Jenjang Pendidikan</th>
                                          <th>Gelar</th>
                                          <th>Nama Sekolah/Perguruan Tinggi</th>
                                          <th>Tahun Masuk</th>
                                          <th>Tahun Lulus</th>
                                          <th>Actions</th>
                                      </tr>
                                  </thead>
                                  <tbody id="list_pendidikan">

                                  </tbody>
                                </table>
                              </div>
                            </div>
                        </div>     
                    </div>

                    <!-- Tab Golongan --> 
                    <div id="golongan" class="tab-pane fade" >
                        <div class="row col-lg-12" style="padding-top: 10px">
                     
                                <div class="row">
                                  <div class="col-md-12" style="padding-left: 50px;">
                                    <h2 class="page-header" style="text-align: center;"><i class="fa fa-user aria-hidden="true"> Golongan</i></h2>
                                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" id="tambah" data-target="#Modal_Add_Golongan"><span class="fa fa-plus"></span> Tambah</a>
                                    </div>
                                    <table class="table table-hover">
                                      <thead>
                                          <tr>
                                              <th>No</th>
                                              <th>NIP</th>
                                              <th>Nama</th>
                                              <th>Golongan</th>
                                              <th>Actions</th>
                                          </tr>
                                      </thead>
                                      <tbody id="golongan">

                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                            </div>     
                        </div>

                        <!-- Tab Jabatan Fungsional --> 
                        <div id="jabatan_fungsional" class="tab-pane fade" >
                            <div class="row col-lg-12" style="padding-top: 10px">
                         
                                <div class="row">
                                  <div class="col-md-12" style="padding-left: 50px;">
                                    <h2 class="page-header" style="text-align: center;"><i class="fa fa-user" aria-hidden="true"> Jabatan Fungsional</i></h2>
                                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" id="tambah" data-target="#Modal_Add_Jabatan"><span class="fa fa-plus"></span> Tambah</a>
                                    </div>
                                    <table class="table table-hover">
                                      <thead>
                                          <tr>
                                              <th>No</th>
                                              <th>NIP</th>
                                              <th>Nama</th>
                                              <th>Jabatan Fungsional</th>
                                              <th>Actions</th>
                                          </tr>
                                      </thead>
                                      <tbody id="jabatan_fungsional">

                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                            </div>     
                        </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <?php $this->load->view('V_Admin/V_Pegawai_Admin/Modal_Pendidikan') ?>
    <?php $this->load->view('V_Admin/V_Pegawai_Admin/Modal_Add_Golongan') ?>
    <?php $this->load->view('V_Admin/V_Pegawai_Admin/Modal_Add_Jabatan') ?>
    
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/metisMenu/metisMenu.min.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/bootstrap/bootstrap.min.js') ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/js/sb-admin-2.js') ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/datepicker.js') ?>"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.upload').hide();
            $('#btn_simpan_profil').hide();
            $('#btn_edit_profil').click(function(){
                $('.edit').removeAttr("disabled");
                $('.upload').show();
                $('#btn_edit_profil').hide();
                $('#btn_simpan_profil').show();
            });
            $('#btn_simpan_profil').click(function(){
                $('#btn_simpan_profil').hide();
                $('.upload').hide();
                $('.edit').Attr("disabled");
                $('#btn_edit_profil').show();
                
                
            });

            show_data();

            $('#myTable').DataTable();
            $('#table_dosen').DataTable();
            
            var nama_golongan = '';
            var nama_jabatan = '';


            $('#show_data').on('click', '#show_modal_edit_jabatan', function(){
              var nip = $(this).data('nip');

              $('[name="nip_pegawai"]').val(nip);

              $('#Modal_Perubahan_Jabatan').modal('show');

              // Mengambil data golongan sekarang
              $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url() . 'C_Pegawai_Admin/getGolonganByNIP' ?>',
                async : false,
                data : {nip : nip},
                dataType : 'json',
                success : function(data){
                  console.log(data);
                  
                  $('[name="kd_golongan_sekarang"]').val(data[0].kd_golongan);
                  $('[name="nama_golongan_sekarang"]').val(data[0].nama_golongan);
                },
                error: function(jqXHR, textStatus, errorThrown){
                  alert(textStatus);
                }
              });


              // Mengambil data golongan untuk select golongan
              $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url() . 'C_Pegawai_Admin/getListGolongan' ?>',
                async : false,
                dataType : 'json',
                success : function(data){
                  console.log(data);
                  
                  var html = '';
                  for (var i = 0; i < data.length; i++) {
                    html += '<option value="' + data[i].kd_golongan + '" data-nama="' + data[i].nama_golongan +'">' + data[i].nama_golongan +'</option>';
                  }
                  $('#select_golongan').html(html);
                }
              });

              // Mengambil data jabatan sekarang
              $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url() . 'C_Pegawai_Admin/getJabatanByNIP' ?>',
                async : false,
                data : {nip : nip},
                dataType : 'json',
                success : function(data){
                  console.log(data);
                
                  $('[name="nama_jabatan_sekarang"]').val(data[0].nama_jabatan);
                },
                error: function(jqXHR, textStatus, errorThrown){
                  alert(textStatus);
                }
              });

              // Mengambil data jabatan untuk select jabatan
              $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url() . 'C_Pegawai_Admin/getListJabatan' ?>',
                async : false,
                dataType : 'json',
                success : function(data){
                  console.log(data);
                  
                  var html = '';
                  for (var i = 0; i < data.length; i++) {
                    html += '<option value="' + data[i].id + '" data-nama="' + data[i].nama_jabatan + '">' + data[i].nama_jabatan +'</option>';
                  }
                  $('#select_jabatan').html(html);
                }
              });

            });

            // ============================== MODAL_PERUBAHAN_JABATAN ============================
            var tab = 1;
            $('#tab_golongan').on('click', function(){
              tab = 1;
            });
            $('#tab_fungsional').on('click', function(){
              tab = 2;
            });
            $('#btn_update_jabatan').on('click', function(){
              console.log(tab);
              
              if(tab == 1){

                // Mengambil data dari form
                var kd_golongan = $('#select_golongan').val();
                var nip = $('[name="nip_pegawai"]').val();

                $.ajax({
                  type  : 'POST',
                  url   : '<?php echo base_url() . 'C_Pegawai_Admin/updateGolongan' ?>',
                  async : false,
                  dataType : 'json',
                  data : {nip :nip, kd_golongan : kd_golongan},
                  success : function(data){
                    alert('Berhasil Update Golongan');
                    var nama = getNamaGolongan();
                    
                    $('[name="nama_golongan_sekarang"]').val(nama);
                  }
                });

              }else if(tab == 2){
                // Mengambil data dari form
                var id_jabatan = $('#select_jabatan').val();
                var nip = $('[name="nip_pegawai"]').val();

                $.ajax({
                  type  : 'POST',
                  url   : '<?php echo base_url() . 'C_Pegawai_Admin/updateJabatan' ?>',
                  async : false,
                  dataType : 'json',
                  data : {nip :nip, id_jabatan : id_jabatan},
                  success : function(data){
                    alert('Berhasil Update Jabatan');
                    var nama = getNamaJabatan();

                    $('[name="nama_jabatan_sekarang"]').val(nama);
                  }
                });

              }
            });

            // ============================== MODAL_Pendidikan ===============================

            function show_data(){
                $.ajax({
                    type  : 'ajax',
                    url   : '<?php echo base_url().'C_Pegawai_Admin/data_pendidikan' ?>',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<tr>'+
                                    '<td>'+ (i+1) + '</td>' +
                                    '<td>'+data[i].jenjang_pendidikan+'</td>'+
                                    '<td>'+data[i].gelar+'</td>'+
                                    '<td>'+data[i].nama_pendidikan+'</td>'+
                                    '<td>'+data[i].tahun_angkatan+'</td>'+
                                    '<td>'+data[i].tasshun_lulus+'</td>'+
                                    '<td style="text-align:right;">'+
                                   
                                        '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit fa fa-edit" data-id="'+data[i].id+'" data-jenjang_pendidikan="'+data[i].jenjang_pendidikan+'" data-gelar="'+data[i].gelar+'"  data-nama_pendidikan="'+data[i].nama_pendidikan+'"  data-tahun_angkatan="'+data[i].tahun_angkatan+'"  data-tahun_lulus="'+data[i].tahun_lulus+'"></a>'+' '+
                                        '<a href="javascript:void(0);" class="btn btn-danger fa fa-trash btn-sm item_delete" data-id="'+data[i].id+'"></a>'+
                                    '</td>'+
                                    '</tr>';
                        }
                        $('#list_pendidikan').html(html);
                    }

                });
            }

            $('#btn_save').on('click',function(){
                var nip_pegawai        = $('[name=nip_pegawai]').val();
                var jenjang_pendidikan = $('[name=jenjang_pendidikan]').val();
                var gelar = $('#gelar').val();
                var nama_pendidikan = $('#nama_pendidikan').val();
                var tahun_angkatan = $('#tahun_angkatan').val();
                var tahun_lulus = $('#tahun_lulus').val();

                $.ajax({
                    type : "POST",
                    url  : '<?php echo base_url().'C_Pegawai_Admin/save_pendidikan' ?>',
                    dataType : "JSON",
                    data : {nip_pegawai:nip_pegawai, jenjang_pendidikan:jenjang_pendidikan, gelar:gelar, nama_pendidikan:nama_pendidikan, tahun_angkatan:tahun_angkatan, tahun_lulus:tahun_lulus},
                    success: function(data){
                        $('[name="jenjang_pendidikan"]').val("");
                        $('[name="gelar"]').val("");
                        $('[name="nama_pendidikan"]').val("");
                        $('[name="tahun_angkatan"]').val("");
                        $('[name="tahun_lulus"]').val("");
                        $('#Modal_Add').modal('hide');
                        show_data();
                    }
                });
                return false;
            });


            $('#list_pendidikan').on('click','.item_edit',function(){
                var id                      = $(this).data('id');
                var jenjang_pendidikan      = $(this).data('jenjang_pendidikan');
                var gelar                   = $(this).data('gelar');
                var nama_pendidikan         = $(this).data('nama_pendidikan');
                var tahun_angkatan          = $(this).data('tahun_angkatan');
                var tahun_lulus             = $(this).data('tahun_lulus');
                
                $('#Modal_Edit').modal('show');
                $('[name="id"]').val(id);
                $('[name="jenjang_pendidikan_edit"]').val(jenjang_pendidikan);
                $('[name="gelar_edit"]').val(gelar);
                $('[name="nama_pendidikan_edit"]').val(nama_pendidikan);
                $('[name="tahun_angkatan_edit"]').val(tahun_angkatan);
                $('[name="tahun_lulus_edit"]').val(tahun_lulus);
            });

             $('#btn_update').on('click',function(){
                var id             = $('#id').val();
                var jenjang_pendidikan      = $('#jenjang_pendidikan_edit').val();
                var gelar                   = $('#gelar_edit').val();
                var nama_pendidikan         = $('#nama_pendidikan_edit').val();
                var tahun_angkatan          = $('#tahun_angkatan_edit').val();
                var tahun_lulus             = $('#tahun_lulus_edit').val();

                $.ajax({
                    type : "POST",
                    url  : '<?php echo base_url().'C_Pegawai_Admin/edit_pendidikan' ?>',
                    dataType : "JSON",
                    data : {id:id, jenjang_pendidikan:jenjang_pendidikan, gelar:gelar, nama_pendidikan:nama_pendidikan, tahun_angkatan:tahun_angkatan, tahun_lulus:tahun_lulus},
                    success: function(data){
                        $('[name="jenjang_pendidikan_edit"]').val("");
                        $('[name="gelar_edit"]').val("");
                        $('[name="nama_pendidikan_edit"]').val("");
                        $('[name="tahun_angkatan_edit"]').val("");
                        $('[name="tahun_lulus_edit"]').val("");
                        $('#Modal_Edit').modal('hide');
                        show_data();
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        alert(textStatus);
                    }

                });
            });

             //get data for delete record
             $('#show_data').on('click','.item_delete',function(){
                 var id = $(this).data('id');
                 
                 $('#Modal_Delete').modal('show');
                 $('[name="id"]').val(id);
             });

             //delete record to database
              $('#btn_delete').on('click',function(){
                 var id = $('#id').val();
                 $.ajax({
                     type : "POST",
                     url  : '<?php echo base_url().'C_Pegawai_Admin/delete_pendidikan' ?>',
                     dataType : "JSON",
                     data : {id:id},
                     success: function(data){
                         $('[name="id"]').val("");
                         $('#Modal_Delete').modal('hide');
                         show_data();
                     }
                 });
                 return false;
             });
        });

    </script>

</body>

</html>
