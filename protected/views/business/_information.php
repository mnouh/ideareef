<div id="newboxes3"class="newboxes">
    <div class="inside">
        <div class="boxes">
            <div class="apContainer"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png"></div>
            <div class="apContainer"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png"></div>
            <div class="apContainer"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png"></div>
            <div class="apContainer"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png"></div>
            <div class="apContainer"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png"></div>
            <div class="clear"></div>
        </div>
        <div class="boxes">
            <h3>About Us </h3>
            
            <?php if($editable){ ?>
                
                
         
            <?php } ?>
            <div class="aboutus" id ="aboutus"> <?php echo $model->aboutUs; ?> </div>

        </div>

        <div class="boxes">
            <div class="top">
                <h2>Events</h2>
                <div class="number">2</div>
                <div class="fR"><a href="#">View All</a></div>
                <div class="clear"></div>
            </div>
            <div class="bottom">
                <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
                    <tr>
                        <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
                        <td><a href="#">Mug Night </a><br>
                            <strong>Tom and Marty's</strong> (Local) <br>
                            <em>Launced: 05/30/2012 <br>
                                Closing: 07/20/2012 </em></td>
                        <td class="txtCenter"><a href="#" class="smbtn">View Event Page </a>
                            <div class="clear"></div>
                        </td>
                    </tr>
                </table>
                <div class="clear"></div>
            </div>
        </div>
        <div class="boxes">
            <div class="top">
                <h2>Job Positions </h2>
                <div class="number">1</div>
                <div class="fR"><a href="#">View All</a></div>
                <div class="clear"></div>
            </div>
            <div class="bottom">
                <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
                    <tr>
                        <td><a href="#">Bartender</a></td>
                        <td><strong>Tom and Marty's</strong> (Local) <br>
                            <em>Launched: 05/30/2012 <br>
                                Closing: 07/20/2012 </em></td>
                        <td class="txtCenter"><a href="#" class="smbtn">View More Info </a>
                            <div class="clear"></div>
                            <a href="#" class="smbtn">Apply for this Job</a>
                        </td>
                    </tr>
                </table>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>    