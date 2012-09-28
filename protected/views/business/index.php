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
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="box">
            <div class="top">
                <h2>Open Surges <a href="#">(10)</a></h2>
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
        <div class="yellowNotif">A competition has closed! Award your winning customer <a href="#">now</a>
            <div class="close"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/close.png" alt="" width="15" height="15" border="0"></a></div>
        </div>
        
        <p><strong>Share News with followers         </strong></p>
      <p>
        <?php echo CHtml::activeTextArea($model, 'status', array('rows'=>15, 'cols'=>5))?>
      </p>

        <div class="boxes">
            <div class="top">
                <h2>Your Open Competitions</h2>
                <div class="number">4</div>
                <div class="clear"></div>
            </div>
            <div class="bottom">
                <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
                    <tr>
                        <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
                        <td class="desc"><a href="#">Taj Mahal Painting Competition</a> <br>
                            Shahjahan Painters        <br>
                            Agra, India</td>
                        <td class="view"><span>143</span>
                            <strong>Views</strong><br>
                            (11 today) </td>
                        <td class="subscription"><span>15</span>
                            <strong>Subscriptions</strong><br>
                            (6 today) </td>
                        <td class="stats"><a href="#">Stats</a></td>
                    </tr>
                    <tr>
                        <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
                        <td class="desc"><a href="#">Mt. Everest climbing competition</a> <br>
                            Shahjahan Painters <br>
                            Agra, India</td>
                        <td class="view"><span>143</span> <strong>Views</strong><br>
                            (11 today) </td>
                        <td class="subscription"><span>15</span> <strong>Subscriptions</strong><br>
                            (6 today) </td>
                        <td class="stats"><a href="#">Stats</a></td>
                    </tr>
                    <tr>
                        <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
                        <td class="desc"><a href="#">25 Meter Olympics Rapid Air Rifle Firing Competition</a> <br>
                            Shahjahan Painters <br>
                            Agra, India</td>
                        <td class="view"><span>143</span> <strong>Views</strong><br>
                            (11 today) </td>
                        <td class="subscription"><span>15</span> <strong>Subscriptions</strong><br>
                            (6 today) </td>
                        <td class="stats"><a href="#">Stats</a></td>
                    </tr>
                    <tr>
                        <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
                        <td class="desc"><a href="#">Weekly shot wheel competition</a> <br>
                            Shahjahan Painters <br>
                            Agra, India</td>
                        <td class="view"><span>143</span> <strong>Views</strong><br>
                            (11 today) </td>
                        <td class="subscription"><span>15</span> <strong>Subscriptions</strong><br>
                            (6 today) </td>
                        <td class="stats"><a href="#">Stats</a></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="boxes">
            <div class="top">
                <h2>Highest Voted Surges</h2>
                <div class="clear"></div>
            </div>
            <div class="bottom">


                <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
                    <tr>
                        <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
                        <td class="descSurge"><a href="#">Taj Mahal Painting Competition</a> <br>
                            Shahjahan Painters        <br>
                            Agra, India</td>
                        <td class="stats"><a href="#">Stats</a></td>
                    </tr>
                    <tr>
                        <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
                        <td class="desc"><a href="#">Mt. Everest climbing competition</a> <br>
                            Shahjahan Painters <br>
                            Agra, India</td>
                        <td class="view"><span>143</span> <strong>Views</strong><br>
                            (11 today) </td>
                        <td class="subscription"><span>15</span> <strong>Subscriptions</strong><br>
                            (6 today) </td>
                        <td class="stats"><a href="#">Stats</a></td>
                    </tr>
                    <tr>
                        <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
                        <td class="desc"><a href="#">25 Meter Olympics Rapid Air Rifle Firing Competition</a> <br>
                            Shahjahan Painters <br>
                            Agra, India</td>
                        <td class="view"><span>143</span> <strong>Views</strong><br>
                            (11 today) </td>
                        <td class="subscription"><span>15</span> <strong>Subscriptions</strong><br>
                            (6 today) </td>
                        <td class="stats"><a href="#">Stats</a></td>
                    </tr>
                    <tr>
                        <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
                        <td class="desc"><a href="#">Weekly shot wheel competition</a> <br>
                            Shahjahan Painters <br>
                            Agra, India</td>
                        <td class="view"><span>143</span> <strong>Views</strong><br>
                            (11 today) </td>
                        <td class="subscription"><span>15</span> <strong>Subscriptions</strong><br>
                            (6 today) </td>
                        <td class="stats"><a href="#">Stats</a></td>
                    </tr>
                </table>


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
