                        <br>
                        <div class=" container card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i><center><b>Data Pengelola Pusat</b></center></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Surat</th>
                                                <th>Nomor Surat</th>
                                                <th>Jenis Surat</th>
                                                <th><center>Berkas</center></th>
                                                <th><center>Action</center></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach ($tbl_pusat as $pus) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $pus->nm_surat ?></td>
                                                <td><?php echo $pus->no_surat ?></td>
                                                <td><?php echo $pus->jenis ?></td>
                                                <td><?php echo $pus->berkas ?></td>
                                                <td align="center">
                                                    <a href="<?php echo base_url().'index.php/Frontend/view_dpp/'.$pus->id_pusat.' '?>" class="btn btn-success">View</a>
                                                </td>
                                            </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                  </div>
                            </div>
                        </div>