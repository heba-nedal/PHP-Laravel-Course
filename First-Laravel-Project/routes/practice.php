<?php

use Illuminate\Support\Facades\Route;

Route::get('/news/{id}/{name?}', function ($id, $name = '') {
    return "News No# $id, Name $name";
});
