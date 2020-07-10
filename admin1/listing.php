<?php     include("connection.php");

/*if(isset($_POST['studentID'])){ 
    $sql= "DELETE FROM students WHERE studentID='".$_POST['studentID']."'";
    $result= $mysqli->query($sql);
}*/

 if(isset($_POST['submit'])) {

if(isset($_POST['studentName'])) {
    $studentName = $_POST['studentName'];
}
if(isset($_POST['studentLevel'])) {
    $studentLevel = $_POST['studentLevel'];
}
if(isset($_POST['studentAddress'])) {
    $studentAddress = $_POST['studentAddress'];
}
if(isset($_POST['phoneNumber'])) {
    $phoneNumber = $_POST['phoneNumber'];
}
 


 

$sql = "INSERT INTO students (studentName, studentLevel, studentAddress, phoneNumber)
VALUES ('$studentName','$studentLevel','$studentAddress','$phoneNumber')"; 

//$mysqli->query($sql);
 
//$sql = "SELECT * FROM students";
 if ($mysqli->query($sql)){
    header("Location: modified.php");
 }
 else{
     echo "Wrong Credentials";
 }
}

$mysqli->close();
//$result= $mysqli->query($sql);

 ?>
 
 
