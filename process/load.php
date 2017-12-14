<?php
/**
 * Created by PhpStorm.
 * User: Genbo
 * Date: 14.12.2017
 * Time: 2:23
 */

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'honeyhunters');

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE) or die('Ошибка ' . mysqli_error($mysqli));
$sql = "SELECT id, name, email, comment FROM comments";
$result = $mysqli->query($sql);

$resultArray = array();

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $resultArray[] = $row;
    }

}

$mysqli->close();

echo json_encode($resultArray);