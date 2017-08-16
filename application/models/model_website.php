<style>



.rating{

font-size: 28px;
margin-left: 74%;
margin-top: 2%;
position: absolute;
font-family: "Times New Roman", Georgia, Serif;



}




.infoo{

font-size: 28px;
margin-left: 21%;
margin-top: 15%;
position: absolute;
font-family: "Times New Roman", Georgia, Serif;



}





.name{

font-size: 28px;
margin-left: 21%;
margin-top: 2%;
position: absolute;
font-family: "Times New Roman", Georgia, Serif;
}



.proff{

background-image: url('http://localhost/freelancing/images/image12.jpg');
background-position: 00px -50px;


}


.bookmark{
margin-left: 570px;
margin-top: 0%;
position: absolute;
}

.book_button{

margin-top: 5%;
width:90px;
font-size: 18px;
height: 40px;
background-color: #f4ce42;
font-family: "Times New Roman", Georgia, Serif;
border:2px solid black;
}


.msg{
font-size: 11px;
margin-left: 45%;

}

.msg3{
font-size: 11px;
margin-left: 55%;

}


.msg2{
font-size: 11px;
margin-right: 45%;

}




h3 {

margin-right: 5%;  
margin:0;
padding:2px;

}

h3 span { 
    background-color: #87CEEB; 
    border-radius: 12px;
    display: block;
    font-size: 20px;
}



input[type=text] {
    width: 50%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 20px;
    background-color: white;
    
    
    background-repeat: no-repeat;
    padding: 8px 18px 10px 38px;
    
    
            
   }

  .button {
    font-family:'Open Sans Condensed', sans-serif;
    border: none;
    background-color: #DB7093;
    color:black;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 20px;
    transition-duration: 0.4s;
}

.button2:hover {
    box-shadow: 0 20px 20px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
color: pink; }


.hello{
text-align: center;
color: black;
padding: 15px;
border: 5px solid black;
width: 50%;
align-content: center;
margin:0 auto;
height: 66%;
border-color: black;
font-size: 25px;
border-radius: 20px; 
background-image: url("http://localhost/freelancing/images/image10.jpg");
background-position: -100px -160px;
text-decoration-style: bold;



}

.dog{
text-align: center;
color: black;
border: 2px solid black;
width: 50%;
align-content: center;
margin:0 auto;
height: 90%;
border-color: black;
font-size: 25px;
margin-top:0%;
background-image: url("http://localhost/freelancing/images/image13.jpg");
background-position: -400px -600px;
text-decoration-style: bold;
vertical-align: top;
overflow: hidden;
}

.cat{
text-align: left;
color: white;
width: 100%;
align-content: left;

height: 9%;
float: left;
font-size: 40px;
background-color: black;
border:0px solid black;
text-decoration-style: bold;
vertical-align: top;
overflow: hidden;
}



.tommy{
text-align: center;
color: white;

border: 2px solid black;
width: 50%;
align-content: center;
position: relative;
height: 9%;
float: left;
font-size: 40px;
background-color: black;

display: inline-block;
text-decoration-style: bold;
margin-top: 0%;
vertical-align: top;
overflow: hidden;
margin-left: 336px;
}




.hi{
border-radius: 5px;	
float: right;
margin-top: 0%;

border: 2px solid black;
border-color: black;
position: relative;
margin-right: 3%;
text-align: center;


}


.gg{



}


    
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 95%;
    
    margin-top: 2%;

    
}
th {
    border: 5px solid #ACD5E0;
    text-align: center;
    padding: 25px;
    height: 50%;
}





td {
    border: 5px solid #ACD5E0;
    text-align: center;
    padding: 5px;
    height: 50%;
}
tr:nth-child(even) {
    background-color: #ACD5E0;
}
h1   {color: black;
align-content: center;


}    




    
    </style>


<?php



