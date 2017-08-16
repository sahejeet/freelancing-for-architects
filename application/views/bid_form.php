<html>
    <head>
     <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">





        <style>
            
           
            input[type=text] {
    width: 60%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 10px;
    background-color: white;
    
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}   
            
            
        input[type=number] {
    width: 62%;
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
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
    
    transition-duration: 0.4s;
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
            
body{
    
    
    background-image: url("http://localhost/freelancing/images/image11.jpg");
    background-position: -40px -50px;
    
}



 table#t01 {
    
    background-color: #2d5696;
    margin-top: 0%;
    border: 2px solid black;
    border-radius: 10px;
    width: 50%;
  
    .data { border: 2px solid black;}
}
        


        td {
    padding: 8px;
    text-align:"center" ;
       
       }

       label {display:block;
              float: left;

       }

div.first {
    position: absolute;
    top: 0px;
    left: 5px;
    width: 200px;
    height: 100px;
    
}




        </style>
        
 
        
        <script>

  function updateTxt()
{  
    
    window.alert("hi");

  //  var field1 = document.getElementById('textfield').value;  
    
  //  window.alert(field1);

    }




    

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
        

function func() {

window.alert("hi");
var budget = document.getElementById('amnt');
var b = budget.value;

//window.alert("hello");
window.alert(b);

}

       
        
         </script>
    </head>

    
    <body>
    <br>
<h1 align="center" style="color:black;font-size: 30px; font-family: Georgia, Times New Roman, Times, serif; margin-top: 5%;">BIDDING DETAILS</h1>

<table align="center" id="t01">

<form action="http://localhost/freelancing/index.php/test/bid_form_insert" method="post" onsubmit="return checkform(this)" id="myform">
<p align="center">

<tr>
<td align="left">
<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROJECT ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;</b> 



<?php
$projj_id = $this->session->userdata('proj123');
echo $projj_id;
?>



  
</td>
</tr>

<tr>
<td align="left">
<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROJECT BUDGET&nbsp;&nbsp;
&nbsp;</b>
<?php
$this->session->set_userdata('projectt123', $projj_id);
$proj_budget = $this->session->userdata('proj_budget');
echo $proj_budget;
?>

 
</td>
</tr>





<tr>
<td align="left">
<b>&nbsp;&nbsp;&nbsp;&nbsp;BIDDING AMOUNT&nbsp;&nbsp;&nbsp;&nbsp;</b>     <input id="amnt" type="number" name="bidding_amount" placeholder="Amount should be greater than project budget" required><b>&nbsp;(Rs)</b>
</td>
</tr>



<tr>
<td align="center">
<label for="question">
<b>QUESTIONS TO EMPLOYER</b><br></label>
<textarea rows="2" cols="35" name="question" placeholder="Ask the employer a question(optional)"></textarea>
</td>
</tr>

<tr>
<td align="center">
<label for="desc">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>BID SUMMARY</b></label>
<textarea rows="5" cols="42" name="summary" placeholder="Tell Employer why youre the best for the job....." required></textarea>
</td>
</tr>




<tr>
<td align="center">

<input type="submit" class="button button2" onclick="" value="Submit Bid"        name="button" ><br>
</td>
</tr>

</p>


</form>

</table>

</body>
</html>

