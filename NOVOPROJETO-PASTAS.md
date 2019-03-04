# Laravel - Novo Projeto e Pastas

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
├── projeto1
│   ├── app
│   ├── bootstrap
│   ├── config
│   ├── database
│   ├── public
│   ├── resources
│   ├── routes
│   ├── storage
│   ├── tests
│   ├── vendor
│   ├── artisan
│   ├── composer.json
│   ├── composer.lock
│   ├── package.json
│   ├── phpunit.xml
│   ├── readme.md
│   ├── server.php
│   └── webpack.mix.js
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

* A pasta *migrations* é resonsável pelo gerenciamento das tabelas do banco de dados. Não sendo necessário utilizar a linguagem SQL.

* A pasta *seeds* é a pasta responsável pela carga de dados. Após as *migrations* serem executada, criando toda a estrutura de tabelas no banco de dados, o carrega os dados para as tabelas.

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

* Pasta de livre acesso. Pasta apontada no redirecionamento do *virtual host*. que abrirá o arquivo *index.php*.

#### Arquivo index.php

* Autoload: carrega os módulos que vão sendo necessários.

* Chama o arquitp pp.php da pasta bootstrap, para a inicialização do sistema.

#### Pasta css

* Pasta para arquivos *.css* personalizados.

#### Pasta js

* Pasta para arquivos *.js* personalizados.

### Pasta resources

```bash
├── resources
│   ├── js
│   ├── lang
│   ├── sass
│   └── views
```

* Contém arquivos de entrada. Através desses arquivos é possível gerar os arquivos dentro da pasta public.

#### Pasta *views*

* Local de criação de todas as "views" da aplicação. É a parte visual que o usuário terá acesso.

* Local dos templates *HTML*.

### Pasta routes

```bash
├── routes
│   ├── api.php
│   ├── channels.php
│   ├── console.php
│   └── web.php
```

* Uma das pastas mais importantes.

* Nesses arquivos serão conficuradas as rotas da aplicação (urls).

### Pasta storage

```bash
├── storage
│   ├── app
│   ├── framework
│   └── logs
```

* Local da compilação dos templates.

* Local de armazenamento do cache.

* Local de armazenamento de sessões.

* Logs do sistema.

* É a saída da aplicação.

### Pasta tests

```bash
├── tests
│   ├── CreatesApplication.php
│   ├── Feature
│   ├── TestCase.php
│   └── Unit
```

* Local dos testes da aplicação.

### Pasta vendor

```bash
├── vendor
│   ├── autoload.php
│   ├── beyondcode
│   ├── bin
│   ├── composer
│   ├── dnoegel
│   ├── doctrine
│   ├── dragonmantank
│   ├── egulias
│   ├── erusev
│   ├── fideloper
│   ├── filp
│   ├── fzaninotto
│   ├── hamcrest
│   ├── jakub-onderka
│   ├── laravel
│   ├── league
│   ├── mockery
│   ├── monolog
│   ├── myclabs
│   ├── nesbot
│   ├── nikic
│   ├── nunomaduro
│   ├── opis
│   ├── paragonie
│   ├── phar-io
│   ├── phpdocumentor
│   ├── phpoption
│   ├── phpspec
│   ├── phpunit
│   ├── psr
│   ├── psy
│   ├── ramsey
│   ├── sebastian
│   ├── swiftmailer
│   ├── symfony
│   ├── theseer
│   ├── tijsverkoyen
│   ├── vlucas
│   └── webmozart

```

* Importante não aditar os arquivos desta pasta. Pasta atualizada pelo composer, que śobrescreverá os arquivos.

* Toda a parte do *core* do *Laravel* está contida nesta pasta.

### Arquivo artisan

* Ferramenta PHP.

### Arquivo artisan

* Arquivo da ferramenta *composer*, contém todos os pacotes

### Arquivo package.json

* Pode ser atualizado atravéz do *npm*.