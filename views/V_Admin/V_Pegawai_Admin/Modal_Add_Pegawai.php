<!-- Modal Add -->
<form>
   <div class="modal fade" id="Modal_Add_Pegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
            <div class="modal-header" style="border-bottom:0px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data</h4>
                <ul class="nav nav-tabs" style="padding-top: 20px">
                  <li class="active"><a data-toggle="tab" href="#biodata">Biodata</a></li>
                  <li ><a data-toggle="tab" id="tab_golongan" href="#golongan" >Golongan</a></li>
                  <li ><a data-toggle="tab" id="tab_jabatan_fungsional" href="#jabatan_fungsional" >Jabatan Fungsional</a></li>
                  <li ><a data-toggle="tab" id="tab_fakultas_pegawai" href="#fakultas_pegawai" >Fakultas</a></li>
                </ul>
            </div>
           
                <div class="modal-body">
                  <div class="tab-content">
                    <div id="biodata" class="tab-pane fade in active">
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
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Status Kepegawaian</label>
                             <div class="dropdown col-md-8">
                                 <select class="form-control" name="status_kepegawaian" id="status_kepegawaian">
                                     <option>Pilih Status Kepegawaian</option>
                                     <option value="Pegawai">Pegawai</option>
                                     <option value="Dosen">Dosen</option>
                                 </select>
                             </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button  type="submit" id="btn_save_biodata" class="btn btn-primary fa fa-floppy-disk"> Simpan</button>
                        </div>
                    </div>

                    <!-- /modal add golongan -->
                    <div id="golongan" class="tab-pane fade">
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">NIP</label>
                           <div class="col-md-8">
                             <input type="text" name="nip" id="nip" class="form-control" placeholder="NIP">
                           </div>
                        </div>
                        
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Golongan</label>
                             <div class="dropdown col-md-8">
                                 <select class="form-control" name="kd_golongan" id="kd_golongan">
                                     <option>Pilih Golongan</option>
                                     <option value="golA">Golongan A</option>
                                     <option value="golB">Golongan B</option>
                                     <option value="golC">Golongan C</option>
                                     <option value="golD">Golongan D</option>
                                     <option value="golE">Golongan E</option>
                                 </select>
                             </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Tanggal Mulai</label>
                            <div class="col-md-8">
                                <div class="input-group date" data-provide="datepicker">
                                     <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th fa fa-calendar-o"></span>
                                    </div>
                                  <input type="text" name="tanggal_mulai" id="tanggal_mulai" class="form-control" >
                                </div> 
                            </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">File SK</label>
                            <div class="col-md-8">
                             <input type="file" name="sk_file" id="sk_file" class="form-control">
                           </div>
                        </div>
                        
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" type="submit" id="btn_save_golongan" class="btn btn-primary fa fa-floppy-disk"> Simpan</button>
                        </div>
                    </div>

                    <!-- /modal add jabatan fungsional -->
                    <div id="jabatan_fungsional" class="tab-pane fade">
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">NIP Pegawai</label>
                           <div class="col-md-8">
                             <input type="text" name="nip_pegawai" id="nip_pegawai" class="form-control" placeholder="NIP Pegawai">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Jabatan Fungsional</label>
                             <div class="dropdown col-md-8">
                                 <select class="form-control" name="jabFa" id="jabFa">
                                     <option>Pilih Jabatan Fungsional</option>
                                     <option value="1">Tidak Ada</option>
                                     <option value="2">Asisten Ahli</option>
                                     <option value="3">Lektor</option>
                                     <option value="4">Lektor Kepala</option>
                                     <option value="5">Guru Besar</option>
                                 </select>
                             </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Tanggal Mulai</label>
                            <div class="col-md-8">
                                <div class="input-group date" data-provide="datepicker">
                                     <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th fa fa-calendar-o"></span>
                                    </div>
                                  <input type="text" name="sejak_tanggal" id="sejak_tanggal_fakultas" class="form-control" >
                                </div> 
                            </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Surat Keputusan</label>
                            <div class="col-md-8">
                             <input type="text" name="surat_keputusan" id="surat_keputusan_fakultas" class="form-control" placeholder="Surat Keputusan">
                           </div>
                        </div>
                        
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" type="submit" id="btn_save_jabatan_fungsional" class="btn btn-primary fa fa-floppy-disk"> Simpan</button>
                        </div>
                    </div>

                    <!-- /modal add fakultas pegawai -->
                    <div id="fakultas_pegawai" class="tab-pane fade">
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">NIP Pegawai</label>
                           <div class="col-md-8">
                             <input type="text" name="nip_pegawai_fakultas" id="nip_pegawai_fakultas" class="form-control" placeholder="NIP Pegawai">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Fakultas</label>
                             <div class="dropdown col-md-8">
                                 <select class="form-control" name="kd_fakultas" id="kd_fakultas">
                                     <option>Pilih fakultas</option>
                                     <option value="FA-001">Husludin</option>
                                     <option value="FA-002">ICT</option>
                                     <option value="FA-003">Musalamiah</option>
                                 </select>
                             </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Tanggal Mulai</label>
                            <div class="col-md-8">
                                <div class="input-group date" data-provide="datepicker">
                                     <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th fa fa-calendar-o"></span>
                                    </div>
                                  <input type="text" name="sejak_tanggal_fakultas" id="sejak_tanggal_fakultas" class="form-control" >
                                </div> 
                            </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-4 col-form-label">Surat Keputusan</label>
                            <div class="col-md-8">
                             <input type="text" name="surat_keputusan_fakultas" id="surat_keputusan_fakultas" class="form-control" placeholder="Surat Keputusan">
                           </div>
                        </div>
                        
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" type="submit" id="btn_save_fakultas_pegawai" class="btn btn-primary fa fa-floppy-disk"> Simpan</button>
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