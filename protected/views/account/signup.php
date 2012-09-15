<?php
$this->pageTitle = Yii::app()->name . ' - Sign Up';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="main-content" class="clearfix">
    <div class="form" id="customForm" class="sync">
        <div id="content-container">
            <h2>Sign Up</h2>

            <h3><p class="description"><span class="disclaimer">* Not available in all locations</span>Please sign up with your email address.*</p></h3>
            <?php if (Yii::app()->user->hasFlash('success')): ?>

                <div class="flash-success">
                    <?php echo Yii::app()->user->getFlash('success'); ?>

                </div>
            <?php else: ?>


                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'user-form',
                    //'focus' => array($model,'firstName'),
                    'enableAjaxValidation' => true,
                    'clientOptions' => array('validateOnSubmit' => true, 'validationDelay' => 100),
                        ));
                ?>

                <div id="Content">

                    <h2>Join IdeaReef for Free!</h2>
                    <h4>it's quick and simple  and gives you access to your favourite companies and friends </h4>
                    <div class="bottom">
                        <div class="floatLeft">
                            <div class="inside">
                                <div class="top">

                                    <ul>
                                        <li><a id="myHeader1" href="javascript:showonlyone('newboxes1');">User</a></li>
                                        <li><a id="myHeader2" href="javascript:showonlyone('newboxes2');">Business</a></li>
                                        <li class="other">&larr; Be sure to select the correct account type		      </li>
                                    </ul>

                                    <div class="clear"></div>
                                </div>

                                <div id="newboxes1" class="newboxes">
                                    <div class="bottom">
                                        <div class="boxLeft"> 
                                            <div class="fLeft">

                                                <h3>USER SIGNUP</h3>

                                                <p><strong>First Name </strong> <span class="errorTxt">*</span> </p>
                                                <p>
                                                    <?php echo $form->textField($model, 'firstName', array('class' => 'inputBox')); ?>
                                                    <?php echo $form->error($model, 'firstName'); ?>
                                                </p>

                                                <p><strong>Last Name </strong> <span class="errorTxt">*</span> </p>
                                                <p>
                                                    <?php echo $form->textField($model, 'lastName', array('class' => 'inputBox')); ?>
                                                    <?php echo $form->error($model, 'lastName'); ?>
                                                </p>

                                                <p><strong>Email</strong> <span class="errorTxt">*</span></p>
                                                <p>
                                                    <?php echo $form->textField($model, 'email', array('class' => 'inputBox')); ?>
                                                    <?php echo $form->error($model, 'email'); ?>
                                                </p>

                                                <p><strong>Password</strong> <span class="errorTxt">*</span></p>
                                                <p>
                                                    <?php echo $form->textField($model, 'password', array('class' => 'inputBox')); ?>
                                                    <?php echo $form->error($model, 'password'); ?>
                                                </p>
                                                <p><strong>Zip Code </strong><span class="errorTxt">*</span></p>
                                                <p>
                                                    <?php echo $form->textField($model, 'zipcode', array('class' => 'inputBox')); ?>
                                                    <?php echo $form->error($model, 'zipcode'); ?>
                                                </p>
                                                <p>
                                                    <input name="Submit2" type="submit" class="blueButton" value="Join!">
                                                </p>
                                            </div>
                                            <div class="fRight">
                                                <p>space for more things </p>
                                            </div>
                                            <div class="clear"></div>
                                            <div>
                                                <p>By Clicking the &quot;Join!&quot;, you agree to our  <a href="#">privacy policy</a> </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>

                                <div id="newboxes2" class="newboxes" style="display:none;">
                                    <div class="bottom">
                                        <div class="boxLeft"> 
                                            <div class="fLeft">

                                                <h3>BUSINESS SIGNUP</h3>

                                                <p><strong>Company Name </strong>  <span class="errorTxt">*</span> </p>
                                                <p>
                                                    <?php echo $form->textField($model, 'name', array('class' => 'inputBox')); ?>
                                                    <?php echo $form->error($model, 'name'); ?>
                                                </p>
                                                <p><strong>Email</strong>  <span class="errorTxt">*</span></p>
                                                <p>
                                                    <?php echo $form->textField($model, 'email', array('class' => 'inputBox')); ?>
                                                    <?php echo $form->error($model, 'email'); ?>
                                                </p>
                                                <p><strong>Password</strong>  <span class="errorTxt">*</span></p>
                                                <p>
                                                    <?php echo $form->textField($model, 'password', array('class' => 'inputBox')); ?>
                                                    <?php echo $form->error($model, 'password'); ?>
                                                </p>
                                                <p><strong>Type of Business </strong> <span class="errorTxt">*</span></p>
                                                <p>
                                                    <?php $list = CHtml::listData($businessType, 'id', 'name'); ?>
                                                    <?php echo $form->dropDownList($model, 'businessType', $list, array('empty' => 'Select Business Type')); ?>
                                                    <?php echo $form->error($model, 'businessType'); ?>
                                                </p>
                                                <p><strong>Zip Code </strong><span class="errorTxt">*</span></p>
                                                <p>
                                                    <?php echo $form->textField($model, 'zipcode', array('class' => 'inputBox')); ?>
                                                    <?php echo $form->error($model, 'zipcode'); ?>
                                                </p>
                                                <p>
                                                    <input name="Submit2" type="submit" class="blueButton" value="Join!">
                                                </p>
                                            </div>
                                            <div class="fRight">
                                                <p>space for more things </p>
                                            </div>
                                            <div class="clear"></div>
                                            <div>
                                                <p>By Clicking the &quot;Join!&quot;, you agree to our  <a href="#">privacy policy</a> </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
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

                <?php $this->endWidget(); ?>
            <?php endif; ?>
        </div>
    </div>
</div><!-- form -->




