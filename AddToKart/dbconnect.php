<?php

try {
     $dbconnection = new PDO("mysql:host=127.0.0.1;dbname=addtokart","root","");   
} catch (PDOException $errors) {
    echo "connection failed: ".$errors->getMessage();
}

