<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="<?=$globvars['meta']['description']; ?>">
    <meta name="keywords" content="<?=$globvars['meta']['keywords']; ?>">
    <meta name="author" content="<?=$globvars['meta']['author']; ?>">
    <meta name="robots" content="<?=$globvars['meta']['robots']; ?>">

	<link rel="stylesheet" href="<?=$globvars['site_path'];?>/core/layout/wiz_mdsbe/style.css" type="text/css" />
	<title><?=$globvars['meta']['page_title']; ?></title>
</head>
<body>
	<div id="content">
		<div id="header">
	  <div id="logo">
				<h1><a href="#">MD <span class="title">SBE</span></a></h1>
			  <p>MoradaDigital's Sitebuilder Environment</p>
		  </div>
		</div>		
		<div id="tabs">
			<ul>
            <?php
			if (isset($menu)):
				for($i=0;$i<count($menu);$i++):
					if ($i==$step):
						echo '<li><a href="'.$menu[$i]['link'].'" class="current" >'.$menu[$i]['text'].'</a></li>';
					else:
						echo '<li><a href="'.$menu[$i]['link'].'" >'.$menu[$i]['text'].'</a></li>';
					endif;
				endfor;
			else:
			?>
			<div style="height:32px"></div>
            <?php			
			endif;
			?>	
		  	</ul>
			<div id="search"><div style="color:#003333"><?=$globvars['info'];?></div></div>            
		</div>
        <div style="height:30px"></div>
		<div class="gboxtop"></div>
		<div class="gbox">
			<p><?=$globvars['warnings'];?></p>
	  </div>
		<div class="left">
        	<div class="boxtop"></div>
            <div class="box">
			<?php
			if ($globvars['error']['flag']):
				include($globvars['local_root'].'core/error/error.php');
			else:
				include($globvars['local_root'].$globvars['module']['location']);
			endif;
            ?></div>
        </div>
		<div class="footer">
			<p>&copy; Copyright 2008 MoradaDigital</p>
	  </div>
	</div>
</body>
</html>