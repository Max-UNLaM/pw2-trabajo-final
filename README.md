# Api Gestión

1. Requisitos
2. Autoload
3. Dependencias
4. Modelos

## Requisitos

+ **PHP** > 7.1
+ **MySQL** > 5.6

### Composer
#### Instalar composer
+ [Linux](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
+ [Windows -caca-](https://getcomposer.org/doc/00-intro.md#installation-windows)

#### Instalar dependencias

```bash

php composer.phar install

```

#### Configurar acceso a base de datos
Para poder desarrollar dentro de diferentes entornos, añadir la constante USER_DB PASSWORD_DB a env/acceso.php con el usuario y contraseña de tu base de datos respectivamente.

La clase DataBaseConnector se encargará del resto.

> Recordar no quitar /env/acceso.php de .gitignore!

```php

<?php
    define('DB_USER', 'TuUsuarioQueHabitualmenteEsRoot');
    define ('DB_PASSWORD', 'contraseñadetuusuario');
?>

```

## Namespace

PHP puede organizar sus "paquetes" mediante namespaces que no son más que una forma de organizar las carpetas del proyecto.

Para definir un namespace basta con escribir en la primer línea del .php la declaración del namespace:

```php

<?php

namespace App\Main;

class Ejemplo {
	
}

?>

```

Para organizar nuestros archivos, la clase Ejemplo debiera de estar en app\main\ejemplo.php



## Autoload


Composer genera automágicamente un archivo autoload que recopila dichos paquetes. De modo que solo  es necesario añadir este archivo para acceder a las partes del proyecto.

Para ello, basta con incorporar a composer.json una clave con formato Nombre\\ para el nombre del namespace y el valor con formato "nombre/" para el nombre de la carpeta donde se encuentra dentro del objeto psr-4. 

Así se ve el namespace app:

```json
{
    "psr-4": {
          "app\\": "app/"
    }
}

```  

Desglosando un poco: PSR-4 se refiere a PHP STANDARD RECOMENDATION (número 4, Autoload). Que no es más que una directiva de cómo se debería de indentar y organizar un proyecto en PHP. Tiene sus críticas a favor y en contra pero nos vienen bien a nuestro proyecto para poder adaptar el framework MVC naturalmente.

Dentro de sus directivas se encuentra la organización de archivos como ejemplificamos previamente y una indentación particular.

Para más info: [PSR](https://www.php-fig.org/psr/)

De ese embrollo nos interesa https://www.php-fig.org/psr/psr-2/ Aunque basta configurar al IDE para que la magia se haga sola. Incluso, si es lo suficientemente inteligente, puede ver leer la configuración desde composer mismo. 

Finalmente, solo hace falta añadir el autoload al proyecto:

```php
<?php

    require_once __DIR__ . '/vendor/autoload.php';

?>
```

Para acceder a una clase dentro de un namespace, basta con escribir:

```php
<?php

    use \app\NombreDeClase as Nombre;

?>
```


Entonces, se podrá invocar a la clase nombre:

```php
<?php
    $clase = new Nombre();
?> 

```

Fabulantástico.



## Dependencias

### PHPUNIT

Es el tester por excelencia de PHP.

#### Instalar

Se instala solo con composer (php ./composer.phar install)

#### Testear

Ejemplo de test:

 ./vendor/bin/phpunit --bootstrap ./vendor/autoload.php ./app/tests/DataBaseConnectorTest

Para testear, basta con extender algún método assert de la clase TestCase, ver app/tests/DataBaseConnectorTest.php como ejemplo.

Los métodos asserts se encuentran en la [documentación](http://phpunit.readthedocs.io/en/7.1/assertions.html)

## Modelos

Espacio para modelos

## Librerías

#### DataBaseConnector

Se encarga de devolver un objeto PDO para para interactuar con la base de datos. 

Ejemplo: 

```php

<?php

    # El método estático obtenerBase recibe el tipo de base de datos a usar.
    # Para más info: https://secure.php.net/manual/es/pdo.drivers.php
    
    use App\Lib\Helpers\DataBaseConnector as DBC;
    $baseDeDatos = DBC::obtenerBase('mysql');

?>

``` 