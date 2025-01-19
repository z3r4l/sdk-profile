<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /**
     * The posts that belong to the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    // public function posts(): BelongsToMany
    // {
    //     return $this->belongsToMany(Post::class, 'post');
    // }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
