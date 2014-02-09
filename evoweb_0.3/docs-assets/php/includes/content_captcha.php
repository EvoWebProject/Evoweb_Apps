<div id="captcha" style="margin-left:auto; margin-right:auto; width:50%; text-align:center;">
 <?php
  require_once('docs-assets/php/captcha/recaptchalib.php');
  $publickey = "6Leb8-0SAAAAAOTip-WvbncBm0hdDDfnfNUS2PAN"; // you got this from the signup page
  echo recaptcha_get_html($publickey); 
 ?>
 </div>
 <br><br>