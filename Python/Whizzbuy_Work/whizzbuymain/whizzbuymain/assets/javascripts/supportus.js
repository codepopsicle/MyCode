var a={};     //used for liking and disliking the comments
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function getlength(number) {
    return number.toString().length;
}
function update(){
            document.getElementById("submitform").blur();
            document.getElementById("sfname").innerHTML="";
            document.getElementById("slname").innerHTML="";
            document.getElementById("semail").innerHTML="";
            document.getElementById("spostal").innerHTML="";
    		var fname = document.getElementById("fname").value;
    		var lname = document.getElementById("lname").value;
    		var email = document.getElementById("email").value;
    		var postal = document.getElementById("postal").value;
    		var comment = document.getElementById("comment").value;
            var flag=0;
            if(!/^[a-zA-Z]+$/i.test(fname))
            {
                document.getElementById("sfname").innerHTML="*This field should only contain letters";
                document.getElementById("sfname").style.color="white";
                flag=1;

            }
             if(!/^[a-zA-Z]+$/i.test(lname))
            {
                document.getElementById("slname").innerHTML="*This field should only contain letters";
                document.getElementById("slname").style.color="white";
                flag=1;
            }
            if(!validateEmail(email)){
                document.getElementById("semail").innerHTML="*Enter a valid email address";
                document.getElementById("semail").style.color="white";
                flag=1;
            }
            if(getlength(postal)<6 || getlength(postal)>6){
                document.getElementById("spostal").innerHTML="*Postal code should be of 6 digits";
                document.getElementById("spostal").style.color="white";
                flag=1;
            }
            if(fname=="")
            {
                document.getElementById("sfname").innerHTML="*This field is required";
                document.getElementById("sfname").style.color="white";
                flag=1;
            }
            if(lname=="")
            {
                document.getElementById("slname").innerHTML="*This field is required";
                document.getElementById("slname").style.color="white";
                flag=1;
            }
            if(email=="")
            {
                document.getElementById("semail").innerHTML="*This field is required";
                document.getElementById("semail").style.color="white";
                flag=1;
            }
            if(postal=="")
            {
                document.getElementById("spostal").innerHTML="*This field is required";
                document.getElementById("spostal").style.color="white";
                flag=1;
            }
            if(flag!=1)
    		{
    		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                $('#myModal').modal('show');
                var arr = JSON.parse(xmlhttp.response);
                $('#modalcontent').html(arr["msg"]);
                document.getElementById("numnumnum").innerHTML=arr["counter"];
                document.getElementById("form").reset();
                document.getElementById("sfname").innerHTML="";
                document.getElementById("slname").innerHTML="";
                document.getElementById("semail").innerHTML="";
                document.getElementById("spostal").innerHTML="";
                getcomments();
            }
        };
        xmlhttp.open("GET","thanks.php?fname="+fname+"&lname="+lname+"&email="+email+"&postal="+postal+"&comment="+comment,true);
        xmlhttp.send();
    	
    	}
    }
function getcounter(){
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp2 = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp2 = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp2.onreadystatechange = function() {
            if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
                //document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                document.getElementById("numnumnum").innerHTML=xmlhttp2.response;
               }
        };
        xmlhttp2.open("GET","counter.php",true);
        xmlhttp2.send();

}
function getcomments(){
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp4 = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp4 = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp4.onreadystatechange = function() {
            if (xmlhttp4.readyState == 4 && xmlhttp4.status == 200) {
                //document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                document.getElementById("comments").innerHTML=xmlhttp4.response;
                              
               }
        };
        xmlhttp4.open("GET","comments.php",true);
        xmlhttp4.send();

} 

function inclike(btnid){
    var spanid="like"+btnid;
    //var likebtnname=document.getElementById(btnid).getAttribute("name");
    if (a[btnid] == 1){  // if set to 1 means now comment should be disliked
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp3 = new XMLHttpRequest();
        } 
        else {
            // code for IE6, IE5
            xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp3.onreadystatechange = function() {
            if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200) {
                document.getElementById(spanid).innerHTML=xmlhttp3.response;
                a[btnid] = 0;
                getcomments();
               }
        };
        xmlhttp3.open("GET","decreaselike.php?id="+btnid,true);
        xmlhttp3.send();
    }
    else{
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp3 = new XMLHttpRequest();
        } 
        else {
            // code for IE6, IE5
            xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp3.onreadystatechange = function() {
            if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200) {
                document.getElementById(spanid).innerHTML=xmlhttp3.response;
                a[btnid]=1;
                getcomments();
               }
        };
        xmlhttp3.open("GET","increaselike.php?id="+btnid,true);
        xmlhttp3.send();
    }
        

} 
    	$(document).ready(function(){
            getcounter();
            getcomments();
    	
    	});