<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaPemrograman extends Model
{
  use HasFactory;

  protected $table = 'kepala_pemrograman';
  protected $primaryKey = 'nip_kaprog';
  public $timestamps = false;
  public $incrementing = false;
  protected $keyType = 'string';
}
