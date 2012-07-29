<div id="main-content" class="clearfix">
<div class="form" id="customForm" class="sync">
    <div id="content-container">

<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>


<?php

             //$this->renderPartial('changePassword',array('model' => $model), false, true );
             $this->renderPartial('changeName', array('model' => $model), false, true );

//$this->renderPartial('changeName', array('model' => $model), false, false);

?>


    </div>
</div>
</div>