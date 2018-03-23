<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prodcat extends Model
{
    protected $table = 'prodcat';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
