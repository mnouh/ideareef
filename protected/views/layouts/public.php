<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css.css" />
        <?php //Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        <?php
         $baseUrl = Yii::app()->baseUrl; 
 $cs = Yii::app()->getClientScript();
 $cs->registerScriptFile($baseUrl.'/js/jquery.tools.min.js');
 $cs->registerScriptFile($baseUrl.'/js/home.js');
 $cs->registerScriptFile($baseUrl.'/js/social.js');
        ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<div id="Wrapper">
<div class="holder">
<div id="Header">
  <h1 class="logo"><a href="<?php echo Yii::app()->request->baseUrl; ?>">IdeaReef</a></h1>
  <?php
  if(Yii::app()->user->isGuest):
  echo CHtml::beginForm(array('account/login'));
  ?>
  <div class="floatRight">
  <div class="topArea">
  <div class="fL">Email</div>
  <div class="fL">Password</div>
  <div class="clear"></div>
  </div>
  <div class="inputArea">
  <div class="fL">
      <?php echo CHtml::textField('LoginForm[email]', '',  array ('id' => 'email','class' => 'inputBox')); ?>
  </div>
  <div class="fL">
    <?php echo CHtml::passwordField('LoginForm[password]', '', array ('id' => 'password', 'class' => 'inputBox')); ?>
  </div>
      <?php echo CHtml::submitButton('Login', array('name' => 'Submit', 'class' => 'btn'));  ?>
  <div class="clear"></div>
  </div>
  <div class="linksArea">
  <div class="fL">
<input name="remember" type="checkbox" class="checkbox" id="field_remember" tabindex="10" value="T" />
    <label id="label_remember" for="field_remember">Remember me </label>
  </div>
  <div class="fL"><a href="#">Forgot password</a> </div>
  <div class="clear"></div>
  </div>
  </div>
  <?php echo CHtml::endForm();?>
  <?php else:?>
  <div class="floatRight">
  <div class="topArea">
  <div class="fL"><a href="<?php echo Yii::app()->createUrl('user/changeUsername')?>">Change Username</a></div>
  <div class="fL"><a href="<?php echo Yii::app()->createUrl('user/settings')?>">Account Settings</a></div>
  <div class="fL"><a href="<?php echo Yii::app()->createUrl('user/changePassword')?>">Change Password</a></div>
  <div class="fL"><a href="<?php echo Yii::app()->createUrl('business/pavilionEdit')?>">Edit Pavilion</a></div>
  <div class="fL"><a href="<?php echo Yii::app()->createUrl('competition/create')?>">Create Competition</a></div>
  <div class="fL"><a href="<?php echo Yii::app()->createUrl('account/logout')?>">Logout</a></div>
  
  <div class="clear"></div>
  </div>
  
  <div class="linksArea">
  <div class="fL">
  </div>
  <div class="clear"></div>
  </div>
  </div>
  
 
  <?php endif; ?>
  
  
  <div class="clear"></div>
</div>
<div id="Banner">
<div class="floatLeft">
  <h2>Connect - Complete - Win</h2>
  <ul>
    <li><span>Join your friends from home and school in creating new ideas for your favorite businesses</span></li>
    <li><span>Win money, discounts, coupons and even jobs and internships</span></li>
    <li class="last"><span>Earn money for referring your friends to go to your favorite jobs</span></li>
  </ul>
  <div class="bottom"><a href="#"><img src="images/sign-up-for-ideareef.png" alt="" width="297" height="62"  /></a></div>
</div>
<div class="floatRight"><img src="images/banner-video.png" alt="" width="313" height="240" /></div>
<div class="rightBottom">
<div class="fL"><img src="images/like-button.png" alt="" width="44" height="62" /></div>
<div class="fR"><strong>Companies:</strong> Use competitions and our 
  viral referral system to get new ideas and
  market your business. <a href="#">Learn More</a></div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<?php echo $content; ?>
</div>
</div>
<div id="Footer">
<div class="holder">
<div class="floatLeft">Copyright &copy; 2012 Idea Reef Inc. All Rights Reserved.</div>
<div class="floatRight"><a href="#">Help</a>  |  <a href="#">Tell us to come!</a>  |  <a href="#">Partners</a>  |  <a href="#">About Us</a>  |  <a href="#">Contact Us</a></div>
<div class="clear"></div>
</div>
</div>
</body>
</html>