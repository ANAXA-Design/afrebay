<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="row">
			<div class="col-xl-8 offset-xl-2">
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title"><?php echo $heading?></h3>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
            <?php if($button=='Update') { ?>
            <form  action="<?php echo admin_url('subscription/update_action'); ?>" method="post" enctype="multipart/form-data">
            <?php } else { ?>
            <form class="forms-sample" action="<?php echo admin_url('Subscription/create_action'); ?>" method="post" enctype="multipart/form-data">
            <?php } ?>
              <div class="form-group">
                <label>Subscription Name</label>
                <input class="form-control" type="text" placeholder="Free Trial" name="subscription_name" value="<?= $subscription_name;  ?>">
              </div>
              <div class="form-group">
                <label>Subscription Amount</label>
                <input class="form-control" type="text" name="subscription_amount" value="<?= $subscription_amount;  ?>">
              </div>
              <div class="form-group">
                <label>Subscription Durations</label>
                <input class="form-control" type="text" name="subscription_duration" value="<?= $subscription_duration;  ?>">
              </div>
              <div class="form-group">
                <label>Subscription Service <span> </span></label>
                <div class="panel panel-default">
                  <div class="panel-body">
                    <table class="table jobsites" id="purchaseTableclone1">
                      <tr class="color">
                        <th>Service <span style="color:red;">*</span></th>
                        <th><button type="button" class="btn btn-info" onclick="add_row()" >Add Service</button> </th>
                      </tr>
                      <tbody id="clonetable_feedback1">
                      <?php if($button == 'Create') { ?>
                      <tr>
                        <td><input type="text" name="service[]" id="service1" class="form-control" placeholder="Subscription Service"></td>
                        <td><a href="#" title="Delete" class="text-danger" onclick="return remove(this)">X</a></td>
                      </tr>
                      <?php } else { 
                        if(!empty($sub_offer)){
                        $rows=1;
                        foreach ($sub_offer as $key) { ?>
                      <tr>
                        <td><input type="text" name="service[]" id="service<?= $rows; ?>" class="form-control" placeholder="Subscription Service" value="<?= $key->service; ?>"></td>
                        <td><a href="#" title="Delete" class="text-danger" onclick="return remove(this)">X</a></td>
                      </tr>
                      <?php } } }?>
                      </tbody>  
                    </table>    
                  </div>
                </div>
              </div>
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <input type="hidden" name="button" value="<?php echo $button; ?>">
              <div class="mt-4">
                <button class="btn btn-primary" type="submit">Submit</button>
                <a href="<?= admin_url('subscription')?>" class="btn btn-link">Cancel</a>
              </div>
            </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script >
function add_row() {
  var y=document.getElementById('clonetable_feedback1');
  var new_row = y.rows[0].cloneNode(true);
  var len = y.rows.length; 
  new_number=Math.round(Math.exp(Math.random()*Math.log(10000000-0+1)))+0;
  var inp3 = new_row.cells[0].getElementsByTagName('input')[0];
  inp3.value = '';
  inp3.id = 'service'+(len+1);
  var submit_btn =$('#submit').val();
  y.appendChild(new_row);
}

function remove(row) {
  var y=document.getElementById('purchaseTableclone1');
  var len = y.rows.length;
  if(len>2) {
    var i= (len-1);
    document.getElementById('purchaseTableclone1').deleteRow(i);
  }
} 
</script>