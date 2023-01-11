<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
	
   protected $fillable = [
        'first_name',
        'last_name',
        'email_address',
        'password',
        'address'
    ];	
	
	  public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
