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
<div class="HomeHolder">
<div id="Header">
  <h1 class="logo"><a href="#">IdeaReef</a></h1>
  <div class="floatRight">
    <ul>
        <li><?php echo CHtml::link('About Us', Yii::app()->request->baseUrl.'/aboutus'); ?></li>
      <li><?php echo CHtml::link('Companies', Yii::app()->request->baseUrl.'/companies'); ?></li>
      <li><a href="competitions.html" class="last">Competitions</a></li>
      <li><a href="sign-up.html" class="special">Join</a></li>
      <li><a href="javascript: toggle1()" class="last loginBtn">Login</a></li>
    </ul>
    <fieldset id="signin_menu" style="display:none;">
	<div class="arrow"></div>
				               <form action="" method="post">
				                 <div style="margin:0;padding:0;display:inline"></div>
				                  <label for="username"><strong>Username or email</strong></label>
								  <input id="user_email" name="user[email]" size="30" type="text">
								  <div class="error">* Wrong Username</div>
								   <label for="password"><strong>Password</strong></label>
								  <input id="user_password" name="user[password]" size="30" type="password">
								  <div class="error">* Password Mismatch</div>  
					              <p class="remember">
					                <input id="signin_submit" value="Sign in" tabindex="6" type="submit">
					                <input id="remember" name="remember_me" value="1" tabindex="7" type="checkbox">
					                <label for="remember">Remember me</label>
					              </p>
					              
					              <p class="forgot"> <a href="#">Forgot your password?</a></p>
        </form>							  </fieldset>
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