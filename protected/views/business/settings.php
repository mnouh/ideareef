<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

if(Yii::app()->user->isBusiness)
    echo $model->type->name;
else
    echo Yii::app()->user->getUser()->firstName;
?>


