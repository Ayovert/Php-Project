<!DOCTYPE html>
<html lang="en">
<?php include('connectionx.php');
    if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $mysqli->query($sql);

    if ($result = $mysqli->query($sql) && (count($result)) == 1) {
        $row = mysqli_fetch_row($result);
        $email = $row['email'];
        $username = $row['username'];
        $password = $row['password'];
        $crnDate = date("Y-m-d H:i:s");
    }
}
//$mysqli->close();
?>
	


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
        <?php include('styles.php'); 
        ?>

        
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
   //         include('connectionx.php');
    if (isset($_POST['id'])) {
        $sql = "DELETE FROM users WHERE id=$id";
        $result = $mysqli->query($sql);
    }
    

    $sql = "SELECT * FROM users";

    $result = $mysqli->query($sql);
    print_r($sql);
    //if ($result = $mysqli->query($sql)) {


    ?>
    <table width="100%" border="1">
        <tr>
            <th>Email Address</th>
            <th>Username</th>
            <th>Password</th>
            <th>Date/Time</th>

            <th>Delete</th>
            <th>Edit</th>

        </tr>

        <!--<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1"> -->
        <?php while ($row=mysqli_fetch_array($result)) { ?>
            <tr>
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
                    <a href="student.php?edit=<?php echo $row['id']?>" onclick="return confirm('Are You Sure')">Edit
                    </a></td>
                    <td><a href="connectionx.php?del=<?php echo $row['id']; ?>" onclick="return confirm('Are You Sure')">Delete
                    </a> </td>
            </tr>
    <?php
        }
        
   // }

    ?>
</table>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="auth-form">
                            <div class="row">
                                <div class="col">
                                    <div class="logo-box"><a href="#" class="logo-text">Connect</a></div>
                                    <form method="post" action="connectionx.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">

		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
			<label>Password</label>
			<input type="password" name="password" value="<?php echo $password; ?>">
        </div>
        
		<div class="input-group">
        <?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="submit" >Save</button>
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
</div>
</div>
        

       
        
        
        <!-- Javascripts -->
        <?php include('events.php'); ?>
    </body>
</html>
