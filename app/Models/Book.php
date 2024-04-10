<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'author',
        'image',
        'rating',
        'votes',
    ];

    // many to many relationship with topics
    public function topics(): BelongsToMany
    {
        return $this->belongsToMany(Topic::class);
    }

    // many to many relationship with users
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot('vote');
    }
}
