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
                        <li class="breadcrumb-item active" aria-current="page">Password Reset</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('sidebar');?>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="user-dashboard">
                     <form class="form" action="#" method="post"  enctype="multipart/form-data">
                    <div class="row row-sm">

                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="cardak">


                                <div class="profile-dsd">
                                    <div class="tab-content">
                                        <div class="tab-pane active" style="padding: 0px;">
                                            <!-- <hr /> -->

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <label for="first_name"><h4>Current Password <span style="color:red;">*</span> <span id="err_current"></span></h4></label>
                                                            <input type="password" class="form-control" name="cur-password" id="cur-password" placeholder="Current Password" autocomplete="off"/>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <label for="first_name"><h4>New Password <span style="color:red;">*</span> <span id="err_new"></span></h4></label>
                                                            <input type="password" class="form-control" name="new-password" id="new-password" placeholder="New Password" autocomplete="off" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <label for="first_name"><h4>Repeat Password <span style="color:red;">*</span> <span id="err_confirm"></span></h4></label>
                                                            <input type="password" class="form-control" name="conf-password" id="conf-password" placeholder="Repeat Password" autocomplete="off" />
                                                        </div>

                                                    </div>
                                                </div>
                                                  <div class="form-group"><span id="matchPass1"></span></div>

                                                  <div class="form-group">
                                                      <div class="col-xs-12 aksek">
                                                          <button class="post-job-btn" type="button" onclick="return change_password()"><i class="glyphicon glyphicon-ok-sign"></i>Submit</button>
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
