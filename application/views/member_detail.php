
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-sm-3 sidebar2">
                <div class="logo text-center">
                    <img src="http://lorempixel.com/output/people-q-g-64-64-6.jpg" class="img-responsive center-block" alt="Logo">
                  <h4><?php echo $this->session->userdata("username"); ?></h4>
                </div>
                <div class="left-navigation">

                    <ul class="list">
                        <li><i class="fa fa-user" aria-hidden="true"></i><a style="text-decoration:none" href="<?php echo site_url('member/member_detail');?>">Profil</a></li>
                        <li><i class="fa fa-file" aria-hidden="true"></i><a style="text-decoration:none" href="<?php echo site_url('panduan');?>">Panduan</a></li>
                        <li><i class="fa fa-edit" aria-hidden="true"></i><a style="text-decoration:none" href="<?php echo site_url('baru');?>">Isi Proposal</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 col-sm-2 main-content">
                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
                          <div class="panel panel-info">
                            <div class="panel-heading">
                              <h3 class="panel-title">Profil Anda</h3>
                            </div>
                            <div class="panel-body">
                              <div class="row">
                                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                                
                                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                                  <dl>
                                    <dt>DEPARTMENT:</dt>
                                    <dd>Administrator</dd>
                                    <dt>HIRE DATE</dt>
                                    <dd>11/12/2013</dd>
                                    <dt>DATE OF BIRTH</dt>
                                       <dd>11/12/2013</dd>
                                    <dt>GENDER</dt>
                                    <dd>Male</dd>
                                  </dl>
                                </div>-->
                                <div class=" col-md-9 col-lg-9 "> 
                                  <table class="table table-user-information">
                                    <tbody>
                                    <?php 
                                        foreach($member_detail as $u2){
                                    ?>
                                      <tr>
                                        <td>ID User:</td>
                                        <td>: <?php echo $u2->userid;?></td>
                                      </tr>
                                      <tr>
                                        <td>Nama Lengkap:</td>
                                        <td>: <?php echo $u2->nama;?></td>
                                      </tr>
                                      <tr>
                                        <td>Jenis Identitas:</td>
                                        <td>: <?php echo $u2->jenis_identitas;?></td>
                                      </tr>
                                      <tr>
                                        <td>No Identitas:</td>
                                        <td>: <?php echo $u2->no_identitas;?></td>
                                      </tr>
                                      <tr>
                                        <td>Tanggal Daftar:</td>
                                        <td>: <?php echo $u2->date_time;?></td>
                                      </tr>
                                      <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>: </td>
                                      </tr>
                                      <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>: </td>
                                      </tr>
                                      <tr>
                                        <td>Agama</td>
                                        <td>: </td>
                                      </tr>
                                      <tr>
                                        <td>Alamat</td>
                                        <td>: </td>
                                      </tr>
                                      <tr>
                                        <td>Kelurahan</td>
                                        <td>: </td>
                                      </tr>
                                      <tr>
                                        <td>Kecamatan</td>
                                        <td>: </td>
                                      </tr>
                                      <tr>
                                        <td>Kota / Kabupaten</td>
                                        <td>: </td>
                                      </tr>
                                      <tr>
                                        <td>Pekerjaan</td>
                                        <td>: </td>
                                      </tr>
                                      <tr>
                                        <td>Institusi</td>
                                        <td>: </td>
                                      </tr>
                                      <tr>
                                        <td>Alamat Lengkap Institusi</td>
                                        <td>: </td>
                                      </tr>
                                      <tr>
                                        <td>Pekerjaan Lain</td>
                                        <td>: </td>
                                      </tr>
                                      <tr>
                                        <td>No Telepon</td>
                                        <td>: </td> 
                                      </tr>
                                      <tr>
                                        <td>Username</td>
                                        <td>: </td> 
                                      </tr>
                                      <?php
                                        }
                                      ?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                                 <div class="panel-footer">
                                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                                        <span class="pull-right">
                                            <a href="<?php echo site_url('member/edit_member');?>" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i>Edit Profil</a>
                                            <a href="<?php echo site_url('login/logout');?>" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i>Logout</a>
                                        </span>
                                    </div>
                            
                          </div>
                          
                        </div>
                      </div>
            </div>
        </div>
    </div>
