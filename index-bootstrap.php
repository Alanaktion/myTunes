<!doctype html>
<html>
<head>
	<title>myTunes</title>
	<link rel="shortcut icon" href="img/icon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style-bootstrap.css">
</head>
<body>
	<div id="player-core" class="jp-jplayer"></div>
	<div id="player-ui" class="jp-audio">
		<div class="jp-type-playlist">
			<div class="jp-gui jp-interface">
				<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
					<div class="btn-group jp-controls navbar-btn navbar-left">
						<button type="button" class="btn btn-default jp-previous"><span class="glyphicon glyphicon-step-backward"></span></button>
						<button type="button" class="btn btn-default jp-play"><span class="glyphicon glyphicon-play"></span></button>
						<button type="button" class="btn btn-default jp-pause"><span class="glyphicon glyphicon-pause"></span></button>
						<button type="button" class="btn btn-default jp-stop"><span class="glyphicon glyphicon-stop"></span></button>
						<button type="button" class="btn btn-default jp-next"><span class="glyphicon glyphicon-step-forward"></span></button>
					</div>
					<div class="jp-volume-bar progress navbar-left" style="width: 140px;">
						<div class="jp-volume-bar-value progress-bar"></div>
					</div>
					<div class="btn-group jp-toggles navbar-btn navbar-right">
						<button type="button" class="btn btn-default jp-shuffle"><span class="glyphicon glyphicon-random"></span></button>
						<button type="button" class="btn btn-default active jp-shuffle-off"><span class="glyphicon glyphicon-random"></span></button>
						<button type="button" class="btn btn-default jp-repeat"><span class="glyphicon glyphicon-repeat"></span></button>
						<button type="button" class="btn btn-default active jp-repeat-off"><span class="glyphicon glyphicon-repeat"></span></button>
					</div>
				</nav>
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
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jplayer-2.2.0/jquery.jplayer.min.js"></script>
	<script src="js/jplayer-2.2.0/add-on/jplayer.playlist.min.js"></script>
	<script src="js/img-preload.php"></script>
<?php
	flush();
	// Build playlist object
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
</body>
</html>