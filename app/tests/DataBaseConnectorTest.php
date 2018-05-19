<?php
/**
 * Created by PhpStorm.
 * User: maximiliano
 * Date: 19/05/18
 * Time: 11:20
 */
declare(strict_types=1);


namespace App\tests;
use PHPUnit\Framework\TestCase;
use App\Lib\Helpers\DataBaseConnector as DBC;

include_once ("../../vendor/autoload.php");
final class DataBaseConnectorTest extends TestCase
{
    public function testConexion(): void
    {
        $this->assertInstanceOf(\PDO::class, DBC::obtenerBase('mysql'));
    }
}