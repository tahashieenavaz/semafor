<?php

use App\Models\Note;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $notes = Note::all();
    return view('welcome', compact("notes"));
});

Route::get("/note/{note}", function (Note $note) {
    return $note;
});
