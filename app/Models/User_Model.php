<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Model extends Model {
    protected $table = 'user_models';
    use HasFactory;
    protected $fillable = [
        'username',
        'email',
    ];

}
