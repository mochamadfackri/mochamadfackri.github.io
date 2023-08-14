                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Admin</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Admin</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Data Admin</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <a href="<?php echo base_url(). 'index.php/Backend/data_admin_add' ?>" class="btn btn-primary">Tambah Data</a><p></p>
                                        <thead>
                                            <tr>
                                                <th><center>No</center></th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Nama Admin</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach ($tbl_admin as $admin) {
                                            ?>
                                            <tr>
                                                <td align="center" ><?php echo $no++ ?></td>
                                                <td><?php echo $admin->username ?></td>
                                                <td><?php echo $admin->password ?></td>
                                                <td><?php echo $admin->nm_admin ?></td>
                                                <td><?php echo $admin->status ?></td>
                                                <td>
                                                    <a href="<?php echo base_url().'index.php/Backend/data_admin_edit/'.$admin->id_admin.'' ?>" class="btn btn-success">Edit</a>
                                                    <a href="<?php echo base_url().'index.php/Backend/data_admin_delete/'.$admin->id_admin.'' ?>" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>