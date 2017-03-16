<?php

namespace Com\CodeFive\Example\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'text',
    ];
}