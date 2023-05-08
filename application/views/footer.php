<?php
$get_setting=$this->Crud_model->get_single('setting');
if(!empty($_SESSION['afrebay']['userId'])) {
    $userid=$_SESSION['afrebay']['userId'];
    $get_video=$this->Crud_model->GetData('friends_video','',"subscription_id='".$userid."' and status='0'",'','(video_id)desc','','1');
}
?>
<footer>
    <div class="blocknwe">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 column">
                    <div class="widget">
                        <div class="about_widget">
                            <div class="logo">
                                <a href="javascript:void(0)" title=""><img src="<?=base_url(); ?>uploads/logo/<?= $get_setting->flogo?>" alt=""/></a>
                            </div>
                            <?php if(!empty($get_setting->fabout)) { ?>
                            <span><?= $get_setting->fabout?></span>
                            <?php } else { ?>
                            <span></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 column">
                    <div class="widget">
                        <h3 class="footer-title">Quick Links</h3>
                        <div class="link_widgets">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="<?= base_url('employer-list')?>" title="Employer">Employers</a>
                                    <a href="<?= base_url('workers-list')?>" title="workers">Workers</a>
                                    <a href="<?= base_url('pricing')?>" title="">Pricing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 column">
                    <div class="widget">
                        <h3 class="footer-title">Support Link</h3>
                        <div class="link_widgets">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="<?= base_url('about-us')?>" title="About us">About Us</a>
                                    <a href="<?= base_url('contact-us')?>" title="Contact us">Contact Us</a>
                                    <a href="<?= base_url('privacy-policy')?>" title="privacy policy">Privacy Policy</a>
                                    <a href="<?= base_url('term-and-conditions')?>" title="Term & condition">Terms & Conditions </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 column">
                    <div class="about_widget">
                        <h3 class="footer-title">Contact Us</h3>
                        <span><?= $get_setting->address?></span>
                        <span><?= $get_setting->phone ?></span>
                        <span><?= $get_setting->email ?></span>
                        <div class="social">
                            <a href="javascript:void(0)" title=""><i class="fa fa-facebook"></i></a>
                            <a href="javascript:void(0)" title=""><i class="fa fa-twitter"></i></a>
                            <a href="javascript:void(0)" title=""><i class="fa fa-linkedin"></i></a>
                            <a href="javascript:void(0)" title=""><i class="fa fa-pinterest"></i></a>
                            <a href="javascript:void(0)" title=""><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-line">
        <span><?= $get_setting->copyright?></span>
        <a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
    </div>
</footer>
<input type="hidden" name="base_url" id="base_url" value="<?= base_url()?>">
<?php
if(!empty($_SESSION['afrebay']['userId'])){
    if(!empty($get_video->created_date)){
        $date=date('Y-m-d',strtotime(@$get_video->created_date));
    }
    if(@$_SESSION['afrebay']['userId']==@$get_video->subscription_id && $date==date('Y-m-d') && @$get_video->status=='0'){
?>
<div id="video_modal" class="modal modal-top fade calendar-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body" >
                <h4>Receive video calling </h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"  onclick="receiveVideoCallWindow(<?= @$get_video->publisher_id?>);" >video call</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php }
} ?>
<!--  end modal -->
<script src="<?= base_url('assets/js/jquery.min.js')?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/modernizr.js')?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/script.js')?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js')?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/wow.min.js')?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/slick.min.js')?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/parallax.js')?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/select-chosen.js')?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/jquery.scrollbar.min.js')?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/maps2.js')?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/bootstrap-datepicker.js')?>" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtg6oeRPEkRL9_CE-us3QdvXjupbgG14A&libraries=places&callback=initMap" async defer></script>
<script type="text/javascript" src="<?= base_url('assets/custom_js/validation.js')?>"></script>
<script src="<?= base_url();?>dist/assets/notify/notify.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var sessionMessage = '<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>';
        if(sessionMessage==null || sessionMessage=="" ){ return false;}
        $.notify(sessionMessage,{ position:"top right",className: 'success' });//session msg
    });
    setInterval(function () {
        $('#video_modal').modal('show');
    }, 5000);

    function receiveVideoCallWindow(fid) {
        $('#video_modal').css('display','none');
        var callPath = "<?php echo base_url('livevideo/video/');?>"+fid;
        window.open(callPath, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=250,left=20,width=600,height=450");
    }
</script>
</body>
</html>
