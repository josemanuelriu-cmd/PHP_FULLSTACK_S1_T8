# PHP_FULLSTACK_S1_T8

Instalat el phpunit 11,5 amb
composer require --dev phpunit/phpunit

teniendo en el composer.json:
    "require-dev": {
        "phpunit/phpunit": "^11.5"
    }

para ejecutar el test en la raiz del repositorio indicar:
./vendor/bin/phpunit tests\NumberCheckerTest.php 
