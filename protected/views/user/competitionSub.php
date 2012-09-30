<?php
Yii::app()->getClientScript()->registerCoreScript('jquery');
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl . '/js/jquery.autosize.js');
?>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery(".all").hide();
        //toggle the componenet with class msg_body
        jQuery(".top").click(function()
        {
            jQuery(this).next(".all").slideToggle(500);
        });
    });
</script>

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
                <p><a href="#" class="post"><?php echo $competition->name;?></a><br>
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

                    <li><a id="myHeader1" href="javascript:showonlyone('newboxes1');">My Solutions</a></li>
                    <li><a id="myHeader2" href="javascript:showonlyone('newboxes2');">Description</a></li>
                    <li><a id="myHeader3" href="javascript:showonlyone('newboxes3');">Award Details</a></li>
                    <li><a id="myHeader4" href="javascript:showonlyone('newboxes4');">Solutions</a></li>
                    <li><a id="myHeader5" href="javascript:showonlyone('newboxes5');">Friends</a></li>
                </ul>
            </div>
            <div id="newboxes1" class="newboxes">

                <div class="inside">
                    <div class="boxes">
                        <div class="top">
                            <h2>Buttery Nipple Shot  </h2>
                            <div class="clear"></div>
                        </div>
                        <div class="all">
                            <div class="bottom">
                                <div class="clear">
                                    <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
                                        <tr>
                                            <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png" alt=""></td>
                                            <td>
                                                <strong>Description:</strong> <br>
                                                1/2 Shot of Buttery Shot <br>
                                                1/2 Shot of Nipple Shot <br>
                                                1/2 Shot of Nipple Shot <br>
                                                1/2 Shot of Nipple Shot <br>
                                                1/2 Shot of Nipple Shot <br>
                                                <a href="#">Read more</a>
                                            </td>
                                            <td class="subscription"><span>153</span> <strong>Votes</strong><br>
                                                (+10 today) </td>
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
                    </div>
                    <div class="clear"></div>
               
                
                
                    <div class="boxes">
                        <div class="top">
                            <h2>Buttery Nipple Shot Test 2</h2>
                            <div class="clear"></div>
                        </div>
                        <div class="all">
                            <div class="bottom">
                                <div class="clear">
                                    <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
                                        <tr>
                                            <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png" alt=""></td>
                                            <td>
                                                <strong>Description:</strong> <br>
                                                1/2 Shot of Buttery Shot <br>
                                                1/2 Shot of Nipple Shot <br>
                                                1/2 Shot of Nipple Shot <br>
                                                1/2 Shot of Nipple Shot <br>
                                                1/2 Shot of Nipple Shot <br>
                                                <a href="#">Read more</a>
                                            </td>
                                            <td class="subscription"><span>153</span> <strong>Votes</strong><br>
                                                (+10 today) </td>
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
                    <div class="clear"></div> 
                    </div>
                    
                    <div class="boxes">
                        <div class="top">
                          <h2>Buttery Nipple Shot Test 3</h2> 
                          <div class="clear"></div>
                        </div>
                        <div class="all">
                            <div class="bottom">
                                <div class="clear">
                                    <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
                                        <tr>
                                            <td class="imageBox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png" alt=""></td>
                                            <td>
                                                <strong>Description:</strong> <br>
                                                1/2 Shot of Buttery Shot <br>
                                                1/2 Shot of Nipple Shot <br>
                                                1/2 Shot of Nipple Shot <br>
                                                1/2 Shot of Nipple Shot <br>
                                                1/2 Shot of Nipple Shot <br>
                                                <a href="#">Read more</a>
                                            </td>
                                            <td class="subscription"><span>153</span> <strong>Votes</strong><br>
                                                (+10 today) </td>
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
                    <div class="clear"></div> 
                    </div>
            </div>
                
            </div>
            <div id="newboxes2" class="newboxes"  style="display:none;">
                <div class="inside">
                    <div class="boxes">
                        <h3>Descriptions</h3>
                        <p><?php echo $competition->description;?></p>
                        <h3>Specification</h3>
                        <ul class="inContent">
                           <li><?php echo $competition->solutionDescription;?></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="newboxes3" class="newboxes"  style="display:none;">
                <div class="inside">
                    <div class="boxes">
                        <div class="bottom">
                            <h6>Free Round of Drinks</h6>
                            <p> Curabitur in enim vel nisl tincidunt tempus ut dapibus lacus. Vivamus venenatis libero sed massa bibendum aliquam. Fusce id dictum eros. Ut dignissim dolor nec lacus lobortis at bibendum felis tempus. Cras vitae diam ac nibh iaculis hendrerit. Nunc luctus nibh ac lorem commodo volutpat. In ipsum purus, vulputate ac vehicula vel, tristique in nisi. Proin aliquet tellus eu diam auctor mollis. Nam eget aliquet leo. </p>

                            <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/red-badge.png" alt="" width="48" height="48"></p>
                        </div>
                    </div>
                    <p class="txtCenter"><strong>Still have questions? </strong></p>
                    <p class="txtCenter"><a href="#" class="smBlueBtn" style="float:none; width:88px; margin:auto;">Message Host </a></p>
                    <div class="clear"></div>
                </div>
            </div>

            <div id="newboxes4" class="newboxes"  style="display:none;">
                <div class="inside">
                    
                        <?php echo $this->renderPartial('_solutionForm', array('model' => $model)); ?>
                    
                </div>
            </div>
            
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