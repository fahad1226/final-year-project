<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Working_on extends Model
{
    protected $fillable =[
        'project_id',
        'title',
        'due_date',
        'description',
        'assigned_to','slug',
        'screenshot',
        'tag_id',
        'isCompleted'
    ];
}
