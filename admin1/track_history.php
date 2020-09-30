<?php
include("connection.php");


if (isset($_GET['delTrack'])) {
    $id = $_GET['delTrack'];
    $sql= "DELETE FROM tracking_order_history WHERE id=$id";
    $_SESSION['message'] = "Address deleted!"; 
    $mysqli->query($sql);

    $sql ="ALTER TABLE tracking_order_history AUTO_INCREMENT=$id";
    $mysqli->query($sql);

    header('location: track_history.php');
  }

  if (isset($_POST['saveTrack'])) {
    if(isset($_POST['tracking_order_id'])) {
      $tracking_order_id = $_POST['tracking_order_id'];
    }
    if(isset($_POST['orderStatus'])) {
        $orderStatus = $_POST['orderStatus'];
      }

      if(isset($_POST['current_Location'])) {
        $current_Location = $_POST['current_Location'];
      }

      if(isset($_POST['Remark'])) {
        $Remark = $_POST['Remark'];
      }

      $orderDate = date("Y-m-d H:i:s");
  
     
      $sql= "INSERT INTO tracking_order_history (tracking_history_id, product_name, current_Location, crnDate)
      SELECT tracking_history_id, product_name, current_Location, crnDate 
      FROM tracking_order_history WHERE id=$id";
      $mysqli->query($sql);
      $result = $mysqli->query($sql);

if ($result = $mysqli->query($sql)){
      $sql = "UPDATE tracking_order_history SET orderStatus='$orderStatus', current_Location='$current_Location', 
        Remark='$Remark',  orderDate='$orderDate' WHERE id=$id"; 
   $_SESSION['message'] = "Address saved"; 
   $mysqli->query($sql);
}
    header('Location: track_history.php');
  }
  
  // ...
  
  if (isset($_POST['updateTrack'])) {
    $id = $_POST['id'];
    $orderStatus = $_POST['orderStatus'];
    $current_Location = $_POST['current_Location'];
    $Remark = $_POST['Remark'];
    $orderDate = date("Y-m-d H:i:s");
  
    $sql = "UPDATE tracking_order_history SET orderStatus='$orderStatus', current_Location='$current_Location', 
    Remark='$Remark',  orderDate='$orderDate' WHERE id = $id"; 
$_SESSION['message'] = "Address saved"; 
$mysqli->query($sql);
header('Location: track_history.php');
   
   }
  

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Connect - Responsive Admin Dashboard Template</title>
        <?php include('styles.php'); ?>

        <!-- Styles -
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">

      
        Theme Styles 
        <link href="../../assets/css/connect.min.css" rel="stylesheet">
        <link href="../../assets/css/dark_theme.css" rel="stylesheet">
        <link href="../../assets/css/custom.css" rel="stylesheet">-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="auth-page sign-in">

    <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
       <?php endif ?>

     <?php 
                    
                
                    $sql = "SELECT * FROM tracking_order_history";
                    $result = $mysqli->query($sql);
                    
                    ?> 
    <table class="table table-striped" width="100%" border="1">
                        
                        <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Tracking ID</th>
                        <th scope='col'>Product Name</th>
                        <th scope='col'>Status</th>
                            
                        <th scope='col'>Location</th>
                            <th scope='col'>Date</th>
                            <th scope='col'>Remark</th>
                
                            <th scope='col'>Delete</th>
                            <th scope='col'>Edit</th>
                            
                
                        </tr>
               
                        <!--<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1"> -->
                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                            <th scope='col'>
                                    <?php echo $row[0]; ?>
                                </th>

                                <td>
                                    <?php echo $row[1]; ?>
                                </td>
                                
                               
                                <td>
                                    <?php echo $row[2]; ?>
                                </td>

                                <td>
                                    <?php echo $row[3]; ?>
                                </td>
                        
                                
                                <td>
                                    <?php echo $row[4]; ?>
                                </td>
                                <td>
                                    <?php echo $row[5]; ?>
                                </td>

                                <td>
                                    <?php echo $row[6]; ?>
                                </td>
                                
                                <td><a href="track_history.php?editTrack=<?php echo $row['id'];?>" 
                onclick="return confirm('Are You Sure')">Edit
                    </a></td>
                    <td><a href="track_history.php?delTrack=<?php echo $row['id']; ?>" 
                    onclick="return confirm('Are You Sure')">Delete
                    </a> </td>
                
                            </tr>
                    <?php
                        }
                    
                    ?>
                  </table>
                  <button class="btn" type="button" style="background: #556B2F;" ><a href="student.php">Go to Users</a></button>
                  <button class="btn" type="button" style="background: #556B2F;" ><a href="products.php">Go to Products</a></button>
                  <button class="btn" type="button" style="background: #556B2F;" ><a href="index.php">home</a></button>
                  <button class="btn" type="button" style="background: #556B2F;" ><a href="track.php">Tracking Information</a></button>

        
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
                <span class='sr-only'>Loading...</span>
            </div>
        </div>
        <div class="connect-container align-content-stretch d-flex flex-wrap">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-5">
                  <div class="auth-form">
                      <div class="row">
                          <div class="col">
                              <div class="logo-box"><a href="#" class="logo-text">Connect</a></div>
                              <?php
   if (isset($_GET['editTrack'])) {
    $id = $_GET['editTrack'];
    $update = true;
    $sql = "SELECT * FROM tracking_order_history WHERE id=$id";
    $result = $mysqli->query($sql);

    if ($result = $mysqli->query($sql)) {
        $row = mysqli_fetch_array($result);

        $id = $row['id'];
        $tracking_order_id = $row['tracking_order_id'];
        $orderStatus = $row['orderStatus'];
        $current_Location = $row['current_Location'];
        $Remark = $row['Remark'];
        $orderDate = date("Y-m-d H:i:s");            
    }
}
?>
                              
<?php if ($update == true): ?>                             
<form action="" method="post">
  <?php echo  $tracking_order_id; ?>
  <?php echo  $id; ?>

  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <input type="hidden" name="orderDate" value="<?php echo $orderDate; ?>">

  
<div class="form-group">
<label>Order Status</label>
<input type="text" class="form-control" name="orderStatus" value="<?php echo  $orderStatus; ?>">
</div>

<div class="form-group">
<label>Current Location</label>
<input type="text" class="form-control" name="current_Location" value="<?php echo $current_Location; ?>">
</div>
<div class="form-group">
<label>Remark</label>
<textarea  class="form-control" cols="50" rows="7" name="Remark" value="<?php echo $Remark; ?>" required="required" ></textarea>

</div>   

<div class="form-group">
<button class="btn btn-primary btn-block btn-submit" type="submit" name="updateTrack" style="background: #556B2F;" >update</button>
<!--?php else: ?>
<button class="btn btn-primary btn-block btn-submit" type="submit" name="saveTrack" >Save</button>-->
<?php endif ?>
</div>                            
    </form>
                               
                                </div>
                            </div>

                            
                        </div>

                       
                    </div>
                    <div class="col-lg-6 d-none d-lg-block d-xl-block">
                        <div class="auth-image"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('events.php'); ?>
        <!-- Javascripts -
        <script src="../../assets/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="../../assets/plugins/bootstrap/popper.min.js"></script>
        <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../../assets/js/connect.min.js"></script>
        <script src="../../assets/js/custom.js"></script>-->
    </body>
</html>