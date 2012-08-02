<?php

    foreach ($model->competitions as $competition)
    {
        echo $competition -> name.'<br/>';
        echo $competition -> description.'<br/>';
        echo $competition -> startDate.'<br/>';
        echo $competition -> endDate.'<br/>';
    }
?>
