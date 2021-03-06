<!-- ================================ MODAL EDIT JABATAN STRUKTURAL =========================================== -->
<?php echo form_open_multipart('admin/jabatan-struktural/update');?>
	<div class="modal fade" id="Modal_Edit_Jabatan_Dosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="border-bottom:0px;">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Edit Jabatan Dosen</h4>

				</div>
				<div class="modal-body">
					<input type="hidden" id="id_dosen_baru" name="id_dosen_baru">
					<div class="form-group row">
                        <div class="col-md-6">
							<label for="">Nama Pegawai</label>
							<input type="text" id="nama_dosen" name="nama_dosen" class="form-control" readonly>
						</div>
                        <div class="col-md-6">
							<label for="">Jabatan Sekarang</label>
							<input type="text" id="jabatan_dosen" nama="jabatan_dosen" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="sel1">Pilih Jabatan</label>
                        <div class="col-md-7">
                            <select class="form-control" id="select_jabatan_dosen" name="select_jabatan_dosen">

                            </select>
                        </div>
						<div class="col-md-2">
							<a href="#" id="pilih_jabatan_baru" class="btn btn-primary btn-block">Check</a>
						</div>
                    </div>

					<div id="pemilikKosong">
						<p>Jabatan ini tidak ada pemilik sebelumnya</p>
					</div>

					<div class="form-group row divDosenLalu">
						<hr>
						<input type="hidden" id="id_dosen_lama" name="id_dosen_lama">
                        <div class="col-md-3">
							<label for="">pemilik sebelumnya</label>
							<input type="text" class="form-control" id="nama_dosen_digantikan">
						</div>
                        <div class="col-md-9">
							<label for="">dengan tanggung jawab baru </label>
							<select class="form-control" id="select_jabatan_pergantian" name="select_jabatan_pergantian">

							</select>
                        </div>
                    </div>

					<div class="form-group row divDosenLalu">
						<label class="col-md-3 col-form-label" for="sel1">Upload surat keputusan</label>
                        <div class="col-md-9">
							<input type="file" class="form-control" name="userfile" id="userfile">
                        </div>
                    </div>

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" id="close_modal" data-dismiss="modal">Close</button>
					<button id="btn_update_jabatan_dosen" type="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</div>
	</div>
</form>
