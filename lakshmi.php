
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
ob_start();
//$host=""; // Host name 
//$username=""; // Mysql username 
//$password=""; // Mysql password 
//$db_name=""; // Database name 
//$tbl_name=""; // Table name
$a="";
$b="";
$k="";
$d="";
$e="";
$f="";
$g="";
$h="";
$i="";
$j="";
$k="";
$l="";
$z="";
$c=0;
$gb=0;
session_start();
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
if(isset($_POST['submit']))
{
if(isset($_REQUEST["tp"]) && $_REQUEST["tp"]=='0')
{
$c++;
$a= "Total Passengers: select an option<br>";
echo"$a";
}
if(isset($_REQUEST["a"]) && $_REQUEST["a"]=='0')
{
$c++;
$b= "Adults: select an option<br>";
echo"$b";

}
 if(isset($_REQUEST["k"]) && $_REQUEST["k"]=='0')
{
$c++;
$k= "Kids: select an option<br>";
echo"$k";
}
if (empty($_POST["na"])) {
echo"Name is required<br>";
$c++;
}
 else {
$nam = test_input($_POST["na"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$nam)) {
$c++;
$d ="Name: Enter full name and Only letters and white space allowed<br>";
echo"$d";
}
}
if (empty($_POST["una"])) {
echo"enter user name<br>";
$c++;
}
 else {
$una = test_input($_POST["una"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$una)) {
$c++;
$z ="Name: Enter user name<br>";
echo"$z";
}
}
if (empty($_POST["em"])) {
$c++;
$e= "Email is required<br>";
echo"$e";
} else {
$email = test_input($_POST["em"]);
// check if e-mail address syntax is valid or not
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
$c++;
$e = "Invalid email format<br>";
echo"$e";
}
}
if (empty($_POST["cn"])) {
$c++;
$f= "Number is required<br>";
echo"$f";
} else {
$num= test_input($_POST["cn"]);
if (!preg_match("/^[0-9]{10}$/",$num)) {
$c++;
$f = "Invalid number<br>";
echo"$f";
}
}
if (empty($_POST["city"])) {
$c++;
$g= "Address is required<br>";
echo"$g";
} else {
$addr= test_input($_POST["city"]);
if (!preg_match("/^[a-zA-Z ]*$/",$addr)) {
$c++;
$g = "Invalid address format<br>";
echo"$g";
}
}
if (empty($_POST["an"])) {
$c++;
$h= "Aadhar is required<br>";
echo"$h";
} else {
$anum= test_input($_POST["an"]);
if (!preg_match("/^[0-9]{12}$/",$anum)) {
$c++;
$h= "InvalidAadhar number<br>";
echo"$h";
}
}
if(isset($_REQUEST['op']) && $_REQUEST['op']=='0')
{
$c++;
$i= "Payment: select an option<br>";
echo"$i";
}
if (empty($_POST["cnn"])) {
$c++;
$j= "CardNumber is required<br>";
echo"$j";
} else {
$cnum= test_input($_POST["cnn"]);
if (!preg_match("/^[0-9]{19}$/",$cnum)) {
$c++;
$j= "Invalid number<br>";
echo"$j";
}
}
if (empty($_POST["cvv"])) {
$c++;
$k= "cvv is required<br>";
echo"$k";
} else {
$cvnum= test_input($_POST["cvv"]);
if (!preg_match("/^[0-9]{3}$/",$cvnum)) {
$c++;
$k = "Invalid cvv<br>";
echo"$k";
}
}
if (empty($_POST["cname"])) {
$c++;
echo"Name is required<br>";
}
 else {
$cnam = test_input($_POST["cname"]);
if (!preg_match("/^[a-zA-Z ]*$/",$cnam)) {
$c++;
$l ="Name: Only letters and white space allowed<br>";
echo"$l";
}
}
//echo"be";
  if($_POST["6_letters_code"]==$_SESSION["6_letters_code"]){
echo"success.....";}
else
{
$c++;
echo"verification code doesn't match";
}
echo"$c";
if($c==0)
{
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Asia/Calcutta');

require 'PHPMailer-master/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTPss
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//$message = file_post_contents('form1.php'); 
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "mailmesailakshmi@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "saibharu";

//Set who the message is to be sent from
$mail->setFrom('mailmesailakshmi@gmail.com','Tourism_Malasia');

//Set an alternative reply-to address
$mail->addReplyTo('navaysree809@gmail.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress($_POST['em'],'pradeep reddy');

//Set the subject line
$mail->Subject ='Thank you';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$a=$_POST['una'];
$message="";
$message.="<table border=2 bgcolor=pink align=center><tr><td>";
$message.="User name:";
$message.="</td><td>";
$message.=$_POST['una'];
$message.="</td></tr><tr><td>";
$message.="full name:";
$message.="</td><td>";
$message.=$_POST['na'];
$message.="</td></tr><tr><td>";
$message.="Total passengers:";
$message.="</td><td>";
$message.=$_POST['tp'];
$message.="</td></tr><tr><td>";
$message.="contact no:";
$message.="</td><td>";
$message.=$_POST['cn'];
$message.="</td></tr><tr><td>";
$message.="city:";
$message.="</td><td>";
$message.=$_POST['city'];
$message.="</td>/tr><tr><td>";
$message.="Aadhar no:";
$message.="</td><td>";
$message.=$_POST['an'];
$message.="</td></tr><tr><td>";
$message.="card no:";
$message.="</td><td>";
$message.=$_POST['cnn'];
$message.="</td></tr><tr><td>";
$message.=" cvv:";
$message.="</td><td>";
$message.=$_POST['cvv'];
$message.="</td></tr></table>";


$mail->msgHTML($message, dirname(__FILE__));
//$mail->MsgHTML(file_get_contents('form.php'));
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
 else {
   //header('Location:redirect.php');
echo"mail sent successfully";
}


//=====================================================================
error_reporting(E_ALL ^ E_DEPRECATED);
ob_start();
//$host=""; // Host name 
//$username=""; // Mysql username 
//$password=""; // Mysql password 
//$db_name=""; // Database name 
//$tbl_name=""; // Table name

$conn = mysql_connect("localhost","root","");
if(! $conn ) {
die('Could not connect: ' . mysql_error());}
mysql_select_db("navs") or die(mysql_error());
//echo "Connected to Database<br />";
// Check $username and $password 
$tp=$_POST['tp']; 
$ta=$_POST['a'];
$tk=$_POST['k'];
echo"$tk<br>";
$name=$_POST['na'];
$uname=$_POST['una'];
$email=$_POST['em'];
$cn=$_POST['cn'];
$city=$_POST['city'];
$ano=$_POST['an'];
$pay=$_POST['op'];
$cardno=$_POST['cnn'];
$cvv=$_POST['cvv'];
$cname=$_POST['cname'];


/*To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
*/
$sql="SELECT * FROM onen WHERE name='$name' and email='$email'";
$result=mysql_query($sql,$conn);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count>0) {
    echo "Success! $count";
} else {
    echo "Unsuccessful! $count";
}

while($r=mysql_fetch_assoc($result))
{
$a=$r['totalp'];
if($a==NULL)
{
$gb++;
$sql1="UPDATE onen SET totalp='$tp',totala='$ta',totalk='$tk',contactno='$cn',addr='$city',aadharno='$ano',payment='$pay',cardno='$cardno',cvv='$cvv',cardname='$cname' WHERE name='$name' AND email='$email'";
$result1=mysql_query($sql1,$conn);
if(!$result1){
die('Could not enter data: ' . mysql_error());}
echo"correct";
}

}
if($gb==0)
{
$sql2="INSERT INTO onen(uname,password,totalp,totala,totalk,name,email,contactno,addr,aadharno,payment,cardno,cvv,cardname) VALUES ('$uname',NULL,'$tp','$ta','$tk','$name','$email','$cn','$city','$ano','$pay','$cardno','$cvv','$cname')";
$retval = mysql_query( $sql2, $conn );
if(! $retval ) {
die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
}
}
}
?>
<html>
<body bgcolor=grey>
<div align="right">
<a href="http://localhost:8081/programs/one.html"><button>Home page</button></a></div></body></html>