<?php
Yii::app()->getClientScript()->registerCoreScript('jquery');
Yii::app()->getClientScript()->registerCoreScript('jquery.ui');
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl . '/js/jquery.jeditable.js');
$cs->registerScriptFile($baseUrl . '/js/businessInfo.js');
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
                <div class="type"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/platinum-profile.png" width="60" height="60"></div>
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

    </div>
    <div class="fL">
        <div class="topArea">
            <div class="lft"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/res.png" alt="" width="200" height="200"></div>
            <div class="mid"> 
                <p><a href="#" class="post"><?php echo $model->name; ?></a><br>
                    123 State Street<br>
                    Binghamton, NY 13905</p>
                <p><a href="#" class="smBlueBtn">Join Reef </a></p>
                <div class="clear"></div>
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


                    <li>
                        <?php
                        echo CHtml::ajaxLink(
                                'Profile', array('business/profile', 'id' => $model->id), array('success' => 'js:function(data) {
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

                    <li><a id="myHeader2" href="javascript:showonlyone('newboxes2');">Recent Activity</a></li>
                    <li><a id="myHeader3" href="javascript:showonlyone('newboxes3');">Information</a></li>
                    <li><a id="myHeader3" href="javascript:showonlyone('newboxes4');">Statistics</a></li>
                </ul>
            </div>
            <?php $this->renderPartial('_profile', array('model' => $model, 'dataProvider' => $dataProvider), false, true); ?>
            <div id="currentTab">
                
                
                
                
                
                <div id="newboxes2" class="newboxes"  style="display:none;">
                    <div class="inside">
                        <div class="boxes">
                            <div class="top">
                                <h2>Recent Activity</h2>
                                <div class="fR"><a href="#">View All</a></div>
                                <div class="clear"></div>
                            </div>
                            <div class="bottom">
                                <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
                                    <tr>
                                        <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></td>
                                        <td><a href="#">Tom and Marty's</a> is hosting a new competition titled <a href="#">Weekly Shot Wheel Competition</a><br>
                                            <em>Friday at 3:30PM</em></td>
                                    </tr>
                                </table>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="newboxes3"class="newboxes"  style="display:none;">
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

            <div id="newboxes4"class="newboxes"  style="display:none;">
                <div class="inside">

                    <div class="boxes">
                        <div class="top">
                            <h2>Badges </h2>
                            <div class="number">10</div>
                            <div class="fR"><a href="#">View All</a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="bottom">
                            <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
                                <tr class="other">
                                    <td class="txtCenter"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/red-badge.png" alt="" width="48" height="48"></td>
                                    <td class="txtCenter"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/green-badge.png" alt="" width="48" height="48"></td>
                                    <td class="txtCenter"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/blue-badge.png" alt="" width="48" height="48"></td>
                                    <td class="txtCenter"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pink-badge.png" alt="" width="48" height="48"></td>
                                    <td class="txtCenter"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/yellow-badge.png" alt="" width="48" height="48"></td>
                                </tr>
                                <tr class="other">
                                    <td class="txtCenter"><a href="#">T &amp; M<br>
                                            Badge </a></td>
                                    <td class="txtCenter"><a href="#">T &amp; M<br>
                                            Badge </a></td>
                                    <td class="txtCenter"><a href="#">T &amp; M<br>
                                            Badge </a></td>
                                    <td class="txtCenter"><a href="#">T &amp; M<br>
                                            Badge </a></td>
                                    <td class="txtCenter"><a href="#">T &amp; M<br>
                                            Badge </a></td>
                                </tr>
                            </table>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="boxes">
                        <div class="top">
                            <h2>Statistics </h2>
                            <div class="clear"></div>
                        </div>
                        <div class="bottom">
                            <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
                                <tr class="other">
                                    <td class="txtCenter"><strong>City Rank</strong><br>
                                        1/23<a href="#"></a></td>
                                    <td class="txtCenter"><strong>Competition Hosted</strong><br>
                                        45</td>
                                    <td class="txtCenter"><strong>Active User Since</strong><br>
                                        2012</td>
                                </tr>
                                <tr class="other">
                                    <td class="txtCenter"><strong>State Rank</strong><br>
                                        2/3 </td>
                                    <td class="txtCenter"><strong>Winner</strong><br>
                                        45</td>
                                    <td class="txtCenter"><strong>Jobs Posted</strong><br>
                                        4</td>
                                </tr>
                                <tr class="other">
                                    <td class="txtCenter"><strong>Country Rank</strong><br>
                                        239/3350</td>
                                    <td class="txtCenter">&nbsp;</td>
                                    <td class="txtCenter">&nbsp;</td>
                                </tr>
                            </table>
                            <div class="clear"></div>
                        </div>
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