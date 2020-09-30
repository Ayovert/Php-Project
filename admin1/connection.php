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
$product_type = "";
$product_name = "";
$code = "";
$product_size = "";
$product_desc = "";
$product_price= "";
$product_status = "";
$product_location = "";
$prodOrigin = "";
$last_added = date("Y-m-d H:i:s");
$product_id = 0;
$update = false;
$freeRate= 'unchecked';
$flatRate = 'checked';
$tracking_order_id = 0;
$current_Location ='';
$orderStatus = '';
$Remark ='';
$orderDate = date("Y-m-d H:i:s");

//$shipping_rate = '12';
//$subtotal_price = 0;
$cart_id = 1;



if (isset($_POST['save'])) {
  if(isset($_POST['product_type'])) {
    $product_type = $_POST['product_type'];
  }

    if(isset($_POST['product_name'])) {
        $product_name = $_POST['product_name'];
    }

    if(isset($_POST['code'])) {
      $code = $_POST['code'];
  }

    
    if(isset($_POST['product_size'])) {
      $product_size = $_POST['product_size'];
  }
    if(isset($_POST['product_desc'])) {
      $product_desc = $_POST['product_desc'];
  }
    if(isset($_POST['product_price'])) {
        $product_price = $_POST['product_price'];
    }
    if(isset($_POST['product_status'])) {
        $product_status = $_POST['product_status'];
    }
  
     $last_added = date("Y-m-d H:i:s");
  

      $sql = "INSERT INTO products ( product_type, product_name, code, product_size, product_desc, product_price, product_status, last_added) 
      VALUES ('$product_type','$product_name', '$code','$product_size', '$product_desc','$product_price', '$product_status', '$last_added')"; 
 $_SESSION['message'] = "Address saved"; 
 $mysqli->query($sql);
  header('Location: products.php');
}

// ...

if (isset($_POST['update'])) {
  $product_id = $_POST['product_id'];
  $product_type = $_POST['product_type'];
  $product_name = $_POST['product_name'];
  $code = $_POST['code'];
  $product_size = $_POST['product_size'];
  $product_desc = $_POST['product_desc'];
  $product_price = $_POST['product_price'];
  $product_status = $_POST['product_status'];
  $product_location = $_POST['product_location'];
  $last_added = date("Y-m-d H:i:s");
  

	$sql = "UPDATE products SET product_type='$product_type', product_name='$product_name', 
  code='$code', product_size='$product_size', 
  product_desc='$product_desc', product_price='$product_price', 
    product_status='$product_status', product_location='$product_location', last_added='$last_added' WHERE product_id = $product_id";
  $_SESSION['message'] = "Address updated!"; 
  $mysqli->query($sql);
  header('location: products.php');
 }

 
