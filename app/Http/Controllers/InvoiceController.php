<?php

namespace App\Http\Controllers;



use App\Models\Invoice;
use App\Models\Detail;

use PDF;
use Illuminate\Http\Request;


class InvoiceController extends Controller
{



   public function index()

   {

    $invoices = Invoice::all();
    return view('dashboard',compact('invoices'));


    //return view('invoice.index',compact('invoices'));

    
 }

  public function pdf_print(Request $request, $invoice)
  {

          $invoice = Invoice::where('id','=',$invoice)->first();
          return view('invoice.pdf',compact('invoice'));
      

   }
 




 public  function create()

 {

   return view('invoice.create');

}


  public function test()
  {
    return $this->hasMany('App\Models\Invoice');

  }

  public function edit(Request $request, $invoice)
     {

          
          $invoice = Invoice::where('id','=',$invoice)->first();
          return view('invoice.edit',compact('invoice'));
     }

 public function update(Request $request, Invoice $invoice){
              
             
            

             


              $invoice->update([
                
                'item_no'=> $request->item_no,
                'item_name'=> $request->item_name,
                'qty'=>$request->qty,
                'price'=>$request->price,
                'total'=>$request->total,
                'companyName'=>$request->companyName,
                'notes'=>$request->notes,
                'subTotal'=>$request->subTotal,
                'taxRate'=>$request->taxRate,
                'taxAmount'=>$request->taxAmount,
                'totalAftertax'=>$request->totalAftertax,
                'amountPaid'=>$request->amountPaid,
                'amountDue'=>$request->amountDue,
                'address'=>$request->address
                     
                   

             ]);



             


              return redirect()->route('dashboard')->with(['message'=>'Invoice Updated']);
     
            }

            


    

     public function destroy(Invoice $invoice) 
            {
            
                    $invoice->delete();

                    return redirect()->route('dashboard')->with(['message'=>'Invoice Deleted']);

             



            }





            public function store(Request $request)

            {

              $data = [
               'invoiceid' => $request ->invoiceid,
               'invoice_date' => $request ->invoice_date,
               'companyName' => $request ->companyName,
               'notes' => $request->notes,
               'subTotal' => $request->subTotal,
               'taxRate' => $request->taxRate,
               'taxAmount' =>$request->taxAmount,
               'totalAftertax' => $request->totalAftertax,
               'amountPaid' => $request->amountPaid,
               'amountDue' => $request->amountDue,
               'address' => $request->address,

            ];


            $invoice = Invoice::create($data);
            foreach($request->item_name as $k => $item) {

              $internal = [
               
               'item_no' => $request->item_no[$k],
               'item_name' => $request->item_name[$k],
               'qty' => $request->qty[$k],
               'price'=>$request->price[$k],
               'total' =>$request->total[$k], 
            ];

            Detail::create($internal);

         }








         return redirect()->route('dashboard')->with(['message' =>'Invoice Created']);

      }



   }
