<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>State_Captial</title>
<script type="text/javascript">
    //Create Ajax Engine
     function getXmlhttpObject(){
        //if(window.XMLHttpRequest)
	    var xmlHttpRequest;
	    //Different browers(IE//FF/CHOME) have different way to get the xmlhttprequest 
        if(window.ActiveXObject)
	   {
        xmlHttpRequest=new ActiveXObject("Microsoft.XMLHTTP"); //IE
	   }
        else
       {
	   xmlHttpRequest=new XMLHttpRequest();//FF
	   }
       return xmlHttpRequest;
       }

     var myXmlHttpRequest="";//Global Variables;
     
     function getCaptial()
     {
    	 myXmlHttpRequest=new getXmlhttpObject();
    	 if(myXmlHttpRequest)
    	 {   
    		   var url="/State_City/showcities_process.php";//Post
    		   var data="State="+$('state').value;
    		   //alert(data)
               //open the request
    		   myXmlHttpRequest.open("post",url,true);
    		   
    		   myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
               //Assiign callback function to the Object
    		   myXmlHttpRequest.onreadystatechange=Process;
    		   
    		   myXmlHttpRequest.send(data);
    		  
           }
       }

     function Process()
     {
      // alert("haha"+myXmlHttpRequest.readyState);
      if(myXmlHttpRequest.readyState==4)
      {
          if(myXmlHttpRequest.status==200)
          {
           //get the data from server
             //alert(myXmlHttpRequest.responseXML);
            var captial=myXmlHttpRequest.responseXML.getElementsByTagName("captial")[0];
            // It selects the first element of the NodeList. The order of the elements is the order in which they appear in the tree.
            //alert(captial.length);
            captial_name=captial.childNodes[0].nodeValue;
            //alert(captial_name);
            $('Captial').value=captial_name
          }
     	 }
     	}

     
     function $(id)//Get the content by id
     {
        return document.getElementById(id);
     }  
</script>
</head>
<body>
<select id="state" onchange="getCaptial();">
<option value="">--State--</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
</select>

<input type="text" value="--Captial--" id="Captial"></input>


<img src='Map_of_USA.png' style='position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:-1;'>
 </div>   
</body>
</html>