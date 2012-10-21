<div id="InnerContent">
<div class="">
  <div class="boxes">
    <h5 class="settings">My Settings </h5>
    <div class="clear"></div>
    </div>
  <div class="bottomArea innerMargin">
    <div class="topmenu">
      <ul>
        <li><a id="myHeader1" href="javascript:showonlyone('newboxes1');">Notification</a></li>
        <li><a id="myHeader2" href="javascript:showonlyone('newboxes2');">News Feed</a></li>
        <li><a id="myHeader3" href="javascript:showonlyone('newboxes3');">Email</a></li>
        
      </ul>
    </div>
      <div id="currentTab">
          
          <div id="profilePassword" class="profile">
    <div id="profilePw" class="profile Select"><label for="passwordlastset">
Password: <?php $output = ($model->lastPasswordChanged==NULL)? "never changed." : "last changed on " .$model->lastPasswordChanged->dateChanged;
echo $output;?></label><?php
                        echo CHtml::ajaxLink(
                                'Change Password', array('user/changepassword'), array('success' => 'js:function(data) {                    
                                jQuery("div#passwordForm").html(data);}',
                            //'update'=>'#successMessage',
                            //'beforeSend' => 'function() {alert("testing");}',
                            //'validated' => 'function() {$("div#load").removeClass("loading");}',
                            //'complete' => 'function() {$("div#load").removeClass("loading");}',
                            'type' => 'POST',
                            'cache' => 'false',
                                ), array('style' => 'float:right')
                        );
                        ?>
    </div>
              <div id="passwordForm">
                  <?php if(Yii::app()->user->hasFlash('success')): ?>
    
<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('success'); ?>
</div>
                  <?php endif; ?>
                  
              </div>
              
    </div>
          
	<div id="newboxes1" class="newboxes">
    <div class="inside">
	 <h6>You</h6>
      <table cellpadding="0" cellspacing="1" class="HomeTable extra">
        <tr>
          <td width="10"><input type="checkbox" name="checkbox" value="checkbox"></td>
          <td>New Participants to a competition </td>
          </tr>
        <tr>
          <td><input type="checkbox" name="checkbox2" value="checkbox"></td>
          <td>Message from Competition List </td>
          </tr>
        <tr>
          <td><input type="checkbox" name="checkbox3" value="checkbox"></td>
          <td>New votes for your solutions </td>
          </tr>
      </table>
      <h6>Friends </h6>
      <table cellpadding="0" cellspacing="1" class="HomeTable extra">
        <tr>
          <td width="10"><input type="checkbox" name="checkbox4" value="checkbox"></td>
          <td>New Participants to a competition </td>
        </tr>
        <tr>
          <td><input type="checkbox" name="checkbox22" value="checkbox"></td>
          <td>Message from Competition List </td>
        </tr>
        <tr>
          <td><input type="checkbox" name="checkbox32" value="checkbox"></td>
          <td>New votes for your solutions </td>
        </tr>
      </table>
    </div>
	</div>
	<div id="newboxes2"class="newboxes"  style="display:none;">
	<div class="inside">
      <h6>News Feed 
      </h6>
      <table cellpadding="0" cellspacing="1" class="HomeTable extra">
        <tr>
          <td width="10"><input type="checkbox" name="checkbox2" value="checkbox"></td>
          <td>Message from Competition List </td>
          </tr>
        <tr>
          <td><input type="checkbox" name="checkbox3" value="checkbox"></td>
          <td>New votes for your solutions </td>
          </tr>
      </table>
      <h6>Friends </h6>
      <table cellpadding="0" cellspacing="1" class="HomeTable extra">
        <tr>
          <td width="10"><input type="checkbox" name="checkbox4" value="checkbox"></td>
          <td>New Participants to a competition </td>
        </tr>
        <tr>
          <td><input type="checkbox" name="checkbox22" value="checkbox"></td>
          <td>Message from Competition List </td>
        </tr>
      </table>
    </div>
	</div>
	<div id="newboxes3"class="newboxes"  style="display:none;">
	<div class="inside">
      <h6>Email
      </h6>
      <table cellpadding="0" cellspacing="1" class="HomeTable extra">
        <tr>
          <td width="10"><input type="checkbox" name="checkbox" value="checkbox"></td>
          <td>New Participants to a competition </td>
          </tr>
        <tr>
          <td><input type="checkbox" name="checkbox2" value="checkbox"></td>
          <td>Message from Competition List </td>
          </tr>
        <tr>
          <td><input type="checkbox" name="checkbox3" value="checkbox"></td>
          <td>New votes for your solutions </td>
          </tr>
      </table>
      </div>
	  </div>
  </div>
  </div>
</div>
<div class="clear"></div>
  </div>