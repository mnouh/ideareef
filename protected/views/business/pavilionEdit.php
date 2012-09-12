<div id="main-content" class="clearfix">
    <div class="form" id="customForm" class="sync">
        <div id="content-container">
            <h1> Edit Pavilion </h1>
 <?php if(Yii::app()->user->hasFlash('success')): ?>
    
<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('success'); ?>

</div>
    <?php else: ?>
            <?php 
                $form=$this->beginWidget('CActiveForm', array(
                'id'=>'pavilionEdit-form',
                'enableAjaxValidation'=>true,
                'clientOptions'=>array('validateOnSubmit'=>true, 'validationDelay' => 100),   
                ));
            ?>
            
            <h3><?php echo $model -> name; ?> </h3>
            
            <h2><p class="description"><span>You may edit the following fields.</span></p></h2>
            <div>
                <?php
                    echo $form->labelEx($model,'address');
                    echo $form->textField($model,'address', array ('class' => 'sync'));
                    echo $form->error($model,'address'); 
                ?>
            </div>

            <div>    
                <?php 
                    echo $form->labelEx($model,'aboutUs');
                    echo $form->textArea($model,'aboutUs', array ('class' => 'sync', 'style' => 'resize:none'));
                    echo $form->error($model,'aboutUs'); 
                ?>
            </div>

            <div>    
                <?php 
                    echo $form->labelEx($model,'companyHistory');
                    echo $form->textArea($model,'companyHistory', array ('class' => 'sync', 'style' => 'resize:none'));
                    echo $form->error($model,'companyHistory'); 
                ?>
            </div>

            <div>    
                <?php 
                    echo $form->labelEx($model,'companyMission');
                    echo $form->textArea($model,'companyMission', array ('class' => 'sync', 'style' => 'resize:none'));
                    echo $form->error($model,'companyMission'); 
                ?>
            </div>

            <div>
                <?php echo CHtml::submitButton('  Save  ', array('name' => 'Submit', 'class' => 'btn primary'));  ?>
            </div>
            
            <?php $this->endWidget(); ?>    
        </div>
    </div>
</div>
<?php endif; ?>

  <div id="InnerContent">
<div class="floatLeft">
<div class="up">
<div class="links">
   <div class="notification"><a href="#">1</a></div>
<div class="messages"><a href="#">10</a></div>
<div class="pavillion-home"><a href="#">2</a></div>
  <div class="clear"></div>
</div>
<div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/profile-picture.jpg" alt="" width="200" height="200" class="profile">
<div class="type"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/bronze-profile.png"></div>
</div>
<div class="fRight">
  <h2><a href="#">Chris Paquette</a></h2>
  <p class="pav"><a href="#">Binghamton, NY</a></p>
  <ul>
    <li><a href="#">View Profile </a> </li>
    <li><a href="#">View Stats </a>    </li>
  </ul>
  <div class="clear"></div>
  </div>
<div class="clear"></div>
</div>
<div class="mid">
  <div class="contents">
  <div class="fLeft">My Network  Rank:</div>
  <div class="fRight">1/1035</div>
  <div class="clear"></div>
  </div>
  <div class="contents">
  <div class="fLeft">Binghamton Rank:</div>
  <div class="fRight">1/5</div>
  <div class="clear"></div>
  </div>
  <div class="contents last">
  <div class="fLeft">Current Competitions:</div>
  <div class="fRight">10</div>
  <div class="clear"></div>
  </div>
</div>
<div class="box">
<div class="top">
  <h2>Friends <a href="#">(2325)</a> </h2>
  <div class="fR"><a href="#">View All</a></div>
  <div class="clear"></div>
  </div>
  <div class="profiles">
    <ul>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
	  
      
    </ul>
	<div class="clear"></div>
    </div>
</div>
<div class="box">
  <div class="top">
  <h2>My Competitions <a href="#">(4)</a></h2>
  <div class="fR"><a href="#">View All</a></div>
  <div class="clear"></div>
  </div>
  <div class="profiles">
    <ul>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      
    </ul>
    <div class="clear"></div>
  </div>
</div>
<div class="box">
  <div class="top">
  <h2>Badges <a href="#">(10)</a></h2>
  <div class="fR"><a href="#">View All</a></div>
  <div class="clear"></div>
  </div>
  <div class="profiles">
    <ul>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
      
    </ul>
    <div class="clear"></div>
  </div>
