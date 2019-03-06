<!DOCTYPE html>
<html>

<head>
	<title>>HARRIOT HOTELS</title>
	<link rel="stylesheet" type="text/css" href="../../css/booking.css">
	<link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
</head>

<body>
	<div class="header-container">
		<div>
			<img src="images/logo.jpg" class="logo">
		</div>
		<div align="right">
			<input class="header" type="button" value="Home" onclick="window.location.href='index.html'" />
			<input class="header" type="button" value="Rooms" onclick="window.location.href='roomgrid.html'" />
			<input class="header" type="button" value="Team" onclick="window.location.href='staff.html'" />
			<input class="header" type="button" value="Book" onclick="window.location.href='booking.html'" />
			<input class="header" type="button" value="About" onclick="window.location.href='index.html'" />
		</div>
    </div>

    <div class="booking" align="center">

        <h1 style="padding:30px;">USER DETAILS</h1>
        <form name='cancel' id='cacelform' method="POST">
            <table >
                <tr>
                <td>Enter Username:</td>
                <td>	<input class="details" type="text" name="email" placeholder="Enter Email Id" required/>    </td>
                </tr>
                </table>

              
            <input type="submit" value="Submit" class="func" name='submit'>
            <input type="reset" value="Clear" class="func" >
        </form>
    </div>

    
    

</body>
</html>

<?php
if (isset($_POST['submit']))
{
   cancel();
}
function cancel()
{

$conn = mysqli_connect("localhost","root","","hotel");
$email='';
if(isset($_POST['email']))
{
$email=$_POST['email'];
}



$sql = "Select * from customer where email='$email'";

$result = mysqli_query($conn,$sql);

if($result->num_rows > 0  && isset($_POST['email']) )
{
    while($row = $result->fetch_assoc()) {
        
        $name=$row['name'];
        $contact=$row['contact'];
        $category=$row['category'];
        $room = $row['roomid'];
        echo "<center><div class='booking'>
         <table >
                <tr>
                <td>Username:</td>
                <td>	$name    </td>
                </tr>
                <tr>
                <td>Contact:</td>
                <td>	$contact    </td>
                </tr>
                <tr>
                <td>Room:</td>
                <td>	$room    </td>
                </tr>
                <tr>
                <tr>
                <td>Category:</td>
                <td>	$category    </td>
                </tr>
                <tr>
                <td>Status:</td>
                <td>	Deleted    </td>
                </tr>
                </table>
        </div></center>";
        
        $delcust = "DELETE FROM `customer` WHERE email = '$email'";
        $delroom = "DELETE FROM `user` WHERE userid =(SELECT userid FROM customer WHERE email = '$email')";
        $delpay = "DELETE FROM `payment` where userid = (SELECT userid from customer WHERE email = '$email')";
        mysqli_query($conn, $delroom);
        mysqli_query($conn, $delpay);
        mysqli_query($conn, $delcust);
    
    }
}
else
{
    echo "<script>alert('Inavlid User. Try Again.')</script>";
}
}
?>


