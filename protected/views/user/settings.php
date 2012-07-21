<div id="main-content" class="clearfix">
<div class="form" id="customForm" class="sync">
    <div id="content-container">

<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>


<?php


$this->widget('zii.widgets.jui.CJuiTabs', array(
        'tabs'=>array(
                'Name'=>$this->renderPartial('changeName', array('model' => $model), true, true ),
                'Password'=>$this->renderPartial('changePassword',array('model' => $model), true, true ),
        ),
        'options'=>array(
                'collapsible'=>false,
        ),
));


//$this->renderPartial('changeName', array('model' => $model), false, false);

?>


    </div>
</div>
</div>