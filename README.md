# Laravel - preparando ambiente

## PHP

### Adicionando repositório

> ```bash
> sudo add-apt-repository ppa:ondrej/php
> ```

### Instalando PHP

> ```bash
> sudo apt install php7.2 php7.2-common php7.2-cli php7.2-fpm php7.2-xml php7.2-opcache php7.2-mbstring php7.2-zip
>```

### Interface PHP X Mysql

> ```bash
> sudo apt install php7.2-mysql
```

## Mysql

### Instalando Mysql

> ```bash
> sudo apt install mysql-server-5.7 mysql-client-5.7
```

### Configurando o Mysql

#### Primeiro, se você já instalou o mysql server, desinstale completamente seguindo esse tutorial

<http://tipslegais10.blogspot.com/2013/01/desinstalar-mysql-no-linux-por-completo.html>

#### Agora instale o Mysql server da seguinte forma

> $ sudo apt-get install -y mysql-server-5.7 mysql-client
> $ sudo mysql_secure_installation

#### Com o comando acima você vai definir uma senha para o usuário root, mas as regras para uso do root mudaram na versão 5.7

siga as instruções desse tutorial

<https://www.computerbeginnersguides.com/blog/2018/05/01/install-and-configure-mysql-server-in-ubuntu-18-04-bionic-beaver/>

#### Agora com a senha definida, entre como administrador e digite

> ```bash
> sudo mysql -u root -p
```

vai aparecer o prompt do mysql

#### Agora crie um novo usuário e conceda todas as permissões a ele

> ```sql
> mysql> CREATE USER 'novousuario'@'localhost' IDENTIFIED BY 'password';
> mysql> GRANT ALL PRIVILEGES ON * . * TO 'novousuario'@'localhost';
> mysql> FLUSH PRIVILEGES;
> mysql> \q
```

Agora experimente acessar o phpmyadmin com seu novo usuário !!!

## Apache

### Instalanado o Apache

> ```bash
> sudo apt install apache2
```

### Interface Apache X PHP

> ```bash
> sudo apt install libapache2-mod-php7.2
```

### Liberando o PHP no Apache

> ```bash
> sudo a2enmod php7.2
```

## Composer

### Instalando o composer (Gerenciador de pacotes do PHP)

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"


php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

php composer-setup.php

php -r "unlink('composer-setup.php');"

php composer.phar

sudo cp ./composer.phar /usr/bin/composer

composer
```)

# Laravel - Novo Projeto e Pastas

## Criando projeto (Composer)

> ```bash
> composer create-project --prefer-dist laravel/laravel projeto1
```

### Validando se tudo está fincionando

> ```bash
> php artisan serve

Resultado esperado:

> ```bash
> Laravel development server started: <http://127.0.0.1:8000>
```

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

### Arquivo composer.json

* Arquivo da ferramenta *composer*, contém todos os pacotes

### Arquivo package.json

* Pode ser atualizado atravéz do *npm*.

## rotas

### projeto rotas

> ```bash
> composer create-project --prefer-dist laravel/laravel rotas
> php artisan serve
```

### Arquivo routes/web.php

Arquivo responsável pela roterização do sistema Web.

```php
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

use Illuminate\Http\Request;

/** Retornando uma view */
Route::get('/', function () {
    return view('welcome');
});

/** Retornando uma tag HTML */
Route::get('/teste', function () {
    return "<h1> Está é uma página de teste de roterização </h1>";
});

/**
 * Recebendo parametros da url
 * Retornando os parametros recebido da url
 */
Route::get('/param/{param1}/{param2}', function ($param1, $param2) {
    return "<h1> Parametro 1: $param1 </h1><br><h2>Parametro 2: $param2</h2> ";
});

/**
 * Recebendo parametros da url
 * Retornando os parametros recebido da url
 */
Route::get('/repetir/{nome}/{n}', function ($nome, $n) {
    for ($i = 0; $i < $n; $i++) {
        echo "<h1> Nome: $nome </h1>";
    }
});

/**
 * Recebendo parametros da url
 * Retornando os parametros recebido da url
 * Restringindo tipos de parametros na url(regex)
 */
Route::get('/restringir/{nome}/{n}', function ($nome, $n) {
    for ($i = 0; $i < $n; $i++) {
        echo "<h1> Nome: $nome </h1>";
    }
})->where('n', '[0-9]+');

/**
 * Recebendo parametros da url
 * Retornando os parametros recebido da url
 * Parametros opcionais
 */
Route::get('/opcional/{nome?}', function ($nome = null) {
    if (isset($nome)) {
        echo "<h1> Nome: $nome </h1>";
    } else {
        echo "Sem parametro.";
    }
});

/**
 * Agrupando rotas
 */
Route::prefix('/app')->group(function () {
    Route::get('/', function () {
        return "Página principal";
    });
    Route::get('/profile', function () {
        return "Página de perfil";
    });
    Route::get('/about', function () {
        return "Página sobre ";
    });
});

/**
 * Redirecionamento de rotas
 */
Route::redirect('/', '/teste', 301);

/** Retornando uma view
 * o promeiro parâmetro é o nome da url
 * o Segundo parâmetro é o nome da view. ex.: resources/views/welcome.blade.php
 */
Route::view('/hello', 'hello');

/**
 * Passando parâmetros para a view
 */
Route::view('/person', 'person', ['name' => 'Lucas', 'last_name' => 'Alexandre']);

/**
 * Recebendo parametros da url e passando para a view
 */
Route::get('/person/{name}/{last_name}', function ($name, $last_name) {
    return view('person', ['name' => $name, 'last_name' => $last_name]);
});

/**
 * Recebendo parametros da url pelo método post
 */
Route::post('/person/create', function (Request $req) {
    $name = $req->input('name');
    $last_name = $req->input('last_name');
    return "Criar pessoa com nome: $name e sobrenome: $last_name";
});

/**
 * Retornando um mesmo resultado para  2 diferentes métodos
 */
Route::match(['get', 'post'], 'person/list', function () {
    return "Lista de pessoa cadastradas";
});

/**
 * Retornando um mesmo resultado para  qualquer métodos
 * Nomeando uma rota
 */
Route::any('person/info', function () {
    return "Informações de pessoas";
})->name('info');

/**
 * Chamando uma rota nomeada
 */
Route::get('person/info-link', function () {
    echo "<a href=\"" . route('info') . "\"> Pessoas - Informações</a>";
});

/**
 * Redirecionando para uma rota nomeada
 */
 Route::get('person/info-redirect', function () {
     return redirect()->route('info');
 });

```

### Listando rotas configuradas

> ```bash
> php artisan route:list
```

### Não verificando o CsrfToken

Arquivo: *rotas/app/Http/Middleware/VerifyCsrfToken.php*.

```php
<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/person*'
    ];
}
```
