<?php
/**
 * CS3Upload class file
 *
 * CS3Upload generates a HTML POST Form that allows a user to select a file and
 * upload directly to an Amazon S3 Bucket. This extension requires the ES3 extension
 * to work.
 *
 * @version 0.1
 *
 * @uses ES3 (S3 Extension)
 * @author John Judd (john.judd@codeboss.net)
 * @copyright Copyright &copy; 2011 John Judd
 */
class CS3Upload  extends CApplicationComponent
{
	public $aKey; // AWS Access key
	public $sKey; // AWS Secret key
	public $bucket;

	public function Form($bucket = "", $uri="", $redirect="", $maxFileSize=10242880)
	{
		if ($bucket === "")
			$bucket = $this->bucket;

		if ($redirect === "")
		{
			$redirect = '201';
			$success_action = 'success_action_status';
		}
		else
		{
			$success_action = 'success_action_redirect';
		}
                
                
		$params = Yii::app()->s3->getHttpUploadPostParams($bucket, $uri, S3::ACL_PRIVATE, 3600, $maxFileSize, $redirect);

		return '<form action="https://'.$bucket.'.s3.amazonaws.com/" method="post" enctype="multipart/form-data">
				  <input type="hidden" name="key" value="'.$params->key.'">
				  <input type="hidden" name="AWSAccessKeyId" value="'.$params->AWSAccessKeyId.'">
				  <input type="hidden" name="acl" value="'.$params->acl.'">
				  <input type="hidden" name="'.$success_action.'" value="'.$redirect.'">
				  <input type="hidden" name="policy" value="'.$params->policy.'">
				  <input type="hidden" name="signature" value="'.$params->signature.'">
				  <!-- Include any additional input fields here -->

				  Please choose the product you want to submit and click upload:
				  <br /><br />
				  <input name="file" type="file">
				  <br /><br />
				  <input type="submit" value="Upload File to S3">
				</form>';
	}
}
?>
