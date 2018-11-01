

<html>
<head>
<title>Index</title>
</head>
<body>

<?php
include 'menu.php';
?>

<h1>Create New Vendor</h1>

<!--
Vendor Name
Vendor ID (READ ONLY)

>address
Country
State
Zipcode
Street

Vendor Type

>Representative Info
Rep. Name
Email Address
Phone Number

-->

<form>

Vendor Name:</br><input type="text" name="vendorName"></br><!--Vendor Name input-->
Vendor ID:</br><input type="text" name="vendorID"></br><!--Vendor ID input (READ ONLY)-->
</br>

Country:</br><input type="text" name="country"></br><!--Country input-->
State:</br><input type="text" name="state"></br><!--State input-->
Zipcode:</br><input type="text" name="zipCode"></br><!--ZipCode input-->
Street:</br><input type="text" name="street"></br><!--Street input-->
</br>

Vendor Type:</br><input type="text" name="vendorType"></br><!--Vendor Type input-->
</br>

Rep. Name:</br><input type="text" name="RName"></br><!--Representative Name input-->
Email Address:</br><input type="text" name="email"></br><!--Email input-->
Phone Number:</br><input type="text" name="phoneNumber"></br><!--Phone Number input-->
</br>

<input type="submit" value="Submit"><!--Submit Button-->

</form>

</body>
</html>

