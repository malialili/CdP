<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userstory extends Model
{
    protected $table = 'userstory';

    protected $fillable = [
        'description',
        'priority',
        'difficulty',
        'status',
        'project_id'
    ];
}
