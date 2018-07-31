<!-- ================================ MODAL EDIT JABATAN STRUKTURAL =========================================== -->
<form id="myForm">
	<div class="modal fade" id="Modal_Edit_Jabatan_pegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="border-bottom:0px;">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Edit Jabatan Pegawai</h4>

				</div>
				<div class="modal-body">
					<input type="hidden" id="id_pegawai_baru">
					<div class="form-group row">
                        <div class="col-md-6">
							<label for="">Nama Pegawai</label>
							<input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" readonly>
						</div>
                        <div class="col-md-6">
							<label for="">Jabatan Sekarang</label>
							<input type="text" id="jabatan_pegawai" nama="jabatan_pegawai" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="sel1">Pilih Jabatan</label>
                        <div class="col-md-7">
                            <select class="form-control" id="select_jabatan_pegawai">

                            </select>
                        </div>
						<div class="col-md-2">
							<a href="#" id="pilih_jabatan_baru_pegawai" class="btn btn-primary btn-block">Pilih</a>
						</div>
                    </div>

					<div class="form-group row divPegawaiLalu">
						<hr>
						<input type="hidden" id="id_pegawai_lama">
                        <div class="col-md-3">
							<label for="">pemilik sebelumnya</label>
							<input type="text" class="form-control" id="nama_pegawai_digantikan">
						</div>
                        <div class="col-md-9">
							<label for="">dengan tanggung jawab baru </label>
							<select class="form-control" id="select_jabatan_pergantian_pegawai">

							</select>
                        </div>
                    </div>

					<div class="form-group row divPegawaiLalu">
						<label class="col-md-3 col-form-label" for="sel1">Upload surat keputusan</label>
                        <div class="col-md-9">
							<input type="file" class="form-control" name="upload_sk" id="upload_sk">
                        </div>
                    </div>

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" id="close_modal" data-dismiss="modal">Close</button>
					<button type="button" id="btn_update_jabatan_pegawai" type="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</div>
	</div>
</form>
