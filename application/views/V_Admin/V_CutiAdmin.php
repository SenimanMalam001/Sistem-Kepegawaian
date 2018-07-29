<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

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

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php $this->load->view('V_Admin/partials/side-nav') ?>

<!-- CONTENT -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pengajuan Surat Cuti</h1>
                </div>
                <!-- /.col-lg-12 -->
            
                            <!-- <h1>
                                <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                            </h1> -->
                        </div>

                        <table class="table table-striped" id="mydata">
                            <thead>
                                <tr>
                                    <th>Nip</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Akhir</th>
                                    <th>Alasan</th>
                                    <th>Status </th>
                                    <th style="text-align: right;">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="show_data">

                            </tbody>
                        </table>
                    

            </div>

                <!-- MODAL ADD -->
                    <form id="myForm">
                    <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Masukan Data cuti</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                           <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">pengajuan cuti</label>
                                    <div class="col-md-10">
                                        <div class="input-group date" data-provide="datepicker">
                                             <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                          <input type="text" name="pengajuan_cuti_input" id="pengajuan_cuti_input" class="form-control" >
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Mulai Cuti</label>
                                    <div class="col-md-10">
                                        <div class="input-group date" data-provide="datepicker">
                                             <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                          <input type="text" name="mulai_cuti_input" id="mulai_cuti_input" class="form-control" >
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Akhir Cuti</label>
                                    <div class="col-md-10">
                                        <div class="input-group date" data-provide="datepicker">
                                             <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                          <input type="text" name="akhir_cuti_input" id="akhir_cuti_input" class="form-control" >
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Alasan Cuti</label>
                                    <div class="col-md-10">
                                        <input type="text" name="alasan_cuti_input" id="alasan_cuti_input" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Nip Dosen</label>
                                    <div class="col-md-10">
                                        <input type="text" name="nip_dosen_cuti_input" id="nip_dosen_cuti_input" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Kode Jenis Cuti</label>
                                    <div class="col-md-10">
                                        <input type="text" name="kd_jenis_cuti_input" id="kd_jenis_cuti_input" class="form-control" >
                                    </div>
                                </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
                <!--END MODAL ADD-->

                <!-- MODAL EDIT -->
                <form>
                    <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Cuti</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Id Cuti</label>
                                    <div class="col-md-10">
                                      <input type="text" name="id_cuti_edit" id="id_cuti_edit" class="form-control" placeholder="Product Code" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Mulai Cuti</label>
                                    <div class="col-md-10">
                                        <div class="input-group date" data-provide="datepicker">
                                             <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                          <input type="text" name="mulai_cuti_edit" id="mulai_cuti_edit" class="form-control" >
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Akhir Cuti</label>
                                    <div class="col-md-10">
                                        <div class="input-group date" data-provide="datepicker">
                                             <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                          <input type="text" name="akhir_cuti_edit" id="akhir_cuti_edit" class="form-control" >
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Alasan Cuti</label>
                                    <div class="col-md-10">
                                        <input type="text" name="alasan_cuti_edit" id="alasan_cuti_edit" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Nip Dosen</label>
                                    <div class="col-md-10">
                                        <input type="text" name="nip_dosen_cuti_edit" id="nip_dosen_cuti_edit" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Kode Jenis Cuti</label>
                                    <div class="col-md-10">
                                        <input type="text" name="kd_jenis_cuti_edit" id="kd_jenis_cuti_edit" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Status Pengajuan</label>
                                    <div class="col-md-10">
                                        <input type="text" name="kd_status_edit" id="kd_status_edit" class="form-control" >
                                    </div>
                                </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
                <!--END MODAL EDIT-->

                <!--MODAL DELETE-->
                 <form>
                    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Data Cuti</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                               <strong>Are you sure to delete this record?</strong>
                          </div>
                          <div class="modal-footer">
                            <input type="hidden" name="id_cuti_delete" id="id_cuti_delete" class="form-control">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>

                <!-- Modal Agree -->
                 <form>
                    <div class="modal fade" id="Modal_agree" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Data Agree</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Keterenagan</label>
                                        <div class="col-md-10">
                                           <textarea class="form-control" id="input_deskirpsi_agree" name="input_deskirpsi_agree"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id_cuti" id="id_cuti" class="form">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    <button type="button" type="submit" id="btn_agree" class="btn btn-primary">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                 </form>


                 <!-- Modal Disagree -->
                  <form>
                    <div class="modal fade" id="Modal_disagree" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Data Agree</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Keterenagan</label>
                                        <div class="col-md-10">
                                           <textarea class="form-control" id="input_deskirpsi_disagree" name="input_deskirpsi_disagree"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id_cuti" id="id_cuti" class="form">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    <button type="button" type="submit" id="btn_disagree" class="btn btn-primary">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                 </form>

           
        </div>
        <!-- /#page-wrapper -->

