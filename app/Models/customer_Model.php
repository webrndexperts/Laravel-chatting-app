<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer_Model extends Model
{
    use HasFactory;
   protected $fillable = [
        'first_name',
        'last_name',
        'email_address',
        'phone_number',
        'address'
    ];	
	
	  public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