class Model_website extends CI_model{
	
public function insert_into_user(){


$x=rand(1,9999);
    $date=date(DATE_ATOM);
    $today = date("y.m.d"); 
    $mail=$this->input->post("email");
    $name=$this->input->post("username");
    $this->session->set_userdata('user_name',$name);
    $city=$this->input->post("city");
    $user_type=$this->input->post("type");

$data=array( 'id'=>$x , 'username'=>$this->input->post("username"),'password'=>$this->input->post("password"),'phone'=>$this->input->post("phoneno"),'email'=>$this->input->post("email"),'city'=>$city,'user_type'=>$this->input->post("type"),'date_created'=>$today,
   'date_modified'=>'');
$this->db->insert("user",$data);

$this->session->set_userdata('id', $x);
$this->session->set_userdata('email',$mail);
$this->session->set_userdata('name',$name);
$this->session->set_userdata('user_type',$user_type);

$type=$this->input->post("type");
if($type==1)
{

header("location:http://localhost/freelancing/index.php/test/worker_skills");

}

else
{

header("location:http://localhost/freelancing/index.php/test/hirer_project");

}


}



public function insert_into_skills($data){

$id = $this->session->userdata('id');
//$checkgroup=$this->input->post("chk1");

$i=0;
foreach($data['chk1'] as $chk)  
  {  
      $record= array('skill_id'=>$chk,
      	'user_id'=>$id 
      	);
      $this->db->insert("user_skills",$record);  
      $i++;
  }
?>
<script language="javascript">
alert("Verification Link has been sent to your Mail-id. Click it and get started!");
window.location.href = "http://localhost/freelancing/index.php/test/emailuser";
</script>

<?php



//header("location:http://localhost/freelancing/index.php/test/");





}



public function fetch_skills(){

$id = $this->session->userdata('id');
$query=$this->db->get("user_skills");

if($query->num_rows() > 0)
{

   	?>
   	<br><br><br><br>

   	<h1 align="center" style="color:black;font-size: 40px; font-family: Georgia, Times New Roman, Times, serif;">PROJECTS WITH MY SKILLS</h1>
   	<br>
<table align="center">
<tr>
<th>PROJECT ID</th>
<th>POSTED BY</th>
 <th>TYPE OF PROJECT</th>
 <th>PROJECT BUDGET (Rs.)</th> 
 <th>JOB LOCATION</th> 
 <th>PROJECT STATUS</th>
 <th>PROJECT DESCRIPTION</th>
 <th>BID</th>
 <th>CHAT WITH EMPLOYER</th>
 </tr>

<b>
 <?php
 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
 echo "MY SKILLS:"; 
?>
</b>


<?php


foreach($query->result() as $row)
{


	if($row->user_id==$id)
    {


    $skill_id=$row->skill_id;

$query3=$this->db->get_where("skills",array('SKILL_ID' => $skill_id));
if($query3->num_rows() > 0){

foreach($query3->result() as $row3){

echo $row3->SKILL_NAME;
echo  "&nbsp;&nbsp;";


}





}



    $query1=$this->db->get_where("project_skills" ,array('SKILLS_ID' => $skill_id));
    if($query1->num_rows() > 0)
    {



foreach($query1->result() as $row1){



   $proj_id=$row1->PROJECT_ID;
   $query2=$this->db->get_where("project_details",array('PROJECT_ID' => $proj_id));
if($query2->num_rows() > 0){


foreach($query2->result() as $row2)
{
	

$userrr=$row2->USER_ID;

$query10=$this->db->get_where("user",array('ID' => $userrr));

if ($query10->num_rows()>0) {
  
foreach ($query10->result() as $row10) {
  

//$row10->USERNAME;


}


}

	
?>



<tr>
<td><?php echo $row2->PROJECT_ID?></td>
<td><?php echo $row10->USERNAME?></td>
<td><?php echo $row2->TYPE_PROJECT?></td>
<td><?php echo $row2->PROJ_BUDGET?></td>
<td><?php echo $row2->JOB_LOCATION?></td>
<td><?php echo $row2->PROJECT_STATUS?></td>
<td><?php echo $row2->project_desc?></td>

<form name =  <?php echo "bid".$row2->PROJECT_ID;?> action="http://localhost/freelancing/index.php/test/bid" method="post"><input type="hidden" name="project_id" value="<?php echo $row2->PROJECT_ID; ?>">
<td><input type="submit" value="bid"></td>
</form> 

<?php

$idd=$row2->USER_ID;
//$query3=$this->db->get_where("user",array('' => $idd));




?>

<form name =  <?php echo "id".$row2->USER_ID;?> action="http://localhost/
freelancing/index.php/test/chat_insertion" method="post"><input type="hidden" name="user_id" value="<?php echo $row2->USER_ID; ?>">
<td><input type="submit" value="chat"></td>
</form> 

<?php
  


?>





</tr>


<?php
}




}



}



    }





    }




}

  }

?>
</table>
<?php
     }




public function local_jobs(){

$id = $this->session->userdata('id');
$query=$this->db->get("user");

if($query->num_rows() > 0)
{

    ?>
    <br><br><br><br>

    <h1 align="center" style="color:black;font-size: 40px; font-family: Georgia, Times New Roman, Times, serif;">LOCAL JOBS</h1>
    <br>

<b>
 <?php
 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
 echo "JOB POSTED FROM:"; 
?>
</b>

  <table align="center">
<tr>
<th>PROJECT ID</th>
 <th>TYPE OF PROJECT</th>
 <th>PROJECT BUDGET (Rs.)</th> 
 <th>PROJECT STATUS</th>
 <th>PROJECT DESCRIPTION</th>
 <th>BID</th>
 </tr>
 
<?php


foreach($query->result() as $row)
{


  if($row->ID==$id)
    {

        echo $row->city;
      $city=$row->city;
      $query1=$this->db->get_where("project_details",array('JOB_LOCATION'=>$city));
      foreach($query1->result() as $row1)
{
?>



<tr>
<td><?php echo $row1->PROJECT_ID?></td>
<td><?php echo $row1->TYPE_PROJECT?></td>
<td><?php echo $row1->PROJ_BUDGET?></td>
<td><?php echo $row1->PROJECT_STATUS?></td>
<td><?php echo $row1->project_desc?></td>
<form name =  <?php echo "bid".$row1->PROJECT_ID;?> action="http://localhost/freelancing/index.php/test/bid" method="post"><input type="hidden" name="project_id" value="<?php echo $row1->PROJECT_ID; ?>">
<td><input type="submit" value="bid"></td>
</form>

</tr>


<?php
}


    }




}

  }


     }



public function login_check(){


$username=$this->input->post("username");
$this->session->set_userdata('user_name',$username);
$password=$this->input->post("password");

//echo $username;
//echo $password;

//$id = $this->session->userdata('id');

$query=$this->db->get_where("user",array('USERNAME'=>$username));

foreach($query->result() as $row)
{

        //echo $row->USERNAME;
    //	echo $row->PASSWORD;

	if(($row->PASSWORD==$password))
    {

    	$idx=$row->ID;
    	$user_type=$row->USER_TYPE;
      $this->session->set_userdata('user_type',$user_type);

    	$this->session->set_userdata('id', $idx);
 
 if($user_type==1)
 {

header("location:http://localhost/freelancing/index.php/test/mainpage");


 }
 else
 {

header("location:http://localhost/freelancing/index.php/test/proposals");

 }


     
   }


  else{

     ?>


<script language="javascript">
alert("Wrong Username or Password");
window.location.href = "http://localhost/freelancing/index.php/test/index";
</script>

<?php


    }
    

}

  


     }



public function insert_into_project(){


$y=rand(1,9999);
$this->session->set_userdata('project_id', $y);
 //   $date=date(DATE_ATOM);
    $today = date("y.m.d"); 
  //  $mail=$this->input->post("email");
  //  $name=$this->input->post("username");

$data=array( 'project_id'=>$y , 'type_project'=>$this->input->post("proj_type"),'proj_budget'=>$this->input->post("proj_budget"),'job_location'=>$this->input->post("city"),'user_id'=>$this->session->userdata('id'),'project_status'=>'yes',       'project_desc'=>$this->input->post("desc"),'date_created'=>$today,
   'date_modified'=>'');
$this->db->insert("project_details",$data);

//$this->session->set_userdata('id', $x);
//$this->session->set_userdata('email',$mail);
//$this->session->set_userdata('name',$name);

header("location:http://localhost/freelancing/index.php/test/worker_skills");




}








public function my_projects(){

$id = $this->session->userdata('id');
$query=$this->db->get_where("project_details",array('USER_ID' => $id));

if($query->num_rows() > 0)
{

return $query->result(); 


}


}


public function insert_into_project_skills($data){

$proj_id = $this->session->userdata('project_id');
//$checkgroup=$this->input->post("chk1");

$i=0;
foreach($data['chk1'] as $chk)  
  {  
      $record= array('project_id'=>$proj_id,
      	'skills_id'=>$chk
      	);
      $this->db->insert("project_skills",$record);  
      $i++;
  }
?>

<script language="javascript">
alert("Verification Link has been sent to your Mail-id. Click it and get started!");
window.location.href = "http://localhost/freelancing/index.php/test/emailuser";
</script>

<?php



}




public function bid(){

?>
<br><br><br><br>

<body style="background-image: url(http://localhost/freelancing/images/user.jpg);">
<h1 align="center" style="color:black;font-size: 38px; font-family: Georgia, Times New Roman, Times, serif;">PROJECT DETAILS</h1>

<div class="hi">
how does bidding work?<br>
click <a href="">here</a> to know more about it!
</div>


<?php
$id = $this->session->userdata('id');
$project_id=$this->input->post('project_id');

$this->session->set_userdata('proj123', $project_id);
$query=$this->db->get_where("project_details",array('PROJECT_ID' => $project_id));


if($query->num_rows() > 0)
{

foreach($query->result() as $row){

$user_ki_id=$row->USER_ID;
$this->session->set_userdata('emp_id',$user_ki_id);
$query1=$this->db->get_where("user",array('ID' => $user_ki_id));
if($query1->num_rows() > 0)
{
foreach($query1->result() as $row1){

$name123=$row1->USERNAME;

}


}

 ?>
<div class="hello" style="">

<div class="bookmark">
<form action="http://localhost/freelancing/index.php/test/bookmark_insert" method="post" >
<input type="hidden" name="project_id" value="<?php echo "$project_id"; ?>" >
<input type="submit" class="book_button" value="Bookmark" style="transform:rotate(7deg); -webkit-transform:rotate(90deg); ">
</form>

</div>
       <?php  echo "PROJECT ID:" ?>
       <?php  echo $row->PROJECT_ID; ?>
       <?php  echo "<br>" ?>
       <?php  echo "TYPE OF PROJECT:" ?>
        <?php echo $row->TYPE_PROJECT; ?>
        <?php  echo "<br>" ?>
        <?php  echo "PROJECT BUDGET:" ?>        
        <?php echo $row->PROJ_BUDGET; ?>
        <?php  $this->session->set_userdata('proj_budget',$row->PROJ_BUDGET); ?>
        <?php  echo "<br>" ?>
        <?php  echo "PROJECT LOCATION:" ?>
        <?php echo $row->JOB_LOCATION; ?>
        <?php  echo "<br>" ?>
        <?php  echo "PROJECT DESCRIPTION:" ?>
        <?php echo $row->project_desc; ?>
        <?php  echo "<br>" ?>
        <?php  echo "SKILLS REQUIRED:" ?>

<?php
$query2=$this->db->get_where("project_skills",array('PROJECT_ID' => $project_id));
if($query2->num_rows()>0)
{
foreach ($query2->result() as $row2) {

	$skills_id = $row2->SKILLS_ID;

	$query3=$this->db->get_where("skills",array('SKILL_ID' => $skills_id));
if($query3->num_rows()>0){

foreach ($query3->result() as $row3){

echo $row3->SKILL_NAME;
echo "&nbsp;";





}





}


}




}

?>

        <?php  echo "<br>" ?>
        <?php  echo "POSTED BY:" ?>
        
        <?php echo $name123; ?>
        
        <?php  echo "<br>" ?>
        <?php  echo "<br>" ?>
        

<form  action="http://localhost/freelancing/index.php/test/bid_form" method="post"><input type="hidden" name="project_id" value="">
<input type="submit" value="BID ON IT NOW!">
</form> 



</div>
</body>
<?php

} 


}


}



public function bid_form(){

$proj_id = $this->session->userdata('projectt123');
$id = $this->session->userdata('id');
$x=rand(1,9999);
    $date=date(DATE_ATOM);
    $today = date("y.m.d"); 

$bidding_amt=$this->input->post("bidding_amount");
$proj_budget = $this->session->userdata('proj_budget');

$decide=1;
$query=$this->db->get_where('bid',array('USER_ID'=>$id));
if($query->num_rows()>0){	

foreach ($query->result() as $row) {

	echo $row->PROJECT_ID;
		if($row->PROJECT_ID==$proj_id){



			$decide=2;
		?>
<script type="text/javascript">
	
alert("You have already submitted bid for this project,bid for some other project");
//header("location:http://localhost/freelancing/index.php/test/bid_form");
window.location.href = "http://localhost/freelancing/index.php/test/mainpage";
</script>
     
<?php

     }


}



}




if($decide==1){

$data=array( 'BID_ID'=>$x , 'USER_ID'=>$id,'PROJECT_ID'=>$proj_id,'BID_SUMMARY'=>$this->input->post("summary"),'QUES_TO_EMP'=>$this->input->post("question"),'BIDDING_AMOUNT'=>$this->input->post("bidding_amount"),'BID_AWARD'=>'NO','date_created'=>$today,
   'date_modified'=>'');

$this->db->insert("bid",$data);
		?>
<script type="text/javascript">
	
alert("Bid Submitted successfully,Bid for more projects to increase chances of getting awarded");
//header("location:http://localhost/freelancing/index.php/test/bid_form");
window.location.href = "http://localhost/freelancing/index.php/test/mainpage";
</script>
     
<?php


}




}




public function my_bid(){

$id = $this->session->userdata('id');
$query=$this->db->get_where("bid",array('USER_ID'=>$id));




if($query->num_rows() > 0)
{

   	?>
   	<br><br><br><br>

   	<h1 align="center" style="color:black;font-size: 40px; font-family: Georgia, Times New Roman, Times, serif;">MY BIDS</h1>
   	<br>

<b>
 <?php
 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
 echo "MY BIDS FOR JOBS ARE AS FOLLOWS:"; 
?>
</b>

	<table align="center">
<tr>
<th>BID ID</th>
 <th>BID SUMMARY</th>
 <th>BIDDING AMOUNT (Rs.)</th> 
 <th>PROJECT TYPE</th>
 <th>PROJECT BUDGET</th>
 <th>POSTED FROM</th>
 <th>AWARDED OR NOT</th>
 </tr>
 
<?php


foreach($query->result() as $row)
{
	$projid=$row->PROJECT_ID;

?>
       <tr>
       <td><?php echo $row->BID_ID ?></td>
       <td><?php echo $row->BID_SUMMARY ?></td>
       <td><?php echo $row->BIDDING_AMOUNT ?></td>

  <?php     
      
    	$query1=$this->db->get_where("project_details",array('PROJECT_ID'=>$projid));
      foreach($query1->result() as $row1)
{
?>

<td><?php echo $row1->TYPE_PROJECT?></td>
<td><?php echo $row1->PROJ_BUDGET?></td>
<td><?php echo $row1->JOB_LOCATION?></td>



<?php
}

  

?>
<td><?php echo $row->BID_AWARD?></td>
</tr>
<?php

}

  }


     }




public function proposals(){

?>
<br><br><br><br>
<h1 align="center" style="color:black;font-size: 40px; font-family: Georgia, Times New Roman, Times, serif;">PROPOSALS FOR PROJECT</h1>

<?php

$id=$this->session->userdata('id');
$query=$this->db->get_where('project_details',array('USER_ID'=>$id));
if($query->num_rows()>0)
{   ?>
	<table align="center">
<tr>
<th>BID BY</th>
<th>BID ID</th>
<th>PROJECT ID</th>
 <th width="22%" >BID SUMMARY</th>
 <th>QUESTIONS TO ME</th> 
 <th>BIDDING AMOUNT</th>
 <th>DATE OF BID</th>
 <th>AWARD BID</th>
 <th>VIEW ARCHITECT</th>
 </tr>
 
<?php
foreach ($query->result() as $row) {

	$proj12=$row->PROJECT_ID;
	$this->session->set_userdata('projjjjj12345',$proj12);
	$query1=$this->db->get_where('bid',array('PROJECT_ID'=>$proj12));
if($query1->num_rows()>0)
{





foreach ($query1->result() as $row1) {

$user=$row1->USER_ID;
$query2=$this->db->get_where('user',array('ID'=>$user));
if($query2->num_rows()>0){

foreach ($query2->result() as $row3) {

?>

<tr>
       <td><?php echo $row3->USERNAME ?></td>


<?php



	
}




}




?>
       
       <td><?php echo $row1->BID_ID ?></td>
       <td><?php echo $proj12 ?></td>
       <td ><?php echo $row1->BID_SUMMARY ?></td>
       <td><?php echo $row1->QUES_TO_EMP ?></td>
       <td><?php echo $row1->BIDDING_AMOUNT ?></td>
       <td><?php echo $row1->DATE_CREATED ?></td>
  <form name =  <?php echo "AWARD".$row1->BID_ID;?> action="http://localhost/freelancing/index.php/test/award_bidder" method="post"><input type="hidden" name="bid_id" value="<?php echo $row1->BID_ID; ?>"><input type="hidden" name="user_id" value="<?php echo $user; ?>"><input type="hidden" name="project_id" value="<?php echo $proj12; ?>">
<td><input type="submit" value="AWARD">
</form>  </td>

  <form name =  <?php echo "A".$row1->USER_ID;?> action="http://localhost/freelancing/index.php/test/profile_of_worker" method="post"><input type="hidden" name="user_id" value="<?php echo $user; ?>">
<td><input type="submit" value="VIEW PROFILE">
</form>  </td>
</tr>





  <?php


}


}




}



?>
</table>

<?php
}








}








public function award_bidder(){

$bid_id=$this->input->post('bid_id');
$user_id=$this->input->post('user_id');
$id=$this->session->userdata('id');
$pro=$this->input->post('project_id');
$x=rand(1,9999);
    $date=date(DATE_ATOM);
    $today = date("y.m.d");


$decide=1;


$query1=$this->db->get_where('award_job',array('PROJECT_ID'=>$pro));
if($query1->num_rows()>0){	

foreach ($query1->result() as $row1) {

	//echo $row->PROJECT_ID;
		if($row1->USER_FREE_ID==$user_id){



			$decide=2;
		?>
<script type="text/javascript">
	
alert("You have already awarded this person over this project!");
//header("location:http://localhost/freelancing/index.php/test/bid_form");
window.location.href = "http://localhost/freelancing/index.php/test/proposals";
</script>
     
<?php

     }


}







}



if($decide==1){
$data=array( 'ID'=>$x , 'USER_HIRER_ID'=>$id,'USER_FREE_ID'=>$user_id,'PROJECT_ID'=>$pro,'bid_id'=>$bid_id,'date_created'=>$today,
   'date_modified'=>'');

$this->db->insert('award_job',$data);

$data1=array('BID_AWARD'=>'YES');
$this->db->where('BID_ID',$bid_id);
$this->db->update('bid',$data1);




		?>
<script type="text/javascript">
	
alert("You Awarded this freelancer Successfully!");
//header("location:http://localhost/freelancing/index.php/test/bid_form");
window.location.href = "http://localhost/freelancing/index.php/test/proposals";
</script>
     
<?php
}





}






public function chat(){

?>
<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'cc46be53-446f-4ac4-b70d-50f73de2e611', f: true }); done = true; } }; })();</script>



