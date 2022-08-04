<?php

session_start();
require_once 'functions.php';

$db = getDb();

if(isset($_POST['season']) && isset($_POST['premier']) && isset($_POST['runners-up']) && isset($_POST['score'])) {
    $getSeason = filter_var($_POST['season'], FILTER_VALIDATE_INT);
    $getPremier = filter_var($_POST['premier'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $getRunnersUp = filter_var($_POST['runners-up'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $getScore = filter_var($_POST['score'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    sendData($db, $getSeason, $getPremier, $getRunnersUp, $getScore);
}

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

    <section>
        <div class="form-box">
            <p>What was your favourite AFL GF? Fill in the form below to let us know!</p>
            <form action='index.php' method='POST'>
                <label for='season'>What year was the final played?</label><br>
                <input type='text' id='season' name='season'/><br><br>
                <label for='premier'>Who won the flag?</label><br>
                <input type='text' id='premier' name='premier'/><br><br>
                <label for='runners-up'>Who did they play?</label><br>
                <input type='text' id='runners-up' name='runners-up'/><br><br>
                <label for='score'>What was the score? (GG.PP (TOTAL) d. GG.PP (TOTAL))</label><br>
                <input type='text' id='score' name='score'/><br><br>
                <input type='submit'/>
            </form>
        </div>
        <br>
    </section>
		</main>

</html>