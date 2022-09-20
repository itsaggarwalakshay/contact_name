<?php

class dbconnection{

function __construct()
{
    $con=mysqli_connect('localhost','root','','phonebook');
    $this->dbh=$con;
}
function insert($getfname,$getlname,$getphone,$getdesc,$newfilename){
    $result=mysqli_query($this->dbh,"INSERT INTO contacts( fname, lname, phone, description,image) 
    VALUES ('$getfname','$getlname',$getphone,'$getdesc','$newfilename')");
    return $result;
}
function display(){
    $result=mysqli_query($this->dbh,"select * from contacts");      
    return $result;
}
function displaysingle($id){
    $result=mysqli_query($this->dbh,"select * from contacts  where id='$id'");
    return $result;
}
function search($searchname){
    $result=mysqli_query($this->dbh,"select * from contacts 
    where fname like '%$searchname%'");
    return $result;
}   

function delete($did){
    $result=mysqli_query($this->dbh,"delete from contacts where id=$did");
    return $result;
} 

//Data one record read Function
function edit($id)
{
    $result=mysqli_query($this->dbh,"select * from contacts where id='$id'");
    return $result;
}
// Data updation Function
function update($getfname,$getlname,$getphone,$getdesc,$newfilename,$id)
{
    $result=mysqli_query($this->dbh,"UPDATE contacts SET id='$id',fname=' $getfname',lname=' $getlname',phone='$getphone',description='$getdesc',image=' $newfilename' WHERE id='$id'");
    return $result;
} 

}

?>