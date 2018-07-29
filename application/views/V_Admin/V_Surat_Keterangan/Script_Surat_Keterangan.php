<script type="text/javascript">

$(document).ready(function(){

  // Initialize Global Variable
  var keanggotaan_sk = []; // Variable yang digunakan untuk menampung data member sementara
  var keanggotaan_sk_edit = []; // Variable yang digunakan untuk menampung data member sementara dalam modal edit

  show_product();	//call function show all product
  get_rubrik_data();

  $('#mydata').DataTable();

  $('.penutup').show();

  // BASIC CRUD

  //function show all product
  function show_product(){
    $.ajax({
      type  : 'ajax',
      url   : '<?php echo base_url() . 'SuratKeterangan/sk_data' ?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';

        for(var i=0; i<data.length; i++){

          var $berkas = '<p class="text-danger"> Anda belum upload SK </p>';

          // Jika File terdeteksi
          if(data[i].sk_fileurl){
            $berkas = '<a href="<?php echo base_url() . 'files/surat_keputusan/'; ?>' + data[i].sk_fileurl + '" class="btn btn-success btn-sm data-id="'+data[i].sk_fileurl+'" download><i class="fa fa-download" aria-hidden="true"></i> Download </a>' + ' ';
          }


          html += '<tr>'+
              '<td>' + (i + 1) + '</td>'+
              '<td>'+data[i].deskripsi+'</td>'+
              '<td>'+data[i].total+'</td>'+
              '<td>'+data[i].tgl_awal+'</td>'+
              '<td>'+data[i].tgl_akhir+'</td>'+
              '<td>'+ $berkas +'</td>'+

              '<td style="text-align:right;">'+
                  '<a href="javascript:void(0);" class="btn btn-primary btn-sm" id="show_edit_data"' +
                  ' data-id="'+data[i].id+
                  '" data-deskripsi="'+data[i].deskripsi+
                  '" data-keterangan="'+data[i].deskripsi_sk+
                  '" data-tgl_awal="'+data[i].tgl_awal+
                  '" data-tgl_akhir="'+data[i].tgl_akhir+
                  '" data-sk_fileurl="'+ data[i].sk_fileurl +'"><i class="fa fa-pencil" aria-hidden="true"></i></a>'+' '+
                  '<a href="javascript:void(0);" class="btn btn-info btn-sm" id="show_anggota_sk" data-id="'+data[i].id+'"><i class="fa fa-users" aria-hidden="true"></i></a><hr style="margin:2px 0px;">' +' ' +
                  '<a href="javascript:void(0);" class="btn btn-success btn-sm" id="show_modal_upload" data-id="'+data[i].id+'"><i class="fa fa-upload" aria-hidden="true"></i></a>' +' ' +
                  '<a href="javascript:void(0);" class="btn btn-danger btn-sm" id="show_modal_delete" data-id="'+data[i].id+'"><i class="fa fa-trash" aria-hidden="true"></i></a>' +' ' +
              '</td>'+
                '</tr>';
          }
          $('#show_data').html(html);
      }
    });
  }

  // GET Rubrik Data
  function get_rubrik_data(){
    $.ajax({
      type  : 'ajax',
      url   : '<?php echo base_url() . 'SuratKeterangan/get_rubrik_data' ?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';
        for (var i = 0; i < data.length; i++) {
          html += '<option value="' + data[i].id_anak_rubrik + '" data-foo="' + data[i].id_rubrik + '">' + data[i].deskripsi +'</option>';

        }
        $('#item_sk').html(html);
      }
    })
  }

  // Untuk inisialisasi tab anggota yang ada di modal add
  $('#tab_keanggotaan').on('click', function(){
    var id_rubrik = $('#item_sk').find('option:selected').data('foo');

    console.log(id_rubrik);

    $.ajax({
      type : "POST",
      url   : '<?php echo base_url() .'SuratKeterangan/getRubrikKategori'?>',
      async : false,
      data : {id_rubrik: id_rubrik},
      dataType : 'json',
      success : function(data){
        var html = '';
        console.log('Hallo');
        for (var i = 0; i < data.length; i++) {
          html += '<option value="' + data[i].id_anak_rubrik + '" data-des="' + data[i].jabatan + '">' + data[i].jabatan +'</option>';
        }
        $('#keanggotaan_pilih_peran').html(html);
      }
    });
  })

  function getAnggotaSK(id_sk){
    $.ajax({
      type: "POST",
      url   : '<?php echo base_url() . 'SuratKeterangan/getAnggotaSK' ?>',
      async : false,
      data : {id_sk, id_sk},
      dataType : 'json',
      success : function(data){
        keanggotaan_sk = data;
        console.log(keanggotaan_sk);
        updateAnggotaSK();
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert(textStatus);
      }
    });
  }

  $('#show_modal_add').on('click', function(){
    emptyAnggotaSK();
  });

  //Save product
  $('#btn_save').on('click',function(){

    var id = $('[name=id]').val();

    
    insertingSK();

    console.log(keanggotaan_sk);

    $('#myForm')[0].reset();
    $('#Modal_Add').modal('hide');

    location.reload();

  });

  function insertingSK(){
    var id = $('[name=id]').val();
    var tgl_awal = $('#tgl_awal').val();
    var tgl_akhir = $('#tgl_akhir').val();
    var deskripsi = $('#deskripsi').val();
    var sk_fileurl	= $('#sk_fileurl').val();

    console.log('Data tambah sk: ' + id + tgl_awal + tgl_akhir + deskripsi + sk_fileurl);

    $.ajax({
        type : "POST",
        url  : '<?php echo base_url() . 'SuratKeterangan/save'?>',
        dataType : "JSON",
        data : {id:id, tgl_awal:tgl_awal, tgl_akhir:tgl_akhir, deskripsi:deskripsi, sk_fileurl:sk_fileurl},
        success: function(data){
          console.log('Berehasil Insert SK ');

          // Setelah Insert ST insert member nya
          for (var i = 0; i < keanggotaan_sk.length; i++) {
            insertingSKMember(id, keanggotaan_sk[i].nip, keanggotaan_sk[i].peran);
          }
        }
    });
  }

  function insertingSKMember(id_sk, nip_pegawai, id_rubrik){

    $.ajax({
        type : "POST",
        url  : '<?php echo base_url() . 'SuratKeterangan/save_member' ?>',
        dataType : "JSON",
        data : {id_sk:id_sk, nip_pegawai:nip_pegawai, id_rubrik:id_rubrik},
        success: function(data){
          console.log('Berehasil Insert : ' + id_sk + ', ' + nip_pegawai + ', ' + id_rubrik);
        },
        error: function(jqXHR, textStatus, errorThrown){
          console.log(textStatus);
        }
    });
  }

  // SHOW MODAL FOR EDIT SK
  $('#show_data').on('click','#show_edit_data', function(){

    var id = $(this).data('id');
    var nama_rubrik = $(this).data('deskripsi');
    var tgl_awal = $(this).data('tgl_awal');
    var tgl_akhir = $(this).data('tgl_akhir');
    var keterangan = $(this).data('keterangan');
    var sk_fileurl = $(this).data('sk_fileurl');

    $('#Modal_Edit').modal('show');
    $('[name="id_edit"]').val(id);
    $('#nama_rubrik_edit').val(nama_rubrik);
    $('[name="tgl_awal_edit"]').val(tgl_awal);
    $('[name="tgl_akhir_edit"]').val(tgl_akhir);
    $('[name="deskripsi_edit"]').val(keterangan);
    // $('[name="sk_fileurl_edit"]').val(sk_fileurl);
  });

  // UPDATE SK
  $('#btn_update').on('click', function(){
    var id = $('[name="id_edit"]').val();
    var tgl_awal = $('[name="tgl_awal_edit"]').val();
    var tgl_akhir = $('[name="tgl_akhir_edit"]').val();
    var deskripsi = $('[name="deskripsi_edit"]').val();

    console.log('Data : ' + id + ',' + tgl_awal + ',' + tgl_akhir + ',' + deskripsi);

    $.ajax({
      type : "POST",
      url : '<?php echo base_url() . 'SuratKeterangan/update' ?>',
      dataType : "JSON",
      data : {id:id, tgl_awal:tgl_awal, tgl_akhir:tgl_akhir, deskripsi:deskripsi},
      success : function(data) {
        console.log('Berhasil Update Data');
        $('#myForm')[0].reset();
        $('#Modal_Edit').modal('hide');
        show_product();
      },
      error: function(jqXHR, textStatus, errorThrown){
        console.log(textStatus);
      }
    });
  });

  $('#show_data').on('click','#show_modal_delete', function(){
    var id = $(this).data('id');
    $('#Modal_Delete').modal('show');
    $('[name="delete_sk"]').val(id);

  });

  $('#show_data').on('click','#show_modal_upload', function(){
    var id = $(this).data('id');
    $('#Modal_Upload').modal('show');
    $('[name="upload_sk"]').val(id);

  });

  $('#btn_delete').on('click', function(){
    var id= $('[name="delete_sk"]').val();

    $.ajax({
      type : "POST",
      url : '<?php echo base_url() . 'SuratKeterangan/delete'?>',
      dataType : "JSON",
      data : {id:id},
      success: function(data){
        $('#myForm')[0].reset();
        $('#Modal_Delete').modal('hide');
        $('[name="delete_sk"]').val("");
        show_product();
      }
    })
  });

  // =================================================== CLICK TOMBOL DETAIL ANGGOTA =======================================
  $('#show_data').on('click', '#show_anggota_sk', function(){
    var id_sk = $(this).data('id');
    var id_rubrik = '';

    $('#keanggotaan_sk_edit').val(id_sk);

    console.log(id_sk);
    

    $('#Modal_Edit_Anggota').modal('show');
    emptyAnggotaSK();


    $.ajax({
      type : "POST",
      url   : '<?php echo base_url() .'SuratKeterangan/getIdRubrikByIdSK'?>',
      async : false,
      data : {id_sk: id_sk},
      dataType : 'json',
      success : function(data){
        id_rubrik = data[0].id_rubrik;
        console.log('Successfully Get Id rubrik by sk : ' + id_rubrik);
      }
    });

    $.ajax({
      type : "POST",
      url   : '<?php echo base_url() .'SuratKeterangan/getRubrikKategori'?>',
      async : false,
      data : {id_rubrik: id_rubrik},
      dataType : 'json',
      success : function(data){
        var html = '';
        for (var i = 0; i < data.length; i++) {
          html += '<option value="' + data[i].id_anak_rubrik + '" data-des="' + data[i].jabatan + '">' + data[i].jabatan +'</option>';
        }
        console.log(html);
        $('#keanggotaan_pilih_peran_edit').html(html);
      }
    });

    $.ajax({
      type : "POST",
      url   : '<?php echo base_url() .'SuratKeterangan/getAnggotaSK'?>',
      async : false,
      data : {id_sk: id_sk},
      dataType : 'json',
      success : function(data){
        console.log('Data From get Anggota SK : ' + data.length);
        var jumlahData = data.length;
        // Isi variable keanggotaan_sk dengan data
        for (var i = 0; i < jumlahData; i++) {
          var dataAnggota = {
            nip: data[i].nip_pegawai,
            nama_pegawai: data[i].nama_pegawai,
            peran: data[i].id_rubrik,
            deskripsi: data[i].deskripsi
          }
          console.log(i);
          console.log(jumlahData);
          addAnggotaSK(dataAnggota);
        }

        console.log(keanggotaan_sk);

        // Tampilkan data nya ke table
        var html = '';
        for(var i=0; i < keanggotaan_sk.length; i++){
            html +=  '<tr>' +
              '<td>'+ (i+1) + '</td>' +
                '<td>' + keanggotaan_sk[i].nama_pegawai +'</td>' +
                '<td>' + keanggotaan_sk[i].deskripsi +'</td>' +
                '<td><a href="javascript:void(0);" id="btn_removeAnggota" data-nip="' + keanggotaan_sk[i].nip +'" data-index="' + i +'" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a></td>' +
              '</tr>';
        }
        $('#list_anggota_edit').html(html);
      }
    });
  });

  $('.item_anggota').on('click', function(){
    $('#Modal-Add-Anggota').modal('show');
  });

  $('#close_modal').on('click', function(){
    console.log('kosongkan array');
    emptyAnggotaSK();
  });

  // ============================================= AUTO COMPLETE============================================
  $('#keanggotaan_nama').autocomplete({
    source: function( request, response ) {
      $.ajax( {
        url: '<?php echo base_url() . 'Pegawai/get_autocomplete' ?>',
        dataType: "json",
        data: {
          term: request.term
        },
        success: function( data ) {
          response( data );
        }
      } );
    },
    minLength: 2,
    select: function( event, ui ) {
      $('[name="keanggotaan_nip"]').val(ui.item.nip);
    }
  });
  $( "#keanggotaan_nama" ).autocomplete( "option", "appendTo", "#Modal_Add" );

  // AUTO COMPLETE UNTUK EDIT
  $('#keanggotaan_nama_edit').autocomplete({
    source: function( request, response ) {
      $.ajax( {
        url: '<?php echo base_url() . 'Pegawai/get_autocomplete'?>',
        dataType: "json",
        data: {
          term: request.term
        },
        success: function( data ) {
          response( data );
        }
      } );
    },
    minLength: 2,
    select: function( event, ui ) {
      $('[name="keanggotaan_nip_edit"]').val(ui.item.nip);
    }
  });
  $( "#keanggotaan_nama_edit" ).autocomplete( "option", "appendTo", "#Modal_Edit_Anggota" );

  // ========================= TAMBAH KEANGGOTAAN SAAT ADD =================================
  $('#btn_tambah_keanggotaan').on('click', function(){
    if($('[name="keanggotaan_nip"]').val() == "" ||
        $('[name="keanggotaan_nama"]').val() == "")return false;

    var id = $('[name="keanggotaan_nip"]').val();
    var nama = $('[name="keanggotaan_nama"]').val();
    var peran = $('#keanggotaan_pilih_peran').val();
    var deskripsi = $('#keanggotaan_pilih_peran').find('option:selected').data('des');
    var canInput = true;

    for (var i = 0; i < keanggotaan_sk.length; i++) {
      if(keanggotaan_sk[i].nip == id){
        alert('User : ' + nama + ' Sudah Mengambil Peran !');
        $('[name="keanggotaan_nama"]').val("");
        $('[name="keanggotaan_nip"]').val("");

        canInput = false;
      }
    }

    if(canInput){
      var data = {
        nip: id,
        nama_pegawai: nama,
        peran: peran,
        deskripsi: deskripsi
      }

      addAnggotaSK(data);

      $('[name="keanggotaan_nama"]').val("");
      $('[name="keanggotaan_nama"]').val("");

      updateAnggotaSK();

      console.log('Berhasil Input');
    }

  });

  $('#btn_tambah_keanggotaan_edit').on('click', function(){

    if($('[name="keanggotaan_nip_edit"]').val() == "" ||
        $('[name="keanggotaan_nama_edit"]').val() == "")return false;

    console.log('Data keanggotaan_nip_edit dan nama nya tidak kosong');

    var id = $('[name="keanggotaan_nip_edit"]').val();
    var nama = $('[name="keanggotaan_nama_edit"]').val();
    var id_sk = $('[name="keanggotaan_sk_edit"]').val();
    var peran = $('#keanggotaan_pilih_peran_edit').val();
    var deskripsi = $('#keanggotaan_pilih_peran_edit').find('option:selected').data('des');
    var canInput = true;

    // Check apakah user telah memiliki peran
    for (var i = 0; i < keanggotaan_sk.length; i++) {
      if(keanggotaan_sk[i].nip == id){
        alert('User : ' + nama + ' Sudah Mengambil Peran !');
        $('[name="keanggotaan_nama_edit"]').val("");
        $('[name="keanggotaan_nip_edit"]').val("");

        canInput = false;
      }
    }

    console.log('Fetch data keanggotaan edit : ' + id + ',' + nama +',' + peran +','+ deskripsi);

    if(canInput){
      var data = {
        nip: id,
        nama_pegawai: nama,
        peran: peran,
        deskripsi: deskripsi
      }

      // Input ke database
      addMember(id_sk, id, peran);
      addAnggotaSK(data);

      $('[name="keanggotaan_nip_edit"]').val('');
      $('[name="keanggotaan_nama_edit"]').val('');

      updateAnggotaSK();
    }

  });

  function addMember(id_sk, nip, peran){
    
    
    $.ajax({
      type : "POST",
      url   : '<?php echo base_url() .'SuratKeterangan/addMember'?>',
      async : false,
      data : {id_sk: id_sk, nip:nip, peran:peran},
      dataType : 'json',
      success : function(data){
        console.log('Berhasil Input ' + id_sk);
        
      }
    });
  }


  $('#tab1_edit').on('click', function(){
    emptyAnggotaSK();
  })

  $('#list_anggota').on('click', '#btn_removeAnggota', function(){

    var index = $(this).data('index');

    console.log('hapus anggota');

    removeAnggotaSK(index);
  })

  $('#list_anggota_edit').on('click', '#btn_removeAnggota', function(){

    var index = $(this).data('index');
    var nip_pegawai = $(this).data('nip');

    console.log('hapus anggota di edit');

    // Delete the data from database
    $.ajax({
      type : "POST",
      url   : '<?php echo base_url() .'SuratKeterangan/removeMember'?>',
      async : false,
      data : {nip_pegawai: nip_pegawai},
      dataType : 'json',
      success : function(data){
        console.log('Berhasil Hapus Member ' + nip_pegawai);
        removeAnggotaSK(index);
        updateAnggotaSK();
      }
    });
  });

