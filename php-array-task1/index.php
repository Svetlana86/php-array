<h2>Задача на массивы №1</h2>
<p>Найти минимальный элемент в ОДНОМЕРНОМ МАССИВЕ</p>

<?php
$arr = [5, 7, 21, 0, -2, 4, 2];
echo "<pre>";
print_r($arr);
echo "</pre>";
$minNumber = $arr[0];
for ($i=1; $i < count($arr); $i++) {
    if($arr[$i]<$minNumber) $minNumber=$arr[$i];
}
echo "$minNumber - минимальный элемент массива";
?>