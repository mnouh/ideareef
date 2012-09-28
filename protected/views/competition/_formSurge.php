<script type="text/javascript">
    $(document).ready(function(){
        $('textarea').autosize();
        
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
    <p><strong> Name of Topic or Focus </strong></p>
    <p>
        <?php echo $form->textField($model, 'name', array('class' => 'inputBoxBig')); ?>
        <?php echo $form->error($model, 'name', array('class' => 'formError')); ?>
    </p>

    <div class="competitionDateArea">
        <div class="photo"></div>
        <div class="middle"><a href="#" class="smBlueBtn">Add Photo</a>
            <a href="#" class="smBlueBtn">Remove Photo </a>
        </div>

        <div class="clear"></div>
    </div>
    
    <p><strong>Description or Criteria(optional)</strong></p>
    <p>
        <?php echo $form->textArea($model, 'solutionDescription', array('class' => 'inputBoxBig')); ?>
        <?php echo $form->error($model, 'solutionDescription'); ?>
    </p>
    
    <table cellspacing="0" cellpadding="0">
        <tr>
            <td><strong>Prize/Ladder</strong></td>
            <td width="30">&nbsp;</td>
            <td><strong>Description</strong></td>
        </tr>

        <tr>
            <td>
                <?php echo $form->textField($model, 'awardMonetary', array('class' => 'inputBox')); ?>
                <?php echo $form->error($model, 'awardMonetary', array('class' => 'inputBox')); ?>
            </td>
            <td width="30">&nbsp;</td>
            <td>
                <?php echo $form->textField($model, 'amount', array('class' => 'inputBox')); ?>
                <?php echo $form->error($model, 'amount', array('class' => 'formError')); ?>
            </td>
            <td><a href="#" class="smBlueBtn">Add new Tier </a></td>
        </tr>
    </table>

    
    
    <div class="clear"></div>
    <p><strong>Terms &amp; Agreements </strong>  </p>

    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis nisi, sodales ut ornare non, dictum feugiat sapien. Vestibulum cursus vehicula mattis. Integer iaculis convallis massa, non elementum felis mattis ut. Phasellus porttitor, nibh eget eleifend dapibus, turpis leo condimentum dolor, vel feugiat elit risus eget neque.   </p>
    <p>&nbsp;</p>
    <input name="Submit" type="submit" class="smBlueBtn" value="Host Now"> 
    <div class="clear"></div> 

</div>

<?php $this->endWidget(); ?>