<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book; // Needed to reference Book model

class Genre extends Model
{
    use HasFactory;

    // Allow mass assignment (optional but useful)
    protected $fillable = [
        'name',
        'description',
    ];

    // Relationship: One Genre has many Books
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
