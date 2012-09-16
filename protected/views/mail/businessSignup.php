<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>
      IdeaReef
    </title>
	<style type="text/css">
	a:hover { text-decoration: none !important; }
	.header h1 {color: #fff !important; font: normal 33px Georgia, serif; margin: 0; padding: 0; line-height: 33px;}
	.header p {color: #dfa575; font: normal 11px Georgia, serif; margin: 0; padding: 0; line-height: 11px; letter-spacing: 2px}
	.content h2 {color:#8598a3 !important; font-weight: normal; margin: 0; padding: 0; font-style: italic; line-height: 30px; font-size: 30px;font-family: Georgia, serif; }
	.content p {color:#1d4272; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 12px;font-family: Georgia, serif;}
	.content a {color: #d18648; text-decoration: none;}
	.footer p {padding: 0; font-size: 11px; color:#fff; margin: 0; font-family: Georgia, serif;}
	.footer a {color: #f7a766; text-decoration: none;}
	</style>
  </head>
  <body style="margin: 0; padding: 0;">
  	<table cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
		  <tr>
                      <td align="center" style="margin: 0; padding: 0; padding: 35px 0">
			    <table cellpadding="0" cellspacing="0" border="0" align="center" width="650" style="font-family: Georgia, serif;" class="header">
			      <tr>
			        <td bgcolor="#FFFFFF" height="115" align="center">
                                                <?php echo CHtml::imageButton('http://localhost/~mnouh/ideareef/images/logo.png', array('type'=>'image')); ?>
            <p style="color: #1d4272; font: normal 11px Georgia, serif; margin: 0; padding: 0; line-height: 11px;"><singleline label="Title">Connect. Compete. Win.</singleline></p>
			        </td>
			      </tr>
				  <tr>
					  <td style="font-size: 1px; height: 5px; line-height: 1px;" height="5">&nbsp;</td>
				  </tr>	
				</table><!-- header-->
				<table cellpadding="0" cellspacing="0" border="0" align="center" width="650" style="font-family: Georgia, serif; background: #fff;" bgcolor="#ffffff">
			      <tr>
			        <td width="14" style="font-size: 0px;" bgcolor="#ffffff">&nbsp;</td>
					<td width="620" valign="top" align="left" bgcolor="#ffffff" style="font-family: Georgia, serif; background: #fff; padding: 0 0 10px;" class="content">
						<table cellpadding="0" cellspacing="0" border="0" style="color: #717171; font: normal 11px Georgia, serif; margin: 0; padding: 0;" width="620">
						<tr>
							<td style="padding: 25px 0 5px; border-bottom: 2px solid #1d4272;font-family: Georgia, serif; " valign="top" align="center">
								<h3 style="color:#767676; font-weight: normal; margin: 0; padding: 0; font-style: italic; line-height: 13px; font-size: 13px;">~ <?php echo date("F j, Y,"); ?> ~</h3>
							</td>
						</tr>
						<repeater>
						<tr>
							<td valign="top" style="padding: 0; margin: 0">
								<table cellpadding="0" cellspacing="0" border="0" style="color: #1d4272; font: normal 11px Georgia, serif; margin: 0; padding: 0;" width="620">	
								<tr>
									<td style="padding: 25px 0 0;" align="left">			
										<h2 style="color:#1d4272 !important; font-weight: normal; margin: 0; padding: 0; font-style: italic; line-height: 30px; font-size: 20px;font-family: Georgia, serif; "><singleline label="Title">Welcome <?php echo $model->name;?> to IdeaReef</singleline></h2>
									</td>
								</tr>
								<tr>
									<td style="padding: 15px 0 15px; border-bottom: 1px solid #1d4272;" valign="top"> 										
										<img width="100" style="padding-bottom: 15px; padding-left: 15px;" align="right" editable="true" label="Image" />
										<p><multiline label="Description">We hope you enjoy your stay, please copy the verification code: <?php echo $model->verifyCode; ?><br>Please copy this code, and enter it into the account verification page. <br>Thank You</multiline></p>
									</td>
								</tr>
								</table>
							</td>
						</tr>		
						</repeater>
						</table>
						<br /><br />	
					</td>
					<td width="16" bgcolor="#ffffff" style="font-size: 0px; font-family: Georgia, serif; background: #fff;">&nbsp;</td>
			      </tr>
				</table><!-- body -->
				<table cellpadding="0" cellspacing="0" border="0" align="center" width="650" style="font-family: Georgia, serif; line-height: 10px;" bgcolor="#698291" class="footer">
			      <tr>
			        <td bgcolor="#1d4272" align="center" style="padding: 15px 0 10px; font-size: 11px; color:#fff; margin: 0; line-height: 1.2;font-family: Georgia, serif;" valign="top">
						<p style="padding: 0; font-size: 11px; color:#fff; margin: 0; font-family: Georgia, serif;"> <singleline label="Title"><?php echo $model->name; ?>,</singleline></p>
						<p style="padding: 0; font-size: 11px; color:#fff; margin: 0 0 8px 0; font-family: Georgia, serif;">Having trouble reading this? <webversion style="color: #f7a766; text-decoration: none;">View it in your browser</webversion>. <unsubscribe style="color: #f7a766; text-decoration: none;">Unsubscribe</unsubscribe> instantly.</p>
					</td>
			      </tr>
				</table><!-- footer-->
		  	</td>
		</tr>
    </table>
  </body>
</html>