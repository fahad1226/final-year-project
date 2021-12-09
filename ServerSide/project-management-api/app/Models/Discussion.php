<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{

    use HasFactory;

    protected $fillable = [
        'project_id',
        'title',
        'description',
        'image',
        'slug',
        'member_id'
    ];
}
