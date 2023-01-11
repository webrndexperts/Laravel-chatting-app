<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChMessage extends Model
{
       protected $fillable = [
        'type',
        'from_id',
        'to_id',
        'body',
        'attachment',
        'seen',
		
    ];
}
