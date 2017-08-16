<html>
    <head>
     <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <style>

.linkkk{

margin-left: 4px;
font-family: times new Roman;
color: white;
font-size: 27px;
position: relative;

}


            
           
            input[type=text] {
    width: 60%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 12px;
    background-color: white;
    
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}   
            
            
        input[type=number] {
    width: 55%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 12px;
    background-color: white;
    
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}   
            
input[type=email] {
    width: 50%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 12px;
    background-color: white;
    
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}   



.button {
    
    border: none;
       background-color: #5C8CA7;
       border-radius: 25px;
    color:white;
    padding: 15px 35px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    
    transition-duration: 0.4s;
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
            
body{
    
    
    background-image: url("http://localhost/freelancing/images/image4.jpeg");
    background-position: 200px -50px;
    
}



 table#t01 {
    
    background-color: #2d5696;
    margin-top: 2%;
    border: 2px solid black;
    border-radius: 8px;
    width: 45%;
  
    .data { border: 2px solid black;}
}
        


        td {
    padding: 20px;
    text-align:"center" ;
       
       }

       label {display:block;
              float: left;

       }

       img {
    margin-left: 4px;
    position: relative;
    top: 10px;
    border-image: 2px;
}

div.first {
    position: absolute;
    top: 1px;
    left: 5px;
    width: 200px;
    height: 100px;
    
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
        
     
       
        
         </script>
    </head>

    
    <body>
    <br>
<div class="first">
<img src="http://localhost/freelancing/images/logo123.jpg"  style="width:200px;height:100px; margin-top: 0%;">
</div>




<h1 align="center" style="color:black;font-size: 56px; font-family: Georgia, Times New Roman, Times, serif; margin-top: 0%;">PROJECT DETAILS</h1>
<table align="center" id="t01">

<form action="http://localhost/freelancing/index.php/test/new_project_insert" method="post" onsubmit="return checkform(this)">
<p align="center">

<tr>
<td align="left">
<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROJECT TYPE&nbsp;&nbsp;&nbsp;&nbsp;</b><select name="proj_type"  required>
    <option selected="" disabled="disabled" value="select type of project" >Type Of Project</option>
    <option value="Design Interior">Design Interior</option>
    <option value="Design Landscapes">Design Landscapes</option>
    <option value="Urban Design">Urban Design</option>
    <option value="Commercial Design">Commercial Design</option>
    <option value="Residential Design">Residential Design</option>
    
</select><br>
</td>
</tr>


<tr>
<td align="left">
<b>&nbsp;&nbsp;&nbsp;&nbsp;PROJECT BUDGET&nbsp;&nbsp;</b><input type="number" name="proj_budget" placeholder="Enter The Amount" required><b>&nbsp;(Rs)</b>
</td>
</tr>



<tr>
<td align="left">
<b>&nbsp;PROJECT LOCATION&nbsp;&nbsp;</b><select name="city"  required>
    <option selected="" disabled="disabled" value="select a City" >Select a City</option>
    <option value="Agra">Agra</option>
    <option value="Amritsar">Amritsar</option>
    <option value="Bangalore">Bangalore</option>
    <option value="Chandigarh">Chandigarh</option>
    <option value="Delhi">Delhi</option>
    <option value="Jaipur">Jaipur</option>
    <option value="Goa">Goa</option>
</select><br>
</td>
</tr>

<tr>
<td align="center">
&nbsp;&nbsp;&nbsp;
<label for="desc"><b>PROJECT DETAILS</b></label>
<textarea rows="7" cols="37" name="desc" placeholder="Add Project Details"></textarea>
</td>
</tr>




<tr>
<td align="center">

<input id="b1" type="submit" class="button button2" name="submit" onclick="return validate()"><br>
</td>
</tr>

</p>


</form>

</table>



<div class="linkkk">
<b>GO <a href="http://localhost/freelancing/index.php/test/proposals"> BACK </a>!</b>
</div>



</body>
</html>

