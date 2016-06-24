<?php

    include 'utility.php';

    $answer = $_POST['answer'];
    $question = $_POST['question'];
    $sql = "UPDATE Questions SET answer=$answer WHERE question=$question";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
?>