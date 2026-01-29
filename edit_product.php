<?php
include 'db.php';

$id = $_GET['id'];
$row = [];

if (isset($_POST['save'])) {

    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];
    $display = isset($_POST['display']) ? 1 : 0;

    $sql = "UPDATE products SET name='$name', buying_price='$buying_price', selling_price='$selling_price', display='$display' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        
        header("Location: display_products.php"); 
        exit();

    } else {
        echo "Error";
    }

}


$sql = "SELECT * FROM products WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>

<body>

<form method="post" action="">
    <fieldset style="width: 300px;">
        <legend>EDIT PRODUCT</legend>
        
        <label>Name</label><br>
        <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
        
        <label>Buying Price</label><br>
        <input type="text" name="buying_price" value="<?php echo $row['buying_price']; ?>"><br>
        
        <label>Selling Price</label><br>
        <input type="text" name="selling_price" value="<?php echo $row['selling_price']; ?>"><br>
        
        <hr>
        
        <input type="checkbox" name="display" value="yes" <?php echo ($row['display'] == 1) ? 'checked' : ''; ?>> <label>Display</label>
        
        <hr>
        
        <input type="submit" name="save" value="SAVE">
    </fieldset>
</form>

</body>

</html>
