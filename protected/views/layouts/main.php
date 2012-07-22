<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css_public.css" />
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        

	<!-- blueprint CSS framework -->
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<div id="Header">
<div class="holder">
<h2 class="floatLeft"><a href="<?php echo Yii::app()->request->baseUrl; ?>">Insite </a></h2>
<div id="mainmenu">
    <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'About', 'url'=>array('/account/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/account/contact')),
				array('label'=>'Login', 'url'=>array('/account/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/account/logout'), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Change Username', 'url'=>array('/user/changeUsername'), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'User Settings', 'url'=>array('/user/settings'), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Change Password', 'url'=>array('/user/changePassword'), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Signup', 'url'=>array('/account/signup'), 'visible'=>Yii::app()->user->isGuest),
                                array('label'=>'Home', 'url'=>array('/account/index')),
			)
		)); ?>
</div>

<div class="clear"></div>
</div>
</div>
    <div id="space"></div>
    <div id="banner-bg"></div>
    
<div id="HomeContent">    
<div class="holder">    
    
    
    
    
   <!-- mainmenu -->

	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
	)); ?><!-- breadcrumbs -->

	<?php echo $content; ?>
        
<div class="clear"></div>
</div>
</div>
<div id="Footer">
<div class="holder">
<div class="floatLeft">
  <p class="bigTxt"><a href="#">About</a>    &nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;     <a href="#">Blog</a>     &nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;     <a href="#">Contact</a>     &nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;     <a href="<?php echo Yii::app()->request->baseUrl.'/account/features/';?>">Features</a>     &nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;     <a href="#">Privacy</a></p>
  <p>Copyright &copy; 2012, Insite. All Rights Reserved.</p>
  <p><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/twitter.png" alt="" width="32" height="32" border="0" /></a><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/facebook.png" alt="" width="32" height="32" border="0" /></a><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/in.png" alt="" width="32" height="32" border="0" /></a><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gplus.png" alt="" width="50" height="32" border="0" /></a></p>
</div>
<div class="clear"></div>
</div>
</div>
</body>
</html>
