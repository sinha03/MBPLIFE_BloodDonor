<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insert_donor extends Model
{
     protected $table="donor_list";
      protected $fillable = [
        'name','gender','location','blood_group','phone_number',
    ];
 
}
