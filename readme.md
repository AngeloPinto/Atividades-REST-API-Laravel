
# Setup

#### Necessário:

* [PHP](https://windows.php.net/download/)
* [Composer](https://getcomposer.org/download/)


#### No seu arquivo [PHP.ini]:

* Habilitar as extensões: 
  
    ```
    extension=php_pdo_sqlite.dll
    extension=php_sqlite3.dll
    ```
	

#### No diretorio "/database/":
* criar um arquivo em branco com o nome "database.sqlite"

#### No diretorio principal
* criar uma cópia do arquivo ".env.example" com o nome ".env"

#### No arquivo [.env]:

* Remover as linhas:
    ```
 	DB_HOST=127.0.0.1
 	DB_PORT=3306
	DB_DATABASE=homestead
	DB_USERNAME=homestead
	DB_PASSWORD=secret
    ```
	
* Alterar a linha DB_CONNECTION para sqlite:
    ```
	DB_CONNECTION=sqlite
    ```

#### No [prompt]:

1. `composer update`

2. `php artisan key:generate`

3. `php artisan migrate --seed`

4. `php artisan serve`


# Documentation