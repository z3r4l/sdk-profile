<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Achievement extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function getRouteKeyName()
    {
       return 'slug';
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
