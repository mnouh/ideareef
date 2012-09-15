<?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'user-form',
                    //'focus' => array($model,'firstName'),
                    'enableAjaxValidation' => true,
                    'clientOptions' => array('validateOnSubmit' => true, 'validationDelay' => 100),
                        ));
                ?>
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
<?php $this->endWidget(); ?>