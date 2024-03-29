<div class="page-wrapper">
  <div class="content container-fluid">

    <div class="page-header">
      <div class="row">
        <div class="col">
          <h3 class="page-title"><?= $heading;?></h3>
        </div>
        <div class="col-auto text-right">
          <a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search">
            <i class="fas fa-filter"></i>
          </a>
          <a href="#" class="btn btn-primary add-button ml-3" data-toggle="modal" data-target="#createModal">
            <i class="fas fa-plus"></i>
          </a>
        </div>
      </div>
    </div>


    <div class="card filter-card" id="filter_inputs">
      <div class="card-body pb-0">
        <form action="#" method="post">
          <div class="row filter-row">
            <div class="col-sm-6 col-md-3">
              <div class="form-group">
                <label>Category</label>
                <select class="form-control select filter_search_data6" name="">
                  <option value="">Select category</option>
                 <?php 
                 if(!empty($get_category)){
                  foreach($get_category as $item){ ?>
                    <option value="<?= $item->id?>"><?= ucfirst($item->category_name)?></option>
               <?php   } } ?>
                  
                </select>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="form-group">
                <label>From Date</label>
                <div class="cal-icon">
                 <!--  datetimepicker -->
                  <input class="form-control  filter_search_data5" type="date" name="from_date" value="">
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="form-group">
                <label>To Date</label>
                <div class="cal-icon">
                  <input class="form-control  filter_search_data7" type="date" name="to_date" value="">
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="form-group">
                <a class="btn btn-primary btn-block" href="<?= admin_url('Category')?>">Refresh</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="table" class="table table-hover table-center mb-0 example_datatable" >
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 
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

    <!--  Add mmodal -->
    <div id="createModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Category</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <div class="card">
          <div class="card-body">

            <form action="#" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label>Category Name <span style="color:red;">*</span> <span id="category_err"></span></label>
                <input class="form-control" type="text" name="category_name" id="category_name">
              </div>
              <div class="form-group">
                <label>Category Image</label>
                <input class="form-control" type="file" name="category_image" id="category_image">
              </div>
              <div class="mt-4">
                <button class="btn btn-primary" type="button" onclick="return create_category();">Add Category</button>
                <a href="#" class="btn btn-link" data-dismiss="modal">Cancel</a>
              </div>
            </form>

          </div>
        </div> 
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-info" onclick="return getvalidation()">Submit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->
      </div>
    </div>
  </div>
  <!--  end add modal -->

    <!--  edit mmodal -->
    <div id="editModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Category</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <div class="card">
          <div class="card-body">

            <form action="#" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label>Category Name <span style="color:red;">*</span> <span id="edit_category_err"></span></label>
                <input class="form-control" type="text" name="category_name" id="edit_category_name">
              </div>
              <div class="form-group">
                <label>Category Image</label>
                <input class="form-control" type="file" name="category_image" id="edit_category_image">
                
              </div>
               <div id="show_img"> </div>
        
              <input type="hidden" name="old_image" id="old_image">
              <input type="hidden" name="id" id="id">
              <div class="mt-4">
                <button class="btn btn-primary" type="button" onclick="return update_category();">Save Changes</button>
                <a href="#" class="btn btn-link" data-dismiss="modal">Cancel</a>
              </div>
            </form>

          </div>
        </div> 
        </div>
      
      </div>
    </div>
  </div>
  <!--  end edit modal -->










             <script>
    var url = '<?= admin_url('Category/ajax_manage_page')?>';
    var actioncolumn=3;
</script>

<script type="text/javascript" src="<?= base_url('dist/assets/custom_js/category.js')?>"></script>