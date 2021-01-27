<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\http\controllers\AuthorController;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'surname'];

    public function books()
    {
        return $this->hasMany('App\Models\Book');
    }
}
