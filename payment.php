<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Payment</title>
<style>
.error {color: #FF0000;}
</style>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>


<style type="text/css">
body {
background-color: #f4f4f4;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
}
a { text-decoration: none; }
h1 { font-size: 1em; }
h1, p {
margin-bottom: 10px;
}
strong {
font-weight: bold;
}
.uppercase { text-transform: uppercase; }

/* ---------- payment ---------- */
#paymentd {
	margin: 50px auto;
	width: 500px;
}
#paymentc {
	margin: 50px auto;
	width: 500px;
}
form fieldset input[type="text"], input[type="pay"] {
background-color: #e5e5e5;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 30px;
outline: none;
padding: 0px 10px;
width: 200px;
-webkit-appearance:none;
}
form fieldset input[type="Submit"] {
background-color: #008dde;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 300px;
-webkit-appearance:none;
}
form fieldset a {
color: #5a5656;
font-size: 10px;
}

</style>
</head>

<body>

<!--prof Honda told me that we do not havr to conectet to PayPal if we do not want for real -->

<?php
// define variables and set to empty values


$fname = $lname =$addressI =$city =$state =$country = $zipCode =$email = $creditCards =$cardNumber = $cv = $nameOnCard = "";
?>
   
   
   
   
   



<div id="paymentd" >
<form id="lastName" name="lastName" action="paymentpre.php" method="post" >


<p><span class="error">* required field.</span></p>

 <fieldset>
<h2>Personal Information:</h2>
<p>First name:</p>
<p><span id="sprytextfield1">
  <label>
    
    <input type="text" name="fname" id="fname" />
    <span class="error">*</span></label>
  <span class="textfieldRequiredMsg">First name is required.</span></span></p>
<p>Last Name:</p>
<p> <span id="sprytextfield2">
  <label>
    <input type="text" name="lname" id="lname" />
    <span class="error">*</span></label>
  <span class="textfieldRequiredMsg">Last name is required.</span></span></p>
<p>Address I:</p>
<p><span id="sprytextfield3">
  <label>
    <input type="text" name="addressi" id="addressi" />
    <span class="error">*</span></label>
  <span class="textfieldRequiredMsg">Address is required.</span></span></p>
<p>Address II:</p>
<p>
  <input type="text" name="addressii" id="addressii" />
</p>
   <p>City:</p>
   <p> <span id="sprytextfield4">
     <label>
       <input type="text" name="city" id="city" />
       <span class="error">*</span></label>
     <span class="textfieldRequiredMsg">City name is required.</span></span></p>
<p>State:</p>
<p> <span id="sprytextfield5">
  <label>
    <input type="text" name="state" id="state" />
    <span class="error">*</span></label>
  <span class="textfieldRequiredMsg">State name is required.</span></span></p>
<p>Zip Code:</p>
<p> <span id="sprytextfield6">
  <label>
    <input type="text" name="zip" id="zip" />
    <span class="error">*</span></label>
  <span class="textfieldRequiredMsg">Zip Code is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></p>
<p>Country:</p>
<p> <span id="sprytextfield7">
  <label>
    <input type="text" name="country" id="country" />
    <span class="error">*</span></label>
  <span class="textfieldRequiredMsg">Required Field.</span></span></p>
<p>Phone Number:</p>
<p>
  <input type="text" name="phoneNumber" id="phoneNumber" />
</p>
<p>Email Address:</p>
<p> <span id="sprytextfield6">
  <label><span id="sprytextfield8">
    <input type="text" name="emailaddress" id="emailaddress" />
    <span class="error">*</span> <span class="textfieldRequiredMsg">Email Address is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></label>
  
</span></p>

<div id="paymentc">
  <h2>Payment Information:  </h2>
   <p>    <span id="spryradio1">
      <label>
        <input type="radio" name="CreditRadioGroup" value="VISA" id="CreditRadioGroup_0" />
      VISA</label>
      <br />
      <label>
        <input type="radio" name="CreditRadioGroup" value="MASTERCARD" id="CreditRadioGroup_1" />
      MASTERCARD</label>
      <br />
      <span class="radioRequiredMsg">A selection is Required.</span></span>
    
    
  </p>
   
  <p>Card Number:</p>
  <p> <span id="sprytextfield9">
    <label>
      <input type="text" name="carednumber" id="carednumber" />
      <span class="error">*</span></label>
    <span class="textfieldRequiredMsg">Card Number is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></p>
   
   <p>Expiry Date: Month:
     <span id="spryselect2">
     <label>
       <select name="month" id="month">
          <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
    <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>  
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
       </select>
       *</label>
     <span class="selectRequiredMsg">Please select a month.</span></span>     Year: <span id="spryselect1">
<label>
  <select name="Year" id="Year">
   <option value="2009">2009</option>
      <option value="2010">2010</option>
      <option value="2011">2011</option>
      <option value="2012">2012</option>
      <option value="2013">2013</option>
      <option value="2014">2014</option>
      <option value="2015">2015</option>
      <option value="2016">2016</option>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
  </select>
  *</label>
<span class="selectRequiredMsg">Please select a year.</span></span></p>
  <p>CV:</p>
  <p> <span id="sprytextfield10">
    <label>
      <input type="text" name="cv" id="cv" />
      <span class="error">*</span></label>
    <span class="textfieldRequiredMsg">Required Field.</span></span></p> 
   <p>Name On Card:</p>
   <p> <span id="sprytextfield11">
     <label>
       <input type="text" name="nameoncard" id="nameoncard" />
       
       <span class="error">*</span></label>
     <span class="textfieldRequiredMsg">Required Field.</span></span></p>
 
  
   </div>
   <div align="center">
     <input name="Submit" type="submit" value="submit" />
   </div>
 </fieldset>

</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "zip_code");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "email");
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "credit_card");
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10", "none");
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");

</script>
</body>
</html>