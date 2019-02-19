<html>
    <head>  
        <title> Calculator </title>
    
    <script language ="javascript" type="text/javascript">
    
    function subTotal ()  {
        
        var x = 5 ;
        var y = 10;
        var p = x + y * 12;
        var b = y * 12;
        
        if (document.getElementById('basicProgram').checked)   {
            document.calculator.total.value = b;
     
        } else if (document.getElementById('proProgram').checked)  {

        document.calculator.total.value = p;
        
    }
}


function calcDisc() {
   var subTott = document.calculator.total.value;
   var discTotal = ((subTot /100 *10))
   document.calculator.discount..value = discTotal;
}

function calcTotal() {

var subTott = document.calculator.total.value;

var discTotal =document.calculator.discount.value

var whole = (subTott - discTotal);


document.calculator.wholeTotal.value = wholeTotal;
}
</script>
</head>


<body> 

<form name="calculator">

<br />
<input type="radio" name="programType" id="basicProgram" value="Basic" /> Basic
<input type="radio" name="programType" id="proProgram" value="Pro" checked /> Pro

<br /> 
Subtotal: <input type="text" name="total">
<br>
<input type="button" value="Discount" oneclick="javascript:subTotal();">
</br>

Discount: <input type="text" name="discount">
<br>
<input type="button" value="Discount" oneclick="javascript:calcDisc();">
</br>

Total: <input type="text" name="wholeTotal">
<br>
<input type="button" value="Total" oneclick="javascript:calcTotal();">

</form>
