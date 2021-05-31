<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'EmployeeController@indexView') -> name('indexLink');