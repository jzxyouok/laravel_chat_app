<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table ="rooms";
    public function messages(){

        return $this->hasMany('App\Messages','room_id');
    }
}
