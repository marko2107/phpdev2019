<?php
include_once './mysqli_connection_obj.php';
//$mysqli = new mysqli('localhost', 'root', '', 'fakultet');

$query_template="SELECT imeStud, prezStud, email FROM stud where stud.email like ?";
$email='adrian.lukac@algebra.hr';
if ($stmt=$mysqli->prepare($query_template)) {
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->bind_result($ime,$prezime,$emailadresa);
    $stmt->fetch();
    echo $ime.' '.$prezime.' '.$emailadresa;
    $stmt->close();
}

