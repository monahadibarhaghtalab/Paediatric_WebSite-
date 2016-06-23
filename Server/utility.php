<?php
    function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

    function connect_sql(){
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "Paediatric_Website";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }
?>