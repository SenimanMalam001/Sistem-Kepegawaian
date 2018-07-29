<!-- ================================ MODAL EDIT PERMUTASI PEGAWAI =========================================== -->
<form id="myForm">
	<div class="modal fade" id="Modal_Edit_Fakultas_Pegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="border-bottom:0px;">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Edit Permutasi Pegawai</h4>

				</div>
				<div class="modal-body">
					<input type="hidden" id="nip_pegawai">
					<input type="hidden" id="kd_fakultas">
					<div class="form-group row">
                        <div class="col-md-6">
							<label for="">Nama Pegawai</label>
							<input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" readonly>
						</div>
                        <div class="col-md-6">
							<label for="">Fakultas Sekarang</label>
							<input type="text" id="fakultas_pegawai" nama="fakultas_pegawai" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="sel1">Pilih fakultas</label>
                        <div class="col-md-9">
                            <select class="form-control" id="select_fakultas_pegawai">

                            </select>
                        </div>
                    </div>

					<div class="form-group row divpegawaiLalu">
						<label class="col-md-3 col-form-label" for="sel1">Upload surat keputusan</label>
                        <div class="col-md-9">
							<input type="file" class="form-control" name="upload_sk" id="upload_sk">
                        </div>
                    </div>

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" id="close_modal" data-dismiss="modal">Close</button>
					<button type="button" id="btn_update_fakultas_pegawai" type="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</div>
	</div>
</form>
