<?php

include 'utility.php';

connect_sql();




$sql = "SELECT username_user, password_user FROM User";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user_name = $row["username_user"];
        $pass_word = $row["password_user"];
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


if ($_POST["user_name"] == $user_name && $_POST["pass_word"] == $password_user){
    redirect('admin.php');


    }


?>