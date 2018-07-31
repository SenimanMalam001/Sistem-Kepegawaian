<!-- ================================================== MODAL ADD=========================================== -->
<div class="modal fade" id="Modal_Add_Golongan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom:0px;">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Perubahan Golongan</h4>
				<hr>
			</div>
			<div class="modal-body">
				<form id="formGolongan">
					<input type="hidden" id="nip_pegawai" name="nip_pegawai">
					<div class="form-group row">

						<div class="col-md-2">
							<label for="">Kode </label>
							<input class="form-control" type="text" id="kd_golongan_sekarang" name="kd_golongan_sekarang" readonly>
						</div>

						<div class="col-md-10">
							<label for="">Nama Golongan</label>
							<input class="form-control" type="text" id="nama_golongan_sekarang" name="nama_golongan_sekarang" readonly>
						</div>

					</div>

					<hr>

					<div class="form-group row">
						<label class="col-md-2 col-form-label" for="sel1">Pilih Golongan</label>
						<div class="col-md-10">
							<select class="form-control" id="select_golongan" onChange="setNamaGolongan(this);">

							</select>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-offset-2 col-md-10">
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas itaque ipsum magnam necessitatibus quo neque tempora facilis dolorem pariatur optio!</p>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-2 col-form-label" for="sel1">Upload SK</label>
						<div class="col-md-10">
							<input type="file" class="form-control">
						</div>
					</div>

				</form>

			</div>
			<!-- modal-body -->

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" id="close_modal" data-dismiss="modal">Close</button>
				<button type="button" id="btn_update_jabatan" type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</div>
	</div>
</div>
<!-- ================================================== END MODAL ADD=========================================== -->
