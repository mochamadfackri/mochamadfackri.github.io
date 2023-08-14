                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Inventarisir</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Inventarisir</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-edit mr-1"></i> Tambah Arsip E-Gov</div>
                           <div class="card-body">
                                   <form method="POST" action="<?php echo base_url().'index.php/Backend/data_admin_aksi' ?>" enctype="multipart/form-data">

                <div class="from-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Username : </label>
                            <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Password :</label>
                            <input type="text" name="password" class="form-control" placeholder="Masukkan Password">
                        </div>
                    </div>
                </div>

                <div class="from-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Admin :</label>
                            <input type="text" name="nm_admin" class="form-control" placeholder="Masukkan Nama Admin..">
                        </div>
                    </div>
                </div>
                <div class="from-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Status :</label>
                            <input type="text" name="status" class="form-control" placeholder="Masukkan Status..">
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
               