//$mysqli->close();
 
 if (isset($_GET['del'])) {
    $product_id = $_GET['del'];
    $sql= "DELETE FROM products WHERE product_id=$product_id";
    $_SESSION['message'] = "Address deleted!"; 
    $mysqli->query($sql);

    $sql ="ALTER TABLE products AUTO_INCREMENT=$product_id";
    $mysqli->query($sql);

    header('location: products.php');
  }

  if (isset($_GET['track'])) {
    $id = $_GET['track'];
    $orderDate = date("Y-m-d H:i:s");
    $sql = "SELECT * FROM tracking_order_history WHERE tracking_order_id=$id";
    $result = $mysqli->query($sql)or die($mysqli ->error);
    $rows = mysqli_num_rows($result);
        if($rows==1){
          header('location: track_history.php');
       }

      
    /*$sql= "INSERT INTO tracking_order_history (tracking_order_id, product_name)
    SELECT id, product_name FROM tracking_order WHERE id=$id AND  
    INSERT INTO tracking_order_history (orderDate) VALUES ('$orderDate') ";*/
   else{
    $sql = "SELECT * FROM tracking_order WHERE id=$id";
    $result = $mysqli->query($sql);

    if ($result = $mysqli->query($sql)) {
        $row = mysqli_fetch_array($result);

        $tracking_id = $row['id'];
        $product_name = $row['product_name'];
        $orderDate = date("Y-m-d H:i:s");
        $sql = " INSERT INTO tracking_order_history (tracking_order_id,  product_name, orderDate) 
        VALUES ($tracking_id,  '$product_name', '$orderDate')";
        $_SESSION['message'] = "Table Created!"; 
        $mysqli->query($sql);
    header('location: track_history.php');
   }
  }
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
if (isset($_POST['register'])) {
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
      $id= intval($_REQUEST['id']);
    $username = stripslashes($_REQUEST['username']); // removes backslashes
    $username = $mysqli -> real_escape_string($username); //escapes special characters in a string
    $password = stripslashes($_REQUEST['password']);
    $password = $mysqli -> real_escape_string($password);
    $flatRate = stripslashes($_REQUEST['flatRate']); // removes backslashes
    $flatRate = $mysqli -> real_escape_string($flatRate); //escapes special characters in a string
    $freeRate = stripslashes($_REQUEST['freeRate']); // removes backslashes
    $freeRate = $mysqli -> real_escape_string($freeRate); //escapes special characters in a string
    $cart_id = intval($_REQUEST['cart_id']); // removes backslashes
    $shipping_rate = intval($_REQUEST['shipping_rate']); // removes backslashes
    //Checking is user existing in the database or not
        $sql = "SELECT * FROM users WHERE username='$username' or email = '$username' and password='".md5($password)."'";
    $result = $mysqli->query($sql)or die($mysqli ->error);
    $rows = mysqli_num_rows($result);
        if($rows==1){
      if($username == ('admin')){
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $id;

        header("Location: ../admin1/products.php"); // Redirect user to index.php
      }else{
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $id;

        if(isset($_REQUEST['cart_id'])){
          $cart_id = intval(1); 
          $sql="SELECT * FROM shipping_rate WHERE id = $cart_id";
          $result = $mysqli->query($sql);

if ($result = $mysqli->query($sql) && (count((array)$result)) == 1){
  $row = mysqli_fetch_row($result);
  $flatRate = $row['status'];
  $freeRate = $row['status2'];
  $shipping_rate = $row['Rate'];
}
  $_SESSION['flatRate'] = $flatRate;
  $_SESSION['freeRate'] = $freeRate;
  $_SESSION['shipping_rate'] = $shipping_rate;
        }
      header("Location: ./products_test.php"); // Redirect user to index.php
      }
            }else{
        echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='sign-in.php'>Login</a></div>";
        }
    }
  }

  if (isset($_POST['order'])) {
    if (isset($_REQUEST['terms'])){
      
  
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

  $username = stripslashes($_REQUEST['username']);
  $username =  $mysqli -> real_escape_string($username);  

  $userId = stripslashes($_REQUEST['userId']);
  $userId =  $mysqli -> real_escape_string($userId);

  $product_code = stripslashes($_REQUEST['product_code']);
  $product_code =  $mysqli -> real_escape_string($product_code);

  $product_name = stripslashes($_REQUEST['product_name']);
  $product_name =  $mysqli -> real_escape_string($product_name);

  $product_price = stripslashes($_REQUEST['product_price']);
  $product_price =  $mysqli -> real_escape_string($product_price);

  $quantity = stripslashes($_REQUEST['quantity']);
  $quantity =  $mysqli -> real_escape_string($quantity);

  $payMethod = stripslashes($_REQUEST['payMethod']);
  $payMethod =  $mysqli -> real_escape_string($payMethod);

  $lastDate = date("Y-m-d H:i:s");

  //Checking is user existing in the database or not
  $sql = "SELECT email FROM users WHERE email='$email'";
  $result = $mysqli->query($sql)or die($mysqli ->error);
  $rows = mysqli_num_rows($result);
        if($rows==1){
          $sql = "UPDATE users SET FirstName='$FirstName', LastName='$LastName',
           CompanyName='$CompanyName', 
          Country='$Country', StreetAddress='$StreetAddress', PostCode='$PostCode', 
          TownCity='$TownCity', Phone='$Phone' WHERE email='$email'";
           $mysqli->query($sql);
      }

      $sql = "INSERT INTO tracking_order ( userId, product_id, product_name, product_price, quantity,
      prodDest, payMeth, lastDate) 
      VALUES ('$userId', '$product_code', '$product_name', '$product_price', '$quantity', '$TownCity', 
      '$payMethod', '$lastDate')";
      $mysqli ->query($sql);
      $result = $mysqli->query($sql);

      if(isset($_REQUEST['product_code'])){
        $product_code = $_REQUEST['product_code'];
        $sql= "SELECT product_location FROM products WHERE code='$product_code'";
       $mysqli ->query($sql);
       $result = $mysqli->query($sql);
       if ($result = $mysqli->query($sql)){
        $row = mysqli_fetch_array($result);
        $prodOrigin = $row['product_location'];
        $sql = "UPDATE tracking_order SET prodOrigin='$prodOrigin' WHERE product_id='$product_code'";
      $mysqli->query($sql);
      }
      
    }
      
  
  }else{
    echo "<div class='form'><h3>You have to agree to the terms and conditions.</h3><br/>
    Click here to <a href='login.php'>Login</a></div>";
  
    }
  }

  
  /*if (isset($_POST['checkout'])) {
    if (isset($_REQUEST['email'])){
      
  
  $FirstName = stripslashes($_REQUEST['FirstName']);
  $FirstName =  $mysqli -> real_escape_string($FirstName);
  
  
  
  //Checking is user existing in the database or not
  $sql = "SELECT email FROM users WHERE email='$email'";
  $result = $mysqli->query($sql)or die($mysqli ->error);
  $rows = mysqli_num_rows($result);
        if($rows==1){
          $sql = "UPDATE users SET FirstName='$FirstName', LastName='$LastName',
           CompanyName='$CompanyName', 
          Country='$Country', StreetAddress='$StreetAddress', PostCode='$PostCode', 
          TownCity='$TownCity', Phone='$Phone' WHERE email='$email'";
           $mysqli->query($sql);
          header('Location: ../track.php');
      }
  
  }else{
    echo "<div class='form'><h3>You are registered successfully.</h3><br/>
    Click here to <a href='login.php'>Login</a></div>";
  
    }
  }*/




  function isLoggedIn()
  {
    if (isset($_SESSION['username'])) {
      return true;
    }else{
      return false;
    }
  }

   if (isset($_GET['logout'])) {
session_destroy();
unset($_SESSION['username']);
header("location: ./myaccount.php");
}

//$mysqli->close();
?> 
