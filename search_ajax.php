<?php
include 'db.php';

$name = isset($_GET['name']) ? $_GET['name'] : '';


$sql = "SELECT * FROM products WHERE display = 1 AND name LIKE '%$name%'";

$result = $conn->query($sql);


echo "<table>
        <thead>
            <tr>
                <th>NAME</th>
                <th>PROFIT</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>";


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
else {

    echo "<tr><td colspan='4'>No results found</td></tr>";
}

echo "</tbody></table>";
?>
