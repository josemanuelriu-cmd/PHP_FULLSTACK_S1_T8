# PHP_FULLSTACK_S1_T8

Instalat el phpunit 11,5.46 amb
composer require --dev phpunit/phpunit ^11.5.46

teniendo en el composer.json:
    "require-dev": {
        "phpunit/phpunit": "^11.5.46"
    }
copiar fichero autoload en la raiz de la carpeta vendor

para ejecutar el test en la raiz del repositorio indicar:
php .\vendor\bin\phpunit tests\NumberCheckerTest.php 
