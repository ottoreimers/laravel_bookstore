<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\http\controllers\YearController;

class Year extends Model
{
    use HasFactory;

    protected $fillable = ['year', 'author_id'];


}

