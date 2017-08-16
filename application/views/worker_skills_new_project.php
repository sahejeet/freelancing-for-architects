
<head>
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
     
</head>
<body>

<script type="text/javascript">
function valthis() {
var checkBoxes = document.getElementsByClassName( 'checkBox' );
var isChecked = false;
    for (var i = 0; i < checkBoxes.length; i++) {
        if ( checkBoxes[i].checked ) {
            isChecked = true;
        };
    };
    if ( isChecked ) {
       return true;
        } else {
            alert( 'Please, check at least one checkbox!' );
            return false;
        }   
}

</script> 



 <style>           
            
p {
    font-size: 80%;
    font:sans-serif;
}

.button {
    
    border: none;
       background-color: #FFFF4B;
       border-radius: 25px;
    color:black;
    padding: 10px 30px;
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
    
    
    background-image: url("http://localhost/freelancing/images/image2.jpeg");
    background-position: center;
    background-position: 0 -60px;
    
    
}
        

fieldset {
  
  font:sans-serif;
  }


        
        </style>


<form action="http://localhost/freelancing/index.php/test/insert_skills_new_project" method="post" onsubmit="">
    <fieldset >
        <legend><h2>SELECT SKILLS</h2></legend>


   <fieldset>
   <p align="">
    <label for=""><font size='3'><b>Asset Management&nbsp;</b></font></label>
    
    <input type="checkbox" name="chk1[]" id="chk1" value="1" class="checkbox">
    </p>
    </fieldset>
    

    <fieldset>
   <p align="">
    <label for=""><font size='3'><b>Disaster Relief&nbsp;</b></font></label>
    <input type="checkbox" name="chk1[]" id="chk2"  value="2" class="checkbox">
    </p>
    </fieldset>



 <fieldset>
   <p align="">
    <label for=""><font size='3'><b>Furniture Design&nbsp;</b></font></label>
    <input type="checkbox" name="chk1[]" id="chk3" value="3" class="checkbox">
 </p>
    </fieldset>

<fieldset>
   <p align="">
    <label for=""><font size='3'><b>Industrial Design&nbsp;</b></font></label>
    <input type="checkbox" name="chk1[]" id="chk4" value="4" class="checkbox">
 </p>
    </fieldset>


<fieldset>
   <p align="">

    <label for=""><font size='3'><b>Interior Design&nbsp;</b></font></label>
    <input type="checkbox" name="chk1[]" id="chk5" value="5" class="checkbox">
 </p>
    </fieldset>
<fieldset>
   <p align="">
    <label for=""><font size='3'><b>Property Development&nbsp;</b></font></label>
    <input type="checkbox" name="chk1[]" id="chk6" value="6" class="checkbox">

 </p>
    </fieldset>
<fieldset>
   <p align="">
    <label for=""><font size='3'><b>Urban Design&nbsp;</b></font></label>
    <input type="checkbox" name="chk1[]" id="chk7" value="7" class="checkbox">

 </p>
    </fieldset>
<fieldset>
   <p align="">
    <label for=""><font size='3'><b>Urban Planning&nbsp;</b></font></label>
    <input type="checkbox" name="chk1[]" id="chk8" value="8" class="checkbox">
 </p>
    </fieldset>

<p align="">
<input id="b1" type="submit" class="button button2" name="submit" onclick="return valthis()" >
</p>


    </fieldset>
</form>

</body>






<?php
$id = $this->session->userdata('id');
//echo $id;



?>