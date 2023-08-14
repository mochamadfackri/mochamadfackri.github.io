                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Inventarisir</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Inventarisir</li>
                        </ol>
                        <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-edit mr-1"></i>Edit Data Inventarisir</div>
                        <div class="card-body">

                        <?php foreach ($tbl_aplikasi as $apk) { ?> 

                        <form method="POST" action="<?php echo base_url().'index.php/Backend/data_pengembangan_aplikasi_edit_aksi' ?>" enctype="multipart/form-data">

                <div class="from-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal Surat :</label>
                            <input type="hidden" name="id_apl" class="form-control" value="<?php echo $apk->id_apl ?>">
                            <input type="date" name="tgl_surat" class="form-control" value="<?php echo $apk->tgl_surat ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Surat :</label>
                            <input type="text" name="nm_surat" class="form-control" value="<?php echo $apk->nm_surat ?>">
                        </div>
                    </div>
                </div>

                <div class="from-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nomor Surat :</label>
                            <input type="text" name="no_surat" class="form-control" value="<?php echo $apk->no_surat ?>">
                        </div>
                    </div>
                </div>
                <div class="from-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Asal Surat :</label>
                            <input type="text" name="asal" class="form-control" value="<?php echo $apk->asal ?>">
                        </div>
                    </div>
                </div>
                <div class="from-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Jenis Surat :</label>
                            <select name="jenis" class="form-control">
                                <option value="<?php echo $apk->jenis ?>"></option>
                                <option value="Surat Masuk">Surat Masuk </option>
                                <option value="Surat Keluar">Surat Keluar </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="from-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>berkas :</label>
                            <input type="file" name="berkas" class="form-control" value="<?php echo $apk->berkas ?>" >
                        </div>
                    </div>
                </div>
                <div class="from-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal Terima :</label>
                            <input type="date" name="tgl_terima" class="form-control" value="<?php echo $apk->tgl_terima ?>">
                        </div>
                    </div>
                </div>
                <center>
                    <div class="form-group mt-4 mb-0">
                        <input type="submit" name="proses" class="btn btn-primary" value="Simpan Data">
                        <button type="reset" class="btn btn-dark">Reset</button>
                    </div>
                </center>
                                        
                                </form>
                                <?php } ?>                  
                            </div>
                        </div>
                    </div>
                </main>
               
