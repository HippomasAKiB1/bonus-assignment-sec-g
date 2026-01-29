<?php

include 'db.php';

$id = $_GET['id'];


if (isset($_POST['delete'])) {

    $sql = "DELETE FROM products WHERE id=$id";
    if ($conn->query($sql) === TRUE) {

        header("Location: display_products.php");
        exit();

    } else {
        echo "Error";
    }

}

$sql = "SELECT * FROM products WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>


<!DOCTYPE html>
<html>
<head>
    <title>Delete Product</title>
</head>

<body>

<form method="post" action="">
    <fieldset style="width: 300px;">
        <legend>DELETE PRODUCT</legend>
        
        
        Name: <?php echo $row['name']; ?><br>
        Buying Price: <?php echo $row['buying_price']; ?><br>
        Selling Price: <?php echo $row['selling_price']; ?><br>
        Displayable: <?php echo ($row['display'] == 1) ? 'Yes' : 'No'; ?><br>
        
        <hr>
        
        <input type="submit" name="delete" value="Delete">

    </fieldset>
</form>

</body>

</html>
