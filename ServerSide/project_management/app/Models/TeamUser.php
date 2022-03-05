<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class TeamUser extends Pivot
{
    const STUDENT=1;
    const SUPERVISOR=2;
    use HasFactory;
    protected $fillable=['user_id','team_id','user_type'];

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
    
    public function team():BelongsTo
    {
        return $this->belongsTo(Team::class,'team_id');
    }
    public function teams() :BelongsToMany
    {
        return $this->belongsToMany(Team::class,'team_id');
    }
}
