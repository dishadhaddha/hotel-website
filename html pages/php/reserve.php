<?php

$conn = mysqli_connect("localhost", "root", "", "hotel");

    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

    $indate = strtotime($_POST['indate']);
    $arrive = date('Y-m-d',$indate);

    $outdate = strtotime($_POST['outdate']);
    $depart = date('Y-m-d',$outdate);
    
    $id = uniqid();
    $today = date("Y-m-d");

    if(strtotime($arrive) < strtotime($today)  ||strtotime($depart) < strtotime($today))
        echo "<script>alert('Invalid Schedule.'); location.replace('booking.html');</script>";
    else
    {
        if(strtotime($arrive) > strtotime($depart))
            echo "<script>alert('Invalid Schedule.'); location.replace('booking.html');</script>";
        /*else    
            echo "<script>alert('Invalid Schedule.'); location.replace('booking.html');</script>";*/
    }

$category = $_POST['category'];
if ($category==1)
{
	$start = 100;
	$end = 299;
    $cat_name = "STANDARD";
    $rent = 10000;
}
else if ($category==2)
{
	$start = 300;
	$end = 499;
    $cat_name = "DELUXE";
    $rent = 15000;
}
else if ($category==3)
{
	$start = 500;
	$end = 699;
    $cat_name = "EXECUTIVE";
    $rent = 20000;
}
else if ($category==4)
{
	$start = 700;
	$end = 899;
    $cat_name = "PRESIDENTIAL";
    $rent = 25000;

}
else if ($category==5)
{
	$start = 900;
	$end = 999;
    $cat_name = "ROYAL";
    $rent = 30000;

}
else if ($category==6)
{
	$start = 1000;
	$end = 1099;
    $cat_name = "IMPERIAL";
    $rent = 35000;
}

$sql = "SELECT distinct roomid FROM user where roomid between $start and $end order by roomid";

$result = $conn->query($sql);

$indates = [];
$outdates = [];

$flag=0;


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

			$room=$row['roomid'];
			//echo $room."<br>";
			
			$datesel = "SELECT * FROM user where roomid = $room";
			$res = $conn->query($datesel);
			
			$i=0;
			$indates=[''];
			$outdates=[''];
			
			if ($res->num_rows > 0) {
    			// output data of each row
			    while($row = $res->fetch_assoc()) {
    

			    //echo $row['roomid']."  ".$row['checkin']."  ".$row['checkout']."<br>";
			    
			    
			    $indates[$i]=$row["checkin"];
			    $outdates[$i]=$row["checkout"];
			    //echo $indates[$i]." ".$outdates[$i]."<br> ";
			    $i++;
    			}		
    			$k=0;
			    if(strtotime($depart) < strtotime($indates[0]) || strtotime($arrive) > strtotime($outdates[count($indates)-1]))
		    	{
						//echo "allocation successful"."   ".$room."<br>";	
						$flag++;
				       // break;
				}
			    else
			    {
			        while($k < count($indates)-1)
				        {
				            if(strtotime($arrive) > strtotime($outdates[$k])  && strtotime($depart) < strtotime($indates[$k+1]) )
					            {
										//echo "successful ".$outdates[$k]."  ".$indates[$k+1]."   ".$room."<br>";
										$flag++;
							           // break;       
							     }
					            $k++;
				        }
							    
				}
				echo $flag;
				if($flag==1)
				{
					$allocroom=$room;
					$allocin=$arrive;
					$allocout=$depart;
					//echo $allocin." ".$allocout." ".$allocroom ;
                     $identify = (string)$allocroom.''.(string)$id;
                    $billid = 'bill'.(string)$identify;
                    //echo $identify;
                    //echo $billid;
					$insertion = "INSERT INTO user(roomid, checkin, checkout, userid, identify) VALUES('$allocroom','$allocin','$allocout','$id','$identify')";
                    $cusinsertion = "INSERT INTO customer(name, roomid, contact, category, email, userid) VALUES('$name','$allocroom','$contact','$cat_name','$email','$id')";
                    $payinsertion = "INSERT INTO payment(userid, roomid, amount, contact, billid) VALUES ('$id','$allocroom','$rent','$contact','$billid')";
                   mysqli_query($conn, $cusinsertion);
                   mysqli_query($conn, $payinsertion);
					mysqli_query($conn, $insertion);
					// go to payment
                    					header('Location: ../pay.php');

					break;
					
					
				}
		}
		
  }
  if($flag==0)
		{
			echo '<script language="javascript">  alert("Sorry! We\'re completely booked on those dates. Try a different schedule.") ; location.replace("booking.html");</script>';
		}
} 
else {
	//echo "room successfully booked!";
	$allocroom=$start+1;
	$allocin=$arrive;
	$allocout=$depart;
	//echo $allocin." ".$allocout." ".$allocroom ;
    $identify = (string)$allocroom.''.(string)$id;
    $billid = 'bill'.(string)$identify;
    echo $identify;
    echo $billid;
    $insertion = "INSERT INTO user(roomid, checkin, checkout, userid, identify) VALUES('$allocroom','$allocin','$allocout','$id','$identify')";
    $cusinsertion = "INSERT INTO customer(name, roomid, contact, category, email, userid) VALUES('$name','$allocroom','$contact','$cat_name','$email','$id')";
    $payinsertion = "INSERT INTO payment(userid, roomid, amount, contact, billid) VALUES ('$id','$allocroom','$rent','$contact','$billid')";
    mysqli_query($conn, $cusinsertion);
    mysqli_query($conn, $payinsertion);
    mysqli_query($conn, $insertion);
    
    header('Location: ../pay.php');
exit();
		//go to payment
}
    header('Location: ../pay.php');

?>





