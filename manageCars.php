<?php
//retrieve session data
 session_start();
 $dbHost = "academic-mysql.cc.gatech.edu";         //Location Of Database usually its localhost 
 $dbUser = "cs4400_Group_59";            //Database User Name 
 $dbPass = "sg44Hlvd";            //Database Password 
 $dbDatabase = "cs4400_Group_59";    //Database Name 
 
 $db = mysql_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database."); 
 //Connect to the databasse 
 mysql_select_db($dbDatabase, $db)or die("Couldn't select the database."); 
?>
 
<html>
<head>
<title>GT Car Rental: Manage Cars   </title>

<body bgcolor="#000000">
<center>
<font color="#ffffff">


</head>
<body>

<p><b>Manage Cars </b></p>        


<!-- ************************************************************* -->  


<!-- ************************************************************* -->  
       

<form action="addCar.php" method="post">
Vehicle Sno: <input type="text" name="serialNumber"><br>
Car Model: <input type="text" name="carModel"><br>
Car Type:
<select name="carType">
<option value="hybrid">Hybrid</option>
<option value="gasoline">Gasoline</option>
</select><br>

Location:
<br>
<select name="location">
<?php
//IMPORTANT CODE
//Lists the locations from the SQL table in the option list
$getLocations = mysql_query("SELECT Location_Name FROM Location");
while ($temp = mysql_fetch_assoc($getLocations)) {
    echo "<option value='".$temp['Location_Name']."'>".$temp['Location_Name']."</option>";
}
?>
</select>
<br>

Color: <input type="text" name="color"><br>
Hourly Rate: <input type="text" name="hourlyRate"><br>
Daily Rate: <input type="text" name="dailyRate"><br>
Seating Capacity: <input type="text" name="seatingCapacity"><br>

Transmission Type:
<select name="transType">
<option value="manual">Manual</option>
<option value="auto">Automatic</option>
</select><br>

Bluetooth Connectivity:
<select name="bluetooth">
<option value="yesBluetooth">Yes</option>
<option value="noBluetooth">No</option>
</select><br>

Auxilary Cable:
<select name="auxCable">
<option value="yesAux">Yes</option>
<option value="noAux">No</option>
</select><br>


<input type="submit" value="Add">
</form>

<hr>

<p><b>Change Car Location </b></p> 

<form>

Choose current location:
<select name = "currentLocation">
<?php
$getLocations = mysql_query("SELECT Location_Name FROM Location");
while ($temp2 = mysql_fetch_assoc($getLocations)) {
    echo "<option value='".$temp2['Location_Name']."'>".$temp2['Location_Name']."</option>";
}
?>
</select><br>

Choose car:
<select name="chooseCar">
<option value="civic">Honda Accord</option>
<option value="camery">Toyota Camery</option>
</select><br>
</form>

<p><b>Brief Description </b></p>

<form>
Car Type: <input type="text" name="carDescType"><br>
Color: <input type="text" name="carDescColor"><br>
Seating Capacity: <input type="text" name="seatingDescCap"><br>

Transmission Type:
<select name="transDescType">
<option value="manual">Manual</option>
<option value="auto">Automatic</option>
</select><br>

Choose new location:
<select name="chooseNewLocation">
<option value="howey">Howey</option>
<option value="klaus">Klaus</option>
</select><br>

<input type="submit" value="Submit Changes">

</form>
</html>


