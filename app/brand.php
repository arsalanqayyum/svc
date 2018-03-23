<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $table = 'brands';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
