<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css.css" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico"></link>
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        
        <?php
        /*
         $baseUrl = Yii::app()->baseUrl; 
 $cs = Yii::app()->getClientScript();
 $cs->registerScriptFile($baseUrl.'/js/jquery.tools.min.js');
 $cs->registerScriptFile($baseUrl.'/js/anylinkcssmenu.js');
 $cs->registerScriptFile($baseUrl.'/js/inner.js');
         * 
         */
        ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
    
    <body>
<div id="Wrapper">
<div class="holder">
  <div id="Header">
    <h1 class="logo"><a href="<?php echo Yii::app()->getBaseUrl(true); ?>">IdeaReef</a></h1>
    
    <div class="clear"></div>
  </div>

    
    
<?php echo $content; ?>
</div>
</div>
</body>
</html>