<?php
// $size = 9;
// for ($row = 0; $row < $size; $row++) {
//     for ($col = 0; $col < $size; $col++) {
//         $cell = ($row + $col) % 2 == 0 ? "X" : "-";
//         echo $cell . " ";
//     }
//     echo "br";
// }
// $n = 5;
// for ($i = 1; $i <= $n; $i++) {
//     for ($j = $i; $j < $n; $j++) {
//         echo " ";
//     }
//     for ($k = 1; $k <= (2 * $i - 1); $k++) {
//         echo "*";
//     }
//     echo "\n";
// }
// for ($i = $n - 1; $i >= 1; $i--) {
//     for ($j = $n; $j > $i; $j--) {
//         echo " ";
//     }
//     for ($k = 1; $k <= (2 * $i - 1); $k++) {
//         echo "*"; 
//     }
//     echo "\n";
//     }

//===========================================================
// $n = 6; 
// for ($i = 1; $i <= $n; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "*";
//     }
//     echo "\n";
// }

// for ($i = $n - 1; $i >= 1; $i--) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "*";
//     }
//     echo "\n";
// }
// ================================================================
// $n = 5; 
// for ($i = 1; $i <= $n; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "*";
//     }
//     echo "\n";
// }
// ================================================================

// $array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
// function insertionSortAsc($arr)
// {
//     $n = count($arr);
//     for ($i = 1; $i < $n; $i++) {
//         $key = $arr[$i];
//         $j = $i - 1;
//         while ($j >= 0 && $arr[$j] > $key) {
//             $arr[$j + 1] = $arr[$j];
//             $j--;
//         }

//         $arr[$j + 1] = $key;
//     }
//     return $arr;
// }
// function insertionSortDesc($arr)
// {
//     $n = count($arr);
//     for ($i = 1; $i < $n; $i++) {
//         $key = $arr[$i];
//         $j = $i - 1;
//         while ($j >= 0 && $arr[$j] < $key) {
//             $arr[$j + 1] = $arr[$j];
//             $j--;
//         }

//         $arr[$j + 1] = $key;
//     }
//     return $arr;
// }

// $sortedAsc = insertionSortAsc($array);
// echo "Ascending Order: " . implode(", ", $sortedAsc);
// $sortedDesc = insertionSortDesc(arr: $array);
// echo "Descending Order: " . implode(", ", $sortedDesc);

// ======================================================================

// $numbers = [2, 4, 6, 8, 10];
// if (count($numbers) > 0) {
//     $sum = 0;
//     foreach ($numbers as $num) {
//         $sum += $num;
//     }
//     $average = $sum / count($numbers);

//     echo "The average is: " . $average;
// } else {
//     echo "The array is empty, cannot calculate the average.";
// }

// ====================================================================
// $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// $filteredArray = [];
// foreach ($array as $num) {
//     if ($num % 2 !== 0) {
//         $filteredArray[] = $num;
//     }
// }
// echo "Original Array: " . implode(", ", $array);
// echo "Filtered Array (without even numbers): " . implode(", ", $filteredArray) ;

// ==================================================================================
// $numbers = [10, 30, 20];
// if (count($numbers) > 0) {
//     $max = $numbers[0];
//     if ($numbers[1] > $max) {
//         $max = $numbers[1];
//     }
//     if ($numbers[2] > $max) {
//         $max = $numbers[2];
//     }
//     echo "The maximum number is: " . $max;
// } else {
//     echo "The array is empty.";
// }
// ==================================================================================

// $date = "2012-12-21";
// $dateObject = new DateTime($date);
// $dateObject->modify('+1 month');
// echo "Original Date: " . $date;
// echo "Updated Date: " . $dateObject->format('Y-m-d') ;
// ======================================================================================
// $currentDate = new DateTime();
// $currentDate->modify('-1 month');
// $previousMonthNumber = $currentDate->format('m');
// echo "The number of the month is: " . $previousMonthNumber;
// =======================================================================================
// $mainString = "Hello, welcome to the world!";
// $searchString = "the";
// if (preg_match("/$searchString/", $mainString)) {
//     echo "The string '$searchString' is found in the main string.";
// } else {
//     echo "The string '$searchString' is not found in the main string.";
// }
// =========================================================================================
// function isPrime($number) {
//     if ($number <= 1) {
//         return false; 
//     }
//     for ($i = 2; $i <= sqrt($number); $i++) {
//         if ($number % $i == 0) {
//             return false;  
//         }
//     }

//     return true;  
// }
// $testNumber = 31;
// if (isPrime($testNumber)) {
//     echo "$testNumber is a prime number.";
// } else {
//     echo "$testNumber is not a prime number.";
// }

// =====================================================================================















?>