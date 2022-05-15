<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;



    protected $fillable =[
       
       'item_no',
       'item_name',
       'qty',
       'price',
       'total',

   ];

    public function test()
  {
    return $this->hasMany('App\Models\Invoice');

  }
}
