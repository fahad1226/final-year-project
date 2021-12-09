<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancelled extends Model
{
    protected $fillable=[
        'prjoect_id',
        'title',
        'due_date',
        'description',
        'assigned_to',
        'screenshot',
        'slug',
        'tag_id',
        'isCompleted'
    ];
}
