<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mailstores extends Model
{
    use HasFactory;
    protected $table = 'mailstores';

    protected $fillable = [
        'name','phone','msg'
    ];
}
