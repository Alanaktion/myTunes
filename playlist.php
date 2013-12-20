<?php
include("config.php");

// Initialize Property List Parser
include("plist.class.php");
$parser = new plistParser();

// Load Library
$library = $parser->parseFile($itunes_library);
//file_put_contents('library_array.txt',print_r($library,1));

$tracks = $library['Tracks'];

// Loop through all tracks
$playlist = array();
foreach($tracks as $i=>$track) {

	// Skip purchased tracks (they're encrypted :/)
	if(!empty($track['Purchased']))
		continue;
	
	// Get audio tracks only
	if(empty($track['Has Video']) && !empty($track["Location"])) {
		$location = ltrim(rawurldecode($track['Location']),"file:///localhost/");
		$extension = pathinfo($location, PATHINFO_EXTENSION);
		
		// Build display title
		if(!empty($track['Artist']) && !empty($track['Album']))
			$title = $track['Artist'] . " - " . $track['Album'] . " - " . $track['Name'];
		elseif(!empty($track['Artist']))
			$title = $track['Artist'] . " - " . $track['Name'];
		else
			$title = $track['Name'];
		
		if(!empty($extension)) {
			$playlist[] = array(
				"title" => $title,
				$extension => "loader.php?f=" . urlencode($location),
			);
		}
		
		unset($location,$extension);
	}
	
}

// Sort by Artist
$titles = array();
foreach ($playlist as $i=>$track) {
    $titles[$i] = $track['title'];
}

array_multisort($playlist, $titles);