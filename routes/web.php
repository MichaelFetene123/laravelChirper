<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function (){

    $ninjas = [
        ['name' => 'miki', 'skill' => 75, 'id' => 1],
        ['name' => 'emaye', 'skill' => 85, 'id' => 2]
    ]; 

    return view('ninjas.index', ['greeting' => 'Hello', 'ninjas' => $ninjas]);
});