
var base_url = 'http://localhost/Sistem-Kepegawaian/';
var nip = $('#nip').val();

$(document).ready(function(){
    // Cek Kelengkapan Biodata
    checkUserData();

    // Cek Permohonan Cuti

    // Cek apakah dia pindah jabatan fungsional

    // Cek apakah dia pindah jabatan struktural

    // Cek apakah dia dipindahkan Fakultas

    // Tampilkan Semua Notifikasi Ke dalam View
    
});

function checkUserData(){
    $.ajax({
        type : "POST",
        url  : base_url + "C_Notifikasi/checkUserData",
        dataType : "JSON",
        success: function(data){
            var html = '';
            if(data){
                html += '<li>' +
                '<a href="#">' +
                    '<div>' +
                    '<strong>Biodata anda belum lengkap</strong>' +
                    '<span class="pull-right text-muted">' +
                        '<em>Biodata</em>' +
                    '</span>' +
                    '</div>' +
                    '<div>Mohon lengkapi data diri anda yang belum lengkap, anda dapat megisi data diri di menu profil</div>' +
                    '</a>' +
                '</li>' +
                '<li class="divider"></li>';
            }
            $('#notifikasi').append(html);

            checkNotification();
        }
    });
}

function checkNotification(){

    $.ajax({
        type : "POST",
        url  : base_url + "C_Notifikasi/checkNotification",
        dataType : "JSON",
        success: function(data){
            var html = '';
            for(var i = 0; i < data.length; i++){
                html += '<li>' +
                '<a href="'+ base_url + 'permohonan-cuti">' +
                    '<div>' +
                    '<strong>' + data[i].judul +'</strong>' +
                    '<span class="pull-right text-muted">' +
                        '<em>' + data[i].judul_kecil +'</em>' +
                    '</span>' +
                    '</div>' +
                    '<div>' + data[i].message +'</div>' +
                    '</a>' +
                '</li>' +
                '<li class="divider"></li>';
            }

            html += '<li><a class="text-center" href="#"><strong>Read All Messages</strong><i class="fa fa-angle-right"></i></a></li>';
            
            $('#notifikasi').append(html);

        }
    });
}