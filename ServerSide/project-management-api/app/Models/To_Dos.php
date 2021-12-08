<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class To_Dos extends Model
{
    protected $fillable=[
        'project_id',
        'title',
        'due_date','assigned_to','description','screenshot',
        'tag_id',
        'isCompleted'
    ];
}
