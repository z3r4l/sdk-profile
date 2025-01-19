<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::creating(function ($post) {
            // Mengisi user_id dengan user yang sedang login
            if (auth()->check()) {
                $post->user_id = auth()->id(); // Mengambil ID dari user yang sedang login
            }
        });
    }
}
