<?php

include 'db.php';

if (isset($_POST['save'])) {

    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];
    $display = isset($_POST['display']) ? 1 : 0;

    $sql = "INSERT INTO products (name, buying_price, selling_price, display) VALUES ('$name', '$buying_price', '$selling_price', '$display')";

    if ($conn->query($sql) === TRUE) {
       echo "Product added";
    } else {
        echo "Error";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>

<form method="post" action="">
    <fieldset style="width: 300px;">
        <legend>ADD PRODUCT</legend>
        
        <label>Name</label><br>
        <input type="text" name="name"><br>
        
        <label>Buying Price</label><br>
        <input type="text" name="buying_price"><br>
        
        <label>Selling Price</label><br>
        <input type="text" name="selling_price"><br>
        
        <hr>
        
        <input type="checkbox" name="display" value="yes"> <label>Display</label>
        
        <hr>
        
        <input type="submit" name="save" value="SAVE">
    </fieldset>
</form>

</body>
</html>
