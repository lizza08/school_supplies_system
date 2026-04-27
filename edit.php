<?php
include 'database.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM supplies WHERE id=$id");
$row = $result->fetch_assoc();

if(isset($_POST['update'])){

$item = $_POST['item'];
$category = $_POST['category'];
$amount_sold = $_POST['amount_sold'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$revenue = $_POST['revenue']; //Automate revenue


$sql = "UPDATE supplies
        SET item = '$item', category ='$category', 
        amount_sold = '$amount_sold', price ='$price', quantity = '$quantity', 
        revenue = '$revenue'
        WHERE id=$id";
$conn->query($sql);

header("Location: index.php");
}
?>

<h2>Edit Items</h2>

<form method="POST">

    Item:
    <input type="text" name="item" value="<?php echo $row['item']; ?>">
    <br><br>

    Category:
    <input type="text" name="category" value="<?php echo $row['category']; ?>">
    <br><br>

    Amount Sold:
    <input type="number" name="amount_sold" value="<?php echo $row['amount_sold']; ?>">
    <br><br>

    Price:
    <input type="number" name="price" value="<?php echo $row['price']; ?>">
    <br><br>
    
    Quantity:
    <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>">
    <br><br>

    Revenue:
    <input type="number" name="revenue" value="<?php echo $row['revenue']; ?>">
    <br><br>

    <button type="submit" name="update">Update</button>

</form>