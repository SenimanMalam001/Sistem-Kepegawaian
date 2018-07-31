<!-- /#golongan -->
<div class="modal fade" id="Modal_Add_Jabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom:0px;">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Perubahan Jabatan</h4>
				<hr>
			</div>
				<div class="modal-body">
					<form id="formJabatan">
					<div class="form-group row">
						<label class="col-md-2 col-form-label" for="sel1">Jabatan Sekarang</label>
						<div class="col-md-10">
							<input class="form-control" type="text" id="nama_jabatan_sekarang" name="nama_jabatan_sekarang" readonly>
						</div>
					</div>

					<hr>

					<div class="form-group row">
						<label class="col-md-2 col-form-label" for="sel1">Pilih Jabatan</label>
						<div class="col-md-10">
							<select class="form-control" id="select_jabatan" onChange="setNamaJabatan(this);">

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
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" id="close_modal" data-dismiss="modal">Close</button>
				<button type="button" id="btn_update_jabatan" type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</div>
	</div>
</div>

