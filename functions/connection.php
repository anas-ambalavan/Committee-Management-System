<?php
function connect()
{
    $connection=mysqli_connect("localhost","root","0808","msf");
    return $connection;
}

?>