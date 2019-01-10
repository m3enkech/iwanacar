<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //
     public function getFullnameAttribute()
  {
      return "{$this->firstName} {$this->lastName}";
  }
}