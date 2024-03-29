<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url('<?= base_url('assets/images/resource/mslider1.jpg') ?>') repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div>
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
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="dashboard-gig">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <?php $this->load->view('sidebar'); ?>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="user-dashboard">
                    <div class="row row-sm">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="cardak">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                                        <div id="frame">
                                            <div id="sidepanel">
                                                <div id="profile">
                                                    <div class="wrap">
                                                        <?php if (@$get_user->profilePic && file_exists('uploads/profile/' . @$get_user->profilePic)) { ?>
                                                        <img id="profile-img" src="<?= base_url('uploads/profile/' . @$get_user->profilePic) ?>" class="online" alt="" />
                                                        <?php } else { ?>
                                                        <img id="profile-img" src="<?= base_url('uploads/users/user.png') ?>" class="online" alt="" />
                                                        <?php } ?>
                                                        <p>
                                                        <?php if (!empty($get_user->firstname)) {
                                                            echo $get_user->firstname . ' ' . $get_user->lastname;
                                                        } else {
                                                            echo $get_user->username;
                                                        } ?></p>
                                                        <div id="status-options">
                                                            <ul>
                                                                <li id="status-online" class="active">
                                                                    <span class="status-circle"></span>
                                                                    <p>Online</p>
                                                                </li>
                                                                <li id="status-away">
                                                                    <span class="status-circle"></span>
                                                                    <p>Away</p>
                                                                </li>
                                                                <li id="status-busy">
                                                                    <span class="status-circle"></span>
                                                                    <p>Busy</p>
                                                                </li>
                                                                <li id="status-offline">
                                                                    <span class="status-circle"></span>
                                                                    <p>Offline</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!--  <div id="expanded">
                                                            <label for="twitter"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></label>
                                                            <input name="twitter" type="text" value="mikeross" />
                                                            <label for="twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></label>
                                                            <input name="twitter" type="text" value="ross81" />
                                                            <label for="twitter"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></label>
                                                            <input name="twitter" type="text" value="mike.ross" />
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div id="search">
                                                   <!--  <span class="char-sea"><i class="fa fa-search" aria-hidden="true"></i></span> -->
                                                   <input type="text" placeholder="Search contacts..." />
                                                </div>
                                                <div id="contacts">
                                                    <ul>
                                                    <?php if (!empty($get_jobbid)) {
                                                    foreach ($get_jobbid as $user) {
                                                        if ($user->postjob_id == $user->post_id && $user->user_id == $_SESSION['afrebay']['userId'] && $user->bidding_status == 'Accept') {
                                                            $get_msg = $this->Crud_model->GetData('chat', '', "userto_id='" . $user->userid . "' and userfrom_id='" . $user->user_id . "'", '', 'id desc', '', '1');
                                                    ?>
                                                    <li class="contact" onclick="return getuser('<?= $user->userid ?>');">
                                                        <div class="wrap">
                                                            <span class="contact-status online"></span>
                                                            <?php if (@$user->profilePic && file_exists('uploads/profile/' . @$user->profilePic)) { ?>
                                                            <img src="<?= base_url('uploads/profile/' . @$user->profilePic) ?>" alt="" />
                                                            <?php } else { ?>
                                                            <img src="<?= base_url('uploads/users/user.png') ?>" alt="" />
                                                            <?php } ?>
                                                            <div class="meta">
                                                                <p class="name">
                                                                <?php if (!empty($user->username)) {
                                                                    echo ucfirst($user->username);
                                                                } else {
                                                                    echo ucfirst($user->full_name);
                                                                } ?>
                                                                </p>
                                                                <p class="preview"><?= !empty($get_msg->message) ? $get_msg->message : ''; ?></p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php } else if ($user->postjob_id == $user->post_id && $user->userid == $_SESSION['afrebay']['userId'] && $user->bidding_status == 'Accept') {
                                                        $get_user = $this->Crud_model->get_single('users', "userId='" . $user->user_id . "'");
                                                        $get_msg1 = $this->Crud_model->GetData('chat', '', "userfrom_id='" . $user->user_id . "' and userto_id='" . $user->userid . "'", '', 'id desc', '', '1');
                                                    ?>
                                                    <li class="contact" onclick="return getuser('<?= $get_user->userId ?>');">
                                                        <div class="wrap">
                                                            <span class="contact-status online"></span>
                                                            <?php if (@$get_user->profilePic && file_exists('uploads/profile/' . @$get_user->profilePic)) { ?>
                                                            <img src="<?= base_url('uploads/profile/' . @$get_user->profilePic) ?>" alt="" />
                                                         <?php } else { ?>
                                                            <img src="<?= base_url('uploads/users/user.png') ?>" alt="" />
                                                         <?php } ?>
                                                         <div class="meta">
                                                            <p class="name">
                                                                <?php if (!empty($get_user->username)) {
                                                                    echo ucfirst($get_user->username);
                                                                              } else {
                                                                                 echo ucfirst($get_user->firstname);
                                                                              } ?></p>
                                                            <p class="preview"><?= !empty($get_msg1->message) ? $get_msg1->message : ''; ?></p>

                                                         </div>

                                                      </div>

                                                   </li>

                                                <?php } ?>



                                          <?php }

                                          } ?>





                                       </ul>

                                    </div>

                                    <!-- <div id="bottom-bar">

                                               <button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>

                                               <button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>

                                            </div> -->

                                 </div>

                                 <div class="content">



                                    <div id="message_list" style="height:650px;  overflow-y: scroll;overflow-y: hidden;">



                                       </ul>

                                    </div>







                                    <div class="message-input">

                                       <div class="wrap">

                                          <input type="hidden" name="userto_id" id="userto_id" value="" />

                                          <input type="text" name="message" id="message" placeholder="Write your message..." />

                                          <i class="fa fa-paperclip attachment" aria-hidden="true"></i>

                                          <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>

                                       </div>

                                    </div>

                                 </div>

                                 <!--end message list div -->

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>

   </div>



