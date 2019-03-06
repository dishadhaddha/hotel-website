<!DOCTYPE html>
<html>

<head>
	<title>HARRIOT HOTELS</title>
	<link rel="stylesheet" type="text/css" href="../../css/booking.css">
	<link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
</head>

<body>
	<div class="header-container">
		<div>
			<img src="../images/logo.jpg" class="logo"></img>
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

        <h1 style="padding:30px;">BILLING DETAILS</h1>
        <form  action="bill.php" method="POST">
            <table >
                <tr>
                <td>Customer Name:</td>
                <td>	<input class="details" type="text" name="custid"  required/>    </td>
                </tr>
                <tr>
                <td>Room Id:</td>
                <td>	<input class="details" type="text" name="roomid" required/>		</td>
                </tr>
                <tr>
                <td>Check In:</td>
                <td>	<input class="details" type="date" name="indate" required/>		</td>
                </tr>             
                <tr>
                <td>Check Out:</td>
                <td>	<input class="details" type="date" name="outdate" required/>		</td>
                </tr>
                <tr>
                <td>Contact:</td>
                <td>	<input class="details" type="text" name="contact" required/>		</td>
                </tr>
                <tr>
                <td>Amount:</td>
                <td>	<input class="details" type="text" name="amount" required/>		</td>
                </tr>
                
                
                
                </table>

              
            <input type="submit" value="Submit" class="func" >
            <input type="reset" value="Clear" class="func" >
        </form>
    </div>

    
    

</body>
</html>

