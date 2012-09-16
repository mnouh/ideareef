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
 $cs->registerScriptFile($baseUrl.'/js/anylinkcssmenu.js');
 $cs->registerScriptFile($baseUrl.'/js/inner.js');
        ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
    
    <body>
<div id="Wrapper">
<div class="holder">
  <div id="Header">
    <h1 class="logo"><a href="<?php echo Yii::app()->request->baseUrl; ?>">IdeaReef</a></h1>
    <div class="floatRight">
      <ul>
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
      </ul>
      
    </div>
	<div class="search">
	  <input name="textfield" type="text" class="inputBox">
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