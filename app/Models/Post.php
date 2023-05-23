<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'contenu',
        'user_id'
    ];

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
