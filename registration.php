<!DOCTYPE html>
<html>
<head>

	<title> registration </title>

</head> 
 <body>
 	<from action="registrationprocess.php" method="post">

  Donor Information :<br><br>

 		First name:
<input type="text" name="firstname">
<br><br>
Last name:
<input type="text" name="lastname">
<br><br>
 Company:
<input type="text" name="Company">
<br><br>
 Address 1:
<input type="text" name="Address 1">
<br><br>
 Address 2:
<input type="text" name="Address 2">
<br><br>
 City:
<input type="text" name="City">
<br><br>

State:
    <select>
<option value ="selectstate">select a State</option>
<option value ="Dhaka">Dhaka</option>
<option value ="Kulna">Kulna</option>
  </select> <br><br>


 Zip Code:
<input type="text" name="Zip Code">
<br><br>

State:
    <select>
<option value ="selectstate">select a country</option>
<option value ="Bangladesh">Bangladesh</option>
<option value ="India">India</option>
  </select> <br><br>



Phone:
<input type="text" name="Phone">
<br><br>

Fax:
<input type="text" name="Fax">
<br><br>

Email:
<input type="text" name="Email">
<br><br>


Donation Amount:< <input type="radio" name="amount" value="none"> NoneS<br>
  <input type="radio" name="amount" value="50"> 50
  <input type="radio" name="amount" value="75"> 75
  <input type="radio" name="amount" value="100"> 100
  <input type="radio" name="amount" value="250"> 250
  <input type="radio" name="amount" value="other"> Other

  other amount$ <input type="text" name="otherAmount"><br>

			Recurring donation:<input type="checkbox" name="recurringDonation"><br>

			monthly card $ <input type="text" name="card"> for <input type="text" name="cardMonth">montns <br>



<br><br>

Honorrarium and Memorial Donation Information: <br>



			I would like to make this donation <input type="radio" name="toHonor">To Honor<br>
			<input type="radio" name="inMemoryOf">in memory of<br>


			 Name:<input type="text" name="name"><br>
			 Acknowledge Donation to<input type="text" name="aDonation">
			 <br><br>


		 Address :<input type="text" name="address">
		 <br><br>

		City:<input type="text" name="city">
		<br><br>

		State:
		<select>
  <option value="selectstate">select a state</option>
  <option value="dhaka">dhaka</option>
  <option value="chitagong">chitagong</option>
  <option value="nowakhali">nowakhali</option>
</select><br><br>

zip:
<input type="text" name="zipCode"><br><br>



<br>
Addtional infromation<br>


	

	</form>

</body>
</html>





