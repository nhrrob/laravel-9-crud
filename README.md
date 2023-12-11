<p align="center"><a href="https://nazmulrobin.com" target="_blank"><img src="http://laravel.nazmulrobin.com/images/nhrrob/nhrblog-logo-white.png" width="400"></a></p>

<p align="center">
<a href="https://github.com/nhrrob/laravel-8-crud/issues"><img alt="GitHub issues" src="https://img.shields.io/github/issues/nhrrob/laravel-8-crud"></a>
<a href="https://github.com/nhrrob/laravel-8-crud/network"><img alt="GitHub forks" src="https://img.shields.io/github/forks/nhrrob/laravel-8-crud"></a>
<a href="https://github.com/nhrrob/laravel-8-crud/stargazers"><img alt="GitHub stars" src="https://img.shields.io/github/stars/nhrrob/laravel-8-crud"></a>
<a href="https://github.com/nhrrob/laravel-8-crud/blob/master/LICENSE.md"><img alt="GitHub license" src="https://img.shields.io/github/license/nhrrob/laravel-8-crud"></a>

</p>

## Laravel 9 Crud

Laravel 9 Crud is a basic crud app built with laravel 9. In this app a basic product crud created. 
Features include:

- Laravel ui package (```composer require laravel/ui```)
- Laravel default auth (```php artisan ui bootstrap --auth```)
- Create product.
- List products.
- Update product.
- Delete product
- Migration file.
- Request file used to validate request data
- NHRROB Crud Generator package to generate crud using command
  <br>(https://github.com/nhrrob/crudgenerator - ```composer require nhrrob/crudgenerator```)  
- Pagination support

This app created to help developers to get started with their crud based apps.


## Install

Install commands:
``` 
- git clone https://github.com/nhrrob/laravel-8-crud.git 
- composer update
- add .env and update database settings
- php artisan migrate:fresh --seed
- php artisan serve

```


## Note

- This app uses resource route.
- To see product crud: browse - yoursiteurl/products 
  <br>(Ex. http://127.0.0.1:8000/products)
- Demo User (database/seeders/DatabaseSeeder.php): 
<br> ```admin@admin.com/password```


## License

The Laravel 9 Crud is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Contact

Feel free to contact:  
<a href="https://www.nazmulrobin.com/">nazmulrobin.com</a> | <a href="https://twitter.com/nhr_rob">Twitter</a> | <a href="https://www.linkedin.com/in/nhrrob/">Linkedin</a> | <a href="mailto:robin.sust08@gmail.com">Email</a>