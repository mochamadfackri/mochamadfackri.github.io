                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Inventarisir</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Inventarisir</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-edit mr-1"></i> Tambah Arsip E-Gov</div>
                           <div class="card-body">
                                   <form method="POST" action="<?php echo base_url().'index.php/Backend/data_tata_kelola_aksi' ?>" enctype="multipart/form-data">

                <div class="from-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal Surat :</label>
                            <input type="date" name="tgl_surat" class="form-control" placeholder="Masukkan Tanggal Surat">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Surat :</label>
                            <input type="text" name="nm_surat" class="form-control" placeholder="Masukkan Nama Surat..">
                        </div>
                    </div>
                </div>

                <div class="from-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nomor Surat :</label>
                            <input type="text" name="no_surat" class="form-control" placeholder="Masukkan Nomor Surat..">
                        </div>
                    </div>
                </div>

                <div class="from-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Asal Surat :</label>
                            <input type="text" name="asal" class="form-control" placeholder="Masukkan Nomor Surat..">
                        </div>
                    </div>
                </div>

                <div class="from-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Jenis Surat :</label><br>
                            <select name="jenis">
                                <option>~ Masukkan Jenis Surat ~</option>
                                <option value="Surat Masuk">Surat Masuk </option>
                                <option value="Surat Keluar">Surat Keluar </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="from-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Berkas :</label>
                            <input type="file" name="berkas" class="form-control" placeholder="Berkas">
                        </div>
                    </div>
                </div>
                
                <div class="from-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal Terima:</label>
                            <input type="date" name="tgl_terima" class="form-control" placeholder="Surat Tanggal Terima">
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
                            </div>
                        </div>
                    </div>
                </main>
               
