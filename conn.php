
<?PHP

/************************************************
NAME:		TOM EISENBRANDT
Server Connection

PDO Paramters
HOST		=	'courses'
DATABASE	=	'z1771209'
USER		=	'z1771209'
PASSWORD	=	'1994Aug20'
************************************************/

//	PDO Parameters
//$dsn	=	'mysql:host=localhost;dbname=z1771209'; 
//$HOST		=	'courses';  //  courses/students/gabbage - localhost(127.0.0.1) for debug
//$DATABASE	=	'z1771209'; 
$USER		=	'z1771209';
$PASS		=	'1994Aug20';

//	Make new PDO
$CONN = new PDO('mysql:host=127.0.0.1;dbname=z1771209;',$USER, $PASS);

//	Error check
try{
$CONN->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

//	Output for errors
catch(PDOException $E){
echo '<BR>';
echo 'ERROR: ' . $E->getMessage();
echo '<BR>';
}

?>
