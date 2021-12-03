<?php
require_once "data/listUsers.php";
require_once "data/listProducts.php";
require_once "classes/User.php";
require_once "classes/UserPrime.php";
require_once "classes/ProductType.php";

function pushItemOnCart(int $item, array $array)
{
    $array["cart"][] = $item;
}

pushItemOnCart(1, $listUsers[2]);

// $listUsers[2]["cart"][] = 1;

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
    ?>

        <h2><?php echo $user->getName() . " " . $user->getLastName() ?></h2>
        <p>Anni: <?php echo $user->getAge() ?></p>
        <p>Carrello: <?php echo $user->getCartLength() ?></p>
        <ul>
            <?php
            foreach ($user->getCartItems() as $item) {
                echo "<li>" . $listProducts[$item]["title"] . "</li>";
            }
            ?>
        </ul>

    <?php
    }
    ?>
</body>

</html>