<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Team extends Model
{
    use HasFactory;
    protected $fillable=['first_member_id','second_member_id','third_member_id','supervisor_id','batch'];
    public function firstMember():BelongsTo
    {
        return $this->belongsTo(User::class,'first_member_id');
    }
     public function secondMember():BelongsTo
    {
        return $this->belongsTo(User::class,'second_member_id');
    }
     public function thirdMember():BelongsTo
    {
        return $this->belongsTo(User::class,'third_member_id');
    }
     public function supervisor():BelongsTo
    {
        return $this->belongsTo(User::class,'supervisor_id');
    }
}
