<?php 

// MESSAGES:
const MESSAGE = "NO Data can be found";

function getMenuItems(){

include('./Model/Connection.php');


$query = 'SELECT * FROM items';
$result = $connection->query($query);

    if ($result->num_rows > 0) {
        return $result;
    }else{
        return MESSAGE;
    }
}




// function - order
// insert int 'order' values();