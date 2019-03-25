<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
    'first_name',
    'last_name',
    'age',
    'email',
    'secret'
    ];
}
