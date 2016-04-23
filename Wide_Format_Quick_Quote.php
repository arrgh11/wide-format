<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<title>
Quick Quote
</title>

<body>

<div style="padding: 50px;">
<div class="row">
	<div class="col-md-6">
		<img src="logo_copy.png" align="right">
	</div>
	<div class="col-md-6">
		<h3>Wide Format Quote Generator</h3>
		<h2><small>PRICES INCLUDE $50 SETUP FEE</small></h2>
	</div>
</div>
<br><br>
<div class="row">
	<div class="col-md-4">
		
	<form name="banner" class="form-inline">
		
		<label for="banner_title"><h3>Banner<small> 13 oz. White Matte or Gloss Scrim Vinyl</small></h3></label>
		
		<div class="form-group">
		<label>Size</label> 
			<input type="text" name="length" id="banner_length" class="form-control" placeholder="Length" width="16.6%" /> X <input type="text" name="width" id="banner_width" class="form-control" placeholder="Width" width="16.6%" />
			<br><br>
		<label>Quantity</label>
			<input type="text" name="quantity" id="banner_quantity" class="form-control" />
		</div>
		<br /> <br />
		<button type="button" onclick="calculateBanner()" class="btn btn-primary">Calculate Price</button> <br /><br />

			Your price (includes Hem and Grommet):<INPUT type="text" class="form-control" id="banner_quote" readonly style="color:red;"/>
	</form>
	</div>

	<div class="col-md-4">	
	<form name="foamcore" class="form-inline">
		
		<label for="foamcore"><h3>3/16" White Foamcore<small> Max Size of 48"x96"</small></h3></label>
		
		<div class="form-group">
		<label>Size</label> 
			<input type="text" name="length" id="foamcore_length" class="form-control" placeholder="Length" width="16.6%" /> X <input type="text" name="width" id="foamcore_width" class="form-control" placeholder="Width" width="16.6%" />
			<br><br>
		<label>Quantity</label>
			<input type="text" name="quantity" id="foamcore_quantity" class="form-control" />
		</div>
		<br /> <br />
		<button type="button" onclick="calculateFoamcore()" class="btn btn-primary">Calculate Price</button> <br /><br />

			Your price:<INPUT type="text" class="form-control" id="foam_quote" readonly style="color:red;"/>
	</form>
	</div>

	<div class="col-md-4">	
	<form name="coroplast" class="form-inline">
		
		<label for="coroplast"><h3>4mm Smooth White Coroplast<small> Max Size of 48"x96"</small></h3></label>
		
		<div class="form-group">
		<label>Size</label> 
			<input type="text" name="length" id="coroplast_length" class="form-control" placeholder="Length" width="16.6%" /> X <input type="text" name="width" id="coroplast_width" class="form-control" placeholder="Width" width="16.6%" />
			<br><br>
		<label>Quantity</label>
			<input type="text" name="quantity" id="coroplast_quantity" class="form-control" />
		</div>
		<br /> <br />
		<button type="button" onclick="calculateCoroplast()" class="btn btn-primary">Calculate Price</button> <br /><br />

			Your price:<INPUT type="text" class="form-control" id="coroplast_quote" readonly style="color:red;"/>
	</form>
	</div>
