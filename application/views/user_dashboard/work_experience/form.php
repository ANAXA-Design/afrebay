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
                        <li class="breadcrumb-item active" aria-current="page">Add Education</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('sidebar');?>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="user-dashboard">
                     <form class="form" action="<?= $action; ?>" method="post" id="registrationForm" enctype="multipart/form-data">
                    <div class="row row-sm">
                        
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="cardak">
                                 <span class="text-success f-20"><?=$this->session->flashdata('success');  ?></span>
                                <div class="container bootstrap snippet">
                                    <div class="new-pro">
                                        <a href="#" class="pull-right">
                                        
                                        </a>
                                                                         </div>
                                </div>
                                <div class="profile-dsd">
                                    <div class="tab-content">
                                        <div class="tab-pane active" style="padding: 0px;">
                                            <hr />
                                           
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label for="first_name"><h4>Designation <span style="color: red">*</span></h4></label>
                                                            <input type="text" class="form-control" name="designation" placeholder="Enter designation"  value="<?= @$designation; ?>" required list="designation" autocomplete="off"/>
                                                             <datalist id="designation">
                          <?php if(!empty($get_designation)){ foreach($get_designation as $row){?>
                       <option value="<?= $row->designation ?>">
                          <?php } }?>
                          </datalist>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="first_name"><h4>Company Name<span style="color: red">*</span></h4></label>
                                                            <input type="text" class="form-control" name="company_name" placeholder="Enter company name"  value="<?= @$company_name; ?>" required list="company_name" autocomplete="off"/>
                                                             <datalist id="company_name">
                          <?php if(!empty($get_companyname)){ foreach($get_companyname as $row){?>
                       <option value="<?= $row->company_name ?>">
                          <?php } }?>
                          </datalist>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="first_name"><h4>Duration<span style="color: red">*</span></h4></label>
                                                            <input type="text" class="form-control" name="duration" placeholder="Enter Duration"  value="<?= $duration; ?>" required list="duration" autocomplete="off"/>
                                                             <datalist id="education">
                          <?php if(!empty($get_duration)){ foreach($get_duration as $row){?>
                       <option value="<?= $row->duration ?>">
                          <?php } }?>
                          </datalist>
                                                        </div>
                                                        
                                                        
                                                          <div class="col-lg-12"><br>
                                                            <label for="first_name"><h4>Description </h4></label>
                                                            <textarea type="text" class="form-control" name="description" id="description"   value="<?= $description; ?>" ><?= @$description; ?></textarea>
                                                        </div>
                                                        <input type="hidden" name="id" value="<?= @$id; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12 aksek">
                                                        <button class="post-job-btn pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Submit</button>
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