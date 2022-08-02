<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase {
    public function testSuccessGetTeamData()
    {
        //expected result of the test
        $expected = '<div class="winners-box">' .
        '<img src="a.jpeg" alt="Grandfinal team photo" class="winners-image">' . '<div class="match-stats"><h6 class="team-name">' . 'Port Adelaide Power' . '</h6><p>' . 1999 . '</p><p>' . 'Adelaide Crows' . '</p><p>' . '10.6 (66) d. 5.3 (33)' . '</p></div></div>';
        //input for the test to get the result
        $testInput1 = [['Image' => 'a.jpeg', 'Season' => 1999, 'Premier' => 'Port Adelaide Power', 'Runner-Up' => 'Adelaide Crows', 'Score' => '10.6 (66) d. 5.3 (33)']];
        //run the real function with the input
        $case = getTeamData($testInput1);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureGetTeamData()
    {
        //expected result of the test
        $expected = 'Got data?';
        //input for the test to get the result
        $testInput1 = [[]];
        //run the real function with the input
        $case = getTeamData($testInput1);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedGetTeamData()
    {
        //input for the test to get the result
        $testInput1 = 2;
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = getTeamData($testInput1);
        
    }
}