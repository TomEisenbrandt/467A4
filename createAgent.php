

<html>

<head>

<title>Create New Agent</title>

</head>

<style>
/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 15px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
    .column {
        width: 100%;
    }
}

</style>

<body>

<?php
include 'menu.php';
?>

<h1>Create New Agent</h1>

<form>

<div class="row">
    <div class="column">
    <h2>Name</h2>
    First Name:</br><input type="text" name="FirstName"></br>
    Middle Initial:</br><input type="text" name="MiddleInitial"></br>
    Last Name:</br><input type="text" name="LastName"></br>
    Agent ID:</br><input type="text" name="AgentID"></br><!--READ ONLY-->
    </br>
    </div>

    <div class="column">
    <h2>Contact Info</h2>
    Email:</br><input type="text" name="Email"></br>
    Office Phone:</br><input type="text" name="OfficePhone"></br>
    Mobile Phone:</br><input type="text" name="MobilePhone"></br>
    </br>
    </div>
</div>

<div class="row">
    <div class="column">
    <h2>Address</h2>
    State:</br><input type="text" name="State"></br>
    Zip Code:</br><input type="text" name="ZipCode"></br>
    City:</br><input type="text" name="City"></br>
    Street:</br><input type="text" name="Street"></br>
    </br>
    </div>

    <div class="column">
    <h2>Type</h2>
    <input type="radio" name="Type" value="Artist">Artist</br>
    <input type="radio" name="Type" value="Band">Band</br>
    <input type="radio" name="Type" value="Other">Other</br>
    </br>
    </div>
</div>

<input type="submit" value="Submit">

<button type="button" onclick="alert('beep')">Cancel</button>

</form>

</body>

</html>

