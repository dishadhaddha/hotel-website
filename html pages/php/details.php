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
			<img src="../images/logo.jpg" class="logo">
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
                <td>Enter Room Number:</td>
                <td>	<input class="details" type="text" name="room" placeholder="Enter Room Id" required/>    </td>
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
$room='';
if(isset($_POST['room']))
{
$room=$_POST['room'];
}



$sql = " SELECT customer.name, customer.contact, customer.email, customer.category, user.roomid, user.checkin, user.checkout FROM customer INNER JOIN user ON user.roomid=customer.roomid and user.userid=customer.userid WHERE user.roomid ='$room';";

$result = mysqli_query($conn,$sql);

if($result->num_rows > 0  )
{
    while($row = $result->fetch_assoc()) {
        $i=1;
        $name=$row['name'];
        $contact=$row['contact'];
        $email=$row['email'];
        $category=$row['category'];
        $number=$row['roomid'];
        $checkin=$row['checkin'];
        $checkout=$row['checkout'];
        
        echo "<center><div class='booking'>
        CUSTOMER
        <table >
                <tr>
                <td>Name:</td>                <td>	$name    </td>
                </tr>
                <tr>
                <td>Contact:</td>                <td>	$contact    </td>
                </tr>
                <tr>
                <td>Email Id:</td>                <td>	$email    </td>
                </tr>                
                <tr>
                <td>Category:</td>                <td>	$category    </td>
                </tr>
                <tr>
                <td>Room:</td>                <td>	$number    </td>
                </tr>
                <tr>
                <td>Arrival:</td>                <td>	$checkin   </td>
                </tr>
                <tr>
                <td>Departure:</td>                <td>	$checkout    </td>
                </tr>
                </table>
        </div></center>";
    }
}
else
{
    echo "<script>alert('Inavlid User. Try Again.')</script>";
}
}
?>
