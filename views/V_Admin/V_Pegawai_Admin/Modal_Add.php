<!-- ================================ MODAL EDIT DATA PEGAWAI =========================================== -->
<form id="myForm">
<div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom:0px;">

  			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>

        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#biodata">Biodata</a></li>
          <li><a data-toggle="tab" id="tab_keanggotaan" href="#pendidikan">Pendidikan</a></li>
          <li><a data-toggle="tab" id="tab_keanggotaan" href="#pendidikan">Jabatan</a></li>
        </ul>
			</div>
			<div class="modal-body">
        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">

            <div class="form-group row">
                <label class="col-md-2 col-form-label">Nama Rubrik</label>
                <div class="col-md-10">
                  <select class="form-control" id="item_sk">

                  </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 col-form-label">Tanggal Awal</label>
                <div class="col-md-10">
                  <div class="input-group date" data-provide="datepicker">
                    <input type="text"name="tgl_awal" id="tgl_awal" class="form-control">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                  </div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 col-form-label">Tanggal Akhir</label>
                <div class="col-md-10">
                  <div class="input-group date" data-provide="datepicker">
                    <input type="text" name="tgl_akhir" id="tgl_akhir" class="form-control">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                  </div>
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Deskripsi</label>
                <div class="col-md-10">
                  <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 col-form-label">Upload SK</label>
                <div class="col-md-10">
                  <input class="form-control" type="file" id="sk_fileurl" name="sk_fileurl">
                </div>
            </div>

          </div>

          <div id="menu1" class="tab-pane fade">
            <input type="hidden" class="form-control" id="keanggotaan_nip" name="keanggotaan_nip" value="">

            <div class="form-group">
              <div class="row">
                <div class="col-lg-3 col-form-label">
                  <label for="">Anggota</label>
                </div>
                <div class="col-lg-5">
                  <input type="text" class="form-control" id="keanggotaan_nama" name="keanggotaan_nama" value="">
                </div>
                <div class="col-lg-2">
                  <select class="form-control" id="keanggotaan_pilih_peran">

                  </select>
                </div>
                <div class="col-lg-2">
                  <a href="#" id="btn_tambah_keanggotaan" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>

              </div>
              <div class="row">
                <div class="col-md-12">
                  <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Peran</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="list_anggota">

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="close_modal" data-dismiss="modal">Close</button>
        <button type="button" id="btn_update" type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>
</form>
