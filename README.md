<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



## About Package

This package provides a simple way to create PDFs in Laravel apps. Under the hood it uses Chromium to generate PDFs from Blade views. You can use modern CSS features like grid and flexbox to create beautiful PDFs.


### Installation & setup
You can install the package via composer:

```composer require spatie/laravel-pdf
```

web.php

```php
Route::view('view-resume','pdf');
```
Create Invokable Controller
```
php artisan make:controller PdfController --invokable
```

web.php
```php
Route::get('pdf', PdfController::class);
```

app\Http\Controller\PdfController.php
```
use Spatie\LaravelPdf\Facades\Pdf;
Pdf::view('pdf')->save('new.pdf');
```
Here pdf is blade file pdf.blade.php 

```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;

class PdfController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        Pdf::view('pdf')->save('new.pdf');
        return true;
    }
}

```
After hitting http://127.0.0.1:8000/pdf return true.
Pdf file will be stored in public as new.pdf

  
  