<?php
/**
 * Created by PhpStorm.
 * User: maximiliano
 * Date: 18/05/18
 * Time: 21:31
 */

namespace App\Lib\Constantes;

require_once (__ROOT__ . "/../../env/acceso.php");


class DataBaseConstantes
{
    const BASE_NOMBRE = 'gestion-consorcios-backend';
    const BASE_USER = DB_USER;
    const BASE_PASSWORD = DB_PASSWORD;
    const BASE_SERVER = DB_SERVER;
}