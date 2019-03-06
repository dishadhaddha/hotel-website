function dates(){
    var d = new Date();
    var months = ['01','02','03','04','05','06','07','08','09','10','11','12'];

    var k = d.getDate();

    if(d.getDate()<10)
    {	
    	k='0'+d.getDate();
    }	


    document.forms["reservation"]["indate"].value = d.getFullYear()+'-'+months[d.getMonth()]+'-'+k+'';
    document.forms["reservation"]["outdate"].value = d.getFullYear()+'-'+months[d.getMonth()]+'-'+k+'';
    document.forms["reservation"]["indate"].min = d.getFullYear()+'-'+months[d.getMonth()]+'-'+k+'';
    document.forms["reservation"]["outdate"].min = d.getFullYear()+'-'+months[d.getMonth()]+'-'+k+'';
    var yearout=d.getFullYear()+1;
    document.forms["reservation"]["indate"].max = yearout+'-'+months[d.getMonth()]+'-'+k+'';
    document.forms["reservation"]["outdate"].max = yearout+'-'+months[d.getMonth()]+'-'+k+'';
    return;
}

function validate()
{
    //Name Validation
    var x = document.forms["reservation"]["name"].value;
    var reg=/^[A-Za-z\s]+$/;
    if(reg.test(x)==false)
    {
        alert("Name fields must contain only alphabets");
        document.forms["reservation"]["name"].value="";
        return false;
    }

    //Contact validation
    var cont = document.forms["reservation"]["contact"].value;
    var cntreg = /^[0-9]{10}/;

    if(cont.length!=10)   
    {
        alert("Contact must be 10 digits.");
        document.forms["reservation"]["contact"].value="";
        return false;
    }

    if (cntreg.test(cont)==false)
    {
        alert("Contact number must contain only digits");
        document.forms["reservation"]["contact"].value="";
        return false;
    }    

    //number of people or rooms should be in range

    var adults=document.forms["reservation"]["adults"].value;
    var children=document.forms["reservation"]["children"].value;
    var rooms=document.forms["reservation"]["rooms"].value;

    if(adults<=0){
        alert("Reservation requires at least 1 adult.");
        document.forms["reservation"]["adults"].value="";
        return false;
    }

     if(children<0){
        alert("Enter a valid number for Children (0 and above).");
        document.forms["reservation"]["children"].value="";
        return false;
    }

    if(rooms<=0){
        alert("Reservation requires at least 1 room.");
        document.forms["reservation"]["rooms"].value="";
        return false;
    }


    //date validation
    var indt= document.forms["reservation"]["indate"].value;
    var outdt= document.forms["reservation"]["outdate"].value;
    if(indt>outdt){
        alert('Error in arrival & departure time');
        dates();
        return false;
        
    }
    }
   
function call(){
location.href = "booking.html";
var ih = "<OPTION value='1'>Value 1</OPTION><OPTION value='2'>Value 2</OPTION>";
	document.getElementById("list").value = 4;
//document.getElementById.innerHTML
dates();
console.log("work");
}