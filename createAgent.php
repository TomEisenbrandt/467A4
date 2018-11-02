

<?php 

include 'header.php';   //  Include Header

include 'conn.php';     //  Include connection

//Random Number Generator used for making IDs
// Add check for unique numbers?
//$MIN = 100 ;
//$MAX = 100000 ;
//$RandID = int rand( int $MIN , int $MAX ) ;

echo '</br><center><h1>Create New Agent</h1></center></br>';    //  Title
echo '<center><form method="post">';  //  Form start

echo '<div class="row"><div class="column"><h2>Name</h2>';    //  AGENT NAME
echo 'First Name:</br><input type="text" name="FirstName"></br>';   //  First Name
echo 'Middle Initial:</br><input type="text" name="MiddleInitial"></br>';   //  Middle Initial
echo 'Last Name:</br><input type="text" name="LastName"></br>'; //  Last Name

//echo 'Agent ID:</br><input type="text" name="AgentID" id="AID" readonly></br>';   //  Agent ID >>>READ ONLY<<<
echo 'Agent ID:</br><input type="text" name="AgentID" id="AID" ></br>';   //  Agent ID >>>READ ONLY<<<

echo '</br></div><div class="column"><h2>Contact Info</h2>';    //  CONTACT INFO
echo 'Email:</br><input type="text" name="Email"></br>';    //  Email
echo 'Office Phone:</br><input type="text" name="OfficePhone"></br>';   //  Office Phone
echo 'Mobile Phone:</br><input type="text" name="MobilePhone"></br>';   //  Mobile Phone

echo '</br></div></div><div class="row"><div class="column"><h2>Address</h2>';  //  ADDRESS
echo 'State:</br><input type="text" name="aState"></br>';    //  State
echo 'Zip Code:</br><input type="text" name="ZipCode"></br>';   //  Zip Code
echo 'City:</br><input type="text" name="City"></br>';  //  City
echo 'Street:</br><input type="text" name="Street"></br>';  //  Street

echo '</br></div><div class="column"><h2>Type</h2>';    //  AGENT TYPE (Radio)
echo '<input type="radio" name="aType" value="Artist" checked>Artist</br>';  //  Artist (default)
echo '<input type="radio" name="aType" value="Band">Band</br>';  //  Band
echo '<input type="radio" name="aType" value="Other">Other</br>';    //  Other

echo '</br></div></div><input type="submit" value="Submit">';   //  Submit Button
echo '<button type="button" onclick="alert("beep")">Cancel</button>';   //  Cancel Button

/////////////////////////////////////////////////////////////
//  Clear all button ?
//  RNG fill button ?

echo '</form></center>';    //  Form End

//////////////////////////////////////////////////////////
//  Need a check on all fields

//  Post to server
if($_SERVER['REQUEST_METHOD'] =='POST'){
$F_NAME = trim($_POST['FirstName']);   //  First Name
$M_NAME = trim($_POST['MiddleInitial']);   //  Middle Initial
$L_NAME  = trim($_POST['LastName']);    //  Last Name
$AGENT_ID  = trim($_POST['AgentID']);    //  Agent ID
$EMAIL  = trim($_POST['Email']);    //  Email
$OFFICE_PHONE  = trim($_POST['OfficePhone']);    //  Office Phone
$MOBILE_PHONE  = trim($_POST['MobilePhone']);    //  Mobile Phone
$STATE  = trim($_POST['aState']);    //  State
$ZIP  = trim($_POST['ZipCode']);    //  Zip Code
$CITY  = trim($_POST['City']);    //  City
$STREET  = trim($_POST['Street']);    //  Street
$TYPE  = trim($_POST['aType']);    //  Type (Radio)


//  SQL commend
$SQL = "INSERT INTO z1771209.agent 
(FirstName, MiddleInitial, LastName, AgentID, Email, OfficePhone, MobilePhone, aState, ZipCode, City, Street, aType) VALUES 
('$F_NAME','$M_NAME','$L_NAME','$AGENT_ID','$EMAIL','$OFFICE_PHONE','$MOBILE_PHONE','$STATE','$ZIP','$CITY','$STREET','$TYPE')";

//  Check
if($CONN->query($SQL)==TRUE){
echo '<center>New Data Imported</center></br>';

//  Error Output
}else{
echo '<CENTER>ERROR: ';
echo $SQL ; 
echo '<BR>' ; 
echo $CONN->error;
echo '</CENTER><BR><BR>';

}   //  End else

//$CONN -> close();   //  Close connection
//mysqli_close($CONN);

}   //  End if(post)

include 'footer.php';   //  Include Footer

?>

