<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Walikelas extends Model
{
  use HasFactory;

  protected $table = 'walikelas';
  protected $primaryKey = 'kode_walas';
  public $timestamps = false;
  public $incrementing = false;
  protected $keyType = 'string';
}
