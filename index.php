<?php
    require_once 'autoload.php';

    $Tv = new Tv\Tv("LG", 100000, "Black");
    $Car = new Car\Car("Peuge0t", 5000000, "White", 2.5, 2);
    $Pen = new Pen\Pen("Bic", 300, "Red");
    $bas = new Basket\Basket();
    $bas->addBasket($Tv);
    $bas->addBasket($Car);
    $bas->addBasket($Pen);
    echo '<pre>';
    $order = new Basket\Order($bas);
//var_dump($order->print_order());
//var_dump($order->getPrice());

?>

<!doctype html>
<html lang="ru">
<head>
    <title>Document</title>
</head>

<body>
    <h2>ВАШ ЗАКАЗ:</h2>
    <p><?= $order->print_order(); ?></p>
    <p><?= $order->getPrice(); ?></p>
</body>
</html>
