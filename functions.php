<?php

/**
 * Access database
 *
 * @return void
 */
function getDb() 
{
    $db = new PDO('mysql:host=db; dbname=afl', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}

/**
 * Access database params
 *
 * @param [type] $db
 * @return void
 */
function getData($db) 
{
    $query = $db->prepare("SELECT `id`, `Season`, `Premier`, `Runner-Up`, `Score`, `Image`, `Delete` FROM `grandfinals`;");
    $query->execute();

    return $query->fetchAll();
}

/**
 * Populates database with form inputs
 *
 * @param [type] $db
 * @return void
 */
function sendData($db, $getSeason, $getPremier, $getRunnersUp, $getScore): void 
{
    $query = $db->prepare("INSERT into `grandfinals` (`Season`, `Premier`, `Runner-Up`, `Score`) VALUES (:getSeason, :getPremier, :getRunnersUp, :getScore);");
    $query->bindParam(':getSeason', $getSeason);
    $query->bindParam(':getPremier', $getPremier);
    $query->bindParam(':getRunnersUp', $getRunnersUp);
    $query->bindParam(':getScore', $getScore);
    $query->execute();
}
    
/**
 * Access arrays from database
 *
 * @param array $finals
 * @return string
 */
function getTeamData(array $finals): string 
{
    $team = '';
    foreach($finals as $final) {
        if ($final === []) {
            return 'Got data?';
        } else {
            if($final['Delete'] == '0') {
                $team .= '<div class="winners-box">' .
                        '<img src="'.$final['Image'].'" alt="Grandfinal team photo" class="winners-image">' . '<div class="match-stats"><h6 class="team-name">' . $final['Premier'] . '</h6><p>' . $final['Season'] . '</p><p>' . $final['Runner-Up'] . '</p><p>' . $final['Score'] . '</p></div>' . '<form action="delete.php" method="POST"><input type="submit" value="Delete"/>' . '<form class="edit" action="edit.php" method="POST"><input type="submit" value="Edit"/><input class="hidden" name="dataID" value="' . $final['id'] . '"></form></div>';
            }   
        }
    } 
    return $team;
}

/**
 * Targets the ID in the database
 *
 * @return void
 */
    function targetID()
    {
            return $_POST['dataID'];
    }

/**
 * Removes selected ID from the front-end
 *
 * @param [type] $db
 * @param [type] $getID
 * @return void
 */
function removeData($db, $id) 
{
    $query = $db->prepare("UPDATE `grandfinals` SET `Delete` = '1' WHERE `id`= ?;");
    $query->execute([$id]);
    header('Location: index.php');
}