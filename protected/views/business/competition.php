    <?php

$this->menu = array(
    array('label' => 'Create Competition', 'url' => array('create')),
    array('label' => 'Manage Competition', 'url' => array('admin')),
);
?>

<div id="InnerContent">
    <div class="floatLeft">
        <div class="up">
            <div class="links">
                <div class="notification"><a href="#">1</a></div>
                <div class="messages"><a href="#">10</a></div>
                <div class="pavillion-home"><a href="#">2</a></div>
                <div class="clear"></div>
            </div>
            <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/profile-picture.jpg" alt="" width="200" height="200" class="profile">
                <div class="type"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/bronze-profile.png"></div>
            </div>
            <div class="fRight">
                <h2><a href="#">Chris Paquette</a></h2>
                <p class="pav"><a href="#">Binghamton, NY</a></p>
                
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="mid">
            <div class="contents">
                <div class="fLeft">My Network  Rank:</div>
                <div class="fRight">1/1035</div>
                <div class="clear"></div>
            </div>
            <div class="contents">
                <div class="fLeft">Binghamton Rank:</div>
                <div class="fRight">1/5</div>
                <div class="clear"></div>
            </div>
            <div class="contents last">
                <div class="fLeft">Current Competitions:</div>
                <div class="fRight">10</div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="box">
            <div class="top">
                <h2>Friends <a href="#">(2325)</a> </h2>
                <div class="fR"><a href="#">View All</a></div>
                <div class="clear"></div>
            </div>
            <div class="profiles">
                <ul>
                    <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>


                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="box">
            <div class="top">
                <h2>My Competitions <a href="#">(4)</a></h2>
                <div class="fR"><a href="#">View All</a></div>
                <div class="clear"></div>
            </div>
            <div class="profiles">
                <ul>
                    <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></a></li>

                </ul>
                <div class="clear"></div>
            </div>
        </div>
        
    </div>
    <div class="fL">
  
            <div class="inside">
                <div class="boxes">
                    <input name="textfield2" type="text" class="inputBoxMid" value="Enter name or zip code or competition">
                    <div class="clear"></div>
                </div>
                <div class="boxes selBox">
                    <select name="select">
                        <option>Award Type</option>
                    </select>
                    <select name="select2">
                        <option>Most / Least</option>
                    </select>
                    <select name="select3">
                        <option>Time Remaining</option>
                    </select>
                </div>
            </div>
            <div class="boxes">
                <div class="bottom">
                    <table cellspacing="0" cellpadding="0">

                        <?php
                            foreach ($model->competitions as $competition) {
                        ?>

                            <tr>
                                <td><table width="100%" cellpadding="0" cellspacing="1" class="listTable extra">
                                        <tr>
                                            <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
                                            <td><a href="<?php echo $this->createUrl('business/competitionDetail', array('id' => $competition->id)); ?>"><?php echo $competition->name . '<br>'; ?></a><br>
                                                <strong><?php echo $model->name . '<br>'; ?></strong><br>
                                                <b>Start Date: </b><?php echo $competition->startDate; ?> <br>
                                                <b>End Date: </b><?php echo $competition->endDate; ?></td>
                                            <td class="view"><p><span>1000</span> <strong>Submissions</strong></p>
                                                <p><span>1</span> <strong>Views</strong></p></td>
                                            <td width="110" class="txtCenter"><h3 class="price">$10,000</h3>
                                                <div class="ticker"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/bar.png" alt="" width="20"></div>
                                                1 Month remains </td>
                                        </tr>
                                        <tr>
                                            <td class="imageBox">&nbsp;</td>
                                            <td colspan="3" class="ex"><a href="#" class="smBlueBtn">View Competition</a> <a href="#" class="smBlueBtn">View Solutions</a> </td>
                                        </tr>
                                    </table></td>
                            </tr>
                        <?php } ?>

                    </table>
                    <div class="clear"></div>
                </div>
            </div>

    </div>
    <div class="floatRight">
        <div class="box">
            <div class="top">
                <h2>Trending Competions</h2>
            </div>
            <div class="contents">
                <div class="items">
                    <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                    <div class="fRight">
                        <h2><a href="#">Tom and Marty's</a></h2>
                        <p><a href="#">Weekly Short Wheel Competion </a></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="items">
                    <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                    <div class="fRight">
                        <h2><a href="#">Tom and Marty's</a></h2>
                        <p><a href="#">Weekly Short Wheel Competion </a></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="items">
                    <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                    <div class="fRight">
                        <h2><a href="#">Tom and Marty's</a></h2>
                        <p><a href="#">Weekly Short Wheel Competion </a></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="items">
                    <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                    <div class="fRight">
                        <h2><a href="#">Tom and Marty's</a></h2>
                        <p><a href="#">Weekly Short Wheel Competion </a></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="items last">
                    <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                    <div class="fRight">
                        <h2><a href="#">Tom and Marty's</a></h2>
                        <p><a href="#">Weekly Short Wheel Competion </a></p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="btm">    Something not working right? <a href="#">Report a Bug</a> 
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>

</div>

