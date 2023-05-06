
# All Command for Blog Project

### 1. Install Laravel 10

```
composer create-project laravel/laravel laravel_10_blog_01
```


### 2. Change Directory
```
cd laravel_10_blog_01
```

### 3. Create a Controller

```
php artisan make:controller Frontend/FrontendController
```

### 4. Change the route
~~Route::get('/', function () {
    return view('welcome');
});~~

```
Route::get('/',[FrontendController::class,'index'])->name('front.index');
```


### 5. Create a method in ForntendController

```
public function index()
    {
        return view('welcome');
    }
```

### 6. Create a folder and sub-folder in resources/view

1. frontend
    * includes
    * layouts
        * master.blade.php
    * modules
        * master.blade.php


### 7. Create a method in ForntendController which is created in 5th serial

```
public function index()
    {
        return view('frontend.layouts.master');
    }
```

### Download a Frontend Template Stand Blog

Frontend Template [Stand Blog](https://www.free-css.com/free-css-templates/page270/stand-blog)

Copy the code from index.html and paste to the master.blade.php file.

for link all asset create a folder name backend in the public folder and copy vender and assets folder and paste that. 

{{ asset('frontend') }}/ past this code in asset and image src

### Template Mastering