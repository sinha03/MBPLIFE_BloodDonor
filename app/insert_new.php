<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insert_new extends Model
{
     protected $table="new_donor_list";
      protected $fillable = [
        'donorname','gender','location','bloodgroup','phonenumber','age','action','date','occupation',
    ];
}
