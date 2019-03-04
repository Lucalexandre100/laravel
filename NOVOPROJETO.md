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

### Pasta app

```bash
├── app
│   ├── Console
│   ├── Exceptions
│   ├── Http
│   ├── Providers
│   └── User.php
```

Uma das pastas mais importantes. Nesta pasta é onde os controladores são criado. Toda a parte do core do sistema.

### Pasta bootstrap

```bash
├── bootstrap
│   ├── app.php
│   └── cache
```

Não é a pasta do Twitter Bootstrap. Esta é a parte de inicialização do sistema.

### Pasta config

```bash
├── config
│   ├── app.php
│   ├── auth.php
│   ├── broadcasting.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── hashing.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── services.php
│   ├── session.php
│   └── view.php
```

* Arrays e variáveis que são previamente declarados pela aplicação.

### Pasta database

```bash
├── database
│   ├── factories
│   │   └── UserFactory.php
│   ├── migrations
│   │   ├── 2014_10_12_000000_create_users_table.php
│   │   └── 2014_10_12_100000_create_password_resets_table.php
│   └── seeds
│       └── DatabaseSeeder.php
```

* As pastas *migrations* e *seeds* são bem utilizadas.

### Pasta public

```bash
├── public
│   ├── css
│   ├── favicon.ico
│   ├── index.php
│   ├── js
│   ├── robots.txt
│   └── web.config
```

#### Arquivo index.php

* Autoload: carrega os módulos que vão sendo necessários.

* Chama o arquitp pp.php da pasta bootstrap, para a inicialização do sistema.

