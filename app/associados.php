<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class associados extends Model
{


    protected $fillable = [
        'name', 'email'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];
    //
}
