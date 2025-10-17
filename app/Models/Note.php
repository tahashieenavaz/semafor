<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public static function booted()
    {
        static::updated(function (Note $note) {
            NoteHistory::create([
                'note_id' => $note->id,
                'title' => $note->getOriginal("title"),
                'content' => $note->getOriginal("content"),
            ]);
        });
    }
}
