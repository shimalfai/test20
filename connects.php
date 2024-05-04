<?php
    $user = 'root';
    $password = '';
    $database = 'vaccination';
     
    // Server is localhost
    $servername='localhost';
    $mysqli = new mysqli($servername, $user,
                    $password, $database);
     
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

global $rows;
global $parents_id;
global $id;
global $child_id;
global $admin_id;


?>