<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelUser extends Model
{
  use HasFactory;

  protected $table = 'level_user';
  protected $primaryKey = 'kode_level';
  public $timestamps = false;
  public $incrementing = false;
  protected $keyType = 'string';
  protected $guarded = [];

  public function akun () {
    return $this->hasMany(User::class,'kode_level','kode_level');
  }
}
