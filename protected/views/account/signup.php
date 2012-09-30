<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php
$this->pageTitle = Yii::app()->name . ' - Sign Up';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

            <?php if (Yii::app()->user->hasFlash('success')): ?>

                <div class="flash-success">
                    <?php echo Yii::app()->user->getFlash('success'); ?>

                </div>
            <?php else: ?>



                <div id="Content">

                    <h2>Join IdeaReef for Free!</h2>
                    <h4>it's quick and simple  and gives you access to your favourite companies and friends </h4>
                    <div class="bottom">
                        <div class="floatLeft">
                            <div class="inside">
                                <div class="top">

                                    <ul>
                                        <li><?php 
              echo CHtml::ajaxLink(
                                        'User',
                                        array('user/signup'),
                                        array('success'=>'js:function(data) {
                                                    jQuery("div#form-data").html(data);}',
                                                //'update'=>'#successMessage',
                                                //'beforeSend' => 'function() {alert("testing");}',
                                                //'validated' => 'function() {$("div#load").removeClass("loading");}',
                                                //'complete' => 'function() {$("div#load").removeClass("loading");}',
                                                'type' => 'POST'
                                        )
                                );
      
      ?></li>
                                        <li>
                                            
                                            <?php 
              echo CHtml::ajaxLink(
                                        'Business',
                                        array('business/signup'),
                                        array('success'=>'js:function(data) {
                                                    jQuery("div#form-data").html(data);}',
                                                //'update'=>'#successMessage',
                                                //'beforeSend' => 'function() {alert("testing");}',
                                                //'validated' => 'function() {$("div#load").removeClass("loading");}',
                                                //'complete' => 'function() {$("div#load").removeClass("loading");}',
                                                'type' => 'POST'
                                        )
                                );
      
      ?>
                                            
                                            
                                            
                                            
                                    </li>
                                        <li class="other">&larr; Be sure to select the correct account type		      </li>
                                    </ul>

                                    <div class="clear"></div>
                                </div>

                                
                                <div id="form-data">
                                <?php
                                $this->renderPartial('/user/signup', array('model' => $model), false, false);
                                ?>
                                </div>
                               
                            </div>
                        </div>
                        <div class="floatRight">
                            <div>
                                <div class="testiText">
                                    With IdeaReef I  earned money by referring my friends to check out my favorite bar in downtown Binghamton</div>
                                <div class="testiname"> <strong>Chris</strong>, BU Senior '12</div>
                            </div>
                            <div>
                                <p><a href="#" class="smBlueBtn">Sign up for ideareef </a>      </p>
                                <p class="txtCenter"><a href="#">Learn how it works?  </a></p>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

            <?php endif; ?>





