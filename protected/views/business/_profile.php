<div id="newboxes1" class="newboxes">
                <div class="inside">
                    <h3>Friends that Follow </h3>
                    <div class="friendsFollow">
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-male.gif" alt=""></div>
                        <div class="box"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/no-image-female.gif" alt=""></div>
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="boxes">
                    <div class="top">
                        <h2>Competitions</h2>
                        <div class="number">3145</div>
                        <div class="fR"><a href="#">View All</a></div>
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
                        <h2>Open Surges</h2>
                        <div class="fR"><a href="#">View All</a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom">

                <?php
                $this->widget('zii.widgets.ClistView', array(
                    'dataProvider' => $dataProvider,
                    'itemView' => '_surgeCenter',
                    'sortableAttributes' => array(
                        'endDate',
                        'startDate'
                        )));
                ?>    

                <div class="clear"></div>

            </div>
                </div>
            </div>