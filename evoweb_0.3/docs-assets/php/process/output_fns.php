
<?php

function do_html_header($title) {
  // print an HTML header
?>
  <html>
  <head>
    <title><?php echo $title;?></title>
    <style>
      body { font-family: Arial, Helvetica, sans-serif; font-size: 13px }
      li, td { font-family: Arial, Helvetica, sans-serif; font-size: 13px }
      hr { color: #3333cc; width=300; text-align=left}
      a { color: #000000 }
    </style>
  </head>
  <body>
  <img src="bookmark.gif" alt="Evoweb logo" border="0"
       align="left" valign="bottom" height="55" width="57" />
  <h1>Evoweb</h1>
  <hr />
<?php
  if($title) {
    do_html_heading($title);
  }
}

function do_html_footer() {
  // print an HTML footer
?>
  </body>
  </html>
<?php
}

function do_html_heading($heading) {
  // print heading
?>
  <h2><?php echo $heading;?></h2>
<?php
}

function do_html_URL($url, $name) {
  // output URL as link and br
?>
  <br /><a href="<?php echo $url;?>"><?php echo $name;?></a><br />
<?php
}

function display_site_info() {
  // display some marketing info
?>
<?php
  require("docs-assets/multilangue/langue.php");
?>
  <ul>
  

  
  </ul>

  
  
  
<?php
}

function display_login_form() {
?>
  <p><a href="docs-assets/php/process/register_form.php">Not a member?</a></p>
  <form method="post" action="member.php">

   
     <h2>Enregistrez-vous:</h2>
     <a href="<?php echo $url;?>"><?php echo $name;?></a><br />
   <br>
     <h4>Username:</h4>
     <input type="text" class="form-control" name="username"/>
   <br>
     <h4>Password:</h4>
     <input type="password" class="form-control" name="passwd"/>
   <br>
   
     <input type="submit" class="btn btn-lg btn-primary btn-block" value="Log in"/>
   <br>
   <br>
      <a href="register.php" style="color:grey;">Not already a member ?</a><br>
      <a href="forgot.php" style="color:grey;">Mot de passe oublié ?</a>
 
 </form>
<?php
}

function display_registration_form() {
?>
<h2 style="text-align:center;">Start and download your pack now!</h2>
<br>

 <form method="post" action="docs-assets/php/process/register_new.php">
 
  <a href="forgot.php" style="color:grey;">Already have an Evoweb accout ?</a>
     <h3>Email address:</h3>
     <input type="text" name="email" class="form-control" size="30" maxlength="100"/>
   <br>
     <h3>Preferred username <br />(max 16 chars):</h3>
     
     <input type="text" class="form-control" name="username"
         size="16" maxlength="16"/>
   <br>
     <h3>Password <br />(between 6 and 16 chars):</h3>
     <input type="password" class="form-control" name="passwd"
         size="16" maxlength="16"/>
  <br>
     <h3>Confirm password:</h3>
   <input type="password" name="passwd2" class="form-control" size="16" maxlength="16"/>
  
   <br>
   <br>
     <input type="submit" class="btn btn-lg btn-primary btn-block" value="Register"></td></tr>
     <br>
     <br>
   
      
 </form>
<?php

}

function display_user_urls($url_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $bm_table;
  $bm_table = true;
?>
  <br />
  <form name="bm_table" action="delete_bms.php" method="post">
  <table width="300" cellpadding="2" cellspacing="0">
  <?php
  $color = "#cccccc";
  echo "<tr bgcolor=\"".$color."\"><td><strong>Bookmark</strong></td>";
  echo "<td><strong>Delete?</strong></td></tr>";
  if ((is_array($url_array)) && (count($url_array) > 0)) {
    foreach ($url_array as $url)  {
      if ($color == "#cccccc") {
        $color = "#ffffff";
      } else {
        $color = "#cccccc";
      }
      //remember to call htmlspecialchars() when we are displaying user data
      echo "<tr bgcolor=\"".$color."\"><td><a href=\"".$url."\">".htmlspecialchars($url)."</a></td>
            <td><input type=\"checkbox\" name=\"del_me[]\"
                value=\"".$url."\"/></td>
            </tr>";
    }
  } else {
    echo "<tr><td>No bookmarks on record</td></tr>";
  }
?>
  </table>
  </form>
<?php
}

function display_user_menu() {
  // display the menu options on this page
?>
<hr />
<a href="member.php">Home</a> &nbsp;|&nbsp;
<a href="add_bm_form.php">Add BM</a> &nbsp;|&nbsp;
<?php
  // only offer the delete option if bookmark table is on this page
  global $bm_table;
  if ($bm_table == true) {
    echo "<a href=\"#\" onClick=\"bm_table.submit();\">Delete BM</a> &nbsp;|&nbsp;";
  } else {
    echo "<span style=\"color: #cccccc\">Delete BM</span> &nbsp;|&nbsp;";
  }
?>
<a href="change_passwd_form.php">Change password</a>
<br />
<a href="recommend.php">Recommend URLs to me</a> &nbsp;|&nbsp;
<a href="logout.php">Logout</a>
<hr />

<?php
}

function display_add_bm_form() {
  // display the form for people to ener a new bookmark in
?>
<form name="bm_table" action="add_bms.php" method="post">
<table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
<tr><td>New BM:</td>
<td><input type="text" name="new_url" value="http://"
     size="30" maxlength="255"/></td></tr>
<tr><td colspan="2" align="center">
    <input type="submit" value="Add bookmark"/></td></tr>
</table>
</form>
<?php
}

function display_password_form() {
  // display html change password form
?>
   <br />
   <form action="change_passwd.php" method="post">
   <table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
   <tr><td>Old password:</td>
       <td><input type="password" name="old_passwd"
            size="16" maxlength="16"/></td>
   </tr>
   <tr><td>New password:</td>
       <td><input type="password" name="new_passwd"
            size="16" maxlength="16"/></td>
   </tr>
   <tr><td>Repeat new password:</td>
       <td><input type="password" name="new_passwd2"
            size="16" maxlength="16"/></td>
   </tr>
   <tr><td colspan="2" align="center">
       <input type="submit" value="Change password"/>
   </td></tr>
   </table>
   <br />
<?php
}

function display_forgot_form() {
  // display HTML form to reset and email password
?>
   <br />
   <form action="forgot_passwd.php" method="post">
   <table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
   <tr><td>Enter your username</td>
       <td><input type="text" name="username" size="16" maxlength="16"/></td>
   </tr>
   <tr><td colspan=2 align="center">
       <input type="submit" value="Change password"/>
   </td></tr>
   </table>
   <br />
<?php
}

function display_recommended_urls($url_array) {
  // similar output to display_user_urls
  // instead of displaying the users bookmarks, display recomendation
?>
  <br />
  <table width="300" cellpadding="2" cellspacing="0">
<?php
  $color = "#cccccc";
  echo "<tr bgcolor=\"".$color."\">
        <td><strong>Recommendations</strong></td></tr>";
  if ((is_array($url_array)) && (count($url_array)>0)) {
    foreach ($url_array as $url) {
      if ($color == "#cccccc") {
        $color = "#ffffff";
      } else {
        $color = "#cccccc";
      }
      echo "<tr bgcolor=\"".$color."\">
            <td><a href=\"".$url."\">".htmlspecialchars($url)."</a></td></tr>";
    }
  } else {
    echo "<tr><td>No recommendations for you today.</td></tr>";
  }
?>
  </table>
<?php
}

?>
