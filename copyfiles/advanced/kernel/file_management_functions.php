<?php

function check_files($dir,$filename){

$filename=$dir.'/'.$filename;

$files = glob($dir."/*.*");

$tmp=false;

for($i = 0; $i < count($files); $i++):

	if ($files[$i]==$filename):

		$tmp=true;

	endif;

endfor;

return $tmp;

};



function normalize($text){

// eliminates special characters and convert to lower case a text string

	$dim=array("�","�");

	$text = str_replace($dim, "c", $text);



	$dim=array("�","�","�","�","�","�","�");

	$text = str_replace($dim, "a", $text);



	$dim=array("�","�","�","�");

	$text = str_replace($dim, "e", $text);



	$dim=array("�","�");

	$text = str_replace($dim, "i", $text);



	$dim=array("�","�","�","�","�","�");

	$text = str_replace($dim, "o", $text);



	$text=strtolower($text);

	$text =str_replace(" ","",$text);

return $text;

};



?>



