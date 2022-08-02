<?php

session_start();
require_once 'functions.php';


$db = getDb();
$finals = getData($db);

$winners = getTeamData($finals);

?>

<html lang="en">
<head>
	<title>AFL Grandfinal Winners</title>
	<link href="normalize.css" type="text/css" rel="stylesheet" />
	<link href="style.css" type="text/css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<main class="display">
	<header id="header">
        <nav>
            <ul id="menu">
                <li><a href=https://www.afl.com.au/fixture?Competition=1&CompSeason=43&MatchTimezone=MY_TIME&Regions=3&ShowBettingOdds=1&GameWeeks=21&Teams=1&Venues=13#byround target="_blank">Fixtures</a></li>
                <li><a href=https://www.afl.com.au/ladder?Competition=1&CompSeason=43&GameWeeks=608&ShowBettingOdds=1&Live=0 target="_blank">Ladder</a></li>
                <li><a href=https://www.afl.com.au/stats/?category=Key+Stats&seasonId=43&roundId=-1&roundNumber=0&sortColumn=dreamTeamPoints&sortDirection=descending&positions=All&teams=All&benchmarking=false&dataType=totals&playerOneId=null&playerTwoId=null target="_blank">Player Stats</a></li>
            </ul>
        </nav>
		<h1 class="page-heading">AFL Grand Final Winners</h1>
    </header>

    <h2>2001 - 2021</h2>
    <div class="display-div">
        <?php echo $winners;?>
    </div>

    <div>
        <p>What was your favourite AFL GF? Fill in the form below to let us know!</p>
        <form action='index.php' method='POST'>
            <label for='search'>Season (year)</label>
            <input type='text' id='season' name='season'/><br>
            <label for='search'>Who won the flag?</label>
            <input type='text' id='club_name' name='club_name'/><br>
            <label for='search'>Who did they play?</label>
            <input type='text' id='runners-up' name='runners-up'/><br>
            <label for='search'>What was the score?</label>
            <input type='text' id='score' name='score'/><br>
            <input type='submit' />
        </form>
    </div>
		</main>

</html>