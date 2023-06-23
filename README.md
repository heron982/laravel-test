# Teste Laravel
---
Foi utilizado docker para executar o projeto.

Para executar o projeto é necessário rodar o comando em um sistema LINUX (Ou WSL no windows).

[link](https://app.swaggerhub.com/apis-docs/FELIPEDEVLP/Laravel-test-felipe/1.0.0) para a documentação da api

### Comandos


* Executar o projeto
    ```./vendor/bin/sail up```
* Instalar dependências
    ```composer install && npm install```
* Rodar migrations
    ``` php artisan migrate```
* Atualizar Cache do AUTOLOAD
    ```composer dump-autoload```
