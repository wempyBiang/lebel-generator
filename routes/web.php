<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabelGeneratorControll;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/import', [LabelGeneratorControll::class, 'import']);