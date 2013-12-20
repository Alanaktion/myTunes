<!doctype html>
<html>
<head>
	<title>myTunes</title>
	<link rel="shortcut icon" href="img/icon.png">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/jplayer-2.2.0/jquery.jplayer.min.js"></script>
	<script src="js/jplayer-2.2.0/add-on/jplayer.playlist.min.js"></script>
	<script src="js/img-preload.php"></script>
<?php
	flush();
	require "playlist.php";
?>
	<script type="text/javascript">//<![CDATA[
	$(document).ready(function(){
		new jPlayerPlaylist({
			jPlayer: '#player-core',
			cssSelectorAncestor: '#player-ui'
		},
<?php echo json_encode($playlist); ?>
		,{
			swfPath: 'js/jplayer-2.2.0',
			supplied: 'mp3,m4a',
			wmode: 'window'
		});
	});
	//]]></script>
</head>
<body>
	<div id="player-core" class="jp-jplayer"></div>
	<div id="player-ui" class="jp-audio">
		<div class="jp-type-playlist">
			<div class="jp-gui jp-interface">
				<ul class="jp-controls">
					<li><a href="javascript:void();" class="jp-previous" tabindex="1">previous</a></li>
					<li><a href="javascript:void();" class="jp-play" tabindex="1">play</a></li>
					<li><a href="javascript:void();" class="jp-pause" tabindex="1">pause</a></li>
					<li><a href="javascript:void();" class="jp-next" tabindex="1">next</a></li>
					<!--<li><a href="javascript:void();" class="jp-stop" tabindex="1">stop</a></li>-->
				</ul>
				<div class="jp-volume-bar">
					<div class="jp-volume-bar-value"></div>
				</div>
				<div class="track-window-container">
					<div class="track-window">
						<div class="jp-progress">
							<div class="jp-seek-bar">
								<div class="jp-play-bar"></div>
							</div>
						</div>
						<div class="jp-time-holder">
							<div class="jp-current-time"></div>
							<div class="jp-duration"></div>
						</div>
						<ul class="jp-toggles">
							<li><a href="javascript:void();" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
							<li><a href="javascript:void();" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
							<li><a href="javascript:void();" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
							<li><a href="javascript:void();" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="jp-playlist">
				<ul>
					<li></li>
				</ul>
			</div>
			<div class="jp-no-solution">
				<span>Update Required</span>
				To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
			</div>
		</div>
	</div>
</body>
</html>