<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

if(Yii::app()->user->isBusiness)
    echo Yii::app()->user->getUser()->businessType;
else
    echo Yii::app()->user->getUser()->firstName;
?>
