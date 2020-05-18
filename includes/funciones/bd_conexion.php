<?php
    $conn = new mysqli('localhost','root','root','mtywebcamp');

    if ($conn->connect_error) {
        echo $error -> $conn->connect_error;
    }

?>