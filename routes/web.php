<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// login | logout
// /user/insert | /user/delete/{id} | /user/update/{id}
// /class
// student/modify/{id} | student/delete/{id} | studnet/insert
