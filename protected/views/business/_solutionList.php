<div class="bottom">

    <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
        <tr>
            <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
            <td class="txtAreaRight"><p><a href="#"><?php echo $data->name;?> </a> by <a href="#"><?php echo $data->userSubmit->firstName . " " . $data->userSubmit->lastName;?></a> (Binghamton)</p>
                </td>
            <td class="subscription">
                <span><?php echo $data->vote;?></span> <strong>Votes</strong><br>(+10 today) 
            </td>
        </tr>
    </table>
    <div class="clear"></div>
</div>

<div class="all">
    <div class="bottom">
        <div class="clear">
            <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
                <tr>
                    <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png" alt=""></td>
                    <td><strong>Description:</strong> <br>
                        <?php echo $data->description; ?>
                        <a href="#">Read more</a> </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="boxes">
        <div class="bottom">
            <div class="clear">
                <table width="100%" cellpadding="0" cellspacing="1" class="smTable">
                    <tr>
                        <td class="paddL deep"><strong>User <br>                
                            </strong></td>
                        <td class="paddL">Chris Paquette </td>
                    </tr>
                    <tr>
                        <td width="150" class="paddL deep"><strong>Network</strong></td>
                        <td class="paddL">Binghamton University </td>
                    </tr>
                    <tr>
                        <td class="paddL deep"><strong>Supporting
                                Documents</strong></td>
                        <td class="paddL">&lt;none&gt;</td>
                    </tr>
                    <tr>
                        <td class="paddL deep"><strong>Supporting Media </strong></td>
                        <td class="paddL">&lt;none&gt;</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="boxes">
        <div class="bottom"><a href="#" class="smBlueBtn">Generate a link to share with friends </a><div class="fLt"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/twitter.png" alt="" border="0"></a></div>
            <div class="fLt"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/facebook.png" alt="" border="0"></a></div>
            <div class="fLt"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/messages.png" alt="" width="30" height="30" border="0"></a></div>
            <div class="clear"></div>
        </div>
    </div>
</div>

