<?php
$servername = "localhost";
$username = "Peko";
$password = "ahoy";

// Create connection
$conn = new mysqli($servername, $username, $password);
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
$sql = 'SELECT * FROM `peko`.`users` WHERE username="' . $_POST['username'] . '" AND password=' . "'" . $_POST["password"] . "'";
$result = $conn->query($sql);
// var_dump($result);
// echo $sql;
if ($result->num_rows > 0) {
    // output data of each row
    // while ($row = $result->fetch_assoc()) {
    //     echo "id: " . $row["uid"] . " - uid: " . $row["username"] . " " . $row["mail"] . "" . $row["password"] . "<br>";
    // }
} else {
    // echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($result->num_rows > 0) :  ?>
        correct
    <?php else : ?>
        b
    <?php endif ?>
</body>

</html>