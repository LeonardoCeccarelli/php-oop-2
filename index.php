<?php
require_once "data/listUsers.php";
require_once "data/listProducts.php";
require_once "classes/User.php";
require_once "classes/UserPrime.php";
require_once "classes/ProductType.php";

// function pushItemOnCart(int $item, array &$array)
// {
//     $array["cart"][] = $item;
// }

// pushItemOnCart(1, $listUsers[1]);

// $listUsers[2]["cart"][] = 1;

$listUsersCopy = [];
$listProductsCopy = [];

foreach ($listUsers as $user) {
    try {
        if ($user["prime"]) {
            $user = new UserPrime($user);
        } else {
            $user = new User($user);
        }

        $listUsersCopy[] = $user;
    } catch (Exception $e) {
        echo "Non è stato possibile generare l'istanza per l'utente " . $user["name"] . " " . $user["lastName"] . " a causa del seguente errore: ";
        echo $e->getMessage() . "<br>";
    }
}

foreach ($listProducts as $product) {
    $product = new ProductType($product);
    $listProductsCopy[] = $product;
}

// Aggiunta prodotti nei carrelli dei vari utenti
// $listUsersCopy[0]->pushItemOnCart($listProductsCopy[0]);
// $listUsersCopy[2]->pushItemOnCart($listProductsCopy[3]);
// $listUsersCopy[1]->pushItemOnCart($listProductsCopy[2]);
// $listUsersCopy[3]->pushItemOnCart($listProductsCopy[1]);
// $listUsersCopy[1]->pushItemOnCart($listProductsCopy[0]);
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
    foreach ($listUsersCopy as $user) {

    ?>

        <h2>
            <?php
            echo $user->getName() . " " . $user->getLastName()
            ?>
        </h2>
        <p><?php echo $user->getEmail() ?></p>
        <p>Anni:
            <?php
            echo $user->getAge()
            ?>
        </p>
        <p>Carrello:
            <?php
            echo $user->getCartLength()

            ?>
        </p>
        <ul>
            <?php
            foreach ($user->getCartItems() as $item) {
            ?>
                <li>
                    <h4><?php echo $item->getTitle() ?></h4>
                    <small>€ <?php echo $item->getPrice() ?></small>
                    <p><em><?php echo $item->getDescription() ?></em></p>
                </li>
            <?php
            }
            ?>
        </ul>
        <hr><br><br>

    <?php
    }
    ?>
</body>

</html>