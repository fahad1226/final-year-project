<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use function PHPUnit\Framework\returnSelf;

class Tag extends Model
{
    use HasFactory;
    protected $fillable=['project_id','name'];

    public function project() :BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
