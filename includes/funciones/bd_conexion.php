<?php 
    $conn = new mysqli('localhost', 'root', 'Owlblack24', 'bbt');

    if ($conn->connect_error){
        echo $error -> $conn->connect_error; 
    };
?>