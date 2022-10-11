<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'forumm';

$conn = mysqli_connect($host, $username, $password, $db);

if (!$conn) {

    echo "Connection failed!";

}?>