</div>
<br><br>
<div class="row">
	<div class="col-md-4">	
	<form name="gator" class="form-inline">
		
		<label for="gator"><h3>3/16" White/Black Gatorboard<small> Max Size of 48"x96"</small></h3></label>
		
		<div class="form-group">
		<label>Size</label> 
			<input type="text" name="length" id="gator_length" class="form-control" placeholder="Length" width="16.6%" /> X <input type="text" name="width" id="gator_width" class="form-control" placeholder="Width" width="16.6%" />
			<br><br>
		<label>Quantity</label>
			<input type="text" name="quantity" id="gator_quantity" class="form-control" />
		</div>
		<br /> <br />
		<button type="button" onclick="calculateGator()" class="btn btn-primary">Calculate Price</button> <br /><br />

			Your price:<INPUT type="text" class="form-control" id="gator_quote" readonly style="color:red;"/>
	</form>
	</div>

	<div class="col-md-4">	
	<form name="satin" class="form-inline">
		
		<label for="satin"><h3>White Satin Photo Paper<small> Max Width is 60"</small></h3></label>
		
		<div class="form-group">
		<label>Size</label> 
			<input type="text" name="length" id="satin_length" class="form-control" placeholder="Length" width="16.6%" /> X <input type="text" name="width" id="satin_width" class="form-control" placeholder="Width" width="16.6%" />
			<br><br>
		<label>Quantity</label>
			<input type="text" name="quantity" id="satin_quantity" class="form-control" />
		</div>
		<br /> <br />
		<button type="button" onclick="calculateSatin()" class="btn btn-primary">Calculate Price</button> <br /><br />

			Your price:<INPUT type="text" class="form-control" id="satin_quote" readonly style="color:red;"/>
	</form>
	</div>

	<div class="col-md-4">	
	<form name="pullup" class="form-inline">
		
		<label for="pullup"><h3>Pullup Banner<small> 13 oz. White Matte or Gloss Scrim Vinyl</small></h3></label>
		
		<div class="form-group">
		<label>Size</label> 
			<input type="text" name="length" id="pullup_length" class="form-control" placeholder="Length" width="16.6%" /> X <input type="text" name="width" id="pullup_width" class="form-control" placeholder="Width" width="16.6%" />
			<br><br>
		<label>Quantity</label>
			<input type="text" name="quantity" id="pullup_quantity" class="form-control" />
		</div>
		<br /> <br />
		<button type="button" onclick="calculatePullup()" class="btn btn-primary">Calculate Price</button> <br /><br />

			Your price:<INPUT type="text" class="form-control" id="pullup_quote" readonly style="color:red;"/>
	</form>
	</div>
</div>
<br><br><br>
	<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<form method="post" action="loq_wf.php">
		    <input type="hidden" id="bSubTotal" name="bSubTotal" value="">
		    <input type="hidden" id="bTrimSize" name="bTrimSize" value="">
		    <input type="hidden" id="bSubstrate" name="bSubstrate" value="">
		    <input type="hidden" id="bFinishing" name="bFinishing" value="">
		    <input type="hidden" id="bDescription" name="bDescription" value="">

		    <input type="hidden" id="fSubTotal" name="fSubTotal" value="">
		    <input type="hidden" id="fTrimSize" name="fTrimSize" value="">
		    <input type="hidden" id="fSubstrate" name="fSubstrate" value="">
		    <input type="hidden" id="fFinishing" name="fFinishing" value="">
		    <input type="hidden" id="fDescription" name="fDescription" value="">

		    <input type="hidden" id="cSubTotal" name="cSubTotal" value="">
		    <input type="hidden" id="cTrimSize" name="cTrimSize" value="">
		    <input type="hidden" id="cSubstrate" name="cSubstrate" value="">
		    <input type="hidden" id="cFinishing" name="cFinishing" value="">
		    <input type="hidden" id="cDescription" name="cDescription" value="">

		    <input type="hidden" id="gSubTotal" name="gSubTotal" value="">
		    <input type="hidden" id="gTrimSize" name="gTrimSize" value="">
		    <input type="hidden" id="gSubstrate" name="gSubstrate" value="">
		    <input type="hidden" id="gFinishing" name="gFinishing" value="">
		    <input type="hidden" id="gDescription" name="gDescription" value="">

		    <input type="hidden" id="sSubTotal" name="sSubTotal" value="">
		    <input type="hidden" id="sTrimSize" name="sTrimSize" value="">
		    <input type="hidden" id="sSubstrate" name="sSubstrate" value="">
		    <input type="hidden" id="sFinishing" name="sFinishing" value="">
		    <input type="hidden" id="sDescription" name="sDescription" value="">

		    <input type="hidden" id="pSubTotal" name="pSubTotal" value="">
		    <input type="hidden" id="pTrimSize" name="pTrimSize" value="">
		    <input type="hidden" id="pSubstrate" name="pSubstrate" value="">
		    <input type="hidden" id="pFinishing" name="pFinishing" value="">
		    <input type="hidden" id="pDescription" name="pDescription" value="">


		    <input type="hidden" id="grand_total" name="grand_total" value="">
		    <button type="submit" class="btn btn-info btn-lg" label="Generate Quote" onclick="grandTotal()">Generate Letter of Quote</button>
		</form>
	</div>
</div>

</div>


</body>


