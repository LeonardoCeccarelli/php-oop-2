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

// echo "<pre>";
// var_dump($listUsersCopy);
// echo "</pre>";
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
                echo "<li>" . $listProducts[$item]["title"] . "</li>";
            }
            ?>
        </ul>

    <?php
    }
    // $userProva = new User($listUsers[0]["name"], $listUsers[0]["lastName"], $listUsers[0]["age"], $listUsers[0]["cart"]);

    // var_dump($userProva);

    // $userProva->pushItemOnCart("ciao");
    // var_dump($userProva);
    ?>
</body>

</html>