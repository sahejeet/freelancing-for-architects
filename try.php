<!DOCTYPE html>
<html>
<head>
	<title> BLOOD DONATION </title>

<style>

    p {
        margin-right: 10px;
        margin-bottom: 100px;
        
        
        
    }
    
    
    a {
    color: white;
    
}

a:hover {
    color: red;
}

.bodyy { background-image: "blood.jpg"  }

body{
    
    
    background: url(SMILING-AFRICAN-CHILDREN.jpg);
    background-position: -130px -250px;
   
    
    
}      
       table#t01 {
    
    background-color: rgb(255,30,55);
    margin-top: 5%;
    border: 2px solid black;
    border-radius: 8px;
    width: 25%;
  
    .data { border: 2px solid black;}
}
.center {
    padding: 40px 0;
    text-align: center;
}



 td {
    padding: 25px;
       
       }



input[type=text] {
    width: 100%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 15px;
    background-color: white;
    
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 10px 20px 12px 40px;
    
    
            
   }


input[type=password] {
    width: 100%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 15px;
    background-color: white;
    
    background-position: 15px 15px;
    background-repeat: no-repeat;
    padding: 10px 20px 12px 40px;
    
    
            
   }
   
   input[type=number] {
    width: 100%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 15px;
    background-color: white;
    
    background-position: 15px 15px;
    background-repeat: no-repeat;
    padding: 10px 20px 12px 40px;
    
    
            
   }
   
   input[type=email] {
    width: 100%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 15px;
    background-color: white;
    
    background-position: 15px 15px;
    background-repeat: no-repeat;
    padding: 10px 20px 12px 40px;
    
    
            
   }
   
   
   
   .button {
    font-family:'Open Sans Condensed', sans-serif;
    border: none;
    background-color: #5C8CA7;
    color:white;
    padding: 10px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 25px;
    transition-duration: 0.4s;
}

.button2 { border:2px solid black;
           background-color: black;}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
color: #B21D1D; }

.center {
    padding: 0px 0;
    
    text-align: center;
}




</style>


<script>
    
    
    
    
    function checkform(form)
        {
            var inputs=form.getElementsByTagName('input');
            for(var i=0;i<inputs.length;i++){
                if(inputs[i].hasAttribute("required")){
                    if(inputs[i].value=="")
                    {
                        
                        
                        alert("Please fill all the form fields");
                        return false;
                        
                    }
                    
                    
                    
                    
                    
                }
                
                
                
                
                
                
                
                
            }
            
            
            
            return true;
            
            
            
            
            
            
        }
       
    function validateForm(){
  //var validation = true;
  var name= validate();
  var pass= validatepass();
  var phonee=validatephone();
 
   return (name && pass && phonee);
}
        
        function validatephone()
        {
            var phoneNo = document.getElementById('no');
	
        var phn = phoneNo.value.charAt(0);
            if(phn=='9'||phn=='8'||phn=='7'){
             return true;
    }
    else{
        alert("Please put 9 8 or 7 at starting of the Phone Number");
        //alert("Success ");
        
        return false;
    }
            
            
        }
        
        
        

 function validate() {
        var phoneNo = document.getElementById('no');
	//char ph=phoneNo.charAt(0);
        var phn = phoneNo.value.charAt(0);
        if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
          alert("Mobile No. is not valid, Please Enter 10 Digit Mobile No. ");
            //alert(phn);
            phoneNo.focus();
            return false;
        }
        /*else if(phn=='9'||phn=='8'||phn=='7'){
             alert("please put 9 8 or 7 at starting");
        //alert("Success ");
        return false;
        }*/
        else{
            
            return true;
            
        }
        
        
    }
     
        function validatepass() {
        var password = document.getElementById('pass');
		
        if (password.value.length < 6 || password.value.length > 15) {
            alert("Please enter Password in between 6-15 digits");
            password.focus();
            return false;
        }
        else{
        //alert("Success ");
        return true;
        }
    }
        
        
        
        
         </script>





</head>
<body>
    
    <h1 align="center" style="color:white;font-size: 47px; font-family: Georgia, Times New Roman, Times, serif;">Donate Blood , Make People Smile!</h1>
    <form action="loginvalid.jsp" method="post" onsubmit="return validateForm()">
        <div class="center">
            <table align="center" id="t01">
        
        <tr class="data">
            <td><input type="text"  name="username" placeholder="Username*" required></td>
    
    </tr>
    <tr>
        <td><input id="pass" type="password"  class="data" name="password" placeholder="Password*" required></td>
    
    </tr>
    <tr>
    
       <td> 
        <input id="no" type="number" class="data" name="phoneno" placeholder="Phone Number*" required>
    </td>
        
    </tr>
    <tr>
    
       <td> 
        <input type="email" class="data" name="email" placeholder="Email*" required>
    </td>
        
    </tr>
    
    
    
    <tr>
    <td><input type="submit" class="button button2" value="Register" onclick="return checkform(this)"></td>
    </tr>
    </table>
     </div>
</form>
    <p align="right" style="color:white">Click <a href="index.html">here</a> to go back</p>
    

<div class="bodyy"> 
</div>
	
</body>
</html>



