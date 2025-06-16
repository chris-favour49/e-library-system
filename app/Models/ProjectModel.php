<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    use HasFactory;

    protected $table = 'app_project_models';
    protected $fillable = [
        'user_id',
        'projectname',
        'description',
        'deadline',
    ];
}