<?php



}





public function inbox(){


$id=$this->session->userdata('id');
$user_type=$this->session->userdata('user_type');
//$chat_id=$this->session->userdata('chat_id');
$date=date(DATE_ATOM);
    $today = date("y.m.d");

?>
  <table align="center">
<tr>
<th>S.NO</th>
<th>EMPLOYER NAME</th>
 <th>DATE</th>
 <th>OPEN CHAT</th>
 <th>REPORT CHAT</th>
 </tr>


 
<?php
$i=1;

    ?>
<br><br><br><br>
<h1 align="center" style="color:black;font-size: 40px; font-family: Georgia, Times New Roman, Times, serif;">INBOX</h1>

<?php

//echo $user_type;

if($user_type==1){

 // echo 'hi';

$query=$this->db->get_where('chat_room',array('USER_ID1'=>$id));

if($query->num_rows()>0)
{

foreach ($query->result() as $row) {


$person=$row->USER_ID2;

$query1=$this->db->get_where('user',array('ID'=>$person));

if($query1->num_rows()>0)
{
foreach ($query1->result() as $row1) {


  $query2=$this->db->get_where('chat_room',array('USER_ID2'=>$person,'USER_ID1'=>$id));

 if($query2->num_rows()>0)
 { 
  foreach ($query2->result() as $row3) {
    
  $row3->CHAT_ID;

  ?>
<tr>
<td><?php echo $i ?></td>
       <td><?php echo $row1->USERNAME ?></td>
       <td><?php echo $row3->DATE_CREATED ?></td>

<form name =  <?php echo "chatid".$row3->CHAT_ID;?> action="http://localhost/freelancing/index.php/test/chat_display" method="post"><input type="hidden" name="chat_id" value="<?php echo $row3->CHAT_ID; ?>"><input type="hidden" name="user_id" value="<?php echo $person; ?>">
<td><input type="submit" value="OPEN CHAT">
</form>  </td>


<form name =  <?php echo "c".$row3->CHAT_ID;?> action="http://localhost/freelancing/index.php/test/report" method="post"><input type="hidden" name="user_id" value="<?php echo $person; ?>">
<td><input type="submit" value="REPORT CHAT">
</form>  </td>



</tr>
<?php

}
}

$i++;
}



}



}



}





}





?>
</table>
<?php




}







