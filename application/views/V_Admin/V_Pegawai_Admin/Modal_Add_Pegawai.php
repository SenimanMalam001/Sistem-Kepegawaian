<!-- Modal Add -->
<form>
   <div class="modal fade" id="Modal_Add_Pegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
            <div class="modal-header" style="border-bottom:0px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data</h4>
            </div>
           
                <div class="modal-body">
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">NIP Pegawai</label>
                           <div class="col-md-8">
                             <input type="text" name="NIP" id="NIP" class="form-control" placeholder="NIP Pegawai">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Nama Pegawai</label>
                           <div class="col-md-8">
                             <input type="text" name="nama_pegawai" id="nama_pegawai" class="form-control" placeholder="Nama Pegawai">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">No KTP</label>
                           <div class="col-md-8">
                             <input type="text" name="no_ktp" id="no_ktp" class="form-control" placeholder="No KTP">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">No Telepon</label>
                           <div class="col-md-8">
                             <input type="text" name="no_telepon" id="no_telepon" class="form-control" placeholder="No Telepon">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">No Telepon Rumah</label>
                            <div class="col-md-8">
                             <input type="text" name="no_telepon_rumah" id="no_telepon_rumah" class="form-control" placeholder="No Telepon Rumah">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Alamat Tinggal</label>
                            <div class="col-md-8">
                             <input type="text" name="alamat_tinggal" id="alamat_tinggal" class="form-control" placeholder="Alamat Tinggal">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Alamat Tetap</label>
                            <div class="col-md-8">
                             <input type="text" name="alamat_tetap" id="alamat_tetap" class="form-control" placeholder="Alamat Tetap">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Jenis Kelamain</label>
                            <div class="col-md-8">
                             <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
                           </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Tanggal Lahir</label>
                            <div class="col-md-8">
                                <div class="input-group date" data-provide="datepicker">
                                     <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th fa fa-calendar-o"></span>
                                    </div>
                                  <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control" >
                                </div> 
                            </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Tempat Lahir</label>
                            <div class="col-md-8">
                             <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Agama</label>
                            <div class="col-md-8">
                             <input type="text" name="agama" id="agama" class="form-control" placeholder="Tempat Agama">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Status Aktif</label>
                            <div class="col-md-8">
                             <input type="text" name="status_aktif" id="status_aktif" class="form-control" placeholder="Status Aktif">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Email</label>
                            <div class="col-md-8">
                             <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                           </div>
                        </div>
                        <input type="hidden" name="kd_golongan" id="kd_golongan" value="golE">
                        <input type="hidden" name="jab_fa" id="jab_fa" value="1">
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Status Kepegawaian</label>
                            <div class="col-md-8">
                             <input type="text" name="status_kepegawaian" id="status_kepegawaian" class="form-control" placeholder="Status Kepegawaian">
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

<!--MODAL DELETE-->
<form>
   <div class="modal fade" id="Modal_Delete_Pegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
           <input type="hidden" name="NIP" id="NIP" class="form-control">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
           <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
         </div>
       </div>
     </div>
   </div>
</form>
<!--END MODAL DELETE-->