// preloads all PNGs in the img directory
if (document.images) {
<?php
	$images = glob('../img/*.png');
	foreach($images as $i=>$img) {
		echo "img{$i} = new Image();";
		echo "img{$i}.src = '." . ltrim($img, ".") . "';";
	}
?>
}