public function chat_display(){

$user_type=$this->session->userdata('user_type');
$chat_id=$this->input->post('chat_id');
$user_id=$this->input->post('user_id');

$this->session->set_userdata('user_person',$user_id);

$this->session->set_userdata('chat',$chat_id);

$query=$this->db->get_where('user',array('ID'=>$user_id));

if($query->num_rows()>0)
{

foreach ($query->result() as $row) {

$emp=$row->USERNAME;

}


}

?>
<body style="background-image: url(http://localhost/freelancing/images/image14.jpg);    background-position: -50px -50px;  ">
<div class="dog">
<div class="cat">

<img src="http://localhost/freelancing/images/prof2.png" style="float: left; height: 50px; width:50px;">
&nbsp;
<?php echo $emp?>
</div>

<?php    

$chat_id=$this->session->userdata('chat');
$id=$this->session->userdata('id');
$query1=$this->db->get_where('message_details',array('CHAT_ROOM_ID'=>$chat_id));





if($query1->num_rows() > 0){
  foreach ($query1->result() as $row1) {


if($row1->user_type==1){

?>
<div class="msg">

<?php echo 'Me:';?>

</div>
<h3  style=" margin-left: 70% " >
<span>

<?php echo $row1->MESSAGE;?>
</span>
</h3>
<div class="msg3">

<?php echo $row1->DATE;?>
<?php echo $row1->TIME;?>

</div>

<?php

}


else{

?>
<div class="msg1">
<h3  style="margin-right:  65%; ">
<span>
<?php echo $row1->MESSAGE;?>
</span>
</h3>
</div>


<div class="msg2">

<?php echo $row1->DATE;?>
<?php echo $row1->TIME;?>

</div>






<?php




}

}
    
  }



?>


</div>


<div class="tommy">

<form action="http://localhost/freelancing/index.php/test/message_insert" method="post" onsubmit="return validateForm()" >

<input type="text" name="message" >
<input type="submit" name="" value="SEND" class="button button2">

</form>

</div>



</body>


<?php




}


public function chat_insertion(){

$chat_id=rand(1,9999);
$this->session->set_userdata('chat_id',$chat_id);
$id_free=$this->session->userdata('id');  
$id_hirer=$this->input->post('user_id');

$i=1;

$query=$this->db->get_where('chat_room',array('USER_ID1'=>$id_free,'USER_ID2'=>$id_hirer));

$date=date(DATE_ATOM);
    $today = date("y.m.d");
    $decide=1;

//  echo 'hi';  

if($query->num_rows()>0)


{
$decide=2;
foreach($query->result() as $row)
{
//echo 'hi';


    ?>
<script type="text/javascript">
  
alert("Go To The Inbox For Chat!");
//header("location:http://localhost/freelancing/index.php/test/bid_form");
window.location.href = "http://localhost/freelancing/index.php/test/inbox";
</script>
     
<?php




}

}

else{
  if($decide==1){
$data=array('CHAT_ID'=>$chat_id,'USER_ID1'=>$id_free,'USER_ID2'=>$id_hirer,'DATE_CREATED'=>$today,'DATE_MODIFIED'=>'');

$this->db->insert('chat_room',$data);

?>
<script type="text/javascript">
  
alert("Go To The Inbox For Chat!");
//header("location:http://localhost/freelancing/index.php/test/bid_form");
window.location.href = "http://localhost/freelancing/index.php/test/inbox";
</script>;
<?php

}
}




}

public function message_insert(){
//echo date('Y-m-d H:i:s');
//echo date('H:i', strtotime('16:30:00'));

date_default_timezone_set('Asia/Kolkata');
$current_time=date('H:i');
$chat_id=$this->session->userdata('chat');
$id=$this->session->userdata('id');
$today = date("y.m.d");
$msg=htmlspecialchars($this->input->post("message")); 
$user_type=$this->session->userdata('user_type');

$data=array('CHAT_ROOM_ID'=>$chat_id,'user_id'=>$id,                                 'MESSAGE'=> $msg , 'user_type'=>$user_type ,'DATE'=>$today  , 'TIME'=> $current_time );
$this->db->insert('message_details',$data);

header("location:http://localhost/freelancing/index.php/test/chat_display_session");

}




