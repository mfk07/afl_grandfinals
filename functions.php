<?php

/**
 * Access database
 *
 * @return void
 */
function getDb(): PDO
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
function getData($db): array
{
    $query = $db->prepare("SELECT `id`, `Season`, `Premier`, `Runner-Up`, `Score`, `Image` FROM `grandfinals` WHERE `Delete` = '0';");
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
        $team .= '<div class="winners-box">' . '<img src="'.$final['Image'].'" alt="Grandfinal team photo" class="winners-image">' . '<div class="match-stats"><h6 class="team-name">' . $final['Premier'] . '</h6><p>' . $final['Season'] . '</p><p>' . $final['Runner-Up'] . '</p><p>' . $final['Score'] . '</p></div>' . '<form class="editForms" action="delete.php" method="POST"><input type="submit" value="Delete"/><input class="hidden" name="dataID" value="' . $final['id'] . '"></form>' . '<form class="edit" action="edit.php" method="POST"><input type="submit" value="Edit"/><input class="hidden" name="dataID" value="' . $final['id'] . '"></form></div>';
        }    
    return $team;
}

/**
 * Targets the ID in the database
 *
 * @return int
 */
function targetID(): int 
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
    return true;
}

function getSingleData($db, $id): array
{
    $query = $db->prepare("SELECT `id`, `Season`, `Premier`, `Runner-Up`, `Score`, `Image` FROM `grandfinals` WHERE `id` = $id;");
    $query->execute();

    return $query->fetchAll();
}  

function prefillEditData(array $singleData): string 
{
    foreach($singleData as $index) 
        {
        $data = '<div class="winners-box"><form class="editForms" action="hiddenEdit.php" method="POST"><label for="editSeason">What year was the final played?</label><br><input type="text" id="season" name="editSeason" value="'.$index['Season'].'"/><br><br>' . '<label for="editPremier">Who won the flag?</label><br>' . '<input type="text" id="premier" name="editPremier" value="'.$index['Premier'].'"/><br><br>' . '<label for="editRunnersUp">Who did they play?</label><br>' . '<input type="text" id="runnersUp" name="editRunnersUp" value="'.$index['Runner-Up'].'"/><br><br>' . '<label for="editScore">What was the score? (GG.PP (TOTAL) d. GG.PP (TOTAL))</label><br>' . '<input type="text" id="score" name="editScore" value="'.$index['Score'].'"/><br><br>' . '<input class="hidden" name="dataID" value="' . $index['id'] . '">' . '<input type="submit"/>' . '</form></div>';
        }    
    return $data;
}

/**
 * Undocumented function
 *
 * @param [type] $db
 * @param [type] $editSeason
 * @param [type] $editPremier
 * @param [type] $editRunnersUp
 * @param [type] $editScore
 * @param [type] $id
 * @return void
 */
function editData($db, $editSeason, $editPremier, $editRunnersUp, $editScore, $id) 
{
    $query = $db->prepare("UPDATE `grandfinals` SET `Season` =  '$editSeason', `Premier` =  '$editPremier', `Runner-Up` =  '$editRunnersUp', `Score` = '$editScore' WHERE `id` = :id;");
    $query->bindParam(':id', $id);
    $query->execute();

  
    return true;
    
}

