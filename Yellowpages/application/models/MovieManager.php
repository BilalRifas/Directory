<?php

class MovieManager extends CI_Model{
    
    function getBalanceTodos($removeChecked){

        $balanceTodos = array();

        $conn = mysqli_connect('localhost','root','','todo');

        $arrayLength = count($removeChecked);
        
        $i = 0;
        while ($i < $arrayLength) {
            // echo $removeChecked[$i] ."<br />";
            $remove = mysqli_query($conn,'delete from todoaction where id='.$removeChecked[$i]);
            $i++;
        }

    }

    function getTodos($todos) {

        $todosFound = array();

        $conn = mysqli_connect('localhost','root','','todo');

        $res = mysqli_query($conn,'select * from todoaction');
        
        while (($row = mysqli_fetch_array($res,MYSQLI_ASSOC)) != NULL) {
            $todosFound[] = new Movie($row['id'],$row['actionTitle']);
        }

        return $todosFound;
    }    

    function getMovieFound($todoaction) {

        $conn = mysqli_connect('localhost','root','','todo');
        $userId = uniqid();  
        
        $insert = mysqli_query($conn, "INSERT INTO todoaction (userId, actionTitle)VALUES ('$userId', 
    '$todoaction')");
 
    }   
    
}

class Movie {
    private $id;
    // private $userId;
    private $actionTitle;

    function __construct($t,$b) {
        $this->id = $t;
        // $this->userId = $y;
        $this->actionTitle = $b;
    }

    function getId() { return $this->id; }
    // function getUserId() { return $this->userId; }
    function getActionTitle() { return $this->actionTitle; }
}

?>
