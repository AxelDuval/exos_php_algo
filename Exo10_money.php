<?php
function showBestSalary()
{
    include('tableau.php');
    foreach ($tableau as $value) {
        $salary = substr($value[5], 1);
        $salary = str_replace(',', '', $salary);
        $salaryInt = intval($salary);
        $array[] = $salaryInt;
    }
    $highestSalary = max($array);
    $highestSalary = number_format($highestSalary);
    $highestSalary = strval($highestSalary);
    $highestSalary = substr_replace($highestSalary, '$', 0, 0);
    foreach ($tableau as $value) {
        if ($highestSalary == $value[5]) {
            echo $value[0];
        }
    }
}
showBestSalary();
