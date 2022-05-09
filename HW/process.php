<?php 
include 'db.php';

   $check=$_POST['checker'];

   $check();

function insert(){
   global $con;
    $id    = $_POST['id'];
    if(empty($id)){
      $studentname    = $_POST['studentname'];
    $sFatherName  = $_POST['sFatherName'];
    $sMotherName  = $_POST['sMotherName'];
    $sPhone   = $_POST['sPhone'];
    $sAddress = $_POST['sAddress'];
    if(empty($studentname)){
      echo '<div class="alert alert-danger">Student Name is Required</div>';
   }if(empty($sFatherName)){
      echo '<div class="alert alert-danger">Student FatherName is Required</div>';
   }if(empty($sMotherName)){
      echo '<div class="alert alert-danger">Student MotherName is Required</div>';
   }if(empty($sPhone)){
      echo '<div class="alert alert-danger">Student Phone is Required</div>';
   }if(empty($sAddress)){
      echo '<div class="alert alert-danger">Student Address is Required</div>';
   }else{
      $result=$con->query("INSERT INTO tbl_student(studentname,sFatherName,sMotherName,sPhone,sAddress)VALUES('$studentname','$sFatherName','$sMotherName','$sPhone','$sAddress')");
      if($result){
         echo '<div class="alert alert-info">Successfully Inserted</div>';
      }else{echo '<div class="alert alert-danger">NOT Inserted</div>';}
   }

    }else{
      echo '<div class="alert alert-danger">ONLY FOR UPDATED</div>';
    }
        
}
function showInformation(){
   global $con;
   $result=$con->query("SELECT *FROM tbl_student");
   $alldata="";
   $alldata .="<table border='2' class='table'>
   <thead>
         <tr>
             <th>SL NO</th>
             <th>NAME</th>
             <th>Father</th>
             <th>MOTHER</th>
             <th>Phone</th>
             <th>Address</th>
             <th>ACTION</th>
         </tr> 
   <thead>";
   $sl=1;
   while($data=$result->fetch_assoc()){
      $alldata .="<tbody><tr>
            <td>".$sl."</td>
            <td>".$data['studentname']."</td>
            <td>".$data['sFatherName']."</td>
            <td>".$data['sMotherName']."</td>
            <td>".$data['sPhone']."</td>
            <td>".$data['sAddress']."</td>
            <td><button onclick='forupdatego(".$data['id'].")' name='edit' class='btn btn-sm btn-primary'>Edit</button>
            <button onclick='forDelete(".$data['id'].")' class='btn btn-sm btn-danger'>Delete</button></td>
      </tr></tbody>";
   $sl++;}

   $alldata .="</table>";
   echo $alldata;

}


function showforinput(){
	$id=$_POST['id'];
    global $con;
   $result=$con->query("SELECT *FROM tbl_student WHERE id='$id'"); 
   $row="";
   while($data=$result->fetch_assoc()){
      $row=$data;
   }
   echo json_encode($row);

}


function update(){
   global $con;
    $id = $_POST['id'];
   if(!empty($id)){
    $studentname    = $_POST['studentname'];
    $sFatherName  = $_POST['sFatherName'];
    $sMotherName  = $_POST['sMotherName'];
    $sPhone   = $_POST['sPhone'];
    $sAddress = $_POST['sAddress'];
    if(empty($studentname)){
      echo '<div class="alert alert-danger">Student Name is Required</div>';
   }if(empty($sFatherName)){
      echo '<div class="alert alert-danger">Student FatherName is Required</div>';
   }if(empty($sMotherName)){
      echo '<div class="alert alert-danger">Student MotherName is Required</div>';
   }if(empty($sPhone)){
      echo '<div class="alert alert-danger">Student Phone is Required</div>';
   }if(empty($sAddress)){
      echo '<div class="alert alert-danger">Student Address is Required</div>';
   }else{
      $result=$con->query("UPDATE tbl_student SET studentname='$studentname',sFatherName='$sFatherName',sMotherName='$sMotherName',sPhone='$sPhone',sAddress='$sAddress' WHERE id='$id'");
      if($result){
         echo '<div class="alert alert-info">Successfully Updated</div>';
      }else{echo '<div class="alert alert-danger">NOT UPdated</div>';}
   }
   }else{echo '<div class="alert alert-danger">Plese Select Student First:</div>';} 
   
}

function delete(){
   global $con;
    $id = $_POST['id'];
    $result=$con->query("DELETE FROM tbl_student WHERE id='$id'");
    if($result){
      echo '<div class="alert alert-danger">successfully Deleted</div>';
    }else{echo '<div class="alert alert-info">Not Delete Student Information</div>';}
}