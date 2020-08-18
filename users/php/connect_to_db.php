<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trackingsystem";

// Create connection
$mysqli= new mysqli($servername,$username,$password,$dbname);

//$mysqli -> query($sql);

if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected successfully";

// initialize variables
$email = "";
$username = "";
$password = "";
$FirstName= "";
$LastName= "";
$CompanyName="";
$Country="";
$StreetAddress="";
$PostCode="";
$TownCity="";
$Phone="";
$crnDate = date("Y-m-d H:i:s");
$id = 0;
$update = false;



//...

if (isset($_POST['save'])) {
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if(isset($_POST['username'])) {
        $username = $_POST['username'];
    }
    if(isset($_POST['password'])) {
        $password = $_POST['password'];
    }
  
      $crnDate = date("Y-m-d H:i:s");
  

  $sql ="INSERT INTO users (email, username, password, crnDate) 
  VALUES ('$email','$username','".md5($password)."','$crnDate')"; 
 $_SESSION['message'] = "Address saved"; 
 $mysqli->query($sql);
  header('location: student.php');
}

// ...

if (isset($_POST['update'])) {
	$id = $_POST['id'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $crnDate = date("Y-m-d H:i:s");
  

	$sql = "UPDATE users SET email='$email', username='$username', 
    password='".md5($password)."', crnDate='$crnDate' WHERE id=$id";
  $_SESSION['message'] = "Address updated!"; 
  $mysqli->query($sql);
  header('location: student.php');
 }
 
 if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $sql= "DELETE FROM users WHERE id=$id";
    $_SESSION['message'] = "Address deleted!"; 
    $mysqli->query($sql);
    header('location: student.php');
  }

  if (isset($_POST['submit'])) {
  if (isset($_REQUEST['username'])){
    $email = stripslashes($_REQUEST['email']);
$email =  $mysqli -> real_escape_string($email);
$username = stripslashes($_REQUEST['username']); // removes backslashes
$username = $mysqli -> real_escape_string($username); //escapes special characters in a string
$password = stripslashes($_REQUEST['password']);
$password = $mysqli -> real_escape_string($password);

$crnDate = date("Y-m-d H:i:s");
    $sql = "INSERT INTO users ( email, username, password, crnDate) 
    VALUES ('$email','$username', '".md5($password)."','$crnDate')";
   
    $result = $mysqli->query($sql);
    if($result){
        echo "<div class='form'><h3>You are registered successfully.</h3><br/>
        Click here to <a href='login.php'>Login</a></div>";
        header('Location: ./myaccount.php');
    }
}else{
  echo "<div class='form'><h3>You are registered successfully.</h3><br/>
  Click here to <a href='login.php'>Login</a></div>";

  }
}

if (isset($_POST['login'])) {
if ((isset($_POST['username'])) ){
		
  $username = stripslashes($_REQUEST['username']); // removes backslashes
  $username = $mysqli -> real_escape_string($username); //escapes special characters in a string
  $password = stripslashes($_REQUEST['password']);
  $password = $mysqli -> real_escape_string($password);
  
//Checking is user existing in the database or not
      $sql = "SELECT * FROM users WHERE username='$username' or email = '$username' and password='".md5($password)."'";
  $result = $mysqli->query($sql)or die($mysqli ->error);
  $rows = mysqli_num_rows($result);
      if($rows==1){
    if($username == ('admin')){
      $_SESSION['username'] = $username;
      header("Location: ../admin1/products.php"); // Redirect user to index.php
    }else{
      $_SESSION['username'] = $username;
    header("Location: ./products_test.php"); // Redirect user to index.php
    }
          }else{
      echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='sign-in.php'>Login</a></div>";
      }
  }
}

if (isset($_POST['order'])) {
  if (isset($_REQUEST['email'])){
    

$FirstName = stripslashes($_REQUEST['FirstName']);
$FirstName =  $mysqli -> real_escape_string($FirstName);

$LastName = stripslashes($_REQUEST['LastName']);
$LastName =  $mysqli -> real_escape_string($LastName);

$CompanyName = stripslashes($_REQUEST['CompanyName']);
$CompanyName =  $mysqli -> real_escape_string($CompanyName);

$Country = stripslashes($_REQUEST['Country']);
$Country =  $mysqli -> real_escape_string($Country);

$StreetAddress = stripslashes($_REQUEST['StreetAddress']);
$StreetAddress =  $mysqli -> real_escape_string($StreetAddress);

$PostCode = stripslashes($_REQUEST['PostCode']);
$PostCode =  $mysqli -> real_escape_string($PostCode);

$TownCity = stripslashes($_REQUEST['TownCity']);
$TownCity =  $mysqli -> real_escape_string($TownCity);

$Phone = stripslashes($_REQUEST['Phone']);
$Phone =  $mysqli -> real_escape_string($Phone);

$email = stripslashes($_REQUEST['email']);
$email =  $mysqli -> real_escape_string($email);

$crnDate = date("Y-m-d H:i:s");
//Checking is user existing in the database or not
$sql = "SELECT email FROM users WHERE email='$email'";
$result = $mysqli->query($sql)or die($mysqli ->error);
$rows = mysqli_num_rows($result);
      if($rows==1){
        $sql = "UPDATE users SET FirstName='$FirstName', LastName='$LastName',
         CompanyName='$CompanyName', 
        Country='$Country', StreetAddress='$StreetAddress', PostCode='$PostCode', 
        TownCity='$TownCity', Phone='$Phone', crnDate='$crnDate' WHERE email='$email'";
         $mysqli->query($sql);
        header('Location: ../track.php');
    }

}else{
  echo "<div class='form'><h3>You are registered successfully.</h3><br/>
  Click here to <a href='login.php'>Login</a></div>";

  }
}

function isLoggedIn()
{
	if (isset($_SESSION['username'])) {
		return true;
	}else{
		return false;
	}
}

?> 