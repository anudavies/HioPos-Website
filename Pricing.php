<?php
session_start();
?>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="Pricing-style.css" type= "text/css"rel="stylesheet">
     <!-- Font Awesome -->
     <script src="https://kit.fontawesome.com/7c914f3b0a.js" crossorigin="anonymous"></script>


</head>
<body>
    <div class="top-banner">
        <p class="choose-plan"> Choose Your Plan</p>
    </div>
    <div id="page-wrap">
    <h1>Software Licence</h1>

    <table id="software-table">
    <tr>
         <th>Product Name</th> 
         <th>Quantity</th>
         <th>X</th> 
         <th>Price/Month</th>
         <th>=</th>
         <th style="text-align: right; padding-right: 30px;">Totals</th> 
    </tr>
    <tr class="odd">
        <td class="product-title">HioPos</td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="sparkle-num-pallets"></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>15000</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="sparkle-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="even">
        <td class="product-title">HiOffice Lite</td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-mvp-num-pallets"></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>15000</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="turface-mvp-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="odd">
        <td class="product-title">HiOffice Premium</td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-pro-league-num-pallets" ></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>25000</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="turface-pro-league-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="even">
        <td class="product-title">HiOffice Premium Additional</td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-pro-league-red-num-pallets"></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>12000</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="turface-pro-league-red-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="odd">
        <td class="product-title">HiOrder</td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-quick-dry-num-pallets" ></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>7500</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="turface-quick-dry-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="even">
        <td class="product-title">HioScreen</td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-mound-clay-red-num-pallets"></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>7500</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="turface-mound-clay-red-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="odd">
        <td class="product-title">HioStock</td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-red-num-pallets" ></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>7500</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-red-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="even">
        <td class="product-title">PortalRest Order</td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-drying-agent-num-pallets"></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>15000</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-drying-agent-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="odd">
        <td class="product-title">PortalRest- <em>Reservation</em></td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-professional-num-pallets" ></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>9500</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-professional-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="even">
        <td class="product-title">PortalRest- <em>Digital Menu QR</em></td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-top-dressing-num-pallets"></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>4750</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-top-dressing-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="odd">
        <td class="product-title">HioDelivery</td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-professional-num-pallets" ></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>4500</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-professional-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="even">
        <td class="product-title">Analystics</td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-top-dressing-num-pallets"></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>4500</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-top-dressing-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="odd">
        <td class="product-title">T-Quiosk</td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-professional-num-pallets" ></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>19500</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-professional-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="even">
        <td class="product-title">Loyalty Module</td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-top-dressing-num-pallets"></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>10000</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-top-dressing-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="odd">
        <td class="product-title">Bridge2HiOffice</td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-professional-num-pallets" ></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>1500</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-professional-row-total" disabled="disabled"></input></td>
    </tr>

    </table>


    <h1> Hardware </h1>
    <table id="software-table">
    <tr>
         <th>Product Name</th> 
         <th>Quantity</th>
         <th>X</th> 
         <th>Price/Month</th>
         <th>=</th>
         <th style="text-align: right; padding-right: 30px;">Totals</th> 
    </tr>
    <tr class="odd">
        <td class="product-title">Retail Bundle- <em>POS Android Touchscreen, Receipt Printer, Barcode Scanner</em></td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="sparkle-num-pallets"></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>223250</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="sparkle-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="even">
        <td class="product-title">Resturant/Café - <em>POS Android Touchscreen, Receipt Printer</em></td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-mvp-num-pallets"></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>199250</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="turface-mvp-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="odd">
        <td class="product-title">Salon/Spa Bundle- <em>POS Android Touchscreen, Receipt Printer, Barcode Scanner</em></td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-pro-league-num-pallets" ></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>223250</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="turface-pro-league-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="even">
        <td class="product-title">POS Android Touchscreen</td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-pro-league-red-num-pallets"></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>160000</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="turface-pro-league-red-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="odd">
        <td class="product-title">Receipt Printer</td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-quick-dry-num-pallets" ></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>50000</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="turface-quick-dry-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="even">
        <td class="product-title">Barcode Scanner</td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-mound-clay-red-num-pallets"></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>25000</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="turface-mound-clay-red-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="odd">
        <td class="product-title">Cash Drawer</td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-red-num-pallets" ></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>40000</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-red-row-total" disabled="disabled"></input></td>
    </tr>
    <tr class="even">
        <td class="product-title">1.2 KVA UPS </td>
        <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-drying-agent-num-pallets"></input></td>
        <td class="times">X</td>
        <td class="price-per-pallet">₦<span>35000</span></td>
        <td class="equals">=</td>
        <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-drying-agent-row-total" disabled="disabled"></input></td>
    </tr>
</table>

    </div>

    <script type="text/JavaScript">
       function IsNumeric(n) {
    return !isNaN(n);
} 

function CleanNumber(value) {

    // Assumes string input, removes all commas, dollar signs, and spaces      
    newValue = value.replace(",","");
    newValue = newValue.replace("₦","");
    newValue = newValue.replace(/ /g,'');
    return newValue;
    
}

function CommaFormatted(amount) {
    
	var delimiter = ","; 
	var i = parseInt(amount);
	
	if(isNaN(i)) { return ''; }
	
	i = Math.abs(i);
	
	var minus = '';
	if (i < 0) { minus = '-'; }
	
	var n = new String(i);
	var a = [];
	
	while(n.length > 3)
	{
		var nn = n.substr(n.length-3);
		a.unshift(nn);
		n = n.substr(0,n.length-3);
	}
	
	if (n.length > 0) { a.unshift(n); }
	
	n = a.join(delimiter);
	
	amount = "$" + minus + n;
	
	return amount;
	
}
function applyName(klass, numPallets) {

var toAdd = $("td." + klass).text();

var actualClass = $("td." + klass).attr("rel");

$("input." + actualClass).attr("value", numPallets + " pallets");

}

function removeName(klass) {

var actualClass = $("td." + klass).attr("rel");

$("input." + actualClass).attr("value", "");

}


            // Get references to the HTML elements that you'll be working with$
    $('.num-pallets-input').bind("focus blur change keyup", function(){
    
    // Caching the selector for efficiency 
    var $el = $(this);

    // Grab the new quantity the user entered
    var numPallets = CleanNumber($el.val());
            
    // Find the pricing
    var multiplier = $el
        .parent().parent()
        .find("td.price-per-pallet span")
        .text();
    
    // If the quantity is empty, reset everything back to empty
    if ( (numPallets == '') || (numPallets == 0) ) {
    
        $el
            .removeClass("warning")
            .parent().parent()
            .find("td.row-total input")
            .val("");
            
        var titleClass = $el.parent().parent().find("td.product-title").attr("rel");
        
        removeName(titleClass);
    
    // If the quantity is valid, calculate the row total
    } else if ( (IsNumeric(numPallets)) && (numPallets != '') ) {
        
        var rowTotal = numPallets * multiplier;
        
        $el
            .removeClass("warning")
            .parent().parent()
            .find("td.row-total input")
            .val(rowTotal);
            
        var titleClass = $el.parent().parent().find("td.product-title").attr("rel");
                
        applyName(titleClass, numPallets);
    
    // If the quantity is invalid, let the user know with UI change                                    
    } else {
    
        $el
            .addClass("warning")
            .parent().parent()
            .find("td.row-total input")
            .val("");
        
        var titleClass = $el.parent().parent().find("td.product-title").attr("rel");
        
        removeName(titleClass);
                                      
    };
});
    
    </script>

</body>
</html>