

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Invoice System') }}
            
            <P>
                
            <div class="dropdown">
                       <button class="dropbtn">Invoice</button>
                      <div class="dropdown-content">
                          <a href="invoice/create">Create Invoice</a>
                          <a href="dashboard"> View File</a>

                          
                     </div>
                </div>
       
             </div>

             <P>
                
        </h2>
         <div>
        
         
        <table id="invoices_table" class="table table-condensed table-striped">
        <thead>
            <tr>
                <th>Invoice No.</th>
                <th>Created Date</th>
                <th>Customer Name</th>
                <th>Invoice Total</th>
                <th>Print</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
             @foreach($invoices as $invoice)
            <tr>
                <th>5678</th>
                <th>{{ $invoice->created_at }}</th>
                <th>{{ $invoice->companyName }}</th>
                <th>{{ $invoice->amountPaid }}</th>
                <th><a href="{{ route('invoice.pdf',['invoice'=> $invoice->id]) }}">
           <button class="btn success">Print </button></th> 
                <th><a href="{{ route('invoice.edit',['invoice'=> $invoice->id])  }}" class="btn btn-info">
          <span class="glyphicon glyphicon-pencil"></span> Edit 
        </a></th>
        
        <form action="{{ route('invoice.destroy', ['invoice'=> $invoice->id]) }}" class="d-inline" method="post">

          @csrf
          @method('delete')

          <th><button class="btn btn-info btn-lg" type="submit" >
              <span class="glyphicon glyphicon-remove"></span> Delete </button> </th>

          </form>
            </tr>  
      @endforeach
              
        </thead>
    </table>


</div>


    </x-slot>
          
   



           
   
 


</x-app-layout>
    