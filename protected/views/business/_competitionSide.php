<div class="items">
    <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
    <div class="fRight">
        <h2><a href="#"><?php echo $data->name; ?></a></h2>
        <b>Start Date: </b><?php echo $data->startDate; ?> <br>
        <b>End Date: </b><?php echo $data->endDate; ?>
    </div>
    <div class="clear"></div>
</div>