<script>
function calculateBanner(banner){

  //Get selected data  
  var banner_price = "<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->banner;
								?>"
    
  var blength = document.getElementById("banner_length").value;
  var bwidth = document.getElementById("banner_width").value;
var bquantity = document.getElementById("banner_quantity").value;
    
    
  //convert data to integers
  banner_price = parseInt(banner_price);
  blength = parseInt(blength);
  bwidth = parseInt(bwidth);
bquantity = parseInt(bquantity);
    
  //calculate total value  
  var btotal = blength*bwidth;
var btotal1 = btotal*banner_price;
var btotal2 = btotal1*bquantity;
var btotal3 = btotal2+50; 

var bSubTotal = "Banner: " + bquantity + " = $" + btotal3 +"<br>";
var bTrimSize = "Banner: " + blength + " x " + bwidth +"<br>";
var bSubstrate = "Banner: 13 oz. White Matte or Gloss Scrim Vinyl" +"<br>";
var bFinishing = "Banner: Price includes Hem and Grommet" +"<br>";
var bDesc = "Banner<br>"; 
 
  //print value to  PicExtPrice 
  document.getElementById("banner_quote").value=btotal3;
  document.getElementById("bSubTotal").value=bSubTotal;
  document.getElementById("bTrimSize").value=bTrimSize;
  document.getElementById("bSubstrate").value=bSubstrate;
  document.getElementById("bFinishing").value=bFinishing;
  document.getElementById("bDescription").value=bDesc;

return btotal3;

}

function calculateFoamcore(foamcore){

  //Get selected data  
  var foamcore_price = "<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->foamcore;
								?>"
    
  var flength = document.getElementById("foamcore_length").value;
  var fwidth = document.getElementById("foamcore_width").value;
var fquantity = document.getElementById("foamcore_quantity").value;
    
    
  //convert data to integers
  foamcore_price = parseInt(foamcore_price);
  flength = parseInt(flength);
  fwidth = parseInt(fwidth);
fquantity = parseInt(fquantity);
    
  //calculate total value  
  var ftotal = flength*fwidth;
var ftotal1 = ftotal*foamcore_price;
var ftotal2 = ftotal1*fquantity;
var ftotal3 = ftotal2+50; 

var fSubTotal = "Foamcore: " + fquantity + " = $" + ftotal3 +"<br>";
var fTrimSize = "Foamcore: " + flength + " x " + fwidth +"<br>";
var fSubstrate = 'Foamcore: 3/16in White Foamcore' +"<br>";
var fFinishing = "Foamcore: Includes Trim" +"<br>";
var fDesc = "Sign<br>";
    
  //print value to  PicExtPrice 
  document.getElementById("foam_quote").value=ftotal3;
   document.getElementById("fSubTotal").value=fSubTotal;
  document.getElementById("fTrimSize").value=fTrimSize;
  document.getElementById("fSubstrate").value=fSubstrate;
  document.getElementById("fFinishing").value=fFinishing;
  document.getElementById("fDescription").value=fDesc;

return ftotal3;

}

function calculateCoroplast(coroplast){

  //Get selected data  
  var coroplast_price = "<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->coroplast;
								?>"
    
  var clength = document.getElementById("coroplast_length").value;
  var cwidth = document.getElementById("coroplast_width").value;
var cquantity = document.getElementById("coroplast_quantity").value;
    
    
  //convert data to integers
  coroplast_price = parseInt(coroplast_price);
  clength = parseInt(clength);
  cwidth = parseInt(cwidth);
cquantity = parseInt(cquantity);
    
  //calculate total value  
  var ctotal = clength*cwidth;
var ctotal1 = ctotal*coroplast_price;
var ctotal2 = ctotal1*cquantity;
var ctotal3 = ctotal2+50; 
    
var cSubTotal = "Coroplast: " + cquantity + " = $" + ctotal3 +"<br>";
var cTrimSize = "Coroplast: " + clength + " x " + cwidth +"<br>";
var cSubstrate = 'Coroplast: 4mm Smooth White Coroplast' +"<br>";
var cFinishing = "Coroplast: Includes Trim" +"<br>";
var cDesc = "Sign<br>";

  //print value to  PicExtPrice 
  document.getElementById("coroplast_quote").value=ctotal3;
  document.getElementById("cSubTotal").value=cSubTotal;
  document.getElementById("cTrimSize").value=cTrimSize;
  document.getElementById("cSubstrate").value=cSubstrate;
  document.getElementById("cFinishing").value=cFinishing;
  document.getElementById("cDescription").value=cDesc;

return ctotal3;

}

