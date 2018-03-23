<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class widget extends Model
{
    protected $table = 'widgets';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
