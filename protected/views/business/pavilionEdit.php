<script type="text/javascript" src="../lib/jquery.editinplace.js"></script>


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
                <div class="type"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/platinum-profile.png" width="60" height="60"></div>
            </div>
            <div class="fRight">
                <h2><a href="#">Chris Paquette</a></h2>
                <p class="pav"><a href="#">Binghamton, NY</a></p>

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
                <h2>Open Competitions <a href="#">(4)</a></h2>
                <div class="fR"><a href="#">View All</a></div>
                <div class="clear"></div>
            </div>
            <div class="contents">
                <?php
                $this->widget('zii.widgets.ClistView', array(
                    'dataProvider' => $dataProvider,
                    'itemView' => '_competitionSide',
                    'sortableAttributes' => array(
                        'endDate',
                        'startDate'
                        )));
                ?>
            </div>
        </div>

    </div>
    <div class="fL">
        <div class="topArea">
            <div class="lft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/res.png" alt="" width="200" height="200"></div>
            <div class="mid"> 
                <p><a href="#" class="post"><?php echo $model->name; ?></a><br>
                    123 State Street<br>
                    Binghamton, NY 13905</p>
                <p><a href="#" class="smBlueBtn">Join Reef </a></p>
                <div class="clear"></div>
            </div>
            <div class="rht">
                <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/verified.png" alt="" width="32" height="32" class="verified"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/red-badge.png" alt="" width="32" height="32"></p>
                <p class="followers"><span>3501</span>
                    Followers </p>
            </div>

            <div class="clear"></div>
        </div>
        <div class="bottomArea">
            <div class="topmenu">
                <ul>


                    <li>
                        <?php
                        echo CHtml::ajaxLink(
                                'Profile', array('business/profile', 'id' => $model->id), array('success' => 'js:function(data) {
                                                    jQuery("div#currentTab").html(data);}',
                            //'update'=>'#successMessage',
                            //'beforeSend' => 'function() {alert("testing");}',
                            //'validated' => 'function() {$("div#load").removeClass("loading");}',
                            //'complete' => 'function() {$("div#load").removeClass("loading");}',
                            'type' => 'POST'
                                )
                        );
                        ?>
                    </li>

                    <li>
                        <?php
                        echo CHtml::ajaxLink(
                                'Recent Activity', array('business/recentActivity'), array('success' => 'js:function(data) {
                                                    jQuery("div#currentTab").html(data);}',
                            //'update'=>'#successMessage',
                            //'beforeSend' => 'function() {alert("testing");}',
                            //'validated' => 'function() {$("div#load").removeClass("loading");}',
                            //'complete' => 'function() {$("div#load").removeClass("loading");}',
                            'type' => 'POST'
                                )
                        );
                        ?>
                    </li>
                    
                    <li>
                        <?php
                        echo CHtml::ajaxLink(
                                'Information', array('business/information', 'id' => $model->id), array('success' => 'js:function(data) {
                                                    jQuery("div#currentTab").html(data);}',
                            //'update'=>'#successMessage',
                            //'beforeSend' => 'function() {alert("testing");}',
                            //'validated' => 'function() {$("div#load").removeClass("loading");}',
                            //'complete' => 'function() {$("div#load").removeClass("loading");}',
                            'type' => 'POST'
                                )
                        );
                        ?>
                    </li>
                    
                    <li>
                        <?php
                        echo CHtml::ajaxLink(
                                'Statistics', array('business/statistics', 'id' => $model->id), array('success' => 'js:function(data) {
                                                    jQuery("div#currentTab").html(data);}',
                            //'update'=>'#successMessage',
                            //'beforeSend' => 'function() {alert("testing");}',
                            //'validated' => 'function() {$("div#load").removeClass("loading");}',
                            //'complete' => 'function() {$("div#load").removeClass("loading");}',
                            'type' => 'POST'
                                )
                        );
                        ?>
                    </li>
                    
                    
                </ul>
            </div>
   
            <div id="currentTab">
            <?php $this->renderPartial('_profile', array('model' => $model, 'dataProvider' => $dataProvider), false, true); ?>    
               
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
