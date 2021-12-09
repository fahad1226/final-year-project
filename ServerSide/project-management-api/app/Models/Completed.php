<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Completed extends Model
{

    use HasFactory;

    protected $fillable=[
        'project_id',
        'title',
        'due_date',
        'assigned_to',
        'slug',
        'description',
        'screenshot',
        'tag_id',
        'isCompleted'
    ];


}
