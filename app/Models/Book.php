<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\http\controllers\BookController;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'isbn', 'price', 'author_id'];

    public function author()
    {
        return $this->belongsTo('App\Models\Author');
    }
}
