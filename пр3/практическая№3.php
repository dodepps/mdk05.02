<h2>Задача 1</h2>
<?php
for ($i = 1; $i < 10; $i++) {
    for ($j = 1; $j < 10; $j++) {
        echo "{$i} * {$j} = " . ($i * $j) . "\t";
    }
    echo  "<br>";
}
?>
<h2>Задача 2</h2>
<?php
$A =4;
$B = 7;
echo "<pre>";
for ($i = 0; $i < $B; $i++) {
    for ($j = 0; $j < $A; $j++) {
        echo "X";
    }
    echo "\n";
}
echo "</pre>";
?>