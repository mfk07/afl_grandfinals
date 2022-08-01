<?php

$db = new PDO('mysql:host=db; dbname=afl', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `Season`, `Premier`, `Runner-Up`, `Score`, `Image` FROM `grandfinals`;");
$query->execute();

$teams = $query->fetchAll();

echo '<pre>';
var_dump($teams);
echo '</pre>';

// fixtures link https://www.afl.com.au/fixture?Competition=1&CompSeason=43&MatchTimezone=MY_TIME&Regions=3&ShowBettingOdds=1&GameWeeks=21&Teams=1&Venues=13#byround
// ladder link https://www.afl.com.au/ladder?Competition=1&CompSeason=43&GameWeeks=608&ShowBettingOdds=1&Live=0
// player stat link https://www.afl.com.au/stats/?category=Key+Stats&seasonId=43&roundId=-1&roundNumber=0&sortColumn=dreamTeamPoints&sortDirection=descending&positions=All&teams=All&benchmarking=false&dataType=totals&playerOneId=null&playerTwoId=null


?>

<h1>hello</h1>

