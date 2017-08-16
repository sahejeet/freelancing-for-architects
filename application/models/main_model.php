<?php



class Main_model extends CI_model{
	
public function insert_into_user(){


$data=array( 'username'=>'pravir' , 'password'=>'12345');

$this->db->insert("user",$data);



}

public function fetch(){


$query=$this->db->get("user");

if($query->num_rows() > 0)
{

foreach($query->result() as $row)
{
    echo $row->id;
    echo $row->username;
    echo $row->password;

}



}





}

public function delete(){

$this->db->where('username','pravir');
$this->db->delete('user');


}


public function update(){

$data=array( 'username'=>'pravir' , 'password'=>'12345');
$this->db->where('username','sahejeet');
$this->db->update('user',$data);


}







}



?>