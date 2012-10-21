<script type="text/javascript">
    $(document).ready(function(){
    $('#User_profileUser').keyup(function() {
    $('#profileLink').html('www.ideareef.com/'+$('#User_profileUser').val());
});


    });
    

</script>


            <?php if (Yii::app()->user->hasFlash('success')): ?>

                <div class="flash-success">
                    <?php echo Yii::app()->user->getFlash('success'); ?>
                </div>

            <?php else: ?>

                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'changeUsername-form',
                    'enableAjaxValidation' => true,
                    //'clientOptions' => array('validateOnSubmit' => true, 'validationDelay' => 100),
                        ));
                ?>

                    <div>
                        <?php echo $form->label($model, 'profileUser'); ?>
    <?php echo $form->textField($model, 'profileUser', array('class' => 'inputBox')); ?>
    <?php echo $form->error($model, 'profileUser', array('class' => 'error')); ?>
                        <div id="profileLink">
        <?php
    
        echo $profileLink;
    ?>
                        </div>
                    </div>

                    <div>
    <?php echo CHtml::ajaxSubmitButton ("Update Username",
                              CController::createUrl('user/ajaxChangeUsername'), 
                              array(
                                    'data'=>'js:jQuery(this).parents("form").serialize()+"&isAjaxRequest=1"',               
                                    'success'=>
                                    'function(data){
                                     $("#data").html(data);
                                     
                                     return false;
                                     }'    
 
                ), array('class' => 'smBlueBtn'));
                ?>
                    </div>

                    <!-- form -->
    <?php $this->endWidget(); ?>
<?php endif; ?>
