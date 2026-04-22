<?php
include 'database.php';

$result = $conn->query("SELECT * FROM supplies");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Supplies</title>
    <style> 
        html {
            background-image: url(Assets/2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            overflow: auto;
        }
        table {   
            margin-left: auto; 
            margin-right: auto; 
        }  
    </style>
</head>

<body>

    <h2>Supplieshahahaha</h2>

    <a href="create.php">Add New Item</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Item</th>
            <th>Category</th>
            <th>Amount Sold</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Revenue</th>
            <th>Actions</th>
        </tr>

        <?php while($row = $result->fetch_assoc()) { ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['item']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['amount_sold']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo $row['revenue']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>

        <?php } ?>

    </table>
 
</body>

</html>