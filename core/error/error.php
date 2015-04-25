<?php
if ($globvars['error']['type']=='question'):
	$img=$site_path.'/core/error/images/pergunta.jpg';
elseif ($globvars['error']['type']=='exclamation'):
	$img=$site_path.'/core/error/images/atencao.gif';
else:
	$img=$site_path.'/core/error/images/atencao.gif';
endif;
?>
<table width="400" border="0" align="center">
  <tr>
    <td width="100" valign="top"><img src=<?=$img;?> width="100"></td>
    <td align="center" valign="middle"><h2><?=$globvars['error']['message'];?></h2></td>
  </tr>
</table>

