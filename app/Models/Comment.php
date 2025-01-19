<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{

    protected $fillable = ['nama', 'email', 'no_hp', 'message', 'is_visible'];

    protected $casts = [
        'is_visible' => 'boolean',
    ];
    
    /** @return MorphTo<Model,self> */
    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
      /** @return BelongsTo<Customer,self> */
    //   public function user(): BelongsTo
    //   {
    //       return $this->belongsTo(User::class);
    //   }
}
