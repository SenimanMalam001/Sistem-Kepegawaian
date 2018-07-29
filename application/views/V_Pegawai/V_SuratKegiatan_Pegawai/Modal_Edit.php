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

                <div class="row" style="padding-top: 20px">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                        <li><a data-toggle="tab" href="#menu1">Jenjang Pendidikan</a></li>
                        <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                    </ul>
                    <!-- Tab panes, ini content dari tab di atas -->

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="row col-lg-12" style="padding-top: 20px">

                            <!-- row 1  -->
                            <form role="form" name="form" action="dosenbiodt_editproses.php" method="POST">
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-4">
                                    <!-- box 1 -->
                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Dr. Ragil Satrio</h3>
                                        </div><!-- /.box-header -->

                                            <div class="box-body">
                                                <img alt="foto" src="D:/Data Desain/ragil superman.png" class="img-rounded">
                                            </div><!-- /.box-body -->

                                            <div class="box-footer">
                                                <p><small>DOSEN PROGRAM STUDI MAIN DOTA
                                                    <br/>FUNGSIONAL: LEKTOR KEPALA</small></p>
                                                </p>

                                            </div>

                                    </div>
                                </div>
                                <!-- middle column -->
                                <div class="col-md-4">
                                    <!-- box 2 -->
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" name="nama" class="form-control" placeholder="nama" value="Dr. Ragil Satrio" disabled="disabled">
                                                <input type="hidden" name="idfoto" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="nip">NIP</label>
                                                <input type="text" name="nip" class="form-control" placeholder="NIP" value="" disabled="disabled" >
                                            </div>
                                            <div class="form-group">
                                                <label for="noktp">No.KTP</label>
                                                <input type="text" name="noktp" class="form-control" placeholder="No.KTP" value="" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label for="agama">Agama</label>
                                                <input type="text" name="agama" class="form-control" placeholder="Agama" value="" disabled="disabled">
                                            </div>
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div><!-- /.col-md-6 -->
                                <!-- right column -->
                                <div class="col-md-4">
                                    <!-- box 3 -->
                                    <div class="box">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="lhrtpt">Lahir di</label>
                                                    <input type="text" name="lhrtpt" class="form-control" placeholder="tempat lahir" value="" disabled="disabled">
                                                </div>
                                                <div class="form-group">
                                                    <label for="lhr1">Tgl.Lahir</label>
                                                    <input type="text" name="lhr1" class="form-control" placeholder="tgl.lahir" value="" disabled="disabled">
                                                </div>
                                                <div class="form-group">
                                                    <label for="lp">Laki-laki/Perempuan</label>
                                                    <input type="text" name="ganre" class="form-control" placeholder="Jenis Kelamin" value="" disabled="disabled">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pensiun_status">Status Aktif</label>
                                                    <input type="text" name="status" class="form-control" placeholder="Status" value="" disabled="disabled">
                                                </div>
                                            </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->

                            <!-- row 2  -->
                            <div class="row">
                                <!-- leftt column -->
                                <div class="col-md-4" style="padding-top: 10px">
                                    <!-- box 1 -->
                                    <div class="box">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <input type="password" name="alamat" class="form-control" placeholder="nama" value="" disabled="disabled">
                                                </div>
                                                <div class="form-group">
                                                    <label for="telepon">No.Telepon Rumah</label>
                                                    <input type="password" name="telepon" class="form-control" placeholder="telepon" value="" disabled="disabled">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nohp">No.Ponsel</label>
                                                    <input type="password" name="nohp" class="form-control" placeholder="no.ponsel" value="" disabled="disabled">
                                                </div>
                                                <div class="form-group">

                                                </div>
                                            </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div><!-- /.col-md-6 -->
                                <!-- middle column -->
                                <div class="col-md-4" style="padding-top: 10px">
                                    <!-- box 1 -->
                                    <div class="box">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="kg">Pangkat/Golongan</label>
                                                    <input type="text" name="tmtgol" class="form-control" placeholder="Golongan" value="" disabled="disabled">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tmtgol">t.m.t. Golongan</label>
                                                    <input type="text" name="tmtgol" class="form-control" placeholder="t.m.t. Golongan" value="" disabled="disabled">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tmtjab">t.m.t. Fungsional</label>
                                                    <input type="text" name="tmtjab" class="form-control" placeholder="t.m.t. Fungsional" value="" disabled="disabled">
                                                </div>
                                            </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                </div><!-- /.col-md-6 -->
                                <!-- right column -->
                            </div><!-- /.row -->
                            </form>
                        </div>
                    </div>

                    <div id="menu1" class="tab-pane fade" >
                        <div class="row col-lg-12" style="padding-top: 20px">
                            <div class="col-md-4">
                            <!-- box 3 -->
                            <div class="box">
                                <div class="box-body">
                                    <div class="form-group">
                                    <label for="kodejenjang">Jenjang Pendidikan</label>
                                    <select class="form-control" name="kodejenj" disabled="disabled">
                                        <option value="7">SARJANA</option>
                                            <option value="">SARJANA KEPENDIDIKAN</option>
                                            <option value="">SARJANA EKONOMI</option>
                                            <option value="">SARJANA TEKNIK</option>
                                            <option value="">SARJANA SAINS</option>
                                            <option value="">SARJANA SENI</option>
                                            <option value="">SARJANA SOSIAL</option>
                                            <option value="">SARJANA KEDOKTERAN</option>
                                            <option value="">SARJANA KESEHATANA MASYARAKAT</option>
                                            <option value="">SARJANA HUKUM</option>
                                            <option value="">SARJANA THEOLOGIA</option>
                                            <option value="">SARJANA AGAMA</option>
                                            <option value="">SARJANA KOMPUTER</option>
                                            <option value="">SARJANA ILMU PERPUSTAKAAN</option>
                                            <option value="">MASTER</option>
                                            <option value="">MASTER PENDIDIKAN</option>
                                            <option value="">MAGISTER PENDIDIKAN</option>
                                            <option value="">MASTER SAINS</option>
                                            <option value="">MAGISTER SAINS</option>
                                            <option value="">MASTER TEKNIK</option>
                                            <option value="">MAGISTER TEKNIK</option>
                                            <option value="">MASTER HUMANIORA</option>
                                            <option value="">MASTER HUKUM</option>
                                            <option value="">MASTER EKONOMI</option>
                                            <option value="">MAGISTER EKONOMI</option>
                                            <option value="">MASTER KESEHATAN</option>
                                            <option value="">MAGISTER  PERPUSTAKAAN</option>
                                            <option value="">DOKTOR</option>
                                            <option value="">DOKTOR PENDIDIKAN DN</option>
                                            <option value="">DOKTOR PENDIDIKAN LN</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pend">Pendidikan Akhir</label>
                                    <input type="text" name="pend" class="form-control" placeholder="pendidikan akhir" value="" disabled="disabled">
                                </div>
                                <div class="form-group">
                                    <label for="pendth">Tahun Tamat</label>
                                    <input type="text" name="pendthn" class="form-control" placeholder="tahun tamat" value="" disabled="disabled">
                                </div>
                                <div class="form-group">
                                    <label for="pendlbg">Lembaga Pendidikan</label>
                                    <input type="text" name="pendlbg" class="form-control" placeholder="Lembaga Pendidikan" value="" disabled="disabled">
                                </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col-md-6 -->
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
                      <input class="form-control" type="text" name="id_edit" id="id_edit" disabled>
                    </div>
                  </div>

          				<div class="form-group row">
          						<label class="col-md-2 col-form-label">Nama Rubrik</label>
          						<div class="col-md-10">
                        <select class="form-control" id="item_sk_edit" name="item_sk_edit">

                        </select>
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
          						<label class="col-md-2 col-form-label">Deskripsi</label>
          						<div class="col-md-10">
          							<textarea class="form-control" name="deskripsi_edit" id="deskripsi" rows="3"></textarea>
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
