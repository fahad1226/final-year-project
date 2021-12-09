<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'todo_id',
        'working_on_id',
        'pending_id',
        'cancelled_id',
        'post_id',
        'user_id',
        'slug',
        'discussion_id',
        'category_id',
        'tag_id'
    ];
}
