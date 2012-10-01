<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'solution-form',
    'enableAjaxValidation' => true,
        ));
?>


    <div class="formArea">
        <p><strong>Submission Name </strong></p>
        <p>
        <?php echo $form->textField($solution, 'name', array('class' => 'inputBoxBigSubmit')); ?>
        <?php echo $form->error($solution, 'name'); ?>
        </p>
        <p><strong>Submission Details </strong></p>
        <p>
        <?php echo $form->textArea($solution, 'description', array('class' => 'inputBoxBigSubmit')); ?>
        <?php echo $form->error($solution, 'description'); ?>
    </p>
        <p><strong>Supporting Documents &amp; media </strong></p>

        <table cellspacing="0" cellpadding="0">
            <tr>
                <td><a href="#" class="smBlueBtn">Upload</a></td>
                <td>file:///E:/Md.%20Nouh/IR/html/submit.html </td>
                <td><a href="#">Remove</a></td>
                <td>|</td>
                <td><a href="#">Add New </a></td>
            </tr>
        </table>
        <table cellspacing="0" cellpadding="0">
            <tr>
                <td>submit.html </td>
                <td><a href="#">Remove</a></td>
            </tr>
            <tr>
                <td>binghamton.pdf</td>
                <td><a href="#">Remove</a></td>
            </tr>
            <tr>
                <td>competition-page-submit.html</td>
                <td><a href="#">Remove</a></td>
            </tr>
        </table>
        <p><strong>Terms &amp; Agreements </strong> </p>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis nisi, sodales ut ornare non, dictum feugiat sapien. Vestibulum cursus vehicula mattis. Integer iaculis convallis massa, non elementum felis mattis ut. Phasellus porttitor, nibh eget eleifend dapibus, turpis leo condimentum dolor, vel feugiat elit risus eget neque. </p>
        <p>&nbsp;</p>
        <input name="Submit" type="submit" class="smBlueBtn" value="Submit Idea">
        <div class="clear"></div>
    </div>

<?php $this->endWidget(); ?>