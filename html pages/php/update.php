<?php

$conn = mysqli_connect("localhost", "root", "", "hotel");

    $email = $_POST['email'];
   // $contact = $_POST['contact'];
   //    $email = $_POST['email'];

    $indate = strtotime($_POST['indatenew']);
    $arrive = date('Y-m-d',$indate);

    $outdate = strtotime($_POST['outdatenew']);
    $depart = date('Y-m-d',$outdate);
    
    /*$oldindate = strtotime($_POST['indate']);
    $oldarrive = date('Y-m-d',$oldindate);

    $oldoutdate = strtotime($_POST['outdate']);
    $olddepart = date('Y-m-d',$oldoutdate);   
*/
    $today = date("Y-m-d");

    if(strtotime($arrive) < strtotime($today)  ||strtotime($depart) < strtotime($today))
        echo "<script>alert('Invalid Schedule.'); location.replace('../updation.html');</script>";
    else
    {
        if(strtotime($arrive) > strtotime($depart))
            echo "<script>alert('Invalid Schedule.'); location.replace(../updation.html');</script>";
        /*else    
            echo "<script>alert('Invalid Schedule.'); location.replace('updation.html');</script>";*/
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
    

			   // echo $row['roomid']."  ".$row['checkin']."  ".$row['checkout']."<br>";
			    
			    
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
				        //break;
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
				if($flag==1)
				{
					$allocroom=$room;
					$allocin=$arrive;
					$allocout=$depart;
                    //echo $allocin." ".$allocout." ".$allocroom ;
					$updatecust = "UPDATE `customer` SET roomid='$allocroom', category ='$cat_name' WHERE email = '$email'";
                    $updatepay = "UPDATE `payment` SET roomid='$allocroom', amount='$rent' where userid = (SELECT userid from customer WHERE email = '$email')";
                    $updateroom = "UPDATE `user` SET checkin ='$allocin', checkout='$allocout', roomid='$allocroom' WHERE userid =(SELECT userid FROM customer WHERE email = '$email');";
					mysqli_query($conn, $updatecust);
                    mysqli_query($conn, $updatepay);
                    mysqli_query($conn, $updateroom);
					// go to payment
					break;
					
					
				}
		}
		
  }
  if($flag==0)
		{
			echo '<script language="javascript">  alert("Sorry! We\'re completely booked on those dates. Try a different schedule.") ; location.replace("updation.html");</script>';
		}
} 
else {
	//echo "room successfully booked!";
	$allocroom=$start++;
	$allocin=$arrive;
	$allocout=$depart;
	$updatecust = "UPDATE `customer` SET roomid='$allocroom', category ='$cat_name' WHERE email = '$email'";
    $updatepay = "UPDATE `payment` SET roomid='$allocroom', amount='$rent' where userid = (SELECT userid from customer WHERE email = '$email')";
    $updateroom = "UPDATE `user` SET checkin ='$allocin', checkout='$allocout', roomid='$allocroom' WHERE userid =(SELECT userid FROM customer WHERE email = '$email');";
	mysqli_query($conn, $updatecust);
    mysqli_query($conn, $updatepay);
    mysqli_query($conn, $updateroom);
    
    
		//go to payment
}

?>

