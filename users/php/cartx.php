<?php
session_start();
include('connect_to_products.php');
$status="";
if (isset($_POST['product_id']) && $_POST['product_id']!=""){
$product_id = $_POST['product_id'];
$sql="SELECT * FROM products WHERE product_id=$product_id";
$result =$mysqli->query($sql);
$row = mysqli_fetch_assoc($result);

$product_id = $row['product_id'];
$product_name = $row['product_name'];
$product_price = $row['product_price'];
$product_status = $row['product_status'];
 
$cartArray = array(
 $code=>array(
 'product_id'=>$product_id,
 'product_name'=>$product_name,
 'product_price'=>$product_price,
 'quantity'=>1,
 'product_status'=>$product_status)
);
 
if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($product_id,$array_keys)) {
 $status = "<div class='box' style='color:red;'>
 Product is already added to your cart!</div>"; 
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
 }
 
 }
}
?>
