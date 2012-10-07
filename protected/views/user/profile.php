<?php
    Yii::app()->getClientScript()->registerCoreScript('jquery');
    Yii::app()->getClientScript()->registerCoreScript('jquery.ui');
         $baseUrl = Yii::app()->baseUrl;
 $cs = Yii::app()->getClientScript();
 $cs->registerScriptFile($baseUrl.'/js/jquery.jeditable.js');
 $cs->registerScriptFile($baseUrl.'/js/userProfileInfo.js');
 
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
  <p class="pav"><a href="#"><strong>Cornell University</strong> (Edit) <br>
    Binghamton, NY</a></p>
  <ul>
    <li><a href="#">Edit Profile </a> </li>
    <li></li>
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
    <div class="rht">
      <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/verified.png" alt="" width="32" height="32" class="verified"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/yellow-badge.png" alt="" width="48" height="48"></p>
      </div>
    <div class="midArea"> <a href="#" class="smBlueBtn">Go Message</a> <a href="#" class="smBlueBtn">Add friend</a> <a href="#" class="smBlueBtn">Follow</a> 
      <div class="clear"></div>
    </div><div class="clear"></div>
  </div>
  <div class="bottomArea">
    <div class="topmenu">
      <ul>
        <li><a href="#" class="sel">Professional</a></li>
        <li><a href="#">Site Profile </a></li>
        <li></li>
      </ul>
    </div>
    <div class="inside">
	<div class="boxes">
	  <div class="apContainer"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png"></div>
	  <div class="apContainer"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png"></div>
	  <div class="apContainer"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png"></div>
	  <div class="apContainer"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png"></div>
	  <div class="apContainer"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png"></div>
	  <div class="clear"></div>
	  <div style="padding-top:10px;"><a href="#" class="smBlueBtn">Edit photos</a>
	  <div class="clear"></div>
	  </div>
	  </div>
      <div class="boxes">
        <div class="bottom">
          <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
            <tr>
              <td width="100" class="paddL"><strong>Lives in                 <br>
              </strong></td>
              <td>Binghamton, NY</td>
            </tr>
            <tr>
              <td class="paddL"><strong>From </strong></td>
              <td>San Fransisco, California</td>
            </tr>
            <tr>
              <td class="paddL"><strong>Birthday</strong></td>
              <td>April 30, 1982</td>
            </tr>
            <tr>
              <td class="paddL"><strong>Gender</strong></td>
              <td>Male</td>
            </tr>
            <tr>
              <td class="paddL"><strong>Languages</strong></td>
              <td>English, Spanish,  French  <a href="#">(Edit) </a></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="boxes">
        <div class="top">
          <h2>Education</h2>
		  <div class="fR"><a href="#">Edit</a></div>
          <div class="clear"></div>
        </div>
        <div class="bottom">
          <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
            <tr>
              <td width="100" class="paddL"><strong>2012 - Present </strong></td>
              <td><a href="#">Binghamton University </a><br>
                Ph.D in Biochemical Engineering </td>
            </tr>
            <tr>
              <td class="paddL"><strong>2010 - 2012</strong></td>
              <td><a href="#">Calcutta University </a><br>
                Ph.D in Biochemical Engineering </td>
            </tr>
            <tr>
              <td class="paddL"><strong>2004 - 2008  </strong></td>
              <td><a href="#">Oxford University </a><br>
                Ph.D in Biochemical Engineering </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="boxes">
        <div class="top">
          <h2>Employment</h2>
          <div class="fR"><a href="#">Edit</a></div>
          <div class="clear"></div>
        </div>
        <div class="bottom">
          <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
            <tr>
              <td width="100" class="paddL"><strong>Summer 2012 </strong></td>
              <td><a href="#">Evogo</a><br>
                Co-founder, CEO</td>
            </tr>
            <tr>
              <td class="paddL"><strong>Summer 2011 </strong></td>
              <td><a href="#">Howard Huges Medical Institute</a><br>
                Summer Research Assistant </td>
            </tr>
            <tr>
              <td class="paddL"><strong>Summer 2009 </strong></td>
              <td><a href="#">Evogo</a><br>
                Co-founder, CEO</td>
            </tr>
            <tr>
              <td class="paddL"><strong>Winter 2008 </strong></td>
              <td><a href="#">Howard Huges Medical Institute</a><br>
                Summer Research Assistant </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="boxes">
        <div class="top">
          <h2>About Me </h2>
          <div class="fR"><a href="#">Edit</a></div>
          <div class="clear"></div>
        </div>
      <div class ="aboutme" id="aboutme">
        <div class="bottom">
          <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
            <tr>
              <td> <div class="aboutme" id="aboutme"> <?php echo $model->aboutMe; ?> </div> </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="boxes">
        <div class="top">
          <h2>Skills &amp; Expertise </h2>
          <div class="fR"><a href="#">Edit</a></div>
          <div class="clear"></div>
        </div>
        <div class="bottom">
          <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
            <tr>
              <td class="paddL">Data Analytics </td>
              <td width="80" class="txtCenter"><a href="#">Remove</a></td>
              </tr>
            <tr>
              <td class="paddL">Bioinformatics</td>
              <td class="txtCenter"><a href="#">Remove</a></td>
              </tr>
            <tr>
              <td class="paddL">GA Algorithms </td>
              <td class="txtCenter"><a href="#">Remove</a></td>
            </tr>
            <tr>
              <td class="paddL">Web Development </td>
              <td class="txtCenter"><a href="#">Remove</a></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="boxes">
        <div class="top">
          <h2>Contact Me </h2>
          <div class="fR"><a href="#">Edit</a></div>
          <div class="clear"></div>
        </div>
        <div class="bottom">
          <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
            <tr>
              <td>em. Ut rutrum condimentum nulla quis posuere. Vivamus quam nisl, ultricies feugiat iaculis a, bibendum a justo. In eu metus ultricies ante imperdiet dapibus. </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="boxes">
        <div class="top">
          <h2>Publications</h2>
          <div class="fR"><a href="#">Edit</a></div>
          <div class="clear"></div>
        </div>
        <div class="bottom">
          <table width="100%" cellpadding="0" cellspacing="1" class="listTable">
            <tr>
              <td> Donec consectetur, eros id egestas venenatis, lacus urna commodo nibh, vel feugiat nibh dui vel augue. Integer ut dui eget eros placerat vehicula imperdiet et enim. Etiam pretium tellus vel velit volutpat sit amet ornare libero condimentum. Etiam sodales volutpat metus sit amet porttitor. Integer eu dui sit amet risus eleifend adipiscing. </td>
            </tr>
          </table>
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