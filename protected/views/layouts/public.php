<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css.css" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico"></link>
        <?php //Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        <?php
         $baseUrl = Yii::app()->baseUrl; 
 $cs = Yii::app()->getClientScript();
 $cs->registerScriptFile($baseUrl.'/js/anylinkcssmenu.js');
 $cs->registerScriptFile($baseUrl.'/js/inner.js');
         
        ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
    
    <body>
<div id="Wrapper">
<div class="holder">
<div id="Header">
    <h1 class="logo"><a href="<?php echo Yii::app()->getBaseUrl(true); ?>"IdeaReef</a></h1>
  <?php
        if(Yii::app()->user->isGuest) {
        ?>
  <div class="floatRight">
    
      <ul>
        
       <li><?php echo CHtml::link('About Us', Yii::app()->request->baseUrl.'/aboutus'); ?></li>
      <li><?php echo CHtml::link('Business', Yii::app()->request->baseUrl.'/companies'); ?></li>
      <li><?php echo CHtml::link('Competitions', Yii::app()->request->baseUrl.'/account/competitions', array('class' => 'last')); ?></li>
      <li><?php echo CHtml::link('Join', Yii::app()->request->baseUrl.'/signup', array('class' => 'special')); ?></li>
      <li><a href="javascript: toggle1()" class="last loginBtn">Login</a></li>
        
    </ul>
    <fieldset id="signin_menu" style="display:none;">
	<div class="arrow"></div>
<?php				 
  echo CHtml::beginForm(array('account/login'));
  ?>
				                 <div style="margin:0;padding:0;display:inline"></div>
				                  <label for="username"><strong>Username or email</strong></label>
						<?php echo CHtml::textField('LoginForm[email]', '',  array ('id' => 'email')); ?>		  
								  <div class="error">* Wrong Username</div>
								   <label for="password"><strong>Password</strong></label>
                                                                   <?php echo CHtml::passwordField('LoginForm[password]', '', array ('id' => 'password')); ?>
								  <div class="error">* Password Mismatch</div>  
					              <p class="remember">
					                <input id="signin_submit" value="Sign in" tabindex="6" type="submit">
					                <input id="remember" name="remember_me" value="1" tabindex="7" type="checkbox">
					                <label for="remember">Remember me</label>
					              </p>
					              
					              <p class="forgot"> <a href="<?php echo $this->createUrl('account/recovery'); ?>">Forgot your password?</a></p>
          <?php echo CHtml::endForm();?>
    </fieldset>
  </div>
  <?php
        }
        else {
      ?>      
        <div class="floatRight">
      <ul>
          <?php if(Yii::app()->user->isBusiness){ ?>
        <li><a href="#"><?php echo CHtml::link('Home', Yii::app()->request->baseUrl.'/business'); ?></a></li>
        <li><a href="#"><?php echo CHtml::link('Pavilion', Yii::app()->request->baseUrl.'/business/pavilion'); ?></a></li>
        <li>
            <?php echo CHtml::link('Treasurey <span>1</span>', Yii::app()->request->baseUrl.'/aboutus', array('class' => 'last')); ?>
            
        </li>
		<li><a rel="submenu1" class="anchorclass settings" href="#">Settings</a>
		
<ul id="submenu1" class="anylinkcss">
<li><a href="#">Account Settings</a></li>
<li><a href="#">Settings Links</a></li>
<li><a href="#" class="last">Other Settings</a></li>

</ul>

		</li>
        <li>
            <?php echo CHtml::link('Log Out', Yii::app()->request->baseUrl.'/logout', array('class' => 'special')); ?> </li>
        
        <?php
          }
          else {
        ?>
        <li><?php echo CHtml::link('Home', Yii::app()->request->baseUrl.'/user'); ?></li>
        <li><?php echo CHtml::link('Profile', Yii::app()->request->baseUrl.'/user/profile'); ?></li>
        <li>
            <?php echo CHtml::link('Treasurey <span>1</span>', Yii::app()->request->baseUrl.'/aboutus', array('class' => 'last')); ?>
            
        </li>
		<li><a rel="submenu1" class="anchorclass settings" href="#">Settings</a>
		
<ul id="submenu1" class="anylinkcss">
<li><a href="#">Account Settings</a></li>
<li><a href="#">Settings Links</a></li>
<li><a href="#" class="last">Other Settings</a></li>

</ul>

		</li>
        <li>
            <?php echo CHtml::link('Log Out', Yii::app()->request->baseUrl.'/logout', array('class' => 'special')); ?> </li>
        
        <?php } ?>
      </ul>
      
    </div>
      <div class="search">
	  <input name="textfield" type="text" class="inputBox">
	</div>
      
            
        <?php    
        }
        
      ?>
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