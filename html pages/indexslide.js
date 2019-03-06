
var imgArray = new Array();

imgArray[0] = new Image();
imgArray[0].src = 'images/main1.jpg';

imgArray[1] = new Image();
imgArray[1].src = 'images/main2.jpg';

imgArray[2] = new Image();
imgArray[2].src = 'images/main3.jpg';

imgArray[3] = new Image();
imgArray[3].src = 'images/main4.jpg';

imgArray[4] = new Image();
imgArray[4].src = "images/main5.jpg";


function mright()
{    var img = element;

    for(var i = 0; i < imgArray.length;i++)
    {
        if(imgArray[i].src === img.src) 
        {
            if(i == imgArray.length-1){
                element.src = imgArray[0].src;
                break;
            }
             element.src = imgArray[i+1].src;
            break;
        }
    }
}
function mleft()
{    var img = element;

    for(var i = imgArray.length-1; i >=0;i--)
    {
        if(imgArray[i].src === img.src)
        {
            if(i == 0){
                element.src = imgArray[imgArray.length-1].src;
                break;
            }
             element.src = imgArray[i-1].src;
            break;
        }
    }
}