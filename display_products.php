<?php

include 'db.php';

?>


<!DOCTYPE html>
<html>
<head>
    <title>Display Products</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 5px; text-align: left; }
    </style>
</head>
<body>

<fieldset style="width: 400px;">
    <legend>DISPLAY</legend>
    
    <table>
        <thead>
            <tr>
                <th>NAME</th>
                <th>PROFIT</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT id, name, buying_price, selling_price FROM products WHERE display = 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $profit = $row['selling_price'] - $row['buying_price'];
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $profit . "</td>";
                    echo "<td><a href='edit_product.php?id=" . $row['id'] . "'>edit</a></td>";
                    echo "<td><a href='delete_product.php?id=" . $row['id'] . "'>delete</a></td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</fieldset>

</body>
</html>
