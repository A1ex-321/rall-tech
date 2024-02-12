<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class raalcontact extends Model
{
    use HasFactory;
    protected $table = 'raalcontact';

    protected $fillable = [
        'address','number','email','title' 
    ];
 
}
