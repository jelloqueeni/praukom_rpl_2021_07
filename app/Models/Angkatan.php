<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model
{
  use HasFactory;

  protected $table = 'angkatan';
  protected $primaryKey = 'kode_angkatan';
  public $timestamps = false;
  public $incrementing = false;
  protected $keyType = 'string';
}
