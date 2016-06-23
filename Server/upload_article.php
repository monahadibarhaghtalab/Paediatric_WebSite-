<?php
    include 'utility.php';

    name = $_POST['name'];
    email = $_POST['email'];
    question = $_POST['question'];


    $sql = "INSERT INTO Questions (name, email, question, answer)
    VALUES (name, email, question, NULL)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>