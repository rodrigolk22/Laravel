<h1>Laravel project using VS Code, XAMPP</h1> 

<p align="center">
<img src="https://img.shields.io/badge/PHP-8.2.12-green?style=flat" alt="PHP" />
<a href="https://packagist.org/packages/laravel/framework">
<img src="https://img.shields.io/badge/Laravel-10.10-green?style=flat" alt="Laravel" />
<img src="https://img.shields.io/badge/Composer-2.6.5-green?style=flat" alt="Composer" />
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



## Project Description 

<p align="justify">
  A sample Laravel project using VS Code IDE. 
</p>

## Functions

:heavy_check_mark: Run a Laravel application

## Requirements

- [Visual Studio Code](https://code.visualstudio.com/download)
- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/download/)
- [MySQL](https://www.mysql.com/)

## How to run the project :arrow_forward:

- Create a local MySQL database using XAMPP

- After installation set a password for root user in MySql Database
> mysqladmin.exe -u root password root

- Add this code in C:\xampp\apache\conf\extrahttpd-vhosts.conf

```script
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs"
    ServerName localhost
</VirtualHost>
```

- Use phpMyAdmin to create a database with a name 'laravel'

- In terminal run php artisan migrate

- run npm

> npm run dev

- Run artisan

> php artisan serve

- access http://127.0.0.1:8000


## Languages, dependencies and libs used :books:

- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/download/)
- [All-in-One PHP support](https://marketplace.visualstudio.com/items?itemName=DEVSENSE.phptools-vscode)
- [XAMPP](https://www.apachefriends.org/pt_br/index.html)

## Issues :exclamation:

I found some Composer errors while trying to build Laravel:

For fix some errors, i uncomment this following lines in php.ini

> extension=fileinfo

> extension=openssl


## Developer :octocat:

| [<img src="https://avatars.githubusercontent.com/u/26410295?v=4" width=115><br><sub>Rodrigo Luiz Kovalski</sub>](https://github.com/rodrigolk22) |
| :---: |


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
