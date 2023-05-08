<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div>
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
                        <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('sidebar');?>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="user-dashboard">
                     <form class="form" action="<?php echo base_url('user/Dashboard/update_profile')?>" method="post" id="registrationForm" enctype="multipart/form-data">
                    <div class="row row-sm">

                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="cardak">
                                 <span class="text-success f-20"><?=$this->session->flashdata('success');  ?></span>
                                <div class="container bootstrap snippet">
                                    <div class="new-pro">
                                        <a href="#" class="pull-right">
                                        <?php
                                            if(!empty($userinfo->profilePic)){
                                            if(!file_exists('uploads/users/'.$userinfo->profilePic)){
                                        ?>

                                         <img  class="img-circle img-responsive" src="<?php echo base_url('uploads/no_image.png')?>" style="width:60px;height: 60px;"/>
                                     <?php } else{?>
                                            <img  class="img-circle img-responsive" src="<?php echo base_url('uploads/users/'.$userinfo->profilePic); ?>" style="width:60px;height: 60px;"/></a>

                                        <?php } }else{?>
                                            <img  class="img-circle img-responsive" src="<?php echo base_url('uploads/no_image.png')?>" style="width:60px;height: 60px;"/>
                                        <?php }?>
                             <input type="hidden" name="old_image" value="<?=$userinfo->profilePic ?>">
                             <input type="hidden" name="id" value="<?=$userinfo->userId  ?>">
                                        </a>
                                        <div class="profile-ak">
                                           <!--  <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar" /> -->
                                            <h6>Upload a different photo...</h6>
                                            <input type="file" name="profilePic" class="text-center center-block file-upload" />
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-dsd">
                                    <div class="tab-content">
                                        <div class="tab-pane active" style="padding: 0px;">
                                            <hr />

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label for="first_name"><h4>First Name <span style="color:red;">*</span></h4></label>
                                                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First name"  value="<?php echo $userinfo->firstname;?>" required onkeypress="only_alphabets(event)"/>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="first_name"><h4>Last Name <span style="color:red;">*</span></h4></label>
                                                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last name"  value="<?php echo $userinfo->lastname;?>" required onkeypress="only_alphabets(event)"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label for="first_name"><h4>Phone Number </h4></label>
                                                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Phone Number"  value="<?php echo $userinfo->mobile;?>" required onkeypress="only_number(event)" maxlength="10"/>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="first_name"><h4>Email ID <span style="color:red;">*</span></h4></label>
                                                            <input type="text" class="form-control" name="email" id="email" placeholder="xyz@example.com"  readonly  value="<?php echo $userinfo->email;?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label for="first_name"><h4>Gender<span style="color:red;">*</span></h4></label>
                                                           <select name="gender" class="form-control" required style="height: 32px;">
                                                             <option value="">Gender</option>
                                                             <option value="Male" <?php if(@$userinfo->gender=='Male'){ echo "selected";}?>>Male</option>
                                                             <option value="Female" <?php if(@$userinfo->gender=='Female'){ echo "selected";}?>>Female</option>
                                                           </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="first_name"><h4>Experience<span style="color:red;">*</span></h4></label>
                                                            <input type="text" class="form-control" name="experience" required  value="<?= @$userinfo->experience;?>" placeholder="Enter Experience"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label for="first_name"><h4>Highest Qualification<span style="color:red;">*</span></h4></label>
                                                            <input type="text" class="form-control" name="qualification" required  value="<?= @$userinfo->qualification;?>" placeholder="Enter qualification"/>
                                                        </div>

                                                        <div class="col-lg-6">
                                                              <label for="first_name"><h4>Skills<span style="color:red;">*</span></h4></label>
                                                              <br>
                                                              <input type="text" name="skills" required  id="skills" class="form-control"  value="<?= @$userinfo->skills?>" />
                                                          </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label for="last_name"><h4>Zip Code</h4></label>
                                                            <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip Code"  value="<?php echo @$userinfo->zip;?>" required onkeypress="only_number(event)" maxlength="6"/>
                                                        </div>
                                                        <div class="col-lg-6">
                                                              <label for="last_name"><h4>Address</h4></label>
                                                              <input type="text" class="form-control" name="address" id="location" placeholder="Location"  value="<?= $userinfo->address ?>" autocomplete="off"/>
                                                              <input type="hidden" name="latitude" id="search_lat" value="<?= $userinfo->latitude ?>">
                                              <input type="hidden" name="longitude" id="search_lon" value="<?= $userinfo->longitude ?> ">
                                                          </div>
                                                           <div class="col-lg-6">
                                                              <label for="last_name"><h4>Resume upload</h4></label>
                                                              <input type="file" class="form-control" name="resume" id="resume" />
                                                              <br>
                                                              <?php
                                                                  if(!empty($userinfo->resume)){
                                                                  if(!file_exists('uploads/users/resume/'.$userinfo->resume)){
                                                              ?>

                                                               <img  class="img-circle img-responsive" src="<?php echo base_url('uploads/no_image.png')?>" style="width:60px;height: 60px;"/>
                                                           <?php } else{?>
                                                             <a href="<?php echo base_url('uploads/users/resume/'.$userinfo->resume); ?>" />
                                                             <i class="fa fa-file-pdf-o" aria-hidden="true" style="font-size:40px; color:red;"></i>
                                                             <span><?php if(strlen($userinfo->resume)>30){ echo substr($userinfo->resume, 0,30);}else{ echo $userinfo->resume; }  ?></span>
                                                             </a>
                                                                  <input type="hidden" name="old_resume" value="<?= $userinfo->resume ?>">
                                                              <?php } }else{?>
                                                                  <img  class="img-circle img-responsive" src="<?php echo base_url('uploads/no_image.png')?>" style="width:60px;height: 60px;"/>
                                                              <?php }?>
                                                          </div>
                                                           <div class="col-lg-6">
                                                              <label for="last_name"><h4>Additional Images</h4></label>
                                                              <input type="file" class="form-control" name="additional_image" />
                                                              <br>
                                                              <?php
                                                                  if(!empty($userinfo->additional_image)){
                                                                  if(!file_exists('uploads/users/additional_image/'.$userinfo->additional_image)){
                                                              ?>

                                                               <img  class="img-circle img-responsive" src="<?php echo base_url('uploads/no_image.png')?>" style="width:60px;height: 60px;"/>
                                                           <?php } else{?>
                                                                  <img  class="img-circle img-responsive" src="<?php echo base_url('uploads/users/additional_image/'.$userinfo->additional_image); ?>" style="width:60px;height: 60px;"/></a>
                                                                  <input type="hidden" name="old_additionalimage" value="<?= $userinfo->additional_image ?>">
                                                              <?php } }else{?>
                                                                  <img  class="img-circle img-responsive" src="<?php echo base_url('uploads/no_image.png')?>" style="width:60px;height: 60px;"/>
                                                              <?php }?>
                                                          </div>
                                                           <div class="col-lg-6">
                                                              <label for="last_name"><h4>Short Bio</h4></label>
                                                              <!--<input type="text" class="form-control" name="short_bio" placeholder="Short Bio" value="<?= $userinfo->short_bio ?>" />-->
                                    <textarea class="form-control" name="short_bio" placeholder="Short Bio"><?= @$userinfo->short_bio ?></textarea>
                                                          </div>
                                                           <div class="col-lg-6">
                                                              <label for="last_name"><h4>Short Video</h4></label>
                                                              <input type="file" class="form-control" name="video" />
                                                              <br>
                                                              <?php
                                                                  if(!empty($userinfo->video)){
                                                                  if(!file_exists('uploads/video/'.$userinfo->video)){
                                                              ?>

                                                               <img  class="img-circle img-responsive" src="<?php echo base_url('uploads/no_image.png')?>" style="width:60px;height: 60px;"/>
                                                           <?php } else{?>
                                                             <video width="200" controls autoplay>
           <source src="<?= base_url('uploads/video/'.$userinfo->video) ?>" style="width:50px;height:50px;" type="video/mp4">
            <source src="<?= base_url('uploads/video/'.$userinfo->video)?>" style="width:50px;height:50px;" type="video/ogg">
            </video>
                                                                  <input type="hidden" name="old_video" value="<?= $userinfo->video ?>">
                                                              <?php } }else{?>
                                                                  <img  class="img-circle img-responsive" src="<?php echo base_url('uploads/no_image.png')?>" style="width:60px;height: 60px;"/>
                                                              <?php }?>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="col-xs-12 aksek">
                                                          <button class="post-job-btn pull-right" type="submit">Save Changes</button>
                                                    </div>
                                                </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                      </form>
                </div>
            </div>
        </div>
    </div>

</section>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>


<script type="text/javascript">
  $('#skills').tagsinput({
   confirmKeys: [13, 44],
   maxTags: 20,

});
</script>
