<?php

// Reads files. That's all.
if(isset($_GET['f'])) {
	if(strpos($_GET['f'],'.mp3') || strpos($_GET['f'],'.m4a')) {
		readfile($_GET['f']);
	} else {
		header('HTTP/1.0 403 Forbidden');
	}
} else {
	header('HTTP/1.0 404 Not Found');
}
