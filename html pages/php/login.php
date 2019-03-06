<!DOCTYPE html>
<html>

<head>
	<title>HARRIOT HOTELS</title>
	<link rel="stylesheet" type="text/css" href="../../css/staff.css">
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

    <div class="access" align="center">

        <h1 style="padding:30px;">LOGIN</h1>
        <form name='login' method="POST">
            <table>
                <tr>
                <td>Staff Id:</td>
                <td>	<input class="details" type="text" name="id"  required/>  <p id="content" display="none"> </p>
                        	</td>
                </tr>
                <tr>
                <td>Password:</td>
                <td>	<input class="details" type="password" name="password" required/>		</td>
                </tr>
                
                </table>

              
            <input type="submit" value="Submit" class="login" name='submit' >
            <input type="reset" value="Clear" class="login" >
        </form>
    </div>


</body>
</html>


<?php
if (isset($_POST['submit']))
{
   check();
}
function check()
{

$conn = mysqli_connect("localhost","root","","hotel");
$id='';
if(isset($_POST['id']))
{
$id=$_POST['id'];
}

if(isset($_POST['password']))
{
$password=$_POST['password'];
}

$sql = "Select * from staff where id='$id'";

$result = mysqli_query($conn,$sql);

if($result->num_rows > 0  && isset($_POST['id']) )
{
    while($row = $result->fetch_assoc()) {
        
        if($row['password']!=$password)
        {
               echo "<script> alert('Inavlid Id or Password. Try Again.')</script>";
               
        }
        else{
             //echo "success"; 
             echo "<script>document.login.action='generate.php'</script>";
            

        }
    }
}
else if(isset($_POST['id']))
{
    echo "<script>alert('Inavlid Id. Try Again.')</script>";
}
}
?>
