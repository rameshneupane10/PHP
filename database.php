<?php
//connecting to the databases

$connect = mysqli_connect('localhost','admin','admin','simple');
if($connect)
{
    echo'connection successful';
}
else
{
    echo'failed'.mysqli_connect_error();
}


?>