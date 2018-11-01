<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    //
      // menghubungkan tabel siswa
  protected $table = 'barang';

  // menyimpan data tanpa timestamps(created_at, updated_at, delete_at)
  public $timestamps = true;
}
