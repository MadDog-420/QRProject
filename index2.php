<?php

	function gen_code($i){
		$number=$i;
		$length=7;
		$code=substr(str_repeat(0, $length).$number, - $length);
		return $code;
	}

	echo gen_code(1);

	$dest = imagecreatefrompng('imhg\label2.png');

	for($i=1;$i<=1;$i++){
		$code=gen_code($i);

		$src=imagecreatefrompng("temp/testf87b6ee8a426bd67735be6c257a924a9.png");
		imagealphablending($dest, false);
		imagesavealpha($dest, true);

		imagecopymerge($dest, $src, 244, 376, 0, 0, 450, 450, 100); //have to play with these numbers for it to work for you, etc.

		header('Content-Type: image/png');
		
		//imagepng($dest, "imhg/".$code.".png");
		imagepng($dest, "imhg/face.png");

		imagedestroy($dest);
		imagedestroy($src);
	}
?>