## How to run this Laravel project

-First you need to create a database in pgAdmin4 with the same name as the database in the env file as well as the same user access details

-Secondly you need to migrate the tables and seeder file

-Then run the project using which ever format you want, whether "php artisan serve" or "php -s Localhost:9099 -t public"

-As long as you have run the db seed file you can access the users comments page using "http://localhost:9099/user/1" for example

-You can also access the page to create a new comment using "http://localhost:9099/createComment"

-For the Json Post the route is declared in the api.php file under the routes folder and can be access using "http://localhost:9099/api/createComment" for example with the id, comments, and password field required

-To run the php unit test if you are on windows system and vendor/phpunit/bin path was added to the environment variables you can run this command in your application's root folder "vendor/bin/phpunit --debug"

-There is also a custom artisan command create to allow you to create user comments from the command line

-You can as well run that command using ">php artisan add:comment 1 hello" where "1" is the id of the user and "hello" is the comment


## ENJOY
