<!-- Modal Add -->
<form>
   <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
            <div class="modal-header" style="border-bottom:0px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data</h4>
            </div>
           
                <div class="modal-body">
                        <div class="form-group row">
                            <input type="hidden" name="nip_pegawai" id="nip_pegawai">
                           <label class="col-md-4 col-form-label">Jenjang Pendidikan</label>
                           <div class="col-md-8">
                             <input type="text" name="jenjang_pendidikan" id="jenjang_pendidikan" class="form-control" placeholder="Jejang Pegawai">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Gelar</label>
                           <div class="col-md-8">
                             <input type="text" name="gelar" id="gelar" class="form-control" placeholder="Gelar">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Nama Sekolah/Perguruan Tinggi</label>
                            <div class="col-md-8">
                             <input type="text" name="nama_pendidikan" id="nama_pendidikan" class="form-control" placeholder="Nama Sekolah/Perguruan Tinggi">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Tahun Masuk</label>
                            <div class="col-md-8">
                             <input type="text" name="tahun_angkatan" id="tahun_angkatan" class="form-control" placeholder="Tahun Masuk">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Tahun Lulus</label>
                            <div class="col-md-8">
                             <input type="text" name="tahun_lulus" id="tahun_lulus" class="form-control" placeholder="Tahun Lulus">
                           </div>
                        </div>
                 </div>
                 <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" type="submit" id="btn_save" class="btn btn-primary fa fa-floppy-disk"> Simpan</button>
            </div>
            </div>

            </div>
         </div>
    </div>
    </div>
</div>
</form> <!-- /End Modal Edit -->

<!-- Modal Edit -->
<form>
   <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
            <div class="modal-header" style="border-bottom:0px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data</h4>
            </div>
           
                <div class="modal-body">
                        <div class="form-group row">
                            <input type="hidden" name="nip_pegawai" id="nip_pegawai">
                           <label class="col-md-4 col-form-label">Jenjang Pendidikan</label>
                           <div class="col-md-8">
                             <input type="text" name="jenjang_pendidikan_edit" id="jenjang_pendidikan_edit" class="form-control" placeholder="Jenjang Pendidikan">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Gelar</label>
                           <div class="col-md-8">
                             <input type="text" name="gelar_edit" id="gelar_edit" class="form-control" placeholder="Gelar">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Nama Sekolah/Perguruan Tinggi</label>
                            <div class="col-md-8">
                             <input type="text" name="nama_pendidikan_edit" id="nama_pendidikan_edit" class="form-control" placeholder="Nama Sekolah/Perguruan Tinggi">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Tahun Masuk</label>
                            <div class="col-md-8">
                             <input type="text" name="tahun_angkatan_edit" id="tahun_angkatan_edit" class="form-control" placeholder="Tahun Masuk">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Tahun Lulus</label>
                            <div class="col-md-8">
                             <input type="text" name="tahun_lulus_edit" id="tahun_lulus_edit" class="form-control" placeholder="Tahun Lulus">
                           </div>
                        </div>
                 </div>
                 <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" type="submit" id="btn_update" class="btn btn-primary fa fa-floppy-disk"> Simpan</button>
            </div>
            </div>

            </div>
         </div>
    </div>
    </div>
</div>
</form> <!-- /End Modal Edit -->
<!--MODAL DELETE-->
<form>
   <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
              <strong>Are you sure to delete this record?</strong>
         </div>
         <div class="modal-footer">
           <input type="hidden" name="id" id="id" class="form-control">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
           <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
         </div>
       </div>
     </div>
   </div>
</form>
<!--END MODAL DELETE-->