public function chat_display_session(){

?>
<?php
//$chat_id=$this->input->post('chat_id');
//$user_id=$this->input->post('user_id');

$user_id=$this->session->userdata('user_person');

$chat_id=$this->session->userdata('chat');

$query=$this->db->get_where('user',array('ID'=>$user_id));

if($query->num_rows()>0)
{

foreach ($query->result() as $row) {

$emp=$row->USERNAME;

}


}

?>
<body style="background-image: url(http://localhost/freelancing/images/image14.jpg);    background-position: -50px -50px;  ">
<div class="dog">
<div class="cat">
<img src="http://localhost/freelancing/images/prof2.png" style="float: left; height: 50px; width:50px; margin-left: 2%;">
&nbsp;
<?php echo $emp?>
</div>


<?php    

$chat_id=$this->session->userdata('chat');
$id=$this->session->userdata('id');
$query1=$this->db->get_where('message_details',array('CHAT_ROOM_ID'=>$chat_id));
$user_type=$this->session->userdata('user_type');




if($query1->num_rows() > 0){
  foreach ($query1->result() as $row1) {

if($row1->user_type==1){

?>


<div class="msg">
<?php echo 'Me:';?>
</div>
<h3  style=" margin-left: 70% ">
<span>
<?php echo $row1->MESSAGE;?>
</span>
</h3>

<div class="msg3">

<?php echo $row1->DATE;?>
<?php echo $row1->TIME;?>

</div>





<?php

}

else{

?>
<div class="msg1">
<h3  style="margin-right:  65%; ">
<span>
<?php echo $row1->MESSAGE;?>
</span>
</h3>
</div>
<div class="msg2">

<?php echo $row1->DATE;?>
<?php echo $row1->TIME;?>

</div>



<?php




}



}
    

}


?>



</div>

<div class="tommy">

<form action="http://localhost/freelancing/index.php/test/message_insert" method="post" onsubmit="return validateForm()" >

<input type="text" name="message" >
<input type="submit" name="" value="SEND" class="button button2">

</form>

</div>



<br><br>
&nbsp;&nbsp;&nbsp;

<b>
Click <a href="http://localhost/freelancing/index.php/test/mainpage">here</a> to go back to main page!
</b>

</body>


<?php



}


public function inbox_hirer(){




$id=$this->session->userdata('id');
$user_type=$this->session->userdata('user_type');
//$chat_id=$this->session->userdata('chat_id');
$date=date(DATE_ATOM);
    $today = date("y.m.d");

?>
  <table align="center">
<tr>
<th>S.NO</th>
<th>ARCHITECT NAME</th>
 <th>DATE</th>
 <th>OPEN CHAT</th>
 <th>REPORT CHAT</th>
 </tr>
 
<?php
$i=1;

    ?>
<br><br><br><br>
<h1 align="center" style="color:black;font-size: 40px; font-family: Georgia, Times New Roman, Times, serif;">INBOX</h1>

<?php

//echo $user_type;

if($user_type==2){

 // echo 'hi';

$query=$this->db->get_where('chat_room',array('USER_ID2'=>$id));

if($query->num_rows()>0)
{

foreach ($query->result() as $row) {


$person=$row->USER_ID1;

$query1=$this->db->get_where('user',array('ID'=>$person));

if($query1->num_rows()>0)
{
foreach ($query1->result() as $row1) {


  $query2=$this->db->get_where('chat_room',array('USER_ID1'=>$person,'USER_ID2'=>$id));

 if($query2->num_rows()>0)
 { 
  foreach ($query2->result() as $row3) {
    
  $row3->CHAT_ID;

  ?>
<tr>
<td><?php echo $i ?></td>
       <td><?php echo $row1->USERNAME ?></td>
       <td><?php echo $row3->DATE_CREATED ?></td>

<form name =  <?php echo "chatid".$row3->CHAT_ID;?> action="http://localhost/freelancing/index.php/test/chat_display_hirer" method="post"><input type="hidden" name="chat_id" value="<?php echo $row3->CHAT_ID; ?>"><input type="hidden" name="user_id" value="<?php echo $person; ?>">
<td><input type="submit" value="OPEN CHAT">
</form>  </td>

<form name =  <?php echo "c".$row3->CHAT_ID;?> action="http://localhost/freelancing/index.php/test/report_hirer" method="post"><input type="hidden" name="user_id" value="<?php echo $person; ?>">
<td><input type="submit" value="REPORT CHAT">
</form>  </td>



</tr>
<?php

}
}

$i++;
}



}



}



}





}





?>
</table>
<?php


}





public function chat_display_hirer(){


//$user_type=$this->session->userdata('user_type');
$chat_id=$this->input->post('chat_id');
$user_id=$this->input->post('user_id');

$this->session->set_userdata('user_person',$user_id);

$this->session->set_userdata('chat',$chat_id);

$query=$this->db->get_where('user',array('ID'=>$user_id));

if($query->num_rows()>0)
{

foreach ($query->result() as $row) {

$emp=$row->USERNAME;

}


}

?>
<body style="background-image: url(http://localhost/freelancing/images/image14.jpg);    background-position: -50px -50px;  ">
<div class="dog">
<div class="cat">

<img src="http://localhost/freelancing/images/prof2.png" style="float: left; height: 50px; width:50px;">
&nbsp;
<?php echo $emp?>
</div>

<?php    

$chat_id=$this->session->userdata('chat');
$id=$this->session->userdata('id');
$query1=$this->db->get_where('message_details',array('CHAT_ROOM_ID'=>$chat_id));





if($query1->num_rows() > 0){
  foreach ($query1->result() as $row1) {


if($row1->user_type==2){

?>
<div class="msg">

<?php echo 'Me:';?>

</div>


<h3  style=" margin-left: 70% ">
<span>
<?php echo $row1->MESSAGE;?>
</span>
</h3>
<div class="msg3">

<?php echo $row1->DATE;?>
<?php echo $row1->TIME;?>

</div>
<?php

}


else{

?>
<div class="msg1">
<h3  style="margin-right:  65%; ">
<span>
<?php echo $row1->MESSAGE;?>
</span>
</h3>
</div>
<div class="msg2">

<?php echo $row1->DATE;?>
<?php echo $row1->TIME;?>

</div>



<?php




}



}
    



  }




?>




</div>


<div class="tommy">

<form action="http://localhost/freelancing/index.php/test/message_insert_hirer" method="post" onsubmit="return validateForm()" >

<input type="text" name="message" >
<input type="submit" name="" value="SEND" class="button button2">

</form>

</div>



</body>


<?php

}


public function message_insert_hirer(){

date_default_timezone_set('Asia/Kolkata');
$current_time=date('H:i');
$chat_id=$this->session->userdata('chat');
$id=$this->session->userdata('id');
$today = date("y.m.d");
$msg=htmlspecialchars($this->input->post("message")); 
$user_type=$this->session->userdata('user_type');

$data=array('CHAT_ROOM_ID'=>$chat_id,'user_id'=>$id,                                 'MESSAGE'=> $msg , 'user_type'=> $user_type,'DATE'=>$today  , 'TIME'=> $current_time );
$this->db->insert('message_details',$data);

header("location:http://localhost/freelancing/index.php/test/chat_display_session_hirer");


}

