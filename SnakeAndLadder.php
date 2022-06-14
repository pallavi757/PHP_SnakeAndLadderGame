<?php
/* Program for welcome to  snake and ladder game*/
class GameOperation
{
    const LADDER = 1;
    const SNAKE = 2;
    const NOPLAY = 0;
    public $position = 0;
    public $count = 0;//Use for roll count

    function welcomeGame()
    {
        echo "Welcome to Snake and Ladder Game \n";
    }

   
     //create function to check option for NO Play,Ladder,Snake
     public function nextMove(){    
        while($this->position!=100) {
        $rollDie = $this->diceRoll();
         $option = rand(0, 2); // options to play
       // echo "Option:".$option ."\n";
        $this->count++;
         switch ($option) {
             case GameOperation::LADDER:
                echo " player on Ladder move to next position";
                 //  $this->position += $rollDie;
                 if ($this->position + $rollDie > 100) {
                    $this->position = $this->position;
                } else {
                    $this->position += $rollDie;
                }
                echo "\n";
                 break;
             case GameOperation::SNAKE:
                echo " player on snake move to previous Position";
                $this->position -= $rollDie;
                if ($this->position <= 0) {
                    $this->position = 0;
                }
                 echo "\n";
                 break;
             default:
                 echo " No Play " . $this->position = $this->position;
                 echo "\n";
         }
         echo "Current Position is:" . $this->position . "\n";
        }
        echo "Player won the game"."\n";
        echo "How many times you rolling a die: ".$this->count;
     }

      /*function for palyer roll a die and
     get number between 1 to 6*/
    function diceRoll()
    {
       // $startedPosition = 0;
        //echo "Player at starting position:" . $startedPosition . "\n";
        echo "Rolling a die ";
        $rollDie = rand(1, 6);
       // $startedPosition+=$rollDie;
        echo "getting a die number is:".$rollDie;
        return  $rollDie;
      // $this->nextMove();
    }
}
$obj = new GameOperation();
$obj->welcomeGame();
//$obj->diceRoll();
$obj->nextMove();
//echo "Player won";
?>