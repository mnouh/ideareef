<div id="main-content" class="clearfix">
    <div class="form" id="customForm" class="sync">
        <div id="content-container">
            <h1> Edit Pavilion </h1>

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
                    echo $form->textArea($model,'aboutUs', array ('class' => 'sync'));
                    echo $form->error($model,'aboutUs'); 
                ?>
            </div>

            <div>    
                <?php 
                    echo $form->labelEx($model,'companyHistory');
                    echo $form->textArea($model,'companyHistory', array ('class' => 'sync'));
                    echo $form->error($model,'companyHistory'); 
                ?>
            </div>

            <div>    
                <?php 
                    echo $form->labelEx($model,'companyMission');
                    echo $form->textArea($model,'companyMission', array ('class' => 'sync'));
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