public function chat_display_session_hirer(){



?>
<?php
//$chat_id=$this->input->post('chat_id');
//$user_id=$this->input->post('user_id');

$user_id=$this->session->userdata('user_person');

$chat_id=$this->session->userdata('chat');

$query=$this->db->get_where('user',array('ID'=>$user_id));

if($query->num_rows()>0)
{

foreach ($query->result() as $row) {

$emp=$row->USERNAME;

}


}

?>
<body style="background-image: url(http://localhost/freelancing/images/image14.jpg);    background-position: -50px -50px;  ">
<div class="dog">
<div class="cat">
<img src="http://localhost/freelancing/images/prof2.png" style="float: left; height: 50px; width:50px; margin-left: 2%;">
&nbsp;
<?php echo $emp?>
</div>


<?php    

$chat_id=$this->session->userdata('chat');
$id=$this->session->userdata('id');
$query1=$this->db->get_where('message_details',array('CHAT_ROOM_ID'=>$chat_id));
$user_type=$this->session->userdata('user_type');




if($query1->num_rows() > 0){
  foreach ($query1->result() as $row1) {

if($row1->user_type==2){

?>
<div class="msg">

<?php echo 'Me:';?>

</div>


<h3  style=" margin-left: 70% ">
<span>
<?php echo $row1->MESSAGE;?>
</span>
</h3>
<div class="msg3">

<?php echo $row1->DATE;?>
<?php echo $row1->TIME;?>

</div>



<?php

}

else{

?>
<div class="msg1">
<h3  style="margin-right:  65%; ">
<span>
<?php echo $row1->MESSAGE;?>
</span>
</h3>
</div>

<div class="msg2">

<?php echo $row1->DATE;?>
<?php echo $row1->TIME;?>

</div>


<?php




}



}
    

}




?>



</div>

<div class="tommy">

<form action="http://localhost/freelancing/index.php/test/message_insert_hirer" method="post" onsubmit="return validateForm()" >

<input type="text" name="message" >
<input type="submit" name="" value="SEND" class="button button2">

</form>

</div>



<br><br>
&nbsp;&nbsp;&nbsp;

<b>
Click <a href="http://localhost/freelancing/index.php/test/proposals">here</a> to go back to main page!
</b>

</body>


<?php


}



public function bookmark_insert(){


$id=$this->session->userdata('id');
$project_id=$this->input->post('project_id');
$decide=1;


$query=$this->db->get_where('bookmarked_projects',array('USER_ID'=>$id,'PROJECT_ID'=>$project_id));
if($query->num_rows() > 0){

$decide=2;


?>
<script type="text/javascript">
  
alert("You have already bookmarked this project");
//header("location:http://localhost/freelancing/index.php/test/bid_form");
window.location.href = "http://localhost/freelancing/index.php/test/mainpage";
</script>


<?php



}




if($decide==1)
{

$today = date("y.m.d");

$data=array('USER_ID'=>$id,'PROJECT_ID'=>$project_id,'DATE_CREATED'=>$today);

$this->db->insert('bookmarked_projects',$data);



?>
<script type="text/javascript">
  
alert("You successfully bookmarked this project! Check Bookmarks!");
//header("location:http://localhost/freelancing/index.php/test/bid_form");
window.location.href = "http://localhost/freelancing/index.php/test/mainpage";
</script>


<?php


}






}


public function bookmarked_projects(){


$id=$this->session->userdata('id');


$query=$this->db->get_where('bookmarked_projects',array('USER_ID'=>$id));

?>
    <br><br><br><br>

    <h1 align="center" style="color:black;font-size: 40px; font-family: Georgia, Times New Roman, Times, serif;">BOOKMARKED PROJECTS</h1>
    <br>
<table align="center">
<tr>
 <th>TYPE OF PROJECT</th>
 <th>PROJECT BUDGET (Rs.)</th> 
 <th>JOB POSTED FROM</th> 
 <th>PROJECT DESCRIPTION</th>
 <th>DATE POSTED ON</th>
 <th>REMOVE BOOKMARK</th>
 </tr>


 <?php


if($query->num_rows()>0){


foreach ($query->result() as $row) {

$projj=$row->PROJECT_ID;


$query1=$this->db->get_where('project_details',array('PROJECT_ID'=>$projj));


if($query1->num_rows()>0){


foreach ($query1->result() as $row1) {
 

?>
<tr>
<td><?php echo $row1->TYPE_PROJECT;?></td>
<td><?php echo  $row1->PROJ_BUDGET;?></td>
<td><?php echo $row1->JOB_LOCATION;?></td>
<td><?php echo $row1->project_desc;?></td>
<td><?php echo $row1->DATE_CREATED;?></td>
<form action="http://localhost/freelancing/index.php/test/delete_bookmark"         method= "post" >
<td><input type="hidden" name="bookmark_id" value="<?php echo $row->BOOKMARK_ID?>"> <input type="submit" name="" value="Remove"></td>
</form>
</tr>
<?php

}



}




}


}




}


public function delete_bookmark(){

$bookmark_id=$this->input->post('bookmark_id');


$this->db->where('BOOKMARK_ID',$bookmark_id);
$this->db->delete('bookmarked_projects');

?>

<script type="text/javascript">
  
alert("You removed the bookmark successfully!");
//header("location:http://localhost/freelancing/index.php/test/bid_form");
window.location.href = "http://localhost/freelancing/index.php/test/mainpage";
</script>




<?php




}



public function new_project_insert(){

$y=rand(1,9999);
$this->session->set_userdata('project_id', $y);
 //   $date=date(DATE_ATOM);
    $today = date("y.m.d"); 
  //  $mail=$this->input->post("email");
  //  $name=$this->input->post("username");

$data=array( 'project_id'=>$y , 'type_project'=>$this->input->post("proj_type"),'proj_budget'=>$this->input->post("proj_budget"),'job_location'=>$this->input->post("city"),'user_id'=>$this->session->userdata('id'),'project_status'=>'yes',       'project_desc'=>$this->input->post("desc"),'date_created'=>$today,
   'date_modified'=>'');
$this->db->insert("project_details",$data);


header("location:http://localhost/freelancing/index.php/test/worker_skills_new_project");




}



public function insert_skills_new_project($data){

$id = $this->session->userdata('project_id');
//$checkgroup=$this->input->post("chk1");

$i=0;
foreach($data['chk1'] as $chk)  
  {  
      $record= array('PROJECT_ID'=>$id,
        'SKILLS_ID'=> $chk);
      $this->db->insert("project_skills",$record);  
      $i++;
  }
?>
<script language="javascript">
alert("Project posted Successfully!");
window.location.href = "http://localhost/freelancing/index.php/test/proposals";
</script>

<?php


//header("location:http://localhost/freelancing/index.php/test/");


}