</section>



<link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script src="https://use.typekit.net/hoy3lrg.js"></script>

<script>

   try {

      Typekit.load({

         async: true

      });

   } catch (e) {}

</script>

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

<script>

   $(".messages").animate({

      scrollTop: $(document).height()

   }, "fast");

   $("#profile-img").click(function() {

      $("#status-options").toggleClass("active");

   });



   $(".expand-button").click(function() {

      $("#profile").toggleClass("expanded");

      $("#contacts").toggleClass("expanded");

   });



   $("#status-options ul li").click(function() {

      $("#profile-img").removeClass();

      $("#status-online").removeClass("active");

      $("#status-away").removeClass("active");

      $("#status-busy").removeClass("active");

      $("#status-offline").removeClass("active");

      $(this).addClass("active");



      if ($("#status-online").hasClass("active")) {

         $("#profile-img").addClass("online");

      } else if ($("#status-away").hasClass("active")) {

         $("#profile-img").addClass("away");

      } else if ($("#status-busy").hasClass("active")) {

         $("#profile-img").addClass("busy");

      } else if ($("#status-offline").hasClass("active")) {

         $("#profile-img").addClass("offline");

      } else {

         $("#profile-img").removeClass();

      };



      $("#status-options").removeClass("active");

   });



   function newMessage() {

      //message = $(".message-input input").val();



      var userto_id = $('#userto_id').val();

      var message = $('#message').val();

      if ($.trim(message) == '') {

         return false;

      }

      $.ajax({

         url: '<?= base_url('user/dashboard/sent_message') ?>',

         type: 'POST',

         data: {

            userto_id: userto_id,

            message: message

         },

         dataType: 'json',

         success: function(returndata) {



            if (returndata.result == 1) {

               $('<li class="sent">' + returndata.userpic + '<p>' + message + '</p></li>').appendTo($('.messages ul'));

               $('#message').val(null);

               $('.contact.active .preview').html('<span>You: </span>' + message);

               $(".messages").animate({

                  scrollTop: $(document).height()

               }, "fast");

            }

         }

      });



   };



   $('.submit').click(function() {

      newMessage();

   });



   $(window).on('keydown', function(e) {

      if (e.which == 13) {

         newMessage();

         return false;

      }

   });

   //# sourceURL=pen.js

   function getuser(user_id) {

      var displayProduct = 3;

      $('#message_list').html(createSkeleton(displayProduct));



      function createSkeleton(limit) {

         var skeletonHTML = '';

         for (var i = 0; i < limit; i++) {

            skeletonHTML += '<div class="ph-item">';

            skeletonHTML += '<div class="ph-col-4">';

            skeletonHTML += '<div class="ph-picture"></div>';

            skeletonHTML += '</div>';

            skeletonHTML += '<div>';

            skeletonHTML += '<div class="ph-row">';

            skeletonHTML += '<div class="ph-col-12 big"></div>';

            skeletonHTML += '<div class="ph-col-12"></div>';

            skeletonHTML += '<div class="ph-col-12"></div>';

            skeletonHTML += '<div class="ph-col-12"></div>';

            skeletonHTML += '<div class="ph-col-12"></div>';

            skeletonHTML += '</div>';

            skeletonHTML += '</div>';

            skeletonHTML += '</div>';

         }

         return skeletonHTML;

      }

      $('#userto_id').val(user_id);

      $.ajax({

         url: '<?= base_url('user/dashboard/showmessage_list') ?>',

         type: 'POST',

         data: {

            user_id: user_id

         },

         dataType: 'json',

         success: function(result) {

            $('#message_list').html(result);



         }

      });

   }



   function openVideoCallWindow(fid) {

		var callPath = "<?php echo base_url('livevideo/video/');?>"+fid;

		  window.open(callPath, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=250,left=20,width=600,height=450");

	}

</script>
