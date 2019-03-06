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

    <div class="booking"  align="center" >
                <h1 style="padding:20px;">STAFF DETAILS</h1>

        <?php 
        $conn = mysqli_connect("localhost","root","","hotel");



        $id = $_POST['id'];
        $sql = "Select * from staff where id='$id'";

        $result = mysqli_query($conn,$sql);

        if($result->num_rows > 0)
        {       
        while($row = $result->fetch_assoc()) {
        
        $name=$row['name'];
        $contact=$row['contact'];
        $category=$row['department'];
        $post =$row['post'];
        echo "<center><div >
         <table >
                <tr >
                <td>Username:</td>
                <td>	$name    </td>
                </tr>
                <tr >
                <td>Contact:</td>
                <td>	$contact    </td>
                </tr>
                <tr >
                <td>Department:</td>
                <td>	$category    </td>
                </tr>
                <tr >
                <td>Post:</td>
                <td>	$post    </td>
                </tr>
                </table>
        </div></center>";
        }
        }
        
        ?>
    </div>

    <div class="booking"  align="center" >

        <h1 style="padding:20px;">MANAGEMENT DETAILS</h1>
        <form method="POST">
              
            <input type="button" value="BOOKING" class="func" onclick="window.location.href='booking.html'">
            <input type="button" value="UPDATE" class="func" onclick="window.location.href='updation.html'" >
            <input type="button" value="CANCELLATION"  class="func" onclick="window.location.href='cancellation.php'">
            <input type="button" value="ROOMS VIEWING"  class="func" onclick="window.location.href='details.php'">
            
        </form>
    </div>

    
    

</body>
</html>

