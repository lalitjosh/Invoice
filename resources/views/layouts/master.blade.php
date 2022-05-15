<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    


</head>
<style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Invoice System') }}
            
            <P>
            <div class="dropdown">
                       <button class="dropbtn">Invoice</button>
                      <div class="dropdown-content">
                          <a href="invoice/create">Create Invoice</a>
                          <a href="#"> View File</a>
                          
                     </div>
                </div>
       
             </div>

             <P>
                
        </h2>
    </x-slot>

body{
    margin-top:20px;
    color: #484b51;
}


.nav {
  border: 1px solid black;
  margin: 5px;
  background-color: #333; 
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;


}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
.text-secondary-d1 {
    color: #728299!important;
}
.page-header {
    margin: 3px 85px 1px;
    padding-bottom: 1rem;
    padding-top: .5rem;
    border-bottom: 1px dotted #e2e2e2;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-align: center;
    align-items: center;
}
.page-title {
    padding: 0;
    margin: 0;
    font-size: 1.75rem;
    font-weight: 300;
}
.brc-default-l1 {
    border-color: #dce9f0!important;
}

.ml-n1, .mx-n1 {
    margin-left: -.25rem!important;
}
.mr-n1, .mx-n1 {
    margin-right: -.25rem!important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}

.text-grey-m2 {
    color: #888a8d!important;
}

.text-success-m2 {
    color: #86bd68!important;
}

.font-bolder, .text-600 {
    font-weight: 600!important;
}

.text-110 {
    font-size: 110%!important;
}
.text-blue {
    color: #478fcc!important;
}
.pb-25, .py-25 {
    padding-bottom: .75rem!important;
}

.pt-25, .py-25 {
    padding-top: .75rem!important;
}
.bgc-default-tp1 {
    background-color: rgba(121,169,197,.92)!important;
}
.bgc-default-l4, .bgc-h-default-l4:hover {
    background-color: #f3f8fa!important;
}
.page-header .page-tools {
    -ms-flex-item-align: end;
    align-self: flex-end;
}

.btn-light {
    color: #4CAF50;
    background-color: #4CAF50;
    border-color: #dddfe4;
}
.w-2 {
    width: 1rem;
}

.text-120 {
    font-size: 120%!important;
}
.text-primary-m1 {
    color: #4087d4!important;
}

.text-danger-m1 {
    color: #dd4949!important;
}
.text-blue-m2 {
    color: #68a3d5!important;
}
.text-150 {
    font-size: 150%!important;
}
.text-60 {
    font-size: 60%!important;
}
.text-grey-m1 {
    color: #7b7d81!important;
}
.align-bottom {
    vertical-align: bottom!important;
}

.sub {
  margin: 3px 90px;
}

table, th, td {
  border:1px solid black;
}
</style>

<body id="page">
  @yield('content')
  
      


    <script >



  var subTotal1 = 0;
  var taxAmount1 = 0;
  var totalAftertax1 = 0;
  function getTotal(input ,i){
    // if (i ==0){
    //     console.log("qty")
    //     var par = input.parentElement.parentElement
    // }
    // else{
    //     console.log("price")
    //     var par = document.getParent(input)
    // }

    var par = input.parentElement.parentElement
   console.log("print")
    console.log(par)
    console.log("finished")
  
   var qty = par.getElementsByClassName("qty")[0].value
   var price = par.getElementsByClassName("pri")[0].value
   var total = par.getElementsByClassName("total")[0]

   

   price = price ? price:0
   qty = qty ? qty:0

   total.value = price * qty

   var subTotal = document.getElementById("subTotal")

   

   var total1 = document.getElementsByClassName("total")
   console.log(typeof total1)

   Array.prototype.forEach.call(total1,myFunction);

   function myFunction(item){
     
     subTotal1 = subTotal1 +parseInt(item.value);
     return subTotal1;
  
   }
   console.log(subTotal1)

     subTotal.value = subTotal1;
   
  


   



}

  function getTax()
  {
    var taxRate = document.getElementById("taxRate").value;

   var taxAmount = document.getElementById("taxAmount");


    
   var taxRate1 =(taxRate);

   taxAmount1 = (taxRate1/100)*subTotal1;

   taxAmount.value = taxAmount1; 
  
  

    
   var totalAftertax = document.getElementById("totalAftertax");

   totalAftertax1 = taxAmount1 + subTotal1;

   console.log(typeof totalAftertax1)

   totalAftertax.value = totalAftertax1;

   



  }
 

   function getAmount(){
           
    var amountPaid = document.getElementById("amountPaid").value;

    var amountDue = document.getElementById("amountDue");

    amountDue.value = totalAftertax1-amountPaid;  

   }


 
 


 
  


  
  
  function gettext(e){
    // a=parseInt(qty_input.value);
    // b=parseInt(pri_input.value);
    // if(!Number.isNaN(b)){
    //   total.value = a*b;  
    // }

    console.log("qth changed")

  }

  function gettext2(e){
    // a=parseInt(qty_input.value);
    // b=parseInt(pri_input.value);
    // if(!Number.isNaN(a)){
    //   total.value = a*b;  
    // }

    console.log("price change")

  }
 
  function addRows(){ 
    var table = document.getElementById('invoice');
    var rowCount = table.rows.length;
    console.log(table.rows)
    var cellCount = table.rows[0].cells.length; 
    var row = table.insertRow(rowCount);
    for(var i =0; i <= cellCount; i++){
        var cell = 'col' + i;
        cell = row.insertCell(i);
        var copycel = document.getElementById('col'+i).innerHTML;
        cell.innerHTML=copycel;
       }
}

function deleteRows(){
    var table = document.getElementById('invoice');
    var rowCount = table.rows.length;
    if(rowCount > '2'){
        var row = table.deleteRow(rowCount-1);
        rowCount--;
    }
    else{
        alert('There should be atleast one row');
    }
}

    
function checkALL(mycheckbox){

    console.log("on checked")

    var checkboxes = document.querySelectorAll("input[type='checkbox']");
    console.log(checkboxes)

    if(mycheckbox.checked ==true){
        checkboxes.forEach(function(checkbox){

            checkbox.checked = true;
        });
    }

     else{
           checkboxes.forEach(function(checkbox) {

               checkbox.checked = false;
           });


     }
}

function printPage(){
    var page = document.getElementById('page').innerHTML;
    var mydiv = document.getElementById('mydiv').innerHTML;
    document.getElementById('page').innerHTML = mydiv;

    window.print();
    
    document.getElementById('page').innerHTML = page;


    
}

</script>
</body>
</html>
