<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloomingPeriod extends Model
{
  protected $primaryKey = 'BloomingPeriodId';
  protected $table = 'bloomingperiods';
  public $timestamps = false;

  public function flowers()
  {
    return $this->hasMany('App\Flower', 'BloomingPeriodId');
  }
}
