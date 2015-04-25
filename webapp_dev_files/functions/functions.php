<?php
function session_setup($globvars,$url){
$dim=array("&SID=","?SID=","&amp;SID=","&#63;SID=");
$text = str_replace($dim, "", $url);

if (isset($_SESSION['user'])): // user logged in SID must be present
	$sid=$_GET['SID'];
	if (strpos("-".$url,"?") or strpos("-".$url,"&#63;")):
		$url.= "&SID=".$sid;
	else:
		$url.= "?SID=".$sid;
	endif;
endif;
$lang=$globvars['language']['main'];
if (isset($_GET['lang'])):
	$lang=$_GET['lang'];
	$lg=explode(";",$globvars['language']['available']);
	if (in_array($lang,$lg)===false):
		$lang=$globvars['language']['main'];
	endif;
endif;
if (strpos("-".$url,"?") or strpos("-".$url,"&#63;")):
	$url.= "&lang=".$lang;
else:
	$url.= "?lang=".$lang;
endif;


return $url;
};
?>