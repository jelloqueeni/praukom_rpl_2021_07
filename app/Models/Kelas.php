<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kelas extends Model
{
  use HasFactory;

  protected $table = 'kelas';
  protected $primaryKey = 'kode_kelas';
  public $timestamps = false;
  public $incrementing = false;
  protected $keyType = 'string';
  protected $guarded = [];

  public function jurusan(): BelongsTo
  {
    return $this->belongsTo(Jurusan::class, 'kode_jurusan', 'kode_jurusan');
  }

  public function getRouteKeyName(): string
  {
    return 'kode_kelas';
  }
}
