<?php
    class RockPaperScissors
    {
        private $player1;
        private $player2;

        // function __construct($contact_name)
        // {
        //     $this->name = $contact_name;
        // }

        function playGame($input1, $input2)
        {
            if ($input1 == $input2) {
                return "Tie";
            } elseif ($input1 == "rock") {
                if ($input2 == "scissors") {
                    return "Player 1 Wins";
                }
            }
        }

    }
?>
