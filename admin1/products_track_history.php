<?php include("connect_track.php"); ?>
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
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
                <span class='sr-only'>Loading...</span>
            </div>
        </div>
        <div class="connect-container align-content-stretch d-flex flex-wrap">
            <div class="container-fluid">
            <?php
           //include('connection.php');
              if (isset($_POST['id'])) {
                  $sql = "DELETE FROM tracking_order_history WHERE id=$id";
                  $result = $mysqli->query($sql);
              }
    

            $sql = "SELECT * FROM tracking_order_history";
         
            $result = $mysqli->query($sql);
            //if ($result = $mysqli->query($sql)) {
         
         
            ?>
    <table class="table table-striped" width="100%" border="1">
        <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Tracking ID</th>
            <th scope='col'>Product Name</th>
            <th scope='col'>Current Location</th>
            <th scope='col'>Date/Time</th>
           

            <th scope='col'>Delete</th>
            <th scope='col'>Edit</th>
            <th scope='col'>Track</th>

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
               



                <td><a href="products_track_history.php?edit=<?php echo $row['id'];?>"
                 onclick="return confirm('Are You Sure')">Edit
                    </a></td>
                    <td><a href="connect_track.php?del_history=<?php echo $row['id']; ?>" 
                    onclick="return confirm('Are You Sure')">Delete
                    </a> </td>
                    <td><a href="connect_track.php?status=<?php echo $row['id']; ?>" 
                    onclick="return confirm('Are You Sure')">Update Status
                    </a> </td>
                  
            </tr>
    <?php
        }
    ?>
</table>
<button class="btn" type="submit" style="background: #556B2F;" ><a href="student.php">Go to Users</a></button>
<button class="btn" type="submit" style="background: #556B2F;" ><a href="products.php">Go to products</a></button>
<button class="btn" type="submit" style="background: #556B2F;" ><a href="index.php">home</a></button>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="auth-form">
                            <div class="row">
                                <div class="col">
                                    <div class="logo-box"><a href="#" class="logo-text">Connect</a></div>
                                    <form method="post" action="connect_track.php">
                                    <?php
                                    if (isset($_GET['edit'])) {
               $id = $_GET['edit'];
               $update = true;
               $sql = "SELECT * FROM id WHERE id=$id";
               $result = $mysqli->query($sql);
               
               if ($result = $mysqli->query($sql) && (count((array)$result)) == 1) {
                   $row = mysqli_fetch_row($result);
                   $tracking_history_id = $row['tracking_history_id'];
                   $product_name = $row['product_name'];
                   $current_Location = $row['current_Location'];
                   $crnDate = date("Y-m-d H:i:s");
  
                     
                        /*
                      if(isset($row['current_Location'])) {
                          $current_Location = $row['current_Location'];
                     }
                          if(isset($_POST['product_name'])) {
                              $product_name = $_POST['product_name'];
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
                        
                           $last_added = date("Y-m-d H:i:s");*/
                      } 
                    }
               ?>

                            <?php echo $id; ?>
                            <?php echo $tracking_history_id; ?>
                           <?php echo  $product_name; ?>

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
			<label>Tracking ID</label>
			<input type="text" class="form-control" name="tracking_history_id" value="<?php echo $tracking_history_id; ?>">
		</div>

        <div class="form-group">
			<label>Product Name</label>
			<input type="text" class="form-control" name="product_name" value="<?php echo $product_name; ?>">
		</div>

		<div class="form-group">
			<label>Current Location</label>
			<input type="text" class="form-control" name="current_Location" value="<?php echo $current_Location; ?>">
		</div>
	
        <input type="hidden" name="crnDate" value="<?php echo $crnDate; ?>">
       
        
		<div class="form-group">
        <?php if ($update == true): ?>
	<button class="btn btn-primary btn-block btn-submit" type="submit" name="update_history" style="background: #556B2F;" >Update</button>
<?php else: ?>
	<button class="btn btn-primary btn-block btn-submit" type="submit" name="save_history" >Save</button>
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
      
        

       
        
        
        <!-- Javascripts -->
        <?php include('events.php'); 
        ?>
    </body>
</html>
