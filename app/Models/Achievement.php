<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    public function Users() {
      return $this->hasOne(User::class);
    }
}
