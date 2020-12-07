<h3>Cart</h3>
<?php
echo '<form action="index.php?page=2" method="post">';
$total = 0;
foreach ($_COOKIE as $k => $v) {
//    echo "$k ------------- $v <br>";
    $item = Item::fromDb($k);
    $total += $item->pricesale;
    $item->drawItemAtCart();
}
echo '</form>';