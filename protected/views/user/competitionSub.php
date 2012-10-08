<?php
Yii::app()->getClientScript()->registerCoreScript('jquery');
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl . '/js/jquery.autosize.js');
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
                <p><a href="#" class="post"><?php echo $competition->name; ?></a><br>
                    <strong>Tom &amp; Marty's Pub</strong>, 
                    Binghamton, NY 13905<br>
                    355 Challanges - 303 in your Network<br>
                </p>
                <div class="ticker"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/bar.png" alt="" width="20"></div>
                <em>6 days left </em><br>
                <strong>Launched:</strong> 05/30/2012<br>
                <strong>Closing:</strong> 06/03/2012
                <div class="clear"></div>
            </div>
            <div class="rht">
                <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/red-badge.png" alt="" width="32" height="32"></p>
                <p class="followers">Free Round of Drinks </p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="bottomArea">
            <div class="topmenu">
                <ul>
                    <li>
                        <?php
                        echo CHtml::ajaxLink(
                                'My Solutions', array('user/mySolutions'), array('success' => 'js:function(data) {
                                                    jQuery("div#currentTab").html(data);}',
                            //'update'=>'#successMessage',
                            //'beforeSend' => 'function() {alert("testing");}',
                            //'validated' => 'function() {$("div#load").removeClass("loading");}',
                            //'complete' => 'function() {$("div#load").removeClass("loading");}',
                            'type' => 'POST'
                                )
                        );
                        ?>
                    </li>


                    <li>
                        <?php
                        echo CHtml::ajaxLink(
                                'Description', array('user/description', 'id' => $competition->id), array('success' => 'js:function(data) {
                                                    jQuery("div#currentTab").html(data);}',
                            //'update'=>'#successMessage',
                            //'beforeSend' => 'function() {alert("testing");}',
                            //'validated' => 'function() {$("div#load").removeClass("loading");}',
                            //'complete' => 'function() {$("div#load").removeClass("loading");}',
                            'type' => 'POST'
                                )
                        );
                        ?>
                    </li>


                    <li>
                        <?php
                        echo CHtml::ajaxLink(
                                'Award Details', array('user/awardDetails', 'id' => $competition->id), array('success' => 'js:function(data) {
                                                    jQuery("div#currentTab").html(data);}',
                            //'update'=>'#successMessage',
                            //'beforeSend' => 'function() {alert("testing");}',
                            //'validated' => 'function() {$("div#load").removeClass("loading");}',
                            //'complete' => 'function() {$("div#load").removeClass("loading");}',
                            'type' => 'POST'
                                )
                        );
                        ?>
                    </li>


                    <li>
                        <?php
                        echo CHtml::ajaxLink(
                                'Submit Solution', array('user/submitSolution'), array('success' => 'js:function(data) {
                                                    jQuery("div#currentTab").html(data);}',
                            //'update'=>'#successMessage',
                            //'beforeSend' => 'function() {alert("testing");}',
                            //'validated' => 'function() {$("div#load").removeClass("loading");}',
                            //'complete' => 'function() {$("div#load").removeClass("loading");}',
                            'type' => 'POST'
                                )
                        );
                        ?>
                    </li>
                </ul>
            </div>
            <div id="currentTab">
                <?php $this->renderPartial('_mySolutions', true, false); ?>

                <div id="newboxes5" class="newboxes"  style="display:none;">
                    <div class="inside">
                        <div class="boxes">
                            <div class="bottom">
                                <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
                                    <tr>
                                        <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
                                        <td class="txtAreaRight"><h3><a href="#">Mohamed Nouh </a><a href="#"></a></h3>
                                            <p><strong>Da Green Jelly Eye Monster</strong></p>
                                            <p class="smlTxt"><a href="#">Solutions</a><a href="#">Comments (10)</a><a href="#">Vote</a><a href="#">Go Message</a>
                                            <div class="clear"></div>
                                            </p></td>
                                        <td class="txtCenter"><a href="#">186 Votes</a><br>
                                            (+13 tday)<br>
                                            <em>4th Place </em></td>
                                    </tr>
                                    <tr>
                                        <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
                                        <td class="txtAreaRight"><h3><a href="#">Mohamed Nouh </a><a href="#"></a></h3>
                                            <p><strong>Da Green Jelly Eye Monster</strong></p>
                                            <p class="smlTxt"><a href="#">Solutions</a><a href="#">Comments (10)</a><a href="#">Vote</a><a href="#">Go Message</a>
                                            <div class="clear"></div>
                                            </p></td>
                                        <td class="txtCenter"><a href="#">186 Votes</a><br>
                                            (+13 tday)<br>
                                            <em>4th Place </em></td>
                                    </tr>
                                    <tr>
                                        <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
                                        <td class="txtAreaRight"><h3><a href="#">Mohamed Nouh </a><a href="#"></a></h3>
                                            <p><strong>Da Green Jelly Eye Monster</strong></p>
                                            <p class="smlTxt"><a href="#">Solutions</a><a href="#">Comments (10)</a><a href="#">Vote</a><a href="#">Go Message</a>
                                            <div class="clear"></div>
                                            </p></td>
                                        <td class="txtCenter"><a href="#">186 Votes</a><br>
                                            (+13 tday)<br>
                                            <em>4th Place </em></td>
                                    </tr>
                                    <tr>
                                        <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
                                        <td class="txtAreaRight"><h3><a href="#">Mohamed Nouh </a><a href="#"></a></h3>
                                            <p><strong>Da Green Jelly Eye Monster</strong></p>
                                            <p class="smlTxt"><a href="#">Solutions</a><a href="#">Comments (10)</a><a href="#">Vote</a><a href="#">Go Message</a>
                                            <div class="clear"></div>
                                            </p></td>
                                        <td class="txtCenter"><a href="#">186 Votes</a><br>
                                            (+13 tday)<br>
                                            <em>4th Place </em></td>
                                    </tr>
                                    <tr>
                                        <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
                                        <td class="txtAreaRight"><h3><a href="#">Mohamed Nouh </a><a href="#"></a></h3>
                                            <p><strong>Da Green Jelly Eye Monster</strong></p>
                                            <p class="smlTxt"><a href="#">Solutions</a><a href="#">Comments (10)</a><a href="#">Vote</a><a href="#">Go Message</a>
                                            <div class="clear"></div>
                                            </p></td>
                                        <td class="txtCenter"><a href="#">186 Votes</a><br>
                                            (+13 tday)<br>
                                            <em>4th Place </em></td>
                                    </tr>
                                </table>
                                <div class="clear"></div>
                            </div>
                        </div>

                        <p class="txtCenter"><strong>Refer the winner and you can win up to 10% of Award and Points!</strong></p>
                        <p class="txtCenter"><a href="#" class="smBlueBtn" style="float:none; width:88px; margin:auto;">Refer a friend</a></p>
                        <div class="clear"></div>
                    </div>
                </div>
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