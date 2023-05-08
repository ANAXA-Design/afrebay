<?php 
 if(!empty($get_banner->image) && file_exists('uploads/banner/'.$get_banner->image)){
     $banner_img=base_url("uploads/banner/".$get_banner->image);
            } else{
       $banner_img=base_url("assets/images/resource/mslider1.jpg");
        } ?>
<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url('<?= $banner_img ?>') repeat scroll 50% 422.28px transparent;"
            class="parallax scrolly-invisible no-parallax"></div>
        <!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Pricing</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block Pricing_Data">
        <div data-velocity="-.2"
            style="background: url('<?= base_url('assets/images/resource/parallax5.jpg')?>') repeat scroll 50% 422.28px transparent;"
            class="parallax scrolly-invisible"></div>
        <!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>Become A AfreBay Partner Today!</h2>
                        <span>One of our jobs has some kind of flexibility option - such as telecommuting, a part-time
                            schedule or a flexible or flextime schedule.</span>
                    </div>
                    <!-- Heading -->
                    <div class="plans-sec">
                        <div class="row">
                            <?php if(!empty($get_subscription)){
                                   foreach ($get_subscription as $key) {
                                   $get_service=$this->Crud_model->GetData('subscription_service','',"subscription_id='".$key->id."'");

                                   ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="pricetable style2">
                                    <div class="Price_Shadow"></div>
                                    <div class="Price_Tag">
                                        <div class="Price_Tag_data">
                                            <h2><?= number_format($key->subscription_amount)?>$</h2>
                                            <span><?= $key->subscription_duration?> Month</span>
                                        </div>
                                    </div>
                                    <div class="pricetable-head">
                                        <img src="https://cdn-icons-png.flaticon.com/512/5673/5673647.png">
                                        <h3><?= ucfirst($key->subscription_name)?></h3>
                                    </div>
                                    <!--  <input type="text" name="subscription_id" id="subscription_id<?= $key->id; ?>" value="<?= $key->id; ?>"> -->
                                    <input type="hidden" name="amount" id="amount<?= $key->id; ?>"
                                        value="<?= $key->subscription_amount; ?>">

                                    <!-- Price Table -->
                                    <ul class="Price_Details">
                                        <?php if(!empty($get_service)){ foreach($get_service as $row){?>
                                        <li><?= ucfirst($row->service)?></li>
                                        <?php } }?>
                                    </ul>
                                    <?php
                                               if(!empty($_SESSION['gigwork']['userType'])){
                                               if($_SESSION['gigwork']['userType']=='2'){?>
                                    <!-- <a href="#" onclick="return buy_subscription(<?= $key->id; ?>);" >Buy</a>  -->
                                    <a class="btn btn-info" href="<?= base_url('stripe/'.base64_encode($key->id))?>">Buy</a>
                                    <?php } else{?>
                                    <a class="btn btn-info" href="#" style="pointer-events: none; cursor: default;">Buy</a>
                                    <?php } } else{?>
                                    <a class="btn btn-info" href="<?= base_url('login')?>">Buy</a>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php }} ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script type="text/javascript">
    function buy_subscription(id) {

        var base_url = $("#base_url").val();
        var subscription_id = id;
        var amount = $("#amount" + id).val();
        //alert(amount); return false;
        $.ajax({
            url: base_url + 'user/dashboard/buy_subscription',
            type: 'POST',
            data: {
                subscription_id: subscription_id,
                amount: amount,
            },
            success: function (returndata) {
                if (returndata == 1) {

                    location.reload();
                }


            }
        });
    }
</script>