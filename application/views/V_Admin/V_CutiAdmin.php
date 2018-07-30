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
                    <h3 class="page-header"><i class="fa fa-reply" aria-hidden="true"></i> Pengajuan Surat Cuti</h3>
                </div>
                <!-- /.col-lg-12 -->
            
                            <!-- <h1>
                                <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                            </h1> -->
                        </div>

                        <table class="table table-striped table-bordered" id="mydata">
                            <thead>
                                <tr>
                                    <th>Nip</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Akhir</th>
                                    <th>Alasan</th>
                                    <th>Status </th>
                                    
                                </tr>
                            </thead>
                            <tbody id="show_data">

                            </tbody>
                        </table>
                    

            </div>
           
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
                        url   : '<?php echo base_url('C_CutiAdmin/cuti_data')?>',
                        async : false,
                        dataType : 'json',
                        success : function(data){
                            var html = '';
                            var i;



                            for(i=0; i<data.length; i++){

                                if(data[i].id_status == 1){
                                    $status = "Pending";
                                    $sdown ="";
                                }
                                else if (data[i].id_status == 2){
                                    $status = "Di Setuji";
                                    $sdown ="";
                                }
                                else{
                                    $status = "Di Tolak";
                                    $sdown ="";
                                }
                                html += '<tr>'+
                                        '<td>'+data[i].nip_dosen+'</td>'+
                                        '<td>'+data[i].tgl_pengajuan+'</td>'+
                                        '<td>'+data[i].tgl_mulai +'</td>'+
                                        '<td>'+data[i].tgl_akhir +'</td>'+
                                        '<td>'+data[i].alasan +'</td>'+
                                        '<td>'+$status+'</td>'+
                                        
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
