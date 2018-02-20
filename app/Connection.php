<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 06.02.18
 * Time: 19:26
 */
namespace App;

class Connection
{
    private static $pdo;

    public function __construct()
    {
        static::$pdo = new \PDO('mysql:host=localhost','dbname=les3','root','');
    }

}