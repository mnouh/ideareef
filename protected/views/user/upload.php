Testing
<?php echo Yii::app()->s3upload->Form('test', 'userProfileImages', 'ok', '10000'); ?>


<form action="https://'.test.'.s3.amazonaws.com/" method="post" enctype="multipart/form-data">
				  <input type="hidden" name="key" value="stuff">
				  <input type="hidden" name="AWSAccessKeyId" value="test">
				  <input type="hidden" name="acl" value="test">
				  <input type="hidden" name="ok" value="ok">
				  <input type="hidden" name="policy" value="test">
				  <input type="hidden" name="signature" value="ok">
				  <!-- Include any additional input fields here -->

				  Please choose the product you want to submit and click upload:
				  <br /><br />
				  <input name="file" type="file">
				  <br /><br />
				  <input type="submit" value="Upload File to S3">
				</form>