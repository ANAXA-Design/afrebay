

<div class="page-wrapper">
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col-12">
               <h3 class="page-title">Welcome <?= $heading?></h3>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-3 col-sm-6 col-12">
           <a href="<?= admin_url('users')?>">
            <div class="card">
               <div class="card-body">
                  <div class="dash-widget-header">
                     <span class="dash-widget-icon bg-primary">
                     <i class="far fa-user"></i>
                     </span>
                     <div class="dash-widget-info">
                        <h3><?= count($total_user)?></h3>
                        <h6 class="text-muted">Users</h6>
                     </div>
                  </div>
               </div>
            </div>
          </a>
         </div>
         <div class="col-xl-3 col-sm-6 col-12">
           <a href="<?= admin_url('category')?>">
            <div class="card">
               <div class="card-body">
                  <div class="dash-widget-header">
                     <span class="dash-widget-icon bg-primary">
                     <i class="fas fa-user-shield"></i>
                     </span>
                     <div class="dash-widget-info">
                        <h3><?= count($total_category)?></h3>
                        <h6 class="text-muted">Category</h6>
                     </div>
                  </div>
               </div>
            </div>
          </a>
         </div>
         <div class="col-xl-3 col-sm-6 col-12">
           <a href="<?= admin_url('services')?>">
            <div class="card">
               <div class="card-body">
                  <div class="dash-widget-header">
                     <span class="dash-widget-icon bg-primary">
                     <i class="fas fa-qrcode"></i>
                     </span>
                     <div class="dash-widget-info">
                        <h3><?= count($total_service)?></h3>
                        <h6 class="text-muted">Services</h6>
                     </div>
                  </div>
               </div>
            </div>
          </a>
         </div>
         <div class="col-xl-3 col-sm-6 col-12">
           <a href="<?= admin_url('subscription')?>">
            <div class="card">
               <div class="card-body">
                  <div class="dash-widget-header">
                     <span class="dash-widget-icon bg-primary">
                     <i class="far fa-credit-card"></i>
                     </span>
                     <div class="dash-widget-info">
                        <h3><?= count($total_subscription)?></h3>
                        <h6 class="text-muted">Subscription</h6>
                     </div>
                  </div>
               </div>
            </div>
          </a>
         </div>
      </div>
      <div class="row">

      </div>
   </div>
</div>
</div>
