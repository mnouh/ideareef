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
<div class="HomeHolder">
<div id="Header">
  <h1 class="logo"><a href="<?php echo Yii::app()->request->baseUrl; ?>"IdeaReef</a></h1>
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