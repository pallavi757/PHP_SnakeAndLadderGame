<?php
/* Program for welcome to  snake and ladder game*/
class GameOperation
{

    function welcomeGame()
    {
        echo "Welcome to Snake and Ladder Game \n";
    }

    /*function for palyer roll a die and
     get number between 1 to 6*/
    public function diceRoll()
    {
        $startedPosition = 0;
        echo "Player at starting position:" . $startedPosition . "\n";
        echo "Rolling a die ";
        $rollDie = rand(1, 6);
        $startedPosition+=$rollDie;
        echo "current position is:".$startedPosition;

    }
}
$obj = new GameOperation();
$obj->welcomeGame();
$obj->diceRoll();
?>