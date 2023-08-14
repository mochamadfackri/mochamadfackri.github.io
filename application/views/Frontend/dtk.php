                        <br>
                        <div class=" container card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i><center><b>Data Tata Kelola</b></center></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                       
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
                                            
                                            <tr>
                                            <?php 
                                            $no = 1;
                                            foreach ($tbl_kelola as $kel) {
                                            ?>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $kel->nm_surat ?></td>
                                                <td><?php echo $kel->no_surat ?></td>
                                                <td><?php echo $kel->jenis ?></td>
                                                <td><?php echo $kel->berkas ?></td>
                                                <td align="center">
                                                    <a href="<?php echo base_url().'index.php/Frontend/view_dtk/'.$kel->id_kelola.' '?>" class="btn btn-success">View</a>
                                                </td>
                                            </tr>
                                         <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>