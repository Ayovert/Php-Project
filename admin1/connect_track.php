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
$product_name = "";
$product_desc = "";
$product_size = "";
$prodLocation ="";
$lastDate = date("Y-m-d H:i:s");
$item_status = "";
$tracking_id = 0;
$id = 0;
$tracking_history_id = 0;
$current_Location="current_Location";
$crnDate = date("Y-m-d H:i:s");
$update = false;

if (isset($_POST['save'])) {

    if(isset($_POST['product_name'])) {
        $product_name = $_POST['product_name'];
    }

    if(isset($_POST['product_desc'])) {
      $product_desc = $_POST['product_desc'];
  }
    if(isset($_POST['product_size'])) {
      $product_size = $_POST['product_size'];
  }

  if(isset($_POST['prodLocation'])) {
    $prodLocation = $_POST['prodLocation'];
}
 
  
     $lastDate = date("Y-m-d H:i:s");

     if(isset($_POST['item_status'])) {
      $item_status = $_POST['item_status'];
  }
  

      $sql = "INSERT INTO products ( product_name, product_desc, product_size,
       prodLocation, lastDate, item_status) 
      VALUES ($product_name','$product_desc',  '$product_size', '$prodLocation',
       '$lastDate', '$item_status')"; 
 $_SESSION['message'] = "Address saved"; 
 $mysqli->query($sql);
  header('Location: products_track.php');
}

if (isset($_POST['save_history'])) {

  if(isset($_POST['tracking_id'])) {
    $tracking_id = $_POST['tracking_id'];
}

if(isset($_POST['product_name'])) {
  $product_name = $_POST['product_name'];
}
if(isset($_POST['current_Location'])) {
  $current_Location = $_POST['current_Location'];
}



 $crnDate = date("Y-m-d H:i:s");

 

  
    $sql= "INSERT INTO tracking_order (tracking_history_id, product_name, current_Location, crnDate)
    VALUES ('$tracking_history_id','$product_name', '$current_Location',
     '$crnDate')"; 
$_SESSION['message'] = "Address saved"; 
$mysqli->query($sql);
header('Location: products_track_history.php');
}
// ...

if (isset($_POST['update'])) {
  $tracking_id = $_POST['tracking_id'];
  $product_name = $_POST['product_name'];
  $product_desc = $_POST['product_desc'];
  $product_size = $_POST['product_size'];
  $prodLocation = $_POST['prodLocation'];
  $lastDate = date("Y-m-d H:i:s");
  $item_status = $_POST['item_status'];
  

	$sql = "UPDATE tracking_order SET product_name='$product_name', product_desc='$product_desc',
  product_size='$product_size',  prodLocation='$prodLocation', 
    lastDate='$lastDate',item_status='$item_status'
     WHERE tracking_id=$tracking_id";
  $_SESSION['message'] = "Address updated!"; 
  $mysqli->query($sql);
  header('location: products_track.php');
 }

 if (isset($_POST['update_history'])) {
  $id = $_POST['id'];
  $tracking_history_id = $_POST['tracking_history_id'];
  $product_name = $_POST['product_name'];
  $current_Location = $_POST['current_Location'];
 
  $crnDate = date("Y-m-d H:i:s");
  $item_status = $_POST['item_status'];
  

	$sql = "UPDATE tracking_order_history SET tracking_history_id = '$tracking_history_id', product_name='$product_name', 
  current_Location='$current_Location', crnDate='$crnDate'
     WHERE id=$id";
  $_SESSION['message'] = "Address updated!"; 
  $mysqli->query($sql);
  header('location: products_track_history.php');
 }

 
//$mysqli->close();
 
 if (isset($_GET['del'])) {
    $tracking_id = $_GET['del'];
    $sql= "DELETE FROM tracking_order WHERE tracking_id=$tracking_id";
    $_SESSION['message'] = "Address deleted!"; 
    $mysqli->query($sql);
    header('location: products_track.php');
  }

  
 if (isset($_GET['del_history'])) {
  $id = $_GET['del_history'];
  $sql= "DELETE FROM tracking_order_history WHERE id=$id";
  $_SESSION['message'] = "Address deleted!"; 
  $mysqli->query($sql);
  header('location: products_track_history.php');
}


  if (isset($_GET['status'])) {

    $id = $_GET['status'];

    if(isset($_POST['tracking_history_id'])) {
      $tracking_history_id = $_POST['tracking_history_id'];
  }

  if(isset($_POST['product_name'])) {
    $product_name = $_POST['product_name'];
}
  if(isset($_POST['current_Location'])) {
    $current_Location = $_POST['current_Location'];
}



   $crnDate = date("Y-m-d H:i:s");

   

    
      $sql= "INSERT INTO tracking_order_history (tracking_history_id, product_name, current_Location, crnDate)
      SELECT tracking_history_id, product_name, current_Location, crnDate 
      FROM tracking_order_history WHERE id=$id";
     $_SESSION['message'] = "Address saved"; 
    $mysqli->query($sql);
    header('location: products_track_history.php');
  }

//edit this
  if (isset($_GET['track_history'])) {
    $tracking_id = $_GET['track_history'];


    $sql= "INSERT INTO tracking_order_history (tracking_history_id, product_name, current_Location, crnDate)
    SELECT tracking_id, product_name, prodLocation, lastDate FROM tracking_order WHERE tracking_id=$tracking_id";
    
    $_SESSION['message'] = "Table Created!"; 
    $mysqli->query($sql);
    header('location: products_track_history.php');
  }


  if (isset($_POST['submit'])) {
  if (isset($_REQUEST['product_name'])){
    $product_type = stripslashes($_REQUEST['product_type']);
    $product_type =  $mysqli -> real_escape_string($product_type);
    $product_name = stripslashes($_REQUEST['product_name']);
$product_name =  $mysqli -> real_escape_string($product_name);
$product_size = stripslashes($_REQUEST['product_size']);
$product_size =  $mysqli -> real_escape_string($product_size);
$product_desc = stripslashes($_REQUEST['product_desc']);
$product_desc =  $mysqli -> real_escape_string($product_desc);
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