</div>
</div>
<div class="fL">
  <div class="topArea">
    <div class="lft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/res.png" alt="" width="200" height="200"></div>
    <div class="mid">
      <p><a href="#" class="post">Tom and Marty's Pub &amp; Restaurant</a><br>
        123 State Street<br>
        Binghamton, NY 13905</p>
      <p><a href="#" class="smBlueBtn">Refer Friends </a></p>
      <div class="clear"></div>
    </div>
    <div class="rht">
      <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/verified.png" alt="" width="32" height="32" class="verified"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/red-badge.png" alt="" width="32" height="32"></p>
      <p class="followers"><span>3501</span> Followers </p>
    </div>
    <div class="clear"></div>
  </div>
  <div class="bottomArea">
    <div class="topmenu">
      <ul>
        <li><a href="#" class="sel">Pavillion</a></li>
        <li><a href="#">Recent Activity</a></li>
        <li><a href="#">Information</a></li>
      </ul>
    </div>
    <div class="topmenuright">
      <ul>
        <li><a href="#">View on Map</a></li>
      </ul>
    </div>
    <div class="inside">
      <div class="boxes">
        <h3>About us  <a href="#" class="smallTxt">(Edit)</a> </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultricies ligula vel orci rhoncus luctus. Duis mattis ornare sodales. Morbi hendrerit ligula quis justo convallis fermentum. Etiam vestibulum euismod libero, vitae cursus neque egestas id. Curabitur lobortis diam eu dui rhoncus sed mattis ipsum mollis. Nam vel ipsum in magna blandit bibendum eu vel lacus. Phasellus nec metus erat, quis adipiscing est. Quisque eleifend eros et lacus laoreet fringilla lobortis dolor condimentum. Quisque tempor dolor sit amet velit imperdiet vitae egestas leo varius.        </p>
        <h3>Company History <a href="#" class="smallTxt">(Edit)</a></h3>
        <p>Aenean vel adipiscing nisl. Sed nibh enim, tempus eu lacinia eu, posuere et eros. Fusce euismod placerat mauris, dignissim convallis sapien adipiscing ac. Vivamus quis leo sem, eget semper orci. Quisque mattis augue vel purus volutpat volutpat. Cras ornare diam vel arcu tristique bibendum. Maecenas ac lorem in tellus blandit feugiat in ut metus. Suspendisse et metus sed leo imperdiet semper id vel mauris. Quisque vestibulum, dolor sed semper egestas, arcu mauris gravida elit, sed egestas sapien velit sit amet dui.</p>
        <h3>Company Vision &amp; Mission <a href="#" class="smallTxt">(Edit)</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel consectetur nunc. Vestibulum fringilla posuere elit imperdiet vehicula. Suspendisse potenti. Proin magna quam, tincidunt eget eleifend vel, commodo quis felis. Integer tincidunt iaculis tellus, vel scelerisque est aliquet eu. Morbi faucibus, ante et pulvinar pellentesque, purus justo ornare mauris, ac feugiat nisi urna ac velit. Curabitur auctor vestibulum fringilla. Maecenas consequat, urna a dictum porta, sapien sapien semper quam, eget commodo eros nisi eu mi. Curabitur ac ipsum nec diam fermentum varius. Donec ligula turpis, adipiscing in malesuada a, ultrices ut nulla.</p>
      </div>
    </div>
  </div>
</div>
<div class="floatRight">
  <div class="box">
  <div class="top">
    <h2>Trending Competions</h2>
  </div>
  <div class="contents">
  <div class="items">
  <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
  <div class="fRight">
    <h2><a href="#">Tom and Marty's</a></h2>
    <p><a href="#">Weekly Short Wheel Competion </a></p>
  </div>
  <div class="clear"></div>
  </div>
  <div class="items">
    <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
    <div class="fRight">
      <h2><a href="#">Tom and Marty's</a></h2>
      <p><a href="#">Weekly Short Wheel Competion </a></p>
    </div>
    <div class="clear"></div>
  </div>
  <div class="items">
    <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
    <div class="fRight">
      <h2><a href="#">Tom and Marty's</a></h2>
      <p><a href="#">Weekly Short Wheel Competion </a></p>
    </div>
    <div class="clear"></div>
  </div>
  <div class="items">
    <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
    <div class="fRight">
      <h2><a href="#">Tom and Marty's</a></h2>
      <p><a href="#">Weekly Short Wheel Competion </a></p>
    </div>
    <div class="clear"></div>
  </div>
  <div class="items last">
    <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
    <div class="fRight">
      <h2><a href="#">Tom and Marty's</a></h2>
      <p><a href="#">Weekly Short Wheel Competion </a></p>
    </div>
    <div class="clear"></div>
  </div>
  </div>
  </div>
  <div class="btm">    Something not working right? <a href="#">Report a Bug</a> 
    <div class="clear"></div>
  </div>
</div>
<div class="clear"></div>
  </div>
