<!-- ================================================== MODAL ADD=========================================== -->
<form id="myForm">
<div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom:0px;">

  			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>

        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">SK</a></li>
          <li><a data-toggle="tab" id="tab_keanggotaan" href="#menu1">Keanggotaan</a></li>
        </ul>
			</div>
			<div class="modal-body">

        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <div class="form-group row">
              <label class="col-md-2 col-form-label">ID</label>
              <div class="col-md-10">
                <input class="form-control" type="text" name="id" value="<?php echo $auto_number; ?>" disabled>
              </div>
            </div>

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
    						<label class="col-md-2 col-form-label">Maksud Tujuan</label>
    						<div class="col-md-10">
    							<textarea class="form-control" name="maksud_perjalanan" id="maksud_perjalanan" rows="3"></textarea>
    						</div>
    				</div>

						<div class="form-group row">
              <label class="col-md-2 col-form-label">Tempat Tujuan</label>
              <div class="col-md-10">
                <input class="form-control" type="text" name="tempat_tujuan" id="tempat_tujuan">
              </div>
            </div>

          </div>
          <div id="menu1" class="tab-pane fade">
            <input type="hidden" class="form-control" id="keanggotaan_nip" name="keanggotaan_nip">

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
				<button type="button" id="btn_save" type="submit" class="btn btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>
</form>
<!-- ================================================== END MODAL ADD=========================================== -->

<!-- ================================================== MODAL EDIT=========================================== -->
<form id="myForm">
<div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom:0px;">

  			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Update SK</h4>
			</div>
			<div class="modal-body">
        <div class="form-group row">
          <label class="col-md-2 col-form-label">ID</label>
          <div class="col-md-10">
            <input class="form-control" type="text" name="id_edit" id="id_edit" readonly>
          </div>
        </div>

				<div class="form-group row">
          <label class="col-md-2 col-form-label">Nama Tugas</label>
          <div class="col-md-10">
            <input class="form-control" type="text" name="nama_tugas_edit" id="nama_tugas_edit" readonly>
          </div>
        </div>

				<div class="form-group row">
						<label class="col-md-2 col-form-label">Tanggal Awal</label>
						<div class="col-md-10">
							<div class="input-group date" data-provide="datepicker">
								<input type="text"name="tgl_awal_edit" id="tgl_awal_edit" class="form-control">
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
								<input type="text"name="tgl_akhir_edit" id="tgl_akhir_edit" class="form-control">
								<div class="input-group-addon">
										<span class="glyphicon glyphicon-th"></span>
								</div>
							</div>
            </div>
        </div>
				<div class="form-group row">
						<label class="col-md-2 col-form-label">Maksud Tujuan</label>
						<div class="col-md-10">
							<textarea class="form-control" name="maksud_tujuan_edit" id="maksud_tujuan_edit" rows="3"></textarea>
						</div>
				</div>

				<div class="form-group row">
              <label class="col-md-2 col-form-label">Tempat Tujuan</label>
              <div class="col-md-10">
                <input class="form-control" type="text" name="tempat_tujuan_edit" id="tempat_tujuan_edit" value="" >
              </div>
            </div>

				<div class="form-group row">
						<label class="col-md-2 col-form-label">Upload SK</label>
						<div class="col-md-10">
							<input class="form-control" type="file" id="sk_fileurl_edit" name="sk_fileurl_edit">
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
<!--END MODAL EDIT-->

<!-- ================================================== MODAL EDIT ANGGOTA =========================================== -->
<form id="myForm">
<div class="modal fade" id="Modal_Edit_Anggota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom:0px;">

  			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Anggota</h4>

			</div>
			<div class="modal-body">
				<input type="hidden" name="keanggotaan_sk_edit" id="keanggotaan_sk_edit" readonly>
        <input type="hidden" class="form-control" id="keanggotaan_nip_edit" name="keanggotaan_nip_edit">

        <div class="form-group">
          <div class="row">
            <div class="col-lg-3 col-form-label">
              <label for="">Anggota</label>
            </div>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="keanggotaan_nama_edit" name="keanggotaan_nama_edit" value="">
            </div>
            <div class="col-lg-2">
              <select class="form-control" id="keanggotaan_pilih_peran_edit">

              </select>
            </div>
            <div class="col-lg-2">
              <a href="#" id="btn_tambah_keanggotaan_edit" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></a>
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
      					<tbody id="list_anggota_edit">

      					</tbody>
        			</table>
						</div>
					</div>
				</div>
				<!-- /Form Group -->

      </div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" id="close_modal_edit" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
</form>
<!-- ================================================== END MODAL EDIT ANGGOTA =========================================== -->

<!-- MODAL DELETE  -->
<form>
<div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2>Keanggotaan SK</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
        <input type="hidden" name="delete_sk" value="">
        <h3>Apakah anda ingin menghapus data ini ?</h3>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" type="submit" id="btn_delete" class="btn btn-danger">Hapus</button>
			</div>
		</div>
	</div>
</div>
</form>
<!--END MODAL DELETE-->

<!-- Upload SK -->
<?php echo form_open_multipart('admin/surat-tugas/upload');?>
<div class="modal fade" id="Modal_Upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2>Keanggotaan SK</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="form-group row">
				<input type="hidden" name="upload_sk" id="upload_sk" value="">
					<input type="hidden" name="userfile" id="userfile" value="">
					<label class="col-md-2 col-form-label">Upload SK</label>
					<div class="col-md-10">
						<input class="form-control" type="file" id="userfile" name="userfile">
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" id="btn_upload_sk" class="btn btn-primary">Upload</button>
			</div>
		</div>
	</div>
</div>
</form>