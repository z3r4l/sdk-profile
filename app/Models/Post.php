<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Post extends Model
{

        /**
     * @var array<string, string>
     */
    protected $casts = [
        'published_at' => 'date',
    ];

    protected $with = ['category', 'comments'];

    
    /**
     * Get the category that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo( Category::class);
    }

    /**
     * Get the user that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

       /** @return MorphMany<Comment> */
       public function comments(): MorphMany
       {
           return $this->morphMany(Comment::class, 'commentable');
       }

       public function getRouteKeyName()
       {
          return 'slug';
       }
    // Menambahkan event before create untuk mengisi user_id
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
