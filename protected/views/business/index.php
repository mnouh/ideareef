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
                <h2><a href="#"><?php echo $model->name; ?></a></h2>
                <p class="pav"><a href="#"><?php echo $model->address; ?></a></p>

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
                <h2>Supporters <a href="#">(2325)</a> </h2>
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
                <h2>Open Competitions <a href="#">(4)</a></h2>
                <div class="fR"><a href="#">View All</a></div>
                <div class="clear"></div>
            </div>
            <div class="contents">


                <?php
                $this->widget('zii.widgets.ClistView', array(
                    'dataProvider' => $dataProvider,
                    'itemView' => '_competitionSide',
                    'sortableAttributes' => array(
                        'endDate',
                        'startDate'
                        )));
                ?>
            </div>
        </div>

        <div class="box">
            <div class="top">
                <h2>Open Surges <a href="#">(10)</a></h2>
                <div class="fR"><a href="#">View All</a></div>
                <div class="clear"></div>
            </div>
            <div class="contents">

<?php
foreach ($model->competitions as $competition) {
    ?>


                    <div class="items">
                        <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="fRight">
                            <h2><a href="#"><?php echo $competition->name; ?></a></h2>
                            <b>Start Date: </b><?php echo $competition->startDate; ?> <br>
                            <b>End Date: </b><?php echo $competition->endDate; ?>
                        </div>
                        <div class="clear"></div>
                    </div>


<?php } ?>
            </div>
        </div>
    </div>

    <div class="fL">
        <div class="yellowNotif">A competition has closed! Award your winning customer <a href="#">now</a>
            <div class="close"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/close.png" alt="" width="15" height="15" border="0"></a></div>
        </div>

        <p><strong>Share News with followers         </strong></p>
        <p>

        </p>

        <div class="boxes">
            <div class="top">
                <h2>Your Open Competitions</h2>
                <div class="number">4</div>
                <div class="clear"></div>
            </div>
            <div class="bottom">

                <?php
                $this->widget('zii.widgets.ClistView', array(
                    'dataProvider' => $dataProvider,
                    'itemView' => '_competitionCenter',
                    'sortableAttributes' => array(
                        'endDate',
                        'startDate'
                        )));
                ?>    

                <div class="clear"></div>

            </div>
        </div>
        <div class="boxes">
            <div class="top">
                <h2>Highest Voted Surges</h2>
                <div class="clear"></div>
            </div>
            <div class="bottom">
<?php
foreach ($model->competitions as $competition) {
    ?>
                    <tr>
                        <td><table width="100%" cellpadding="0" cellspacing="1" class="listTable extra">
                                <tr>
                                    <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
                                    <td class ="listComp"><a href="<?php echo $this->createUrl('business/competitionDetail', array('id' => $competition->id)); ?>"><?php echo $competition->name . '<br>'; ?></a><br>
                                        <strong><?php echo $model->name . '<br>'; ?></strong><br>
                                        <b>Start Date: </b><?php echo $competition->startDate; ?> <br>
                                        <b>End Date: </b><?php echo $competition->endDate; ?></td>
                                    <td class="view">
                                        <p><span>1000</span> <strong>Submissions</strong></p>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="imageBox">&nbsp;</td>
                                    <td colspan="3" class="ex">
                                        <a href="#" class="smBlueBtn">View Surge </a>
                                        <a href="#" class="smBlueBtn">View Solutions</a>
                                    </td>
                                </tr>
                            </table></td>
                    </tr>
<?php } ?>

                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="floatRight">
        <div>
            <a href="#" class="smBlueBtnHost">Launch a New Competition</a>
        </div>
        <div class="clear" style="padding:2px;"></div>
        <div>
            <a href="#" class="smBlueBtnHost">Launch a New Storm</a>
        </div>
        <div class="clear" style="padding:2px;"></div>
        <div class="box">
            <div class="top">
                <h2>Trending Competitions</h2>
            </div>
            <div class="contents">
                <div class="items">
                    <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                    <div class="fRight">
                        <h2><a href="#"><?php echo $model->name; ?></a></h2>
                        <p><a href="#">Weekly Short Wheel Competion </a></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="items">
                    <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                    <div class="fRight">
                        <h2><a href="#"><?php echo $model->name; ?></a></h2>
                        <p><a href="#">Weekly Short Wheel Competion </a></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="items">
                    <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                    <div class="fRight">
                        <h2><a href="#"><?php echo $model->name; ?></a></h2>
                        <p><a href="#">Weekly Short Wheel Competion </a></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="items last">
                    <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                    <div class="fRight">
                        <h2><a href="#"><?php echo $model->name; ?></a></h2>
                        <p><a href="#">Weekly Short Wheel Competion </a></p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>


        <div class="box">
            <div class="top">
                <h2>Trending Storms</h2>
            </div>
            <div class="contents">
                <div class="items">
                    <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                    <div class="fRight">
                        <h2><a href="#"><?php echo $model->name; ?></a></h2>
                        <p><a href="#">Weekly Short Wheel Competion </a></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="items">
                    <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                    <div class="fRight">
                        <h2><a href="#"><?php echo $model->name; ?></a></h2>
                        <p><a href="#">Weekly Short Wheel Competion </a></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="items">
                    <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                    <div class="fRight">
                        <h2><a href="#"><?php echo $model->name; ?></a></h2>
                        <p><a href="#">Weekly Short Wheel Competion </a></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="items last">
                    <div class="fLeft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                    <div class="fRight">
                        <h2><a href="#"><?php echo $model->name; ?></a></h2>
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
