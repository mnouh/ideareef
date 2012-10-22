<?php 

   $app_id = "107950266030152";
   $app_secret = "2574b6d33249b23be143901b121aa3a8";
   $my_url = "beta.ideareef.com";

   session_start();
   
   $code = $_REQUEST["code"];

   if(empty($code)) 
   {
      $_SESSION['state'] = md5(uniqid(rand(), TRUE)); // CSRF protection
     $dialog_url = "https://www.facebook.com/dialog/oauth?client_id=" 
       . $app_id . "&redirect_uri=" . urlencode($my_url) . "&state="
       . $_SESSION['state'] . "&scope=email,read_stream,publish_stream";

     echo("<script> top.location.href='" . $dialog_url . "'</script>");
   }


 ?>