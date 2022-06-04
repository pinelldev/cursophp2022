<?php

class Connection
{
    public static function connect()
    {
        //Variables de conexion
        $host = 'localhost';
        $user = 'netdev';
        $pass = 'netsupport';
        $dbname = 'cursophp';

        $dns = 'mysql:host='.$host.';dbname='.$dbname;
        $link = new PDO($dns, $user, $pass);

        return $link;
    }
}

$conect = Connection::connect();

var_dump($conect);