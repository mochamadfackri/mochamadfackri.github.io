

<div class="container">

			<?php echo $this->session->flashdata('msg'); ?>

					<div class="login-form"><!--login form-->
						<form method="POST" action="<?php echo base_url().'index.php/Login/auth' ?>">
							<div class="col-sm-12"  >
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><br><br><h3 class="text-center font-weight-light my-4">Login</h3><br><br></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Username</label><input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter Username " /></div>
                                            <br>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" /></div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox"></div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="btn btn-primary" href="<?php echo base_url().'index.php/Backend/index'?>">Login</a></div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>

						</form>
					</div><!--/login form-->
                    <br><br>
				</div>
				<br>

