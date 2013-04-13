<!doctype html>
<html>
<head>
	<title>myTunes</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/jplayer-2.2.0/jquery.jplayer.min.js"></script>
	<script src="js/jplayer-2.2.0/add-on/jplayer.playlist.min.js"></script>
	<script type="text/javascript">//<![CDATA[

	$(document).ready(function(){
		
		new jPlayerPlaylist({
			jPlayer: '#player-core',
			cssSelectorAncestor: '#player-ui'
		},[
			{
				title:"Cro Magnon Man",
				mp3:"http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3",
				oga:"http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg"
			},
			{
				title:"Your Face",
				mp3:"http://www.jplayer.org/audio/mp3/TSP-05-Your_face.mp3",
				oga:"http://www.jplayer.org/audio/ogg/TSP-05-Your_face.ogg"
			},
			{
				title:"Cyber Sonnet",
				mp3:"http://www.jplayer.org/audio/mp3/TSP-07-Cybersonnet.mp3",
				oga:"http://www.jplayer.org/audio/ogg/TSP-07-Cybersonnet.ogg"
			},
			{
				title:"Tempered Song",
				mp3:"http://www.jplayer.org/audio/mp3/Miaow-01-Tempered-song.mp3",
				oga:"http://www.jplayer.org/audio/ogg/Miaow-01-Tempered-song.ogg"
			},
			{
				title:"Hidden",
				mp3:"http://www.jplayer.org/audio/mp3/Miaow-02-Hidden.mp3",
				oga:"http://www.jplayer.org/audio/ogg/Miaow-02-Hidden.ogg"
			},
			{
				title:"Lentement",
				free:true,
				mp3:"http://www.jplayer.org/audio/mp3/Miaow-03-Lentement.mp3",
				oga:"http://www.jplayer.org/audio/ogg/Miaow-03-Lentement.ogg"
			},
			{
				title:"Lismore",
				mp3:"http://www.jplayer.org/audio/mp3/Miaow-04-Lismore.mp3",
				oga:"http://www.jplayer.org/audio/ogg/Miaow-04-Lismore.ogg"
			},
			{
				title:"The Separation",
				mp3:"http://www.jplayer.org/audio/mp3/Miaow-05-The-separation.mp3",
				oga:"http://www.jplayer.org/audio/ogg/Miaow-05-The-separation.ogg"
			},
			{
				title:"Beside Me",
				mp3:"http://www.jplayer.org/audio/mp3/Miaow-06-Beside-me.mp3",
				oga:"http://www.jplayer.org/audio/ogg/Miaow-06-Beside-me.ogg"
			},
			{
				title:"Bubble",
				free:true,
				mp3:"http://www.jplayer.org/audio/mp3/Miaow-07-Bubble.mp3",
				oga:"http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
			},
			{
				title:"Stirring of a Fool",
				mp3:"http://www.jplayer.org/audio/mp3/Miaow-08-Stirring-of-a-fool.mp3",
				oga:"http://www.jplayer.org/audio/ogg/Miaow-08-Stirring-of-a-fool.ogg"
			},
			{
				title:"Partir",
				free: true,
				mp3:"http://www.jplayer.org/audio/mp3/Miaow-09-Partir.mp3",
				oga:"http://www.jplayer.org/audio/ogg/Miaow-09-Partir.ogg"
			},
			{
				title:"Thin Ice",
				mp3:"http://www.jplayer.org/audio/mp3/Miaow-10-Thin-ice.mp3",
				oga:"http://www.jplayer.org/audio/ogg/Miaow-10-Thin-ice.ogg"
			}

		],{
			swfPath: 'js/jplayer-2.2.0',
			supplied: 'oga, mp3',
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