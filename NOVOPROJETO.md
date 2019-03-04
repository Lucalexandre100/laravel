# Laravel - Novo Projeto

## Criando projeto (Composer)

> ```bash
> composer create-project --prefer-dist laravel/laravel projeto1

### Validando se tudo está fincionando

> ```bash
> php artisan serve

Resultado esperado:

> ```bash
> Laravel development server started: <http://127.0.0.1:8000>

* OBS:
Neste momento o Apache não está sendo utilizado, o projeto roda em cima do servidor de desenvolvimento do Laravel.

## Estrutura de pastas do projeto

```bash
└── projeto1
    ├── app
    ├── artisan
    ├── bootstrap
    ├── composer.json
    ├── composer.lock
    ├── config
    ├── database
    ├── package.json
    ├── phpunit.xml
    ├── public
    ├── readme.md
    ├── resources
    ├── routes
    ├── server.php
    ├── storage
    ├── tests
    ├── vendor
    └── webpack.mix.js
```
