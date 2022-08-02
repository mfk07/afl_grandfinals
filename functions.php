<?php

function getDb() {
    $db = new PDO('mysql:host=db; dbname=afl', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function getData($db) {
    $query = $db->prepare("SELECT `Season`, `Premier`, `Runner-Up`, `Score`, `Image` FROM `grandfinals`;");
    $query->execute();

    return $query->fetchAll();
}

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