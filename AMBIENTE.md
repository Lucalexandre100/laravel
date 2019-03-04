# Laravel

## PHP

### Adicionando repositório
> sudo add-apt-repository ppa:ondrej/php

### Instalando PHP
> sudo apt install php7.2 php7.2-common php7.2-cli php7.2-fpm php7.2-xml php7.2-opcache php7.2-mbstring php7.2-zip
  
### Interface PHP X Mysql
> sudo apt install php7.2-mysql

## Mysql

### Instalando Mysql
> sudo apt install mysql-server-5.7 mysql-client-5.7 

### Configurando o Mysql

#### Primeiro, se você já instalou o mysql server, desinstale completamente seguindo esse tutorial: 
>http://tipslegais10.blogspot.com/2013/01/desinstalar-mysql-no-linux-por-completo.html

#### Agora instale o Mysql server da seguinte forma:
> $ sudo apt-get install -y mysql-server-5.7 mysql-client

> $ sudo mysql_secure_installation

#### Com o comando acima você vai definir uma senha para o usuário root, mas as regras para uso do root mudaram na versão 5.7

siga as instruções desse tutorial

> https://www.computerbeginnersguides.com/blog/2018/05/01/install-and-configure-mysql-server-in-ubuntu-18-04-bionic-beaver/

#### Agora com a senha definida, entre como administrador e digite:
> $ sudo mysql -u root -p

vai aparecer o prompt do mysql

#### Agora crie um novo usuário e conceda todas as permissões a ele:
> mysql> CREATE USER 'novousuario'@'localhost' IDENTIFIED BY 'password';

> mysql> GRANT ALL PRIVILEGES ON * . * TO 'novousuario'@'localhost';

> mysql> FLUSH PRIVILEGES;

> mysql> \q

Agora experimente acessar o phpmyadmin com seu novo usuário !!!

## Apache

### Instalanado o Apache
> sudo apt install apache2

### Interface Apache X PHP
> sudo apt install libapache2-mod-php7.2 

### Liberando o PHP no Apache
> sudo a2enmod php7.2

## Composer

### Instalando o composer (Gerenciador de pacotes do PHP)
> php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

>  php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

> php composer-setup.php

> php -r "unlink('composer-setup.php');"

> php composer.phar 

> sudo cp ./composer.phar /usr/bin/composer

> composer
  
## Criando um projeto
> 
