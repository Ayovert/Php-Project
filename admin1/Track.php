<?php
include("connection.php");



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
    
    <table class="table table-striped" width="100%" border="1">
                        <tr>
                        <th scope='col'>Tracking ID</th>
        
                        <th scope='col'>user ID</th>
                        <th scope='col'>product ID</th>
                            
                            <th scope='col'>Name</th>
                            <th scope='col'>Price</th>
                            <th scope='col'>Quantity</th>
                            <th scope='col'>Origin</th>
                            <th scope='col'>Destination</th>
                            <th scope='col'>Payment Method</th>
                            <th scope='col'>Date</th>
                
                            <th scope='col'>Delete</th>
                            <th scope='col'>Edit</th>
                            <th scope='col'>Track</th>
                
                        </tr>
                <?php if(isset($_POST['search'])){
                    if (isset($_POST['id'])) {
                        $sql = "DELETE FROM tracking_order WHERE id=$id";
                        $result = $mysqli->query($sql);
                    }
                    $sql ="ALTER TABLE tracking_order AUTO_INCREMENT=$id";
                    $result = $mysqli->query($sql);
                
                    $sql = "SELECT * FROM tracking_order";
                    $result = $mysqli->query($sql);

    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $sql = "SELECT * FROM tracking_order WHERE 
    id LIKE '%".$valueToSearch."%'";
    $result = $mysqli->query($sql);
    


?>
                        <!--<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1"> -->
                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                            <th scope='col'>
                                    <?php echo $row['id']; ?>
                                </th>

                                <th scope='col'>
                                    <?php echo $row['userId']; ?>
                                </th>
                            

                                <th scope='col'>
                                    <?php echo $row['product_id']; ?>
                                </th>

                                

                                <td>
                                    <?php echo $row['product_name']; ?>
                                </td>
                                
                               
                                <td>
                                    <?php echo $row['product_price']; ?>
                                </td>
                        
                                <td>
                                    <?php echo $row['quantity']; ?>
                                </td>
                                <td>
                                    <?php echo $row['prodOrigin']; ?>
                                </td>
                                <td>
                                    <?php echo $row['prodDest']; ?>
                                </td>
                              
                                <td>
                                    <?php echo $row['payMeth']; ?>
                                </td>
                                <td>
                                    <?php echo $row['lastDate']; ?>
                                </td>

                                <td><a href="products.php?edit=<?php echo $row['id'];?>" 
                onclick="return confirm('Are You Sure')">Edit
                    </a></td>
                    <td><a href="connection.php?del=<?php echo $row['id']; ?>" 
                    onclick="return confirm('Are You Sure')">Delete
                    </a> </td>
                    <td><a href="connection.php?track=<?php echo $row['id'];?>"
                     onclick="return confirm('Are You Sure')">Track
                    </a></td>
                
                
                            </tr>
                    <?php
                        }
                    }
                        else {
                            $sql = "SELECT * FROM products";
                            $result = $mysqli->query($sql);
                        }
                    ?>
                  </table>
                  <button class="btn" type="submit" style="background: #556B2F;" ><a href="student.php">Go to Users</a></button>
                  <button class="btn" type="submit" style="background: #556B2F;" ><a href="products.php">Go to Products</a></button>
<button class="btn" type="submit" style="background: #556B2F;" ><a href="index.php">home</a></button>

        
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
                              
                              <form action="track.php" method="post">


                                    <div class="form-group">
                                        <input type="text" class="form-control" name= "valueToSearch" 
                                        placeholder="Enter your Order ID:" required>
                                    </div>
                                   
                                    <input type="submit" value="Track" name="search" 
                                    class="btn btn-primary btn-block btn-submit"/>
                                   
                                    <div class="auth-options">
                                        <div class="custom-control custom-checkbox form-group">
                                            <input type="checkbox" class="custom-control-input" 
                                            id="exampleCheck1">
                                            <label class="custom-control-label" 
                                            for="exampleCheck1">Remember me</label>
                                        </div>
                                        <a href="#" class="forgot-link">Forgot Password?</a>
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