<table width="100%" cellpadding="0" cellspacing="1" class="listTable extra">
    <tr>
        <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
        <td class ="listComp"><a href="<?php echo $this->createUrl('business/competitionDetail', array('id' => $data->id)); ?>"><?php echo $data->name . '<br>'; ?></a><br>

            (surge/idea title) by (name of user)
            (title/topic of surge contest)

        <td class="view">
            <p><span>1000</span> <strong>Votes</strong></p>
            <p>Viral Icon</p>
        </td>

    </tr>
</table>