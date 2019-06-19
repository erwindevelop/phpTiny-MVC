<?php namespace Framework;

use Illuminate\Database\Capsule\Manager;

class Database
{
    function __construct()
    {
        $db = new Manager;

        $db->addConnection([
            'driver'        => DBDRIVER,
            'host'          => DBHOST,
            'database'      => DBNAME,
            'username'      => DBUSER,
            'password'      => DBPASS,
            'charset'       => DBCHARSET,
            'collation'     => COLLATION
        ]);

        $db->bootEloquent();
    }
}