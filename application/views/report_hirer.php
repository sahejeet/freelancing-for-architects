

<?php
$us=$this->input->post('user_id');
$this->session->set_userdata('idqrs',$us);
//echo $us;

$query=$this->db->get_where('user',array('ID'=>$us));

if($query->num_rows()>0)
{

foreach ($query->result() as $row) {
	
$banda=$row->USERNAME;
$this->session->set_userdata('banda_hi',$banda);
}





}



?>

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
    padding: 20px;
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
<h1 align="center" style="color:black;font-size: 40px; font-family: Georgia, Times New Roman, Times, serif; margin-top: 5%;">REPORT DETAILS</h1>

<table align="center" id="t01">

<form action="http://localhost/freelancing/index.php/test/report_insert_hirer" method="post" onsubmit="return checkform(this)" id="myform">
<p align="center">

<tr>
<td align="left">
<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REPORT PERSON : </b> 


&nbsp;&nbsp;
<?php
echo $banda;
?>



  
</td>
</tr>



<tr>
<td align="left">
<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                             TYPE OF REPORT :&nbsp;&nbsp;</b>                     <select name="report_type"  required>
    <option selected="" disabled="disabled" value="Type of report" >Type Of Report</option>
    <option value="1">Spam</option>
    <option value="2">Phishing</option>
    <option value="3">Fraud</option>
    <option value="4">Work Off Platform</option>
    <option value="5">other</option>
    
</select>
</td>
</tr>


<tr>
<td align="center">
<label for="desc">&nbsp;<b>FURTHER DESCRIPTION : </b></label>
<textarea rows="5" cols="40" name="report_desc" placeholder="Any Further Description as to Why you are reporting....." required></textarea>
</td>
</tr>




<tr>
<td align="center">

<input type="submit" class="button button2" onclick="" value="Submit Bid"               name="button" ><br>
</td>
</tr>

</p>


</form>

</table>

</body>
</html>








