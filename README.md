# Store
## **Backend Laravel: PHP API backend with Laravel 8.30.1**

This repository wants to be a single backend example using Laravel.	
**PHP and Laravel versions**

| Environment |  Version  |
| ------------------- | ------------------- |
|  PHP |  8.0.2 |
|  Mysql |  15.1 Distrib 10.5.9-MariaDB|
|  Laravel |  8.30.1 |
|  Linux |  5.10.18-1-MANJARO |

The installation was using native tools from Linux and Laravel as:
- composer 
- artisan 

The approach was using the basic of Laravel framework to build a simple system to show how to build using a fast paced framework.
Initially I created the project using the follow command:

```composer create-project laravel/laravel store ```

This command build a complete project and after I used the follow command:
  
  ```php artisan make:controller StoreController ```

I used artisan to build 
  - Store Controller
  - Business model
  - index blade view
  - Store Test
  
And after created the respective files I put the code and logic inside there respectively

To manage the data into Laravel I used Facades because is ease to test and a little bit faster than Eloquent and is useful for this purpose.

## Database
I used Mysql to store the data 

```create table stores( id int not null auto_increment, name varchar(50), price float, city varchar(50),created_at datetime,updated_at datetime, primary key (id));``` 

## StoreTest
Was a simple test to verify the fields passed by the form

## Final considerations
The purpose of this is to show my skill in Laravel and I believe the code is clear and easy to use directly.

Thank you for your attention.
