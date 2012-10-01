<table width="100%" cellpadding="0" cellspacing="1" class="listTable extra">
            <tr>
                <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
                <td class ="listComp"><a href="<?php echo $this->createUrl('business/competitionDetail', array('id' => $data->id)); ?>"><?php echo $data->name . '<br>'; ?></a><br>
                    
                    <b>Start Date: </b><?php echo $data->startDate; ?> <br>
                    <b>End Date: </b><?php echo $data->endDate; ?></td>
                <td class="view">
                    <p><span>1000</span> <strong>Submissions</strong></p>
                </td>

            </tr>
            
        </table>