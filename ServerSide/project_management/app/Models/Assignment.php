<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assignment extends Model
{
    use HasFactory;
    protected $fillable=['project_id','details','status'];

    public function project() :BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
