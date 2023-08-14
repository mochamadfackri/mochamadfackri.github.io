                        <br>
                        <div class=" container card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i><center><b>Data Pengembangan Aplikasi</b></center></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                        <table id="dataTable" class="table table-bordered" width="100%" cellspacing="0" >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Surat</th>
                                                <th>Nomor Surat</th>
                                                <th>Jenis Surat</th>
                                                <th>Berkas</th>
                                                <th><center>Action</center></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $no = 1; 
                                            foreach ($tbl_aplikasi as $apk) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $apk->nm_surat ?></td>
                                                <td><?php echo $apk->no_surat ?></td>
                                                <td><?php echo $apk->jenis ?></td>
                                                <td><?php echo $apk->berkas ?></td>
                                                <td align="center">
                                                    <a href="<?php echo base_url().'index.php/Frontend/view_dpa/'.$apk->id_apl.' '?>" class="btn btn-success" >View</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>