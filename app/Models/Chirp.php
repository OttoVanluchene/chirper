<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    protected $fillable = [
        'message',
    ];

    // Chirp belongs to a user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
