                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Inventarisir E-Gov</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Inventarisir</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Data Inventarisir</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                        <a href="<?php echo base_url(). 'index.php/Backend/data_pengelola_pusat_add' ?>" class="btn btn-primary">Tambah Data</a><p></p>

                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal Surat</th>
                                                <th>Nama Surat</th>
                                                <th>Nomor Surat</th>
                                                <th>Asal</th>
                                                <th>Jenis Surat</th>
                                                <th>Berkas</th>
                                                <th>Tanggal Terima</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            $total = 0;
                                            foreach ($tbl_pusat as $pus) {
                                            $total = $total + $no;    
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $pus->tgl_surat ?></td>
                                                <td><?php echo $pus->nm_surat ?></td>
                                                <td><?php echo $pus->no_surat ?></td>
                                                <td><?php echo $pus->asal ?></td>
                                                <td><?php echo $pus->jenis ?></td>
                                                <td><?php echo $pus->berkas ?></td>
                                                <td><?php echo $pus->tgl_terima ?></td>
                                                <td>
                                                    <a href="<?php echo base_url().'index.php/Backend/data_pengelola_pusat_edit/'.$pus->id_pusat.'' ?>" class="btn btn-success">Edit</a>
                                                    <a href="<?php echo base_url().'index.php/Backend/data_pengelola_pusat_delete/'.$pus->id_pusat.'' ?>" class="btn btn-danger mt-1" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        <?php }?>
                                        </tbody>
                                        <tr>
                                                <td colspan="8"><b>Total Document</b></td>
                                                <td><?php echo number_format($no - 1)."" ?>&nbsp;Berkas</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               
