<?php
    require_once 'autoload.php';

    $Tv = new Tv\Tv("Sumsung", 65000, "Silver");
    $Car = new Car\Car("Audi", 2350000, "Red", 2.5, 2);
    $Pen = new Pen\Pen("ErichKrause", 500, "Yeloow");
    $bas = new BasOrder\Basket();
    $bas->addBasket($Tv);
    $bas->addBasket($Car);
    $bas->addBasket($Pen);
    echo '<pre>';
    $order = new BasOrder\Order($bas);
//var_dump($order->print_order());
//var_dump($order->getPrice());

?>

<!doctype html>
<html lang="ru">
<head>
    <title>Document</title>
</head>

<body>
    <h2>Ваш заказ:</h2>
    <p><?= $order->print_order(); ?></p>
    <p><?= $order->getPrice(); ?></p>
</body>
</html>
