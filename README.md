# Teste Laravel
---
Foi utilizado docker para executar o projeto.

Para executar o projeto é necessário rodar o comando em um sistema LINUX (Ou WSL no windows).

[link](https://app.swaggerhub.com/apis-docs/FELIPEDEVLP/Laravel-test-felipe/1.0.0) para a documentação da api

**É necessário PHP instalado na máquina para executar a api.**

### Passo-a-passo para executar a api

No terminal, dentro do diretório do projeto, executar os seguintes comandos:

 - 1. ```composer update```
 - 2. ```composer install && npm install```
 - 3. ```./vendor/bin/sail up```
 - 4. (DENTRO DO CONTAINER) ```php artisan migrate```

### Comandos


* Executar o projeto
    ```./vendor/bin/sail up```
* Instalar dependências
    ```composer install && npm install```
* Rodar migrations
    ``` php artisan migrate```
* Atualizar Cache do AUTOLOAD
    ```composer dump-autoload```
