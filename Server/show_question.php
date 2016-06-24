<?php
    include 'utility.php';

    $sql = "SELECT name, question FROM Questions";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $name = $row["name"];
            $question = $row["question"];
            echo "<label".$name.":> </label> </br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();

?>