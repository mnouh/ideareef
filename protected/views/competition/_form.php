<script type="text/javascript">
    $(document).ready(function(){
        $('textarea').autosize();
        //Checks if the Monetary Award option is selected
        var isMonetary = $('#Competition_awardMonetary');  
        if(isMonetary.is(':checked')) {
            
                var amount = $('#Competition_amount');
                var amountLabel = $('#Competition_amountLabel');
                
                amountLabel.css('visibility', 'visible');
                amount.css('visibility', 'visible');  
            
        }
        
        $('#Competition_awardMonetary').click(function(){

            var thisCheck = $(this);
            if(thisCheck.is(':checked')){
                
                var amount = $('#Competition_amount');
                var amountLabel = $('#Competition_amountLabel');
                
                amountLabel.css('visibility', 'visible');
                amount.css('visibility', 'visible');  
                
            }
            else{
                
                var amount = $('#Competition_amount');
                var amountLabel = $('#Competition_amountLabel');
                
                amountLabel.css('visibility', 'hidden');
                amount.css('visibility', 'hidden');  
                

            }    
        });
    
    var isNonCash = $('#Competition_nonCash');  
        if(isNonCash.is(':checked')) {
            
                var estValue = $('#Competition_estimatedValue');
                var estValueLabel = $('#Competition_estValue');
                
                estValueLabel.css('visibility', 'visible');
                estValue.css('visibility', 'visible');  
            
        }
    
    
$('#Competition_nonCash').click(function(){

            var thisCheck = $(this);
            if(thisCheck.is(':checked')){
                
                var estValue = $('#Competition_estimatedValue');
                var estValueLabel = $('#Competition_estValue');
                
                estValueLabel.css('visibility', 'visible');
                estValue.css('visibility', 'visible');  
                
            }
            else{
                
                var estValue = $('#Competition_estimatedValue');
                var estValueLabel = $('#Competition_estValue');
                
                estValueLabel.css('visibility', 'hidden');
                estValue.css('visibility', 'hidden');  
                

            }    
        });
    });
</script>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'competition-form',
    'enableAjaxValidation' => true,
        ));
?>

<?php

