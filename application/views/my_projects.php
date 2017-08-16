<style>
    
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 95%;
    

    
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




<br><br><br><br>

<h1 align="center" style="color:black;font-size: 50px; font-family: Georgia, Times New Roman, Times, serif;">MY PROJECTS</h1>

<br>
<table align="center">

<tr>
<th>S.NO</th> 
 <th>TYPE OF PROJECT</th>
 <th>PROJECT BUDGET (Rs.)</th> 
 <th>JOB LOCATION</th> 
 <th>PROJECT STATUS</th>
 <th>PROJECT DESCRIPTION</th>
 

</tr>

<?php
 $i=1; 
 foreach ($categories as $index =>$category ):
  ?>
<tr>
<td><?php echo $i?></td>
<td><?php echo $category->TYPE_PROJECT?></td>
<td><?php echo $category->PROJ_BUDGET?></td>
<td><?php echo $category->JOB_LOCATION?></td>
<td><?php echo $category->PROJECT_STATUS?></td>
<td><?php echo $category->project_desc?></td>






</tr>
<?php
 $i++;
 endforeach;
?>








</table>