<!-- END OF CONTENT -->


    </div>
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
                    
                    show_product();
                    

                     //call function show all product
                    $('#mydata').DataTable();
                    // $('#mydata').DataTable();

                //function show all product
                function show_product(){
                    $.ajax({
                        type  : 'ajax',
                        url   : '<?php echo base_url('C_CutiPegawai/cuti_data')?>',
                        async : false,
                        dataType : 'json',
                        success : function(data){
                            var html = '';
                            var i;
                            for(i=0; i<data.length; i++){
                                html += '<tr>'+
                                        '<td>'+data[i].nip_dosen+'</td>'+
                                        '<td>'+data[i].tgl_pengajuan+'</td>'+
                                        '<td>'+data[i].tgl_mulai +'</td>'+
                                        '<td>'+data[i].tgl_akhir +'</td>'+
                                        '<td>'+data[i].alasan +'</td>'+
                                        '<td>'+data[i].id_status+'</td>'+
                                        '<td style="text-align:right;">'+
                                            '<a href="javascript:void(0);" class="btn btn-primary btn-sm item_agree " data-id_cuti="'+data[i].id+'" data-kd_status="'+data[i].id_status+'">Setujui</a>'+' '+
                                            '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_disagree " data-id_cuti="'+data[i].id+'" data-kd_status="'+data[i].id_status+'">Tolak</a>'+

                                        '</td>'+
                                        '</tr>';
                            }
                            $('#show_data').html(html);

                        }

                    });
                }

                    //Save product
                    $('#btn_save').on('click',function(){

                        var pengajuan_cuti  = $('#pengajuan_cuti_input').val(); 
                        var mulai_cuti  = $('#mulai_cuti_input').val();
                        var akhir_cuti  = $('#akhir_cuti_input').val();
                        var alasan_cuti = $('#alasan_cuti_input').val(); 
                        var nip_dosen_cuti =$('#nip_dosen_cuti_input').val();
                        var kd_jenis_cuti =$('#kd_jenis_cuti_input').val();

                        $.ajax({
                            type : "POST",
                            url  : "<?php echo site_url('C_CutiPegawai/save')?>",
                            dataType : "JSON",
                            data : {pengajuan_cuti:pengajuan_cuti, mulai_cuti:mulai_cuti, akhir_cuti:akhir_cuti, alasan_cuti:alasan_cuti, nip_dosen_cuti:nip_dosen_cuti, kd_jenis_cuti:kd_jenis_cuti},
                            success: function(data){
                                                $('#myForm')[0].reset();
                              $('#Modal_Add').modal('hide');
                              show_product();
                            }
                        });
                        return false;
                    });

                    //get data for update record
                    $('#show_data').on('click','.item_edit',function(){
                        var id_cuti         = $(this).data('id_cuti');
                        var tahun_cuti      = $(this).data('tahun_cuti');
                        var mulai_cuti      = $(this).data('tgl_mulai_cuti');
                        var akhir_cuti      = $(this).data('tgl_akhir_cuti');
                        var alasan_cuti     = $(this).data('alasan_cuti');
                        var nip_dosen_cuti  = $(this).data('nip_dosen_cuti');
                        var kd_jenis_cuti   = $(this).data('kd_jenis_cuti');
                        var kd_status       = $(this).data('kd_status');

                        $('#Modal_Edit').modal('show');
                        $('[name="id_cuti_edit"]').val(id_cuti);
                        $('[name="tahun_cuti_edit"]').val(tahun_cuti);
                        $('[name="mulai_cuti_edit"]').val(mulai_cuti);
                        $('[name="akhir_cuti_edit"]').val(akhir_cuti);
                        $('[name="alasan_cuti_edit"]').val(alasan_cuti);
                        $('[name="nip_dosen_cuti_edit"]').val(nip_dosen_cuti);
                        $('[name="kd_jenis_cuti_edit"]').val(kd_jenis_cuti);
                        $('[name="kd_status_edit"]').val(kd_status);
                    });

                    //update record to database
                     $('#btn_update').on('click',function(){
                        var id_cuti     = $('#id_cuti_edit').val();
                        var tahun_cuti  = $('#tahun_cuti_edit').val(); 
                        var mulai_cuti  = $('#mulai_cuti_edit').val();
                        var akhir_cuti  = $('#akhir_cuti_edit').val();
                        var alasan_cuti = $('#alasan_cuti_edit').val(); 
                        var nip_dosen_cuti =$('#nip_dosen_cuti_edit').val();
                        var kd_jenis_cuti =$('#kd_jenis_cuti_edit').val();
                        $.ajax({
                            type : "POST",
                            url  : "<?php echo site_url('C_CutiPegawai/update')?>",
                            dataType : "JSON",
                            data : {id_cuti:id_cuti , tahun_cuti:tahun_cuti, mulai_cuti:mulai_cuti, akhir_cuti:akhir_cuti, alasan_cuti:alasan_cuti, nip_dosen_cuti:nip_dosen_cuti, kd_jenis_cuti:kd_jenis_cuti},
                            success: function(data){
                                                $('#myForm')[0].reset();
                              $('#Modal_Edit').modal('hide');
                              show_product();
                            }
                        });
                        return false;
                    });

                    //get data for delete record
                    $('#show_data').on('click','.item_delete',function(){
                        var id_cuti= $(this).data('id_cuti');

                        $('#Modal_Delete').modal('show');
                        $('[name="id_cuti_delete"]').val(id_cuti);
                    });

                    //delete record to database
                     $('#btn_delete').on('click',function(){
                        var id_cuti = $('#id_cuti_delete').val();
                        $.ajax({
                            type : "POST",
                            url  : "<?php echo site_url('C_CutiPegawai/delete')?>",
                            dataType : "JSON",
                            data : {id_cuti:id_cuti},
                            success: function(data){
                                $('[name="id_cuti_delete]').val("");
                                $('#Modal_Delete').modal('hide');
                                show_product();
                            }
                        });
                        return false;
                    });

                    //get data update aggree
                    $('#show_data').on('click','.item_agree',function(){
                        var id_cuti     = $(this).data('id_cuti');

                        $('#Modal_agree').modal('show');
                        $('[name="id_cuti"]').val(id_cuti);
                         
                        
                    });

                    //insert Agree
                    $('#btn_agree').on('click', function(){
                        var id_cuti = $('#id_cuti').val();
                        var deskripsi = $('#input_deskirpsi_agree').val();

                        $.ajax({
                            type : "POST",
                            url  : "<?php echo site_url('c_cutiadmin/update_agree')?>",
                            dataType : "JSON",
                            data : {id_cuti:id_cuti, deskripsi:deskripsi},
                            success: function(data){
                                $('#Modal_agree').modal('hide');
                              show_product();
                            }
                        });
                        return false;
                    })




                    //get data update disaggree
                    $('#show_data').on('click','.item_disagree',function(){
                        var id_cuti     = $(this).data('id_cuti');

                        $('#Modal_disagree').modal('show');
                        $('[name="id_cuti"]').val(id_cuti);
                        
                    });

                    //inser DisAgree
                    $('#btn_disagree').on('click', function(){
                        var id_cuti = $('#id_cuti').val();
                        var deskripsi = $('#input_deskirpsi_disagree').val();

                        $.ajax({
                            type : "POST",
                            url  : "<?php echo site_url('c_cutiadmin/update_disagree')?>",
                            dataType : "JSON",
                            data : {id_cuti:id_cuti, deskripsi:deskripsi},
                            success: function(data){
                                $('#Modal_disagree').modal('hide');
                              show_product();
                            }
                        });
                        return false;
                    })

                });

            

            </script>

</body>

</html>
