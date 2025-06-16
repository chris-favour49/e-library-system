<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_Model extends Model {
    use HasFactory;
    protected $table = 'project_models';
    protected $fillable = [
        'projectname',
        'description',
    ];
}
