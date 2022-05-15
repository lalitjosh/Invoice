    @extends('layouts.master')


    @section('content')
         <P>
         <div class="nav">
           <div class="dropdown">
                            <button class="dropbtn">Invoice</button>
                              <div class="dropdown-content">
                                  <a href="create">Create Invoice</a>
                                  <a href="/dashboard"> View File</a>
                               </div>
           </div>

         </div>

                                  
                   
          </P> 
          <form action="{{ route('invoice.store') }}" METHOD="post">     
             @csrf
    <div class="page-content container">
        <div class="page-header text-blue-d2">
            
            <h1 class="page-title text-secondary-d1">
                Invoice
                <input type="number" name="invoiceid">
                <br>
                
                
            </h1>

            <h1 class="page-title text-secondary-d1">
                Invoice Date
                <input type="date" name="invoice_date">
                <br>
                
                
            </h1>

            
                </div>
            </div>
        </div>

        <div class="container px-0">
            <div class="row mt-4">
                <div class="col-12 col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center text-150">
                                <i class="fa fa-book fa-2x text-success-m2 mr-1"></i>
                                <span class="text-default-d3"><b><u>Invoice</u></b></span>
                            </div>
                        </div>
                    </div>
                    <!-- .row -->

                    <hr class="row brc-default-l1 mx-n1 mb-4" />

                    
                    

                    


                    <P>
                      <form action="{{ route('invoice.store') }}" METHOD="post">
                        
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right">
                        <h3>To,</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Company Name" autocomplete="off">
                        </div>

                      
                    </div>
    <div class="invoice" >
                    <div class="form-group">
                            <textarea class="form-control" rows="2" name="address" id="address" placeholder="Your Address"></textarea>
                        </div>
                        
                        <br>
                        <table style="width:100%" id="invoice">
                          <tr>
                            <th> <input type="checkbox" name="row-check" id="option-all" onchange="checkALL(this)"> </th>
                            <th>Invoice Id</th>
                            <th>Item Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                            

                        </tr> 
                        <tr>
                            <td id='col0'><input type="checkbox" name="" id="option-a"></td>


                            <td id ='col1' ><input type="text" name="item_no[]" ></td>
                            <td id ='col2'><input type="text" class="item_name" name="item_name[]"   ></td>
        <td id ='col3'><input type="number" id="qty" class="qty" name="qty[]" onchange="getTotal(this, 0)"></td>
                            <td id ='col4'><input type="number" id="pri" class="pri" name="price[]" onchange="getTotal(this, 1)"></td>
                            <td id ='col5'><input type="number" id="total" class="total" name="total[]" ></td>
                            
                            
                                                         
                        </tr>

                    </table>
                    
                        <br>
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                 
                                   <input class="btn btn-success" type="button" value="Add More" onclick="addRows()">  
                                    <input class="btn btn-danger delete" type="button" value="Delete" onclick="deleteRows()"> 
                                    
                                </tr>  
                            </div>
                        </div>
                    

                    <br>

                    

                   <div style="display: flex; justify-content: flex-end">
                    <span class="form-inline">
                        <div class="form-group">
                            <label>Subtotal:  </label>
                            <div class="input-group">
                                
                                <input value="" type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal">
                                <div > $</p>
                            </div>


                        </div>
                        <div class="form-group">
                            <label>Tax Rate:  </label>
                            <div class="input-group">
                                <input value="" class="form-control" name="taxRate" id="taxRate" placeholder="Tax Rate" onchange="getTax()">
                                <div class="input-group-addon"> %</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tax Amount:  </label>
                            <div class="input-group">
                                <div class="input-group-addon currency"> </div>
                        <input value="" class="form-control" name="taxAmount" id="taxAmount" placeholder="Tax Amount" >$
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Total:  </label>
                            <div class="input-group">
                                <div class="input-group-addon currency"> </div>
                                <input value="" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total"  >$
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Amount Paid:  </label>
                            <div class="input-group">
                                <div class="input-group-addon currency"> </div>
                                <input value="" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Amount Paid" onchange="getAmount()">$
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Amount Due:  </label>
                            <div class="input-group">
                                <div class="input-group-addon currency"></div>
                                <input value="" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Amount Due" >$
                            </div>
                            </div>
                        </div>
                    </span>
                </div>
            
                    <h3>Notes: </h3>
                    <div class="form-group">
                        <textarea class="form-control txt" rows="5" name="notes" id="notes" placeholder="Your Notes"></textarea>
                    </div>
                    
                    <br>
                    
                          
                            <INPUT  class="btn btn-success submit_btn invoice-save-btm" TYPE="SUBMIT" VALUE="Save Invoice" NAME="B1"> 
                       
                   
                     
        </form>


    </P>

    @endsection