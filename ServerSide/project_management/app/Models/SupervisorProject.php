<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SupervisorProject extends Model
{
    use HasFactory;
    protected $fillable=['user_id','project_id'];
    public function user() : BelongsTo
    {
       return $this->belongsTo(User::class);
    }
    public function project() : HasMany
    {
        return $this->hasMany(Project::class,'id');
    }
}
