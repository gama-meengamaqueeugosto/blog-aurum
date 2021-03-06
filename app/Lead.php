<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $table = "leads";

    public $fillable = [
    	'name',
    	'email',
        'ip',
        'type',
        'pg1',
        'pg2',
        'pg3',
        'pg4',
    ];
}
