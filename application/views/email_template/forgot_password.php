<?php $settings=$this->Crud_model->get_single('setting'); ?>
<!DOCTYPE html>
<html>
<head>
	   <title>Forgot-password</title>
	   <meta charset="utf-8">
	  <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
      
</head>
<body>
	<div style="width:600px;margin: 0 auto;background: #fff;font-family: 'Poppins', sans-serif; border: 1px solid #e6e6e6;">

		<div style="padding: 30px 30px 15px 30px;box-sizing: border-box;"> 

			 <img src="<?= base_url('assets/images/gig-work01.jpg')?>" style="width:100px;float: right;margin-top: 0 auto;">
			<!-- <h2 style="width:100px;float: right;margin-top: 0 auto;">TheCognize</h2> -->
			<h3 style="padding-top:40px; line-height: 30px;">Greeting from<span style="font-weight: 900;font-size: 35px;color: #F44C0D; display: block;">GreatGigz</span></h3>
			<p style="font-size:24px;">Hello User</p>
			<p style="font-size:24px;">Trouble signing in? Resetting your password is easy.</p>
			<p style="font-size:24px;">Just press the button below and follow the instructions.</p>
			<p style="text-align: center;">
			<a href="<?= base_url('new-password/'.base64_encode($email))?>" style="height: 50px;
					    width: 300px;
					    background: rgb(253,179,2);
						background: linear-gradient(0deg, rgba(253,179,2,1) 0%, rgba(244,77,9,1) 100%);
					    text-align: center;
					    font-size: 18px;
					    color: #fff;
					    border-radius: 12px;
					    display: inline-block;
					    line-height: 50px;
					    text-decoration: none;
					    text-transform: uppercase;
					    font-weight: 600;">CLICK HERE TO RESET</a></p>
           <!--  <li style="list-style: none; font-size:24px;">Password <a href="#" style="text-decoration: none;"><?= $password;?></a>
            </li> -->
    	<p style="font-size:20px;">Thank you!</p>
    	<li style="font-size:20px;list-style: none;">sincerly</li>
    	<li style="list-style: none;"><b>Team GreatGigz Pro</b></li>

    <!--	<ul style="list-style: none;padding: 0;box-sizing: border-box; margin: 4px 0;"> -->


    <!--		<li style="vertical-align: top;display: inline-block;"><b style="font-size:10px;margin-bottom: 10px;">Download the App on</b></li>-->
    <!--			<li style="display: inline-block;"><a href="#"><img src="<?= base_url('uploads/logos/playstore.png')?>" height="35px"></a></li>-->
    <!--				<li style="display: inline-block;"><a href="#"><img src="<?=base_url('uploads/logos/appstore.png')?>" style="height:35px;"></a></li>-->
    <!--</ul>-->
    	<li style="list-style:none;"><b>visit us:</b> <span><?= @$settings->address?></span></li>
    	<!-- <li style="list-style:none;"><b>call us:</b> <span></span></li> -->
    	<li style="list-style:none"><b>Email us:</b> <span><?=@$settings->email?></span></li>
    	
    	
		</div>
           <footer style="height:25px;width:100%;background: #F44C0D;"><span style="padding-left: 10px;"> copyright &copy; <?=date('Y')?> GreatGigz right reserverd</span></footer>
	</div>
</body>
</html>