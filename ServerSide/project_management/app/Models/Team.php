<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;
    protected $fillable=['batch'];
    public function teamUsers() :HasMany
    {
        return $this->hasMany(TeamUser::class);
    }
    public function proposal() :HasMany
    {
        return $this->hasMany(Project::class);
    }
}
