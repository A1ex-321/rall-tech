<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addservice extends Model
{
    use HasFactory;
    protected $table = 'addservice';

    protected $fillable = [
        'title','description','image' 
    ];
 
}
