<?php include("connection.php");?>
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
    if (isset($_POST['product_id'])) {
        $sql = "DELETE FROM products WHERE product_id=$product_id";
        $result = $mysqli->query($sql);
    }
    $sql ="ALTER TABLE products AUTO_INCREMENT=$product_id";
    $result = $mysqli->query($sql);

    $sql = "SELECT * FROM products";
    $result = $mysqli->query($sql);
    //if ($result = $mysqli->query($sql)) {


    ?>
    <table class="table table-striped" width="100%" border="1">
        <tr>
            <th scope='col'>Product ID</th>
            <th scope='col'>Type</th>
            <th scope='col'>Name</th>
            <th scope='col'>Code</th>
            <th scope='col'>Size</th>
            <th scope='col'>Description</th>
            <th scope='col'>Price</th>
            <th scope='col'>Status</th>
            <th scope='col'>Location</th>
            <th scope='col'>Date</th>

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
                <td>
                    <?php echo $row[5]; ?>
                </td>
                <td>
                    <?php echo $row[6]; ?>
                </td>
                <td>
                    <?php echo $row[7]; ?>
                </td>

                <td>
                    <?php echo $row[8]; ?>
                </td>
                <td>
                    <?php echo $row[9]; ?>
                </td>




                <td><a href="products.php?edit=<?php echo $row['product_id'];?>" 
                onclick="return confirm('Are You Sure')">Edit
                    </a></td>
                    <td><a href="connection.php?del=<?php echo $row['product_id']; ?>" 
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
                <div class="row">
                    <div class="col-lg-5">
                        <div class="auth-form">
                            <div class="row">
                                <div class="col">
                               
                            <div class="logo-box"><a href="#" class="logo-text">Connect</a></div>
                            <?php
   if (isset($_GET['edit'])) {
    $product_id = $_GET['edit'];
    $update = true;
    $sql = "SELECT * FROM products WHERE product_id=$product_id";
    $result = $mysqli->query($sql);

    if ($result = $mysqli->query($sql)) {
        $row = mysqli_fetch_array($result);

        $product_type = $row['product_type'];
        $product_name = $row['product_name'];
        $code = $row['code'];
        $product_size = $row['product_size'];
        $product_desc = $row['product_desc'];
        $product_price = $row['product_price'];
        $product_status = $row['product_status'];
        $product_location = $row['product_location'];
        $last_added = date("Y-m-d H:i:s");
    
        
 
 

      /*  if(isset($row['product_type'])) {
            $product_type = $row['product_type'];
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
                            <form method="post" action="connection.php">
                            

                           <?php echo $product_id; ?>
                           <?php echo  $product_type; ?>
                           
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
        <div class="form-group">
			<label>Product Type</label>
			<input type="text" class="form-control" name="product_type" value="<?php echo  $product_type; ?>">
		</div>

		<div class="form-group">
			<label>Product Name</label>
			<input type="text" class="form-control" name="product_name" value="<?php echo $product_name; ?>">
		</div>
        <div class="form-group">
			<label>Code</label>
			<input type="text" class="form-control" name="code" value="<?php echo $code; ?>">
		</div>
        <div class="form-group">
			<label>Product Size</label>
			<input type="text" class="form-control" name="product_size" value="<?php echo $product_size; ?>" >
		</div>
        <div class="form-group">
			<label>Product Description</label>
			<input type="text" class="form-control" name="product_desc" value="<?php echo $product_desc; ?>">
		</div>
		<div class="form-group">
			<label>Product Price</label>
			<input type="text" class="form-control" name="product_price" value="<?php echo $product_price; ?>">
        </div>
        <div class="form-group">
			<label>Product Status</label>
			<input type="text" class="form-control" name="product_status" value="<?php echo $product_status; ?>">
        </div>

        <div class="form-group">
			<label>Product Location</label>
			<input type="text" class="form-control" name="product_location" value="<?php echo $product_location; ?>">
        </div>
        
        
		<div class="form-group">
        <?php if ($update == true): ?>
	<button class="btn btn-primary btn-block btn-submit" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn btn-primary btn-block btn-submit" type="submit" name="save" >Save</button>
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
