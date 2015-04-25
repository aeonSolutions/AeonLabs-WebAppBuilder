<?php
if (isset($_POST['password'])):
	include($globvars['local_root'].'core/authoring/authoring.php');
endif;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MD-SBE Login</title>
<style type="text/css">
<!--
body {
	background-color: #124499;
}

h1{
font-family:Arial, Helvetica, sans-serif;
font-weight:bold;
font-size: 2.0em;
color:#E86C22;
}
h2{
font-family: Arial, Helvetica, sans-serif;
font-size: 1.0em;
color:#FFFFFF;
}
p{
font-family: Arial, Helvetica, sans-serif;
font-size: 0.8em;
color:#FFFFFF;
}

.input{
height:25px;
border-color:#000000;
border-bottom-style:double;
font-size:1.2em;
}
</style></head>

<body>
<table width="100%" border="0" cellpadding="30">
  <tr>
    <td><h1 style="color:#CCCCCC"><img src="<?=$globvars['site_path']?>/core/layout/login/logo.png" width="80" height="62" align="absmiddle" />Morada Digital</h1></td>
    <td width="20" rowspan="2"><img src="<?=$globvars['site_path']?>/core/layout/login/vert_bar.png" width="20" height="500" /></td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td width="49%" align="right"><p><font style="color:#82B3F6; font-family:Geneva, Arial, Helvetica, sans-serif; font-weight:bold; font-size:2em;">MD-SBE v
      <?=$globvars['version'];?>
      </font><br />
      <font style="color:#82B3F6; font-family:Geneva, Arial, Helvetica, sans-serif; font-size:0.8em;">MoradaDigital's SiteBuilder Environment</font>
    </p>
      <h1>Login</h1>
      <p align="right">To access SiteBuilder Environment<br />
      please enter your ID and password</p>
    <p>&nbsp;</p></td>
    <td width="49%"><form id="form1" name="form1" method="post" action="<?=$_SERVER['REQUEST_URI'];?>">
      <h2>ID<br />
        <label>
          <input name="username" type="text" id="username" class="input" size="25" maxlength="25" /> 
          </label>
      </h2>
      <h2>Password<br />
          <input name="password" type="password" id="password" class="input" size="25" maxlength="25" /> 
          <input type="image" src="<?=$globvars['site_path']?>/core/layout/login/button.png" width="23" height="23" />          <br />
      </h2>
    </form>
      <p style="color:#FF0000"><?=$globvars['warnings'];?></p>
      <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
