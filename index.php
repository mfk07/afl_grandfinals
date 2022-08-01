<?php

$db = new PDO('mysql:host=db; dbname=afl', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `Season`, `Premier`, `Runner-Up`, `Score`, `Image` FROM `grandfinals`;");
$query->execute();

$teams = $query->fetchAll();



// fixtures link https://www.afl.com.au/fixture?Competition=1&CompSeason=43&MatchTimezone=MY_TIME&Regions=3&ShowBettingOdds=1&GameWeeks=21&Teams=1&Venues=13#byround
// ladder link https://www.afl.com.au/ladder?Competition=1&CompSeason=43&GameWeeks=608&ShowBettingOdds=1&Live=0
// player stat link https://www.afl.com.au/stats/?category=Key+Stats&seasonId=43&roundId=-1&roundNumber=0&sortColumn=dreamTeamPoints&sortDirection=descending&positions=All&teams=All&benchmarking=false&dataType=totals&playerOneId=null&playerTwoId=null


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
                    <nav id="menu">
                        <ul>
                            <li>Fixtures</li>
                            <li>Ladder</li>
                            <li>Player Stats</li>
                        </ul>
                    </nav>
				    <h1 class="page-heading">AFL Grandfinal Winners</h1>
                </header>

                <h2>2001 - 2021</h2>

				<div class="portfolio-items">
					<div class="projects">
						<img src="portfolio-placeholder.jpg" alt="Portfolio Placeholder" class="portfolio-placeholder">
						<h6 class="project-description">Website created July 2022 as part of the iO Academy Full Stack Track.</h6>
					</div>
					<div class="projects">
						<img src="portfolio-placeholder.jpg" alt="Portfolio Placeholder" class="portfolio-placeholder">
						<h6 class="project-description">Website created July 2022 as part of the iO Academy Full Stack Track.</h6>
					</div>
					<div class="projects">
						<img src="portfolio-placeholder.jpg" alt="Portfolio Placeholder" class="portfolio-placeholder">
						<h6 class="project-description">Website created July 2022 as part of the iO Academy Full Stack Track.</h6>
					</div>
					<div class="projects">
						<img src="portfolio-placeholder.jpg" alt="Portfolio Placeholder" class="portfolio-placeholder">
						<h6 class="project-description">Website created July 2022 as part of the iO Academy Full Stack Track.</h6>
					</div>
					<div class="projects">
						<img src="portfolio-placeholder.jpg" alt="Portfolio Placeholder" class="portfolio-placeholder">
						<h6 class="project-description">Website created July 2022 as part of the iO Academy Full Stack Track.</h6>
					</div>
					<div class="projects">
						<img src="portfolio-placeholder.jpg" alt="Portfolio Placeholder" class="portfolio-placeholder">
						<h6 class="project-description">Website created July 2022 as part of the iO Academy Full Stack Track.</h6>
					</div>
				</div>
				
		</main>

</html>

