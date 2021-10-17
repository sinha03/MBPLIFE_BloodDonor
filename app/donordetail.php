<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donordetail extends Model
{
      protected $table = 'donordetails';
    protected $fillable = [
        'age','action','date','occupation',
    ];
}
