<?php
require_once "data/listUsers.php";
require_once "data/listProducts.php";
require_once "classes/User.php";
require_once "classes/UserPrime.php";
require_once "classes/ProductType.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - PHP</title>
</head>

<body>
    <?php

    foreach ($listUsers as $user) {
        if ($user["prime"]) {
            $user = new UserPrime($user["name"], $user["lastName"], $user["age"], $user["cart"]);
        } else {
            $user = new User($user["name"], $user["lastName"], $user["age"], $user["cart"]);
        }
        echo "<pre>";
        var_dump($user);
        echo "</pre>";
    }

    foreach ($listProducts as $product) {
        $product = new ProductType($product["title"], $product["price"], $product["description"], $product["type"]);
        echo "<pre>";
        var_dump($product);
        echo "</pre>";
    }

    ?>
</body>

</html>