function calculateGator(gator){

  //Get selected data  
  var gator_price = "<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->gatorboard;
								?>"
    
  var glength = document.getElementById("gator_length").value;
  var gwidth = document.getElementById("gator_width").value;
var gquantity = document.getElementById("gator_quantity").value;
    
    
  //convert data to integers
  gator_price = parseInt(gator_price);
  glength = parseInt(glength);
  gwidth = parseInt(gwidth);
gquantity = parseInt(gquantity);
    
  //calculate total value  
  var gtotal = glength*gwidth;
var gtotal1 = gtotal*gator_price;
var gtotal2 = gtotal1*gquantity;
var gtotal3 = gtotal2+50; 
    

 var gSubTotal = "Gatorboard: " + gquantity + " = $" + gtotal3 +"<br>";
var gTrimSize = "Gatorboard: " + glength + " x " + gwidth +"<br>";
var gSubstrate = 'Gatorboard: 3/16in White/Black/Black Gatorboard' +"<br>";
var gFinishing = "Gatorboard: Includes Trim" +"<br>";
var gDesc = "Sign<br>";

  //print value to  PicExtPrice 
  document.getElementById("gator_quote").value=gtotal3;
  document.getElementById("gSubTotal").value=gSubTotal;
  document.getElementById("gTrimSize").value=gTrimSize;
  document.getElementById("gSubstrate").value=gSubstrate;
  document.getElementById("gFinishing").value=gFinishing;
  document.getElementById("gDescription").value=gDesc;

return gtotal3;

}

function calculateSatin(satin){

  //Get selected data  
  var satin_price = "<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->satin;
								?>"
    
  var slength = document.getElementById("satin_length").value;
  var swidth = document.getElementById("satin_width").value;
var squantity = document.getElementById("satin_quantity").value;
    
    
  //convert data to integers
  satin_price = parseInt(satin_price);
  slength = parseInt(slength);
  swidth = parseInt(swidth);
squantity = parseInt(squantity);
    
  //calculate total value  
  var stotal = slength*swidth;
var stotal1 = stotal*satin_price;
var stotal2 = stotal1*squantity;
var stotal3 = stotal2+50;

var sSubTotal = "Satin Photo: " + squantity + " = $" + stotal3 +"<br>";
var sTrimSize = "Satin Photo: " + slength + " x " + swidth +"<br>";
var sSubstrate = 'Satin Photo: White Satin Photo Paper' +"<br>";
var sFinishing = "Satin Photo: Includes Trim" +"<br>"; 
var sDesc = "Sign<br>";  
    
  //print value to  PicExtPrice 
  document.getElementById("satin_quote").value=stotal3;

  document.getElementById("sSubTotal").value=sSubTotal;
  document.getElementById("sTrimSize").value=sTrimSize;
  document.getElementById("sSubstrate").value=sSubstrate;
  document.getElementById("sFinishing").value=sFinishing;
  document.getElementById("sDescription").value=sDesc;

  return stotal3;

}

function calculatePullup(pullup){

  //Get selected data  
  var paper_price = "<?php
								$xml=simplexml_load_file("wide_format_paper.xml") or die("Error: Cannot create object");
								echo $xml->banner;
								?>"
    
  var length = document.getElementById("pullup_length").value;
  var width = document.getElementById("pullup_width").value;
var quantity = document.getElementById("pullup_quantity").value;
    
    
  //convert data to integers
  paper_price = parseInt(paper_price);
  length = parseInt(length);
  width = parseInt(width);
quantity = parseInt(quantity);
    
  //calculate total value  
  var total = length*width;
var total1 = total*paper_price;
var total2 = total1*quantity;
var total3 = total2+50; 
    
  //print value to  PicExtPrice 
  document.getElementById("pullup_quote").value=total3;

}

function grandTotal() {

	var banner_sub = document.getElementById("banner_quote").value;
	var foam_sub = document.getElementById("foam_quote").value;
	var coro_sub = document.getElementById("coroplast_quote").value;
	var gator_sub = document.getElementById("gator_quote").value;
	var satin_sub = document.getElementById("satin_quote").value;

	banner_sub = parseInt(banner_sub);
	foam_sub = parseInt(foam_sub);
	coro_sub = parseInt(coro_sub);
	gator_sub = parseInt(gator_sub);
	satin_sub = parseInt(satin_sub);

	if (isNaN(banner_sub)) banner_sub = 0;
	if (isNaN(foam_sub)) foam_sub = 0;
	if (isNaN(coro_sub)) coro_sub = 0;
	if (isNaN(gator_sub)) gator_sub = 0;
	if (isNaN(satin_sub)) satin_sub = 0;

	var GrandTotal = banner_sub+foam_sub+coro_sub+gator_sub+satin_sub;
	document.getElementById("grand_total").value="$"+GrandTotal;
	document.getElementById("grand_total2").value="$"+GrandTotal;
}

</script>
</html>

