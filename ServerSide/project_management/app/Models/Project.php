<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;
    protected $fillable=['team_id','name','avatar','details','tag','status','deadline'];
    const PENDING=0;
    const APPROVED=1;
    const REJECTED=2;
    public function tag() : HasMany
    {
        return $this->hasMany(Tag::class,'project_id');
    }
     public function team():BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
    public function assignment() :HasMany
    {
        return $this->hasMany(Assignment::class,'project_id');
    }
    public function comment() : HasMany
    {
        return $this->hasMany(Comment::class,'project_id');
    }
    public function meeting() : HasMany
    {
        return $this->hasMany(Meeting::class,'project_id');
    }
}
