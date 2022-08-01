<?php

$db = new PDO('mysql:host=db; dbname=afl', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `Season`, `Premier`, `Runner-Up`, `Score`, `Image` FROM `grandfinals`;");
$query->execute();

$finals = $query->fetchAll();

//create individual premiership data blocks
//create display function that echos out the data

function getTeamData(array $finals): string {
    $team = '';
    foreach($finals as $final) {
        if ($final === []) {
            return 'missing data';
        } else {
            $team .= '<div class="winners-box">' .
                        '<img src="'.$final['Image'].'" alt="Grandfinal team photo" class="winners-image">' . '<div class="match-stats"><h6 class="team-name">' . $final['Premier'] . '</h6><p>' . $final['Season'] . '</p><p>' . $final['Runner-Up'] . '</p><p>' . $final['Score'] . '</p></div></div>';
        }
    } 
    return $team;
}

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
		</main>

</html>