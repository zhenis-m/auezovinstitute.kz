<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departaments extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['title', 'body', 'locale', 'created_at', 'updated_at'];
}
