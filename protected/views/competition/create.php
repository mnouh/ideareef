<?php
    Yii::app()->getClientScript()->registerCoreScript('jquery');
         $baseUrl = Yii::app()->baseUrl;
 $cs = Yii::app()->getClientScript();
 $cs->registerScriptFile($baseUrl.'/js/jquery.autosize.js');
 
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
                <div class="type"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gold-profile.png" width="60" height="60"></div>
            </div>
            <div class="fRight">
                <h2><a href="#">Chris Paquette</a></h2>
                <p class="pav"><a href="#">Binghamton, NY</a></p>
                <ul>
                    <li><a href="#">View Profile </a> </li>
                    <li><a href="#">View Stats </a>    </li>
                </ul>
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
        <div class="box">
            <div class="top">
                <h2>Badges <a href="#">(10)</a></h2>
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

                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="fL">
        <div class="topArea">
            <div class="lft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/res.png" alt="" width="200" height="200"></div>
            <div class="mid"> 
                <p><a href="#" class="post">Tom and Marty's Pub &amp; Restaurant</a><br>
                    123 State Street<br>
                    Binghamton, NY 13905</p>
                <p><a href="#"><strong>Not sure yet</strong></a> &nbsp;| &nbsp;    <a href="#"><strong>What to put here</strong></a></p>
            </div>
            <div class="rht">
                <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/verified.png" alt="" width="32" height="32" class="verified"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/red-badge.png" alt="" width="32" height="32"></p>
                <p class="followers"><span>3501</span>
                    Followers </p>
            </div>

            <div class="clear"></div>
        </div>
        <div class="bottomArea">
            <div class="topmenu">
                <ul>
                    <li><a href="#" class="sel">Host a New Competition </a></li>
                </ul>
            </div>
            <div class="inside">
               <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
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