echo $form->errorSummary($model);
?>
<div class="formArea">
    <p><strong> <?php echo $form->labelEx($model, 'name'); ?> </strong></p>
    <p>
        <?php echo $form->textField($model, 'name', array('class' => 'inputBoxBig')); ?>
        <?php echo $form->error($model, 'name', array('class' => 'formError')); ?>
    </p>

    <div class="competitionDateArea">
        <div class="photo"></div>
        <div class="middle"><a href="#" class="smBlueBtn">Add Photo</a>
            <a href="#" class="smBlueBtn">Remove Photo </a>
        </div>

        <div class="fR">
            <table cellspacing="0" cellpadding="0">
                <tr>
                    <td>Start Date: </td>
                    <td>
                        <?php
                        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                            //'name' => CHtml::activeName($model, 'start_date'),
                            'model' => $model,
                            'attribute' => 'startDate',
                            'value' => $model->attributes['startDate'],
                            //'defaultOptions' => array('altFormat' => 'mm-dd-yy', 'dateFormat' => 'yy-mm-dd'),
                            'options' => array(
                                'showAnim' => 'fold',
                                'dateFormat' => 'mm-dd-yy',
                            ),
                            'htmlOptions' => array(
                                //'style' => 'height:20px; width:80px;',
                                'class' => 'inputBox',
                            ),
                        ));
                        ?>
                    </td>
                    <td><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/calendar.png" alt="" width="16" height="16" border="0"></a></td>
                </tr>
                <tr>
                    <td>End Date: </td>
                    <td>
                        <?php
                        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                            //'name' => CHtml::activeName($model, 'start_date'),
                            'model' => $model,
                            'attribute' => 'endDate',
                            'value' => $model->attributes['endDate'],
                            //'defaultOptions' => array('altFormat' => 'mm-dd-yy', 'dateFormat' => 'yy-mm-dd'),
                            'options' => array(
                                'showAnim' => 'fold',
                                'dateFormat' => 'mm-dd-yy',
                            ),
                            'htmlOptions' => array(
                                'class' => 'inputBox',
                            ),
                        ));
                        ?>
                    </td>
                    <td><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/calendar.png" alt="" width="16" height="16" border="0"></a></td>
                </tr>
            </table>
        </div>
        <div class="clear"></div>
    </div>
    <p><strong><?php echo $form->labelEx($model, 'description'); ?></strong></p>
    <p>
        <?php echo $form->textArea($model, 'description', array('class' => 'inputBoxBig')); ?>
        <?php echo $form->error($model, 'description'); ?>
    </p>

    <p><strong>Solution Requirements & Criteria</strong></p>
    <p>
        <?php echo $form->textArea($model, 'solutionDescription', array('class' => 'inputBoxBig')); ?>
        <?php echo $form->error($model, 'solutionDescription'); ?>
    </p>

    <table cellspacing="0" cellpadding="0">
        <tr>
            <td><strong>Award Money?</strong></td>
            <td>
                <?php echo $form->checkBox($model, 'awardMonetary'); ?>
                <?php echo $form->error($model, 'awardMonetary'); ?>
            </td>
            <td width="30">&nbsp;</td>
            <td><strong><?php echo $form->label($model, 'amount', array('id' => 'Competition_amountLabel', 'style' => 'visibility:hidden;')); ?> </strong></td>
            <td>
                <?php echo $form->textField($model, 'amount', array('class' => 'inputBox', 'style' => 'visibility:hidden;')); ?>
                <?php echo $form->error($model, 'amount', array('class' => 'formError')); ?>
            </td>
        </tr>
        
        <tr>
            <td><strong>Non-Cash Award?</strong></td>
            <td>
                <?php echo $form->checkBox($model, 'nonCash'); ?>
                <?php echo $form->error($model, 'nonCash'); ?>
            </td>
            <td width="30">&nbsp;</td>
            <td><strong><?php echo $form->label($model, 'estimatedValue', array('id' => 'Competition_estValue', 'style' => 'visibility:hidden;')); ?> </strong></td>
            <td>
                <?php echo $form->textField($model, 'estimatedValue', array('class' => 'inputBox', 'style' => 'visibility:hidden;')); ?>
                <?php echo $form->error($model, 'estimatedValue', array('class' => 'formError')); ?>
            </td>
        </tr>
        
    </table>

    <p><strong>Other Award Description</strong></p>
    <p>
        <?php echo $form->textArea($model, 'otherAward', array('class' => 'inputBoxBig')); ?>
        <?php echo $form->error($model, 'otherAward'); ?>
    </p>
    <p><strong>Competition Settings</strong></p>
    <table cellspacing="0" cellpadding="0">
        <tr>
            <td> 
                <?php echo $form->checkBox($model, 'anonymous'); ?>
                <?php echo $form->error($model, 'anonymous'); ?>
            </td>
            <td>Anonymous hosting Competition (<a>Remove name</a>) </td>
        </tr>
        <tr>
            <td> 
                <?php echo $form->checkBox($model, 'openSolutions'); ?>
                <?php echo $form->error($model, 'openSolutions'); ?>
            </td>
            <td>Solutions Hidden from Public </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <table cellspacing="0" cellpadding="0">
                    <tr>
                        <td> 
                            <?php echo $form->checkBox($model, 'publicVoting'); ?>
                            <?php echo $form->error($model, 'publicVoting'); ?>
                        </td>
                        <td>Enable public voting (Recommended for small competitions) </td>
                    </tr>
                    <tr>
                        <td> 
                            <?php echo $form->checkBox($model, 'commentsEnabled'); ?>
                            <?php echo $form->error($model, 'commentsEnabled'); ?>
                        </td>
                        <td>Enable comments </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td> 
                <?php echo $form->checkBox($model, 'acceptMultipleSolutions'); ?>
                <?php echo $form->error($model, 'acceptMultipleSolutions'); ?>
            </td>
            <td>User can submit multiple solutions </td>
        </tr>
        <!--<tr>
            <td><input type="checkbox" name="checkbox5" value="checkbox"></td>
            <td>Recurring competitions (4 Left) </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><table cellspacing="0" cellpadding="0">
                    <tr>
                        <td>Interval?</td>
                        <td><select name="select">
                                <option>Once a day</option>
                            </select>
                        </td>
                    </tr>

                </table></td>
        </tr>-->
    </table>
    <!--<p><strong>Target Neworks</strong></p>

    <p><input name="textfield3" type="text" class="inputBoxMid"></p>
    <div class="fLeft"><a href="#">Global (All)</a></div>-->
    <div class="clear"></div>
    <p><strong>Terms &amp; Agreements </strong>  </p>

    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis nisi, sodales ut ornare non, dictum feugiat sapien. Vestibulum cursus vehicula mattis. Integer iaculis convallis massa, non elementum felis mattis ut. Phasellus porttitor, nibh eget eleifend dapibus, turpis leo condimentum dolor, vel feugiat elit risus eget neque.   </p>
    <p>&nbsp;</p>
    
    
    <input name="Submit" type="submit" class="smBlueBtn" value="Host Now"> 

    
    <div class="clear"></div> 

</div>

<?php $this->endWidget(); ?>