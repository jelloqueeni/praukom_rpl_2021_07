<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanPiket extends Model
{
  use HasFactory;

  protected $table = 'kegiatan_piket';
  protected $primaryKey = 'kode_kegiatan';
  public $timestamps = false;
  public $incrementing = false;
  protected $keyType = 'string';
}
