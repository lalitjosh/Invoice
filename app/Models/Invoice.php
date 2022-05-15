<?php

namespace App\Models;
use App\Models\Detail;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;





    protected $fillable =[

       'invoiceid',
       'invoice_date',
       'companyName',
       'notes',
       'subTotal',
       'taxRate',
       'taxAmount',
       'totalAftertax',
       'amountPaid',
       'amountDue',
       'address',
  
        


       

    ];

  public function items(){
    return $this->hasMany(Detail::class,'item_no','invoiceid');
  }

}