public function worker_profile(){


$bidcount=0;
$awardcount=0;

?>

<br><br><br><br>

    <h1 align="center" style="color:black;font-size: 45px; font-family: Georgia, Times New Roman, Times, serif;">MY PROFILE</h1>
<div class="rating">
Average Rating:
<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
</div>


<div class="proff" style="height: 250px; width: 1700px; ">


<div class="profile" style="margin-top: 0%; margin-left: 2%;">

<img src="http://localhost/freelancing/images/profile.jpeg" style="float: left; height: 220px; width:220px;margin-top: 1%;border: 2px solid black;">

</div>


<?php
$id=$this->session->userdata('id');

$query=$this->db->get_where('user',array('ID'=>$id));

if($query->num_rows() >0)
{

foreach ($query->result() as $row) {

?>



<div class="name">

<?php
echo 'Name:';
echo "&nbsp;";

echo $row->USERNAME;
echo "&nbsp;";
//echo ',';

echo '<br>';
echo "Phone : ";
echo $row->PHONE;


echo '<br>';
echo "Email : ";
echo $row->EMAIL;

echo '<br>';
echo "City : ";
echo $row->city;
echo '<br>';
echo 'Email : verified ';


?>
</div>

<div class="infoo">
<?php

echo '<br>';
echo 'My Skills:';
echo '&nbsp;';

}


}

$query1=$this->db->get_where('user_skills',array('user_id'=>$id));

if($query1->num_rows()>0)
{

foreach ($query1->result() as $row1) {
  

$skill=$row1->skill_id;

$query2=$this->db->get_where('skills',array('SKILL_ID'=>$skill));


if($query2->num_rows()>0)
{

foreach ($query2->result() as $row2) {
  
echo $row2->SKILL_NAME;
echo '&nbsp;';
echo '&nbsp;';
echo '&nbsp;';
echo '&nbsp;';
}


}


}




}



$query3=$this->db->get_where('bid',array('USER_ID'=>$id));

if($query3->num_rows()>0)
{

foreach ($query3->result() as $row3) {
  
$bidcount++;


}






}




echo '<br>';
echo 'Number Of Bids: ';
echo $bidcount;





$query4=$this->db->get_where('award_job',array('USER_FREE_ID'=>$id));

if($query4->num_rows()>0)
{

foreach ($query4->result() as $row4) {
  
$awardcount++;


}



}



echo '<br>';
echo 'Number Of Bids Awarded: ';
echo $awardcount;



?>
</div>

<?php





}





public function hirer_profile(){



$active=0;
$past=0;
$total=0;

?>

<br><br><br><br>

    <h1 align="center" style="color:black;font-size: 45px; font-family: Georgia, Times New Roman, Times, serif;">MY PROFILE</h1>
<div class="rating">
Average Rating:
<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
</div>




<div class="proff" style="height: 250px; width: 1700px; ">





<div class="profile" style="margin-top: 0%; margin-left: 2%;">

<img src="http://localhost/freelancing/images/profile.jpeg" style="float: left; height: 220px; width:220px;margin-top: 1%;border: 2px solid black;">

</div>


<?php
$id=$this->session->userdata('id');

$query=$this->db->get_where('user',array('ID'=>$id));

if($query->num_rows() >0)
{

foreach ($query->result() as $row) {

?>



<div class="name">

<?php
echo 'Name:';
echo "&nbsp;";

echo $row->USERNAME;
echo "&nbsp;";
//echo ',';

echo '<br>';
echo "Phone : ";
echo $row->PHONE;


echo '<br>';
echo "Email : ";
echo $row->EMAIL;

echo '<br>';
echo "City : ";
echo $row->city;
echo '<br>';
echo 'Email : verified ';


?>
</div>

<div class="infoo">
<?php


}


}

$query2=$this->db->get_where('project_details',array('USER_ID'=>$id,'PROJECT_STATUS'=>'yes'));

if($query2->num_rows()>0)
{

foreach ($query2->result() as $row2) {
  
$active++;


}



}



$query3=$this->db->get_where('project_details',array('USER_ID'=>$id,'PROJECT_STATUS'=>'no'));

if($query3->num_rows()>0)
{

foreach ($query3->result() as $row2) {
  
$past++;


}



}




echo '<br>';
echo 'Active Projects:';
echo $active;

echo '<br>';
echo 'Past Projects:';
echo $past;


$total=$active+$past;


echo '<br>';
echo 'Total Projects:';
echo $total;





?>



</div>

<?php





}




public function emp_prof(){



$active=0;
$past=0;
$total=0;

?>

<br><br><br><br>

    <h1 align="center" style="color:black;font-size: 45px; font-family: Georgia, Times New Roman, Times, serif;">EMPLOYER PROFILE</h1>
<div class="rating">
Average Rating:
<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
</div>


<div class="proff" style="height: 250px; width: 1700px; ">


<div class="profile" style="margin-top: 0%; margin-left: 2%;">

<img src="http://localhost/freelancing/images/profile.jpeg" style="float: left; height: 220px; width:220px;margin-top: 1%;border: 2px solid black;">

</div>


<?php
$id=$this->session->userdata('emp_id');

$query=$this->db->get_where('user',array('ID'=>$id));

if($query->num_rows() >0)
{

foreach ($query->result() as $row) {

?>



<div class="name">

<?php

echo "Name: ";
echo $row->USERNAME;
echo "&nbsp;";
//echo ',';


echo '<br>';
echo "City : ";
echo $row->city;
echo '<br>';
echo 'Email : verified ';

echo '<br>';
echo 'Phone : verified ';


echo '<br>';
echo 'Member Since: ';
echo $row->DATE_CREATED;


?>
</div>

<div class="infoo">
<?php


}


}

$query2=$this->db->get_where('project_details',array('USER_ID'=>$id,'PROJECT_STATUS'=>'yes'));

if($query2->num_rows()>0)
{

foreach ($query2->result() as $row2) {
  
$active++;


}


}





$query3=$this->db->get_where('project_details',array('USER_ID'=>$id,'PROJECT_STATUS'=>'no'));

if($query3->num_rows()>0)
{

foreach ($query3->result() as $row2) {
  
$past++;


}



}




echo '<br>';
echo 'Active Projects:';
echo $active;

echo '<br>';
echo 'Past Projects:';
echo $past;


$total=$active+$past;




echo '<br>';
echo 'Total Projects:';
echo $total;





?>



</div>

<?php





}



public function profile_of_worker(){


$bidcount=0;
$awardcount=0;

?>

<br><br><br><br>

    <h1 align="center" style="color:black;font-size: 45px; font-family: Georgia, Times New Roman, Times, serif;">WORKER PROFILE</h1>
<div class="rating">
Average Rating:
<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
</div>




<div class="proff" style="height: 250px; width: 1700px; ">





<div class="profile" style="margin-top: 0%; margin-left: 2%;">

<img src="http://localhost/freelancing/images/profile.jpeg" style="float: left; height: 220px; width:220px;margin-top: 1%;border: 2px solid black;">

</div>


<?php
$id=$this->input->post('user_id');

$query=$this->db->get_where('user',array('ID'=>$id));

if($query->num_rows() >0)
{

foreach ($query->result() as $row) {

?>



<div class="name">

<?php
echo 'Name:';
echo "&nbsp;";

echo $row->USERNAME;
echo "&nbsp;";
//echo ',';


//echo $row->PHONE;


echo '<br>';
echo "City : ";
echo $row->city;
echo '<br>';
echo 'Email : verified ';

echo '<br>';
echo "Phone : verified";

echo '<br>';
echo "Member Since: ";
echo $row->DATE_CREATED;




?>
</div>

<div class="infoo">
<?php

echo '<br>';
echo 'Skills Inherited:';
echo '&nbsp;';

}


}

$query1=$this->db->get_where('user_skills',array('user_id'=>$id));

if($query1->num_rows()>0)
{

foreach ($query1->result() as $row1) {
  

$skill=$row1->skill_id;

$query2=$this->db->get_where('skills',array('SKILL_ID'=>$skill));


if($query2->num_rows()>0)
{

foreach ($query2->result() as $row2) {
  
echo $row2->SKILL_NAME;
echo '&nbsp;';
echo '&nbsp;';
echo '&nbsp;';
echo '&nbsp;';
}


}


}




}



$query3=$this->db->get_where('bid',array('USER_ID'=>$id));

if($query3->num_rows()>0)
{

foreach ($query3->result() as $row3) {
  
$bidcount++;


}




}




echo '<br>';
echo 'Number Of Bids: ';
echo $bidcount;



$query4=$this->db->get_where('award_job',array('USER_FREE_ID'=>$id));

if($query4->num_rows()>0)
{

foreach ($query4->result() as $row4) {
  
$awardcount++;


}




}



echo '<br>';
echo 'Number Of Bids Awarded: ';
echo $awardcount;



?>
</div>

<?php



}



