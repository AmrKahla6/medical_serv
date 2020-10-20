<?php 

$server   = "localhost";
$username = "root";
$password = "";
$dbname   = "medical_serv";

$conn = mysqli_connect($server , $username , $password , $dbname);

if(!$conn)
{
    die("Error to connect DB : ".mysqli_connect_error());
}

function db_insert($sql)
{
    global $conn;

    $result = mysqli_query($conn , $sql);

    if($result)
    {
        return "Added success";
    }
    return false;

}