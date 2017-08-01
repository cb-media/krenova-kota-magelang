
<div class="container-fluid">
<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      
    </div>
  </div>
</nav>
	<!-- sidebar menu -->
	<div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">

                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        Welcome : <?php echo $this->session->userdata("username"); ?>
                    </div>
                    <div class="profile-usertitle-job"><a href="" class="button">EDIT PROFIL</a></div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="<?php echo site_url('member');?>">
                            <i class="glyphicon glyphicon-home"></i>
                            Home</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('pendaftaran');?>">
                            <i class="glyphicon glyphicon-user"></i>
                            Pendaftaran</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('login/logout');?>">
                            <i class="glyphicon glyphicon-flag"></i>
                            Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">
               <div class="row">
					<div class="col-md-12">
						 <a href="<?php echo site_url('pendaftaran/baru');?>" class="btn btn-md btn-danger" type="button">Daftar Penelitian Baru</a>
						 <div class="container-fluid">
							<div class="row">
								<div class="col-md-12">
								<?php
										if(empty($data)){
											echo "Data Masih Kosong";
										}else{
											?>
									<table class="table">
										<thead>
											<tr>
												<th>
													#
												</th>
												<th>
													Nama Lengkap
												</th>
												<th>
													No Identitas
												</th>
												<th>
													Alamat Lengkap
												</th>
											</tr>
										</thead>
										<tbody>
										<?php
											$data='';
											$no = 1;
											foreach($pendaftaran as $u){ 
										?>
											<tr>
												<td><?php echo $no++ ?></td>
												<td><?php echo $u->nama_lengkap ?></td>
												<td><?php echo $u->nomor_identitas ?></td>
												<td><?php echo $u->alamat_lengkap ?></td>
											</tr>
											<?php } }?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>

 