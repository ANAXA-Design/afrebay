<style type="text/css">
    .dashboard{
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        height:150px;
    }
    .dashboard h4{
        padding:10px;
    }
     .dashboard h3{
        padding:5px;
    }
    .list_profile li{
        list-style:none;
        padding:10px;
        display:block;
        font-size:18px;
        margin-left:20px;
    }

</style>
 <section class="overlape">
                <div class="block no-padding">
                    <div data-velocity="-.1" style="background: url('<?= base_url('assets/images/resource/mslider1.jpg')?>') repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div>
                    <!-- PARALLAX BACKGROUND IMAGE -->
                    <div class="container fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="inner-header" style="padding-top: 90px;">
                                </div>
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

           <?php $this->load->view('sidebar');?>
                        <div class="col-md-10 col-sm-11 display-table-cell v-align">
                        <div class="user-dashboard">
                            <div class="row row-sm">
                                <div class="col-xl-12 col-lg-12 col-md-12">

                                    <!-- employer list -->
                                    <?php if($_SESSION['afrebay']['userType']==2){?>
                                   <div class="row">
                                       <div class="col-sm-3">
                                        <a href="<?= base_url('myservice')?>">
                                        <div class="dashboard">
                                           <h4 ><center>Total Services</center></h4>
                                           <h3><center><?= count($get_service);?></center></h3>
                                        </div>
                                    </a>
                                       </div>
                                       <div class="col-sm-3">
                                        <a href="<?= base_url('myjob')?>">
                                        <div class="dashboard">
                                            <h4 ><center>Total Jobs</center></h4>
                                           <h3><center><?= count($get_job);?></center></h3>
                                        </div>
                                    </a>
                                       </div>
                                       <div class="col-sm-3">
                                        <a href="<?= base_url('subscription')?>">
                                        <div class="dashboard">
                                         <h4 ><center>Total Subscription</center></h4>
                                           <h3><center><?= count($get_subscribe);?></center></h3>
                                        </div>
                                    </a>
                                       </div>
                                        <div id="root"></div>

                                   </div>  <!--  end row -->
                               <?php } else if($_SESSION['afrebay']['userType']==1){?>
                                  <!--  end employer list -->

                              <!-- worker list     -->
                            <div  style="background:#fb236a; color:white; padding:10px;">Profile</div>
                            <div class="row">
                               <ul class="list_profile">
                                   <li>
                                    <b>Name :</b> <span style="font-size:16px;"><?php if(!empty($get_user->firstname)){ echo $get_user->firstname.' '.$get_user->lastname;}?></span>
                                </li>
                                   <li>
                                    <b>Address : </b><span style="font-size:16px;"><?php if(!empty($get_user->address)){ echo $get_user->address;}?></span>
                                </li>
                                   <li>
                                    <b>Email : </b><span style="font-size:16px;"><?php if(!empty($get_user->email)){ echo $get_user->email;}?></span>
                                </li>
                                   <li>
                                    <b>Phone : </b><span style="font-size:16px;"><?php if(!empty($get_user->mobile)){ echo $get_user->mobile;}?></span>
                                </li>

                               </ul>
                            </div>
                                 <!-- end row -->
                             <?php } ?>

                               <!--   end worker list -->


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
            <script type="module" >

             import { isSupported, setup } from "./node_modules/@loomhq/loom-sdk/";
             //import { oembed } from "../node_modules/@loomhq/loom-embed";

            const BUTTON_ID = "unique-button";

            async function init() {

              const root = document.getElementById("root");
              root.innerHTML = `<button id="${BUTTON_ID}" class="btn btn-primary">Record</button>`;

              const button = root.querySelector(`#${BUTTON_ID}`);

              if (button==null || !isSupported()) {
                return;
              }

              const { configureButton } = await setup({
                apiKey:"796fefe8-3e98-4284-9f96-1f15f9d461ff"

              });

              configureButton({
              element: button,
              hooks:{
                onInsertClicked:(shareLink)=>{
                  console.log('clicked insert');
                  console.log(shareLink);
                },
                onStart:()=> console.log("start"),
                onCancel:()=> console.log('canceled'),
                onCompleted:()=>console.log('completed'),
              }
             });
            }

             init();

            </script>
