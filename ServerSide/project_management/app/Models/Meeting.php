<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Meeting extends Model
{
    use HasFactory;
    protected $fillable=['project_id','details','schedule'];
    public function project() : BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
