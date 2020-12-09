<?php
$servername="localhost";
$username="root";
$password="";
$dbname="tuttipizza";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Csatlakozási hiba".$conn->connect_error);
}
$conn->set_charset("utf8");

?>