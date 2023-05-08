 <section class="overlape">
                <div class="block no-padding">
                    <div data-velocity="-.1" style="background: url('<?= base_url('assets/images/resource/mslider1.jpg')?>') repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div>
                    <!-- PARALLAX BACKGROUND IMAGE -->
                    <div class="container fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="inner-header" style="padding-top: 90px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="dashboardhak">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-12">
                            <h2 class="breadcrumb-title">Dashboard</h2>
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">My Job</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>

             <?php $this->load->view('sidebar');?>
                        <div class="col-md-10 col-sm-11 display-table-cell v-align">
                            <div class="user-dashboard">
                                <div class="row row-sm">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="cardak">
                                            <table class="table table-bordered">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Post Title</th>
                                                  <th scope="col">Duration</th>
                                                  <th scope="col">Charges</th>
                                                  <th scope="col">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                  <?php

                                                    if(!empty($get_postjob)){
                                                      $i=1;
                                                      foreach ($get_postjob as $key)
                                                        {?>
                                                  <tr>
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td><?=$key->post_title; ?></td>
                                                    <td><?=$key->duration." "."Month"; ?></td>
                                                    <td><?="USD"." ".$key->charges; ?></td>
                                                    <td>
                                                      <a href="<?php echo base_url('welcome/post_jobinfo/'.base64_encode($key->id))?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                     <!--  <a href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                      <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a> -->
                                                    </td>
                                                  </tr>
                                                    <?php $i++; }}else{?>
                                                <tr>
                                                  <td colspan="5"><center>No Data Found</center></td>
                                                </tr>
                                              <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="add_project" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header login-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h4 class="modal-title">Add Project</h4>
                            </div>
                            <div class="modal-body">
                                <input type="text" placeholder="Project Title" name="name" />
                                <input type="text" placeholder="Post of Post" name="mail" />
                                <input type="text" placeholder="Author" name="passsword" />
                                <textarea placeholder="Desicrption"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="cancel" data-dismiss="modal">Close</button>
                                <button type="button" class="add-project" data-dismiss="modal">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
