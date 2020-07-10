<?php

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

$product_type = "";
$product_name = "";
$product_price= "";
$product_status = "";
$last_added = date("Y-m-d H:i:s");
$product_id = 0;
$update = false;

if (isset($_POST['save'])) {
  if(isset($_POST['product_type'])) {
    $product_type = $_POST['product_type'];
  }

    if(isset($_POST['product_name'])) {
        $product_name = $_POST['product_name'];
    }
    if(isset($_POST['product_price'])) {
        $product_price = $_POST['product_price'];
    }
    if(isset($_POST['product_status'])) {
        $product_status = $_POST['product_status'];
    }
  
     $last_added = date("Y-m-d H:i:s");
  

      $sql = "INSERT INTO products ( product_type, product_name, product_price, product_status, last_added) 
      VALUES ('$product_type','$product_name','$product_price', '$product_status', '$last_added')"; 
 $_SESSION['message'] = "Address saved"; 
 $mysqli->query($sql);
  header('Location: products.php');
}
// ...

if (isset($_POST['update'])) {
	$product_id = $_POST['product_id'];
  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_status = $_POST['product_status'];
   // $crnDate = date("Y-m-d H:i:s");
  

	$sql = "UPDATE products SET product_name='$product_name', product_price='$product_price', 
    product_status='$product_status' WHERE product_id=$product_id";
  $_SESSION['message'] = "Address updated!"; 
  $mysqli->query($sql);
  header('location: products.php');
 }
 
 if (isset($_GET['del'])) {
    $product_id = $_GET['del'];
    $sql= "DELETE FROM products WHERE product_id=$product_id";
    $_SESSION['message'] = "Address deleted!"; 
    $mysqli->query($sql);
    header('location: products.php');
  }

  if (isset($_POST['submit'])) {
  if (isset($_REQUEST['product_name'])){
    $product_name = stripslashes($_REQUEST['product_name']);
$product_name =  $mysqli -> real_escape_string($product_name);
$product_price = stripslashes($_REQUEST['product_price']); // removes backslashes
$product_price = $mysqli -> real_escape_string($product_price); //escapes special characters in a string
$product_status = stripslashes($_REQUEST['product_status']);
$product_status = $mysqli -> real_escape_string($product_status);

//$crnDate = date("Y-m-d H:i:s");
    $sql = "INSERT INTO products ( product_name, product_price, product_status) 
    VALUES ('$product_name','$product_price', '$product_status')";
    $result = $mysqli->query($sql);
    if($result){
        echo "<div class='form'><h3>You are registered successfully.</h3><br/>
        Click here to <a href='login.php'>Login</a></div>";
        header('Location: products.php');
    }
}else{
  echo "<div class='form'><h3>You are registered successfully.</h3><br/>
  Click here to <a href='login.php'>Login</a></div>";

  }
}

if (isset($_POST['login'])) {
if (isset($_POST['username'])){
		
  $username = stripslashes($_REQUEST['username']); // removes backslashes
  $username = $mysqli -> real_escape_string($username); //escapes special characters in a string
  $password = stripslashes($_REQUEST['password']);
  $password = $mysqli -> real_escape_string($password);
  
//Checking is user existing in the database or not
      $sql = "SELECT * FROM users WHERE username='$username' and password='".md5($password)."'";
  $result = $mysqli->query($sql)or die($mysqli -> error);
  $rows = mysqli_num_rows($result);
      if($rows==1){
    $_SESSION['username'] = $username;
    header("Location: index.php"); // Redirect user to index.php
          }else{
      echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='sign-in.php'>Login</a></div>";
      }
  }
}
//$mysqli->close();
?> 
