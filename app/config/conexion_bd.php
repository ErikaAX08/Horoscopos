<?php
function Conectarse()
{
    if(!($link=mysqli_connect("localhost","root","", "horoscopo")))
    {
        echo "error conectando a la base de datos";
        exit();
    }
    return $link;
}
?>