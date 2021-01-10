<?php
function connect()
{
    $connection=mysqli_connect("localhost","root","","msf");
    return $connection;
}

?>