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
                                   <li class="breadcrumb-item active" aria-current="page">My Education</li>
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
                                  <div class="col-xl-12 col-lg-12 col-md-12" style="margin-bottom: 10px;">
                                   <a href="<?php echo base_url('add-education')?>" class="btn btn-primary" style="float:right;">Add</a>
                                  </div>
                                   <div class="col-xl-12 col-lg-12 col-md-12">

                                       <div class="cardak">

                                           <table class="table table-bordered">
                                             <thead>
                                               <tr>
                                                 <th scope="col">#</th>
                                                 <th scope="col">Education</th>
                                                 <th scope="col">Passig year </th>
                                                 <th scope="col">Department</th>
                                                 <th scope="col">Action</th>
                                               </tr>
                                             </thead>
                                             <tbody>
                                               <?php  if(!empty($education_list)) {
                                                 $i=1;
                                                 foreach ($education_list as $row) {
                                                  
                                                  ?>
                                               <tr>
                                                 <th scope="row"><?= $i; ?></th>
                                                 <td><?= ucfirst($row->education); ?></td>
                                                 <td><?= $row->passing_of_year; ?></td>
                                                 <td><?= $row->department; ?></td>
                                                 <td>
                                                   <!-- <a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a> -->
                                                   <a href="<?= base_url('update-education/'.base64_encode($row->id));?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                   <a href="<?= base_url('user/Dashboard/delete_education/'.$row->id);?>" onclick="if(confirm('Are you sure you want to Delete?')) commentDelete(1); return false"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                 </td>
                                               </tr>
                                             <?php $i++;}  }else{?>
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
              
           </section>
