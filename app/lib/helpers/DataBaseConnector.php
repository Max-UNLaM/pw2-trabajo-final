<?php
/**
 * Created by PhpStorm.
 * User: maximiliano
 * Date: 18/05/18
 * Time: 21:21
 */

namespace App\Lib\Helpers;

use App\lib\constantes\DataBaseConstantes as DBC;

define('__ROOT__', dirname(dirname(__FILE__)));
require_once (__ROOT__ . "/../../vendor/autoload.php");

class DataBaseConnector
{
    public static function obtenerBase($tipoBase)
    {
        $server = DBC::BASE_SERVER;
        $dbNombre = DBC::BASE_NOMBRE;
        return new \PDO("$tipoBase:host=$server;dbname=$dbNombre", DBC::BASE_USER, DBC::BASE_PASSWORD);
    }
}