public function report_insert(){

$us=$this->session->userdata('id');
$user_reported=$this->session->userdata('idq');
$report_type=$this->input->post('report_type');
$desc=$this->input->post('report_desc');
$decide=1;

$query=$this->db->get_where('report_user',array('USER_ID'=>$us,'USER_REPORT_ID'=>$user_reported));

if($query->num_rows()>0)
{

$decide=2;

?>
<script language="javascript">
alert("You have already Reported this users profile! Its under review!");
window.location.href = "http://localhost/freelancing/index.php/test/mainpage";
</script>

<?php



}




if($decide==1){

$data=array( 'USER_ID'=>$us , 'USER_REPORT_ID'=>$user_reported,'REPORT_ID'=>$report_type,'FURTHER_DESC'=>$desc);


$this->db->insert("report_user",$data);

?>
<script language="javascript">
alert("Report submitted! Thanks for Reporting!");
window.location.href = "http://localhost/freelancing/index.php/test/chat_admin";
</script>

<?php


}

}



public function chat_admin(){

$chat_id=rand(1,9999);
$this->session->set_userdata('chat_id_admin',$chat_id);
$id_free=$this->session->userdata('id');  
//$id_hirer=$this->input->post('user_id');


$query10=$this->db->get_where('user',array('USERNAME'=>'Admin','USER_TYPE'=>'2'));

if($query10->num_rows()>0){

foreach ($query10->result() as $row10) {

$id_hirer=$row10->ID;
$this->session->set_userdata('admin_id',$id_hirer);

}

}

$i=1;

$query=$this->db->get_where('chat_room',array('USER_ID1'=>$id_free,    'USER_ID2'=>       $id_hirer));

$date=date(DATE_ATOM);
    $today = date("y.m.d");
    $decide=1;

//  echo 'hi';  

if($query->num_rows()>0)


{
$decide=2;
foreach($query->result() as $row)
{
//echo 'hi';


    ?>
<script type="text/javascript">
  
//alert("Go To The Inbox For Chat!");
//header("location:http://localhost/freelancing/index.php/test/bid_form");
window.location.href = "http://localhost/freelancing/index.php/test/message_insert_admin";
</script>
     
<?php




}

}

else{
  if($decide==1){
$data=array('CHAT_ID'=>$chat_id,'USER_ID1'=>$id_free,'USER_ID2'=>$id_hirer,'DATE_CREATED'=>$today,'DATE_MODIFIED'=>'');

$this->db->insert('chat_room',$data);

header("location:http://localhost/freelancing/index.php/test/message_insert_admin");
}
}




}


public function message_insert_admin(){
//echo date('Y-m-d H:i:s');
//echo date('H:i', strtotime('16:30:00'));

date_default_timezone_set('Asia/Kolkata');
$current_time=date('H:i');
$chat_id=$this->session->userdata('chat_id_admin');
$admin_id=$this->session->userdata('admin_id');
$today = date("y.m.d");
$banda123=$this->session->userdata('banda');
$msg= 'Thanks for reporting '.$banda123.' profile ,your report is under review!' ;
$user_type=$this->session->userdata('user_type');

$data=array('CHAT_ROOM_ID'=>$chat_id,'user_id'=>$admin_id,                                 'MESSAGE'=> $msg, 'user_type'=> '2','DATE'=>$today  , 'TIME'=> $current_time );
$this->db->insert('message_details',$data);

    ?>
<script type="text/javascript">
  
//alert("Thanks for Reporting your Report is under the review!");
//header("location:http://localhost/freelancing/index.php/test/bid_form");
window.location.href = "http://localhost/freelancing/index.php/test/inbox";
</script>
     
<?php


}



public function report_insert_hirer(){

$us=$this->session->userdata('id');
$user_reported=$this->session->userdata('idqrs');
$report_type=$this->input->post('report_type');
$desc=$this->input->post('report_desc');
$decide=1;

$query=$this->db->get_where('report_user',array('USER_ID'=>$us,'USER_REPORT_ID'=>$user_reported));

if($query->num_rows()>0)
{

$decide=2;

?>
<script language="javascript">
alert("You have already Reported this users profile! Its under review!");
window.location.href = "http://localhost/freelancing/index.php/test/proposals";
</script>

<?php



}




if($decide==1){

$data=array( 'USER_ID'=>$us , 'USER_REPORT_ID'=>$user_reported,'REPORT_ID'=>$report_type,'FURTHER_DESC'=>$desc);


$this->db->insert("report_user",$data);

?>
<script language="javascript">
alert("Report submitted! Thanks for Reporting!");
window.location.href = "http://localhost/freelancing/index.php/test/chat_admin_hirer";
</script>

<?php


}

}


public function chat_admin_hirer(){

$chat_id=rand(1,9999);
$this->session->set_userdata('chat_id_admin',$chat_id);
$id_free=$this->session->userdata('id');  
//$id_hirer=$this->input->post('user_id');


$query10=$this->db->get_where('user',array('USERNAME'=>'Admin','USER_TYPE'=>'1'));

if($query10->num_rows()>0){

foreach ($query10->result() as $row10) {

$id_hirer=$row10->ID;
$this->session->set_userdata('admin_id',$id_hirer);

}



}

$i=1;

$query=$this->db->get_where('chat_room',array('USER_ID1'=>$id_free,'USER_ID2'=>$id_hirer));

$date=date(DATE_ATOM);
    $today = date("y.m.d");
    $decide=1;

//  echo 'hi';  

if($query->num_rows()>0)


{
$decide=2;
foreach($query->result() as $row)
{
//echo 'hi';


    ?>
<script type="text/javascript">
  
//alert("Go To The Inbox For Chat!");
//header("location:http://localhost/freelancing/index.php/test/bid_form");
window.location.href = "http://localhost/freelancing/index.php/test/message_insert_admin_hirer";
</script>
     
<?php




}

}

else{
  if($decide==1){
$data=array('CHAT_ID'=>$chat_id,'USER_ID1'=>$id_hirer,'USER_ID2'=>$id_free,'DATE_CREATED'=>$today,'DATE_MODIFIED'=>'');

$this->db->insert('chat_room',$data);

header("location:http://localhost/freelancing/index.php/test/message_insert_admin_hirer");
}
}






}




public function message_insert_admin_hirer(){
//echo date('Y-m-d H:i:s');
//echo date('H:i', strtotime('16:30:00'));

date_default_timezone_set('Asia/Kolkata');
$current_time=date('H:i');
$chat_id=$this->session->userdata('chat_id_admin');
$admin_id=$this->session->userdata('admin_id');
$today = date("y.m.d");
$banda123=$this->session->userdata('banda_hi');
$msg= 'Thanks for reporting '.$banda123.' profile ,your report is under review!' ;
$user_type=$this->session->userdata('user_type');

$data=array('CHAT_ROOM_ID'=>$chat_id,'user_id'=>$admin_id,                                 'MESSAGE'=> $msg, 'user_type'=> '1','DATE'=>$today  , 'TIME'=> $current_time );
$this->db->insert('message_details',$data);


    ?>
<script type="text/javascript">
  
//alert("Thanks for Reporting your Report is under the review!");
//header("location:http://localhost/freelancing/index.php/test/bid_form");
window.location.href = "http://localhost/freelancing/index.php/test/inbox_hirer";
</script>
     
<?php


}





}




?>