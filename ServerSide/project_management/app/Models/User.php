<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
  use HasApiTokens;
  use HasFactory;
  use HasProfilePhoto;
  use Notifiable;
  use TwoFactorAuthenticatable;
  use HasRoles;
  const ADMIN=0;
  const SUPERVISOR=1;
  const STUDENT=2;
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'uid',
    'email',
    'phone',
    'role',
    'website',
    'telegram',
    'password',
  ];
      public function teamUser() :HasOne
      {
        return $this->hasOne(TeamUser::class,'user_id');
      }
      public function teamSupervisor() :HasMany
      {
        return $this->hasMany(TeamUser::class,'user_id');
      
      }
      public function supervisor() :HasMany
      {
        return $this->hasMany(SupervisorProject::class,'user_id');
      }
      public function comment() :HasMany
      {
        return $this->hasMany(Comment::class,'user_id');
      }
  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password',
    'remember_token',
    'two_factor_recovery_codes',
    'two_factor_secret',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  /**
   * The accessors to append to the model's array form.
   *
   * @var array
   */
  protected $appends = [
    'profile_photo_url',
  ];
}
