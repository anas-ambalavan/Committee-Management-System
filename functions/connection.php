<?php
function connect()
{
    $connection=mysqli_connect("localhost","root","","campuswing");
    return $connection;
}

?>