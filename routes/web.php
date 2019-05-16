<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/', 'AppController@index')->name('app.index');
