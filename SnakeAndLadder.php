<?php
/* Program for welcome to 
    snake and ladder game*/
class GameOperation{
    //set start postion at 0
    private $startPosition = 0;
    function welcomeGame(){
        echo"Welcome to Snake and Ladder Game";
    }
}
$obj=new GameOperation();
$obj->welcomeGame();
?>