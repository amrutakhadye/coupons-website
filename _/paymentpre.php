<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>payment Processing</title>

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

/* ---------- paymentpre ---------- */
#paymentpre {
	margin: 50px auto;
	width: 800px;

form fieldset input[type="text"], input[type="fname"] {
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


</style>
</head>

<body>
<div id="paymentpre">
<?php


echo "Thank you ";

echo " " .$_POST['fname']. " ";
echo " " .$_POST['lname']. " ";

echo "for your purchased";
echo "<br>";
echo "We hope to have you again";
?>
</div>
</body>
</html>