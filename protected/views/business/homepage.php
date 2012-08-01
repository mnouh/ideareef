<?php
    echo $model -> name;
    
    
    foreach ($model->competitions as $competition)
    {
        
        
        echo $competition->name.'<br/>';
    }
?>
