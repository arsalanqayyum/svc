<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
}
