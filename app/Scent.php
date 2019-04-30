<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scent extends Model
{
  protected $primaryKey = 'ScentId';
  public $timestamps = false;

  public function flowers()
  {
    return $this->hasMany('App\Flower', 'ScentId');
  }
}
