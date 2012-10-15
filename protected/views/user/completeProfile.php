 <div id="Content">
    <h4>Welcome to IdeaReef, <?php echo $model->firstName . ' ' . $model->lastName; ?>! </h4>
    <p>A confirmation e-mail will be sent to your address shortly.</p>
    <div class="bottom">
      <div class="floatLeft">
        <div class="inside">
          <div class="bottom">
            <div class="bk" id="step1">
              <div class="fLeft">
                <h6>Lets begin by building your IdeaReef Profile </h6>
                <div id="data">
              <?php
              
              $this->renderPartial('changeUsername', array('model' => $model, 'profileLink' => $profileLink));
              
              ?>
                  </div>
              </div>
              <div class="fRight">
                <input name="Submit" type="submit" class="smBlueBtn" value="Edit my Pavillion">
              </div>
              <div class="clear"></div>
            </div>
            <div class="bk">
              <div class="fLeft" style="width:400px;">
                <h6>Next, let's find your friends and favorite companies </h6>
                <p>Connecting to 3 or more companies will earn you a second badge and allow you to start making money by referring friends to go to your favorite businesses</p>
                <p class="imgNxt"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png" alt=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png" alt=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png" alt=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png" alt=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image.png" alt=""></p>
              </div>
              <div class="fRight">
                <input name="Submit2" type="submit" class="smBlueBtn" value="Search for friends &amp; companies">
              </div>
              <div class="clear"></div>
            </div>
            <div>
              <div class="fLeft" style="width:350px;">
                <h6>Last, lets spread the word about IdeaReef! </h6>
                <p>Referring new friends will earn you a third badge and allow you to earn more money through refferal system. </p>
              </div>
              <div class="fRight">
                <input name="Submit" type="submit" class="smBlueBtn" value="Refer your friends">
              </div>
              <div class="clear"></div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
      <div class="floatRight">
        <div>
          <div class="testiText"> With IdeaReef I  earned money by referring my friends to check out my favorite bar in downtown Binghamton</div>
          <div class="testiname"> <strong>Chris</strong>, BU Senior '12</div>
        </div>
        <div>
          <p><a href="#" class="smBlueBtn">Sign up for ideareef </a> </p>
          <p class="txtCenter"><a href="#">Learn how it works? </a></p>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>