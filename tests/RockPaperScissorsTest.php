<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function test_RockPaperScissors_Tie()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "rock";
            $input2 = "rock";

            //Act:
            $result = $test_RockPaperScissors->playGame($input1, $input2);

            //Assert
            $this->assertEquals("Tie", $result);
        }

        function test_RockPaperScissors_rockVsScissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "rock";
            $input2 = "scissors";

            //Act:
            $result = $test_RockPaperScissors->playGame($input1, $input2);

            //Assert
            $this->assertEquals("Player 1 Wins", $result);
        }

        function test_RockPaperScissors_scissorsVsPaper()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "scissors";
            $input2 = "paper";

            //Act:
            $result = $test_RockPaperScissors->playGame($input1, $input2);

            //Assert
            $this->assertEquals("Player 1 Wins", $result);
        }

        function test_RockPaperScissors_paperVsRock()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "paper";
            $input2 = "rock";

            //Act:
            $result = $test_RockPaperScissors->playGame($input1, $input2);

            //Assert
            $this->assertEquals("Player 1 Wins", $result);
        }

    }

    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests

?>
