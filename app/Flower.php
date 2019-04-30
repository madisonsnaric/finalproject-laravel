<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $primaryKey = 'FlowerId';
    public $timestamps = false;

    public function scent()
    {
      return $this->belongsTo('App\Scent', 'ScentId');
    }

    public function bloomingperiod()
    {
      return $this->belongsTo('App\BloomingPeriod', 'BloomingPeriodId');
    }

}
