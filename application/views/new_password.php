 <?php 
    $seg2= $this->uri->segment(2);
    $email=base64_decode($seg2);
    ?>
 <section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url('<?= base_url("assets/images/resource/mslider1.jpg")?>') repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div>
        <!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Reset Password</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="block remove-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="account-popup-area signin-popup-box static">
                        <div class="account-popup">
                            <h3>Reset Password</h3>
                            
                            <span class="text-success f-20"><?=$this->session->flashdata('success');  ?></span>
                            <span class="text-danger f-20"><?=$this->session->flashdata('error');  ?></span>
                            <form action="#" method="post">
                                <input type="hidden" id="email" name="email" value="<?= $email?>">
                                <div class="error text-left">New Password</div>
                                <div class="cfield">
                                  
                                    <input type="password" placeholder="********" name="password" id="new_password"/>
                                    <i class="la la-key"></i>
                                </div>
                                <div class="error text-left" id="err_password"></div>
                                <div class="error text-left">Confirm Password</div>
                                 <div class="cfield">
                                    
                                    <input type="password" placeholder="********" name="confirm_password" id="confirm_password" />
                                    <i class="la la-key"></i>
                                </div>
                                <div class="error text-left" id="err_confirmpassword"></div>
                                <span id="matchPass2"></span>
                                
                                <button type="button" onclick="newpassword()">Submit</button>
                            </form>
                           
                        </div>
                    </div>
                    <!-- LOGIN POPUP -->
                </div>
            </div>
        </div>
    </div>
</section>


            <script>
                function newpassword()
                {
                  
        var base_url=$('#base_url').val();
        var password=$("#new_password").val();
        var cpass=$("#confirm_password").val();
        var email=$("#email").val();

         if(password=="")
         {
                 $("#err_password").fadeIn().html("Please enter password").css('color','red');
                 setTimeout(function(){$("#err_password").html("&nbsp;");},3000);
                 $("#new_password").focus();
                 return false;
         }
          if(password.length<6)
{
  $('#err_password').fadeIn().html('please enter at least 6 character').css('color','red');
    setTimeout(function(){$("#err_password").html("&nbsp;");},3000);
    $("#new_password").focus();
    return false;
}
        
            if(cpass=="")
         {
                 $("#err_confirmpassword").fadeIn().html("Please enter Confirm password").css('color','red');
                 setTimeout(function(){$("#err_confirmpassword").html("&nbsp;");},3000);
                 $("#confirm_password").focus();
                 return false;
         }
             if(password!=cpass){
             $('#matchPass2').html('Password does not match').css('color','red');
             return null
         }
         $.ajax({
             type:'post',
             cache:false,
             url:base_url+'user/login/setnew_password',
             data:{
                 email:email,
                 password:password,
                 cpass:cpass,
             },
             success:function(result)
             {
                 //alert(result); return false;
                     if(result==1)
                     {
                        
                         window.location.href=base_url+'home';
                     }
                     else{
                         location.reload();
                     }
                    
             }

         }); 
                }
            </script>