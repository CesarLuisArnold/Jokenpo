# Jokenpo

PHP para prototipar Jokenpo,
link (http://dojopuzzles.com/problemas/exibe/jokenpo/)

Roda com:
PHP >= 5.6   
PHPUnit 5.3.0
Composer 1.4.1

O codigo foi executado em console/terminal  Linux version 4.15.0-66-generic (buildd@lgw01-amd64-044) (gcc version 7.4.0 (Ubuntu 7.4.0-1ubuntu1~18.04.1))

Para executar, sigo os passos:
* Instalar o Composer com o script "install-composer.sh"
  ```
  ./install-composer.sh
  ```
* Instalar dependencias executando composer.phar file.
   ```
   php composer.phar install
   ```
* Executar app
    ```
    $ php main.php
    ```
* Executar testes
   ```
  ./vendor/bin/phpunit --bootstrap vendor/autoload.php src/JokenpoTeste