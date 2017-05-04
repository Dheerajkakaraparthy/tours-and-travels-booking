
<html>
<head>

<title>take tour</title>
<style type="text/css">
body{
background-image:url(4.jpeg);
background-repeat:no-repeat;
background-size:cover;
height:800px;
width:1300px;
}
</style>
</head>
<body>
<form method="POST" name="booking_form"
action="http://localhost:8081/programs/lakshmi.php"> 
 
<center style="font-size:30px;color:red;margin-left:130px;text-decoration:underline;">Booking Form</center>
      <table align=center style="margin-left:400px;margin-top:30px;border:6px groove white;background-color:#f2d5c6;" width=50% height=80%>
<tr><td><font color="blue" size="4"><B>BOOKING INFORMATION</B></font></td></tr>
<tr>
		   <td> Total passengers:  </td>
		   <td>  <select name="tp" id="tp"> 
<option value="0">select</option>
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
<option value="10+">10+</option>
</select>
  </td>
		</tr>
<tr>
		   <td> Number of adults:  </td>
		   <td> <select name="a" id="a">
<option value="0">select</option>
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
</select> </td>
		</tr>
<tr>
		   <td> Number of kids:  </td>
		   <td> <select name="k" id="k">
<option value="0">select</option>
<option value="no">no</option>
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
</select> </td>
		</tr>
<tr><td><font color="blue" size="4"><B>GUEST INFORMATION</B></font></td></tr>
<tr>
		   <td>Name :   </td>
		   <td> <input type="text" name="na" id="na" > </td>
		</tr>
<tr>
		   <td>User Name :   </td>
		   <td> <input type="text" name="una" id="na" > </td>
		</tr>
<tr>
		   <td> Email Id :  </td>
		   <td> <input type="text" name="em" id="em" >  </td>
		</tr>
<tr>
		   <td> Contact number:  </td>
		   <td> <input type="text" name="cn" id="cn" >  </td>
		</tr>
<tr>
		   <td> city:  </td>
		   <td> <input type="text" name="city" id="city" >    </td>
		</tr>
<tr>
		   <td> Aadhar number:  </td>
		   <td> <input type="text" name="an" id="an" >  </td>
		</tr>
<tr>
		   <td> payment:  </td>
		   <td> <select name="op" id="op"> 
<option value="0">select</option>
<option value="credit card">Credit Card</option>
<option value="debit card">debit Card</option></select>

 </td>
		</tr>
<tr>
		   <td> Card number:  </td>
		   <td> <input type="text" name="cnn" id="cnn" >  </td>
		</tr>
<tr>
		   <td> Cvv:  </td>
		   <td> <input type="text" name="cvv" id="cvv" >  </td>
		</tr>
<tr>
		   <td> Name on card:  </td>
		   <td> <input type="text" name="cname" id="cname" >  </td>
		</tr>
<tr><td>
 
<img src="http://localhost:8081/programs/cc.php"
id="captchaimg" ></td></tr>
<tr><td>
<label for="message">Enter the code above here :</label></td>
<td><input id="6_letters_code" name="6_letters_code" type="text"></td><tr>
 
<tr><td><input type="submit" value="Submit" name="submit"></td></tr></table>
</form> 
</body></html>  