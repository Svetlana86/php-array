<h2>Задача на массивы №2</h2>
<p>Найти сумму всех элементов в ДВУМЕРНОМ МАССИВЕ</p>

<?php
$arr = [[5, 7, 21, 0],
        [2, 1, -4, -3],
        [8, 1, -2],
        [7, 0, 4, 3]];
echo "<pre>";
print_r($arr);
echo "</pre>";
$sumElementArray = 0;

for ($i=0; $i < count($arr); $i++) {
    for ($j=0; $j < count($arr[$i]); $j++) {
        $sumElementArray += $arr[$i][$j];
    }
}
echo "$sumElementArray - сумма элементов массива";
?>