// =====================================Management Variable keanggotaan_sk==========================
  function updateAnggotaSK(){
    var html = '';

    for(var i=0; i < keanggotaan_sk.length; i++){
        html +=  '<tr>' +
          '<td>'+ (i+1) + '</td>' +
            '<td>' + keanggotaan_sk[i].nama_pegawai +'</td>' +
            '<td>' + keanggotaan_sk[i].deskripsi +'</td>' +
            '<td><a href="javascript:void(0);" id="btn_removeAnggota" data-nip="' + keanggotaan_sk[i].nip +'" data-index="' + i +'" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a></td>' +
          '</tr>';
    }
    $('#list_anggota').html(html);
    $('#list_anggota_edit').html(html);
  }

  function addAnggotaSK(item){
    keanggotaan_sk.push(item);
    console.log(keanggotaan_sk);
  }

  function removeAnggotaSK(index){
    keanggotaan_sk.splice(index, 1);
    console.log('Berhasil menghapus dengan index : '+index);
    updateAnggotaSK();

  }

  function emptyAnggotaSK(){
    keanggotaan_sk.length = 0;
    console.log('Kosongkan array ' + keanggotaan_sk);
    updateAnggotaSK();
  }

  });

  // =================================================== SCRIPT UNTUK TAMPILAN =====================================
  function hidePenutup(){
    $('.penutup').hide();
  }
</script>
