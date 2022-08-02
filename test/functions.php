<?php

require_once '../index.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase {
    public function testSuccessGetTeamData()
    {
        //expected result of the test
        $expected = [];
        //input for the test to get the result
        $testInput1 = 3;
        $testInput2 = 2;
        //run the real function with the input
        $case = sum($testInput1, $testInput2);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureMultiplyByTwo()
    {
        //expected result of the test
        $expected = 0;
        //input for the test to get the result
        $testInput1 = -3;
        $testInput2 = 2;
        //run the real function with the input
        $case = sum($testInput1, $testInput2);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedMultiplyByTwo()
    {
        //input for the test to get the result
        $testInput1 = [1,2,3,4];
        $testInput2 = [4,5,6,7];
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = sum($testInput1, $testInput2);
        
    }