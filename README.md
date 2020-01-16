# Modern Php MVC
A Simple demonstration of php in a modern way.

---

## Requirments
* Php 7.0
* PDO
* Mysql 8
* Php Composer

## Setup
### Database
Import `sql` dump file.
```
mysqlimport _db_name_ dump.sql
```

### Config
1. Rename `config.example.php` to `config.php`.
2. Edit `config.php` with you DB credentials.

### Autoload
Import all the classes at once with `composer psr`.
```
composer dump-autoload
```

### Run
Start local serve on port `80`.
```
php -S 127.0.0.1:80
```
Open `localhost:80` in your browser.
