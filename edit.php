<?php

require_once 'functions.php';

$id = targetID();
$db = getDb();
$singleData = getSingleData($db, $id);
$prefillEditData = prefillEditData($singleData);

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
                <li><a href=index.php target="_blank">Home</a></li>
                <li><a href=https://www.afl.com.au/fixture?Competition=1&CompSeason=43&MatchTimezone=MY_TIME&Regions=3&ShowBettingOdds=1&GameWeeks=21&Teams=1&Venues=13#byround target="_blank">Fixtures</a></li>
                <li><a href=https://www.afl.com.au/ladder?Competition=1&CompSeason=43&GameWeeks=608&ShowBettingOdds=1&Live=0 target="_blank">Ladder</a></li>
                <li><a href=https://www.afl.com.au/stats/?category=Key+Stats&seasonId=43&roundId=-1&roundNumber=0&sortColumn=dreamTeamPoints&sortDirection=descending&positions=All&teams=All&benchmarking=false&dataType=totals&playerOneId=null&playerTwoId=null target="_blank">Player Stats</a></li>
            </ul>
        </nav>
		<h1 class="page-heading">Edit a final</h1>
    </header>
    <section>
        <div class="form-box">
            <?php echo $prefillEditData;?>
        </div>
        <br>
    </section>
</main>

</html>