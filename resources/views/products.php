<?php
if ($products->rowCount() > 0) {
    while ($row = $products->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        echo "ID: " . $id . "<br>";
        echo "Name: " . $name . "<br>";
        echo "Price: $" . $price . "<br>";
        echo "Description: " . $description . "<br>";
        echo '<a href="product/detail?id=1">View Details</a>' . '<br><br>';

    }
} else {
    echo "No products found.";
}

?>