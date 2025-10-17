<?php

use App\Models\Note;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/note/{note}", function (Note $note) {
    return $note;
});
