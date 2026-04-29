<?php
include 'database.php'; 

if(isset($_POST['submit'])){

$item = $_POST['item']; //fuse item and category
$category = $_POST['category'];
$amount_sold = $_POST['amount_sold']; //Automate amount
$price = $_POST['price'];
$quantity = $_POST['quantity']; //Automate quantity
$revenue = $_POST['revenue']; //Automate revenue


$sql = "INSERT INTO supplies (item, category, amount_sold, price, quantity, revenue)
        VALUES ('$item', '$category', '$amount_sold' , '$price', '$quantity', '$revenue')";

$conn->query($sql);

header("Location: index.php");
}
?>

<h2>Add Item</h2>

<form method="POST">

    Item:
    <input type="text" name="item" required>
    <br><br>

    Category:
    <input type="text" name="category" required>
    <br><br>

    Quantity:
    <input type="number" name="quantity" required>
    <br><br>

    Price:
    <input type="number" name="price" required>
    <br><br>

    Amount Sold:
    <input type="number" name="amount_sold" required>
    <br><br>

    Revenue:
    <input type="number" name="revenue" required>
    <br><br>

    <button type="submit" name="submit">Save</button>

</form>