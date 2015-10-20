#Example of Kbwebs multiauth

To Get it Working follow the below steps!!!

##### 1. Clone the Repository
``` git clone https://github.com/sunilysk/auth.git ```

##### 2. Install Dependencies

``` composer install ```

##### 3. Generate correct autoload files

``` composer dump-autoload ```

##### 4. Rename .env.example to .env and make changes to database and mandrill values( If u are using any other transcation mail provider then make changes to Config\mail.php as well) to make app run correctly.

##### 5. Migrate the tables

``` php artisan migrate ```

##### 5. Generate Application Key

``` php artisan key:generate ```


### Its done !!! Run the app with ``` php artisan serve ``` 