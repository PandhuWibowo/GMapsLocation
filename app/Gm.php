<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gm extends Model
{
  //menghubungkan table students
  protected $table = 'route';

  //menyimpan data tanpa timestamps(created_at, updated_at, deleted_at)
  public $timestamps = false;

}
