<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="description" content="<?=$globvars['meta']['description']; ?>">
    <meta name="keywords" content="<?=$globvars['meta']['keywords']; ?>">
    <meta name="author" content="<?=$globvars['meta']['author']; ?>">
    <meta name="robots" content="<?=$globvars['meta']['robots']; ?>">

	<link rel="stylesheet" href="<?=$globvars['site_path'];?>/core/layout/mdsbe/style.css" type="text/css" />
	<title>MD-SBE</title>
</head>
<body>
	<div id="content">
		<div id="header">
	  <div id="logo">
				<h1><a href="#" title="Centralized Internet Content">MD <span class="title">SBE</span></a></h1>
			  <p>MoradaDigital's Sitebuilder Environment</p>
		  </div>
		</div>
					
		<div id="tabs">
			<ul>	
            <?php
			if (isset($menu)):
				for($i=0;$i<count($menu);$i++):
						echo '<li><a href="'.$menu[$i]['link'].'" >'.$menu[$i]['text'].'</a></li>';
				endfor;
			else:
			?>
			<div style="height:32px">dddd</div>
            <?php			
			endif;
			?>	
			</ul>
			</div>
		<div class="gboxtop"></div>
		<div class="gbox"><?=$globvars['warnings'];?></div>
		
		<div class="left">
			<?php
			if ($globvars['error']['flag']):
				include($globvars['local_root'].'core/error/error.php');
			else:
				include($globvars['local_root'].$globvars['module']['location']);
			endif;
			?>
        </div>
		<div id="right">
            {lateral}</div>
		<div class="footer">
			<p>&copy; Copyright 2008 MoradaDigital</p>
	  </div>
	</div>
</body>
</html>