<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task_Model extends Model {
    use HasFactory;
    protected $table = 'task_models';
    protected $fillable = [
        'isbn',
        'book',
        'author',
        'category',
        'pdf_path',

    ];
}
