<body style="background-color:#D8F2F8;">
<div style="font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:18px; border:9px solid #0086AD;-moz-border-radius:9px; -webkit-border-radius:9px; width:600px; margin:auto; background:#fff; position:relative;">
<div style="padding:10px;">
<div style="text-align:center !important; padding:10px 0px;"><img src="http://www.ideareef.com/images/logo.png" alt="" width="261" height="54" /></div>
<div style="background-color:#BD1E26; color:#fff; font-family:Georgia, 'Times New Roman', Times, serif; font-size:24px; line-height:28px; padding:10px; text-align:center !important; -moz-border-radius:5px; -webkit-border-radius:5px; position:absolute; top:91px; left:-20px; width:620px;">Account Recovery</div>
<div style="padding:15px; padding-top:60px; padding-bottom:0px;">
  
     <h2><?php echo $model->name;?>,</h2>
    
     <p>
         Changing your password is simple. Please use the link within 24 hours.
        
         <a href="http://www.beta.ideareef.com/account/recover/?memberId=<?php echo $model->id; ?>&status=business&tok=<?php echo $model->verifyCode;?>">http://www.ideareef.com/account/recover/?memberId=<?php echo $model->id; ?>&tok=<?php echo $model->verifyCode;?></a>
     </p>
    
    
    
  <p style="margin-bottom:0px;">Thank You,<br>The IdeaReef Team</p>
  </div>


</div>
<div style="text-align:center; padding:10px; padding-top:20px; background:#0086AD; color:#fff;"><strong>Competitions</strong>: 001-100-5000 | <strong>Support:</strong> 005-666-6789<br />
  Otherwise why not email&nbsp;<a href="mailto:support@ideareef.com" style="color:#fff; font-weight:bold;">support@ideareef.com</a><br />
  Copyright 2012 &copy; IdeaReef.com  </div>
</div>
</body>