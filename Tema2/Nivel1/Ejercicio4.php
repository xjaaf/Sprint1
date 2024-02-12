<?php 

// Function to count up to specified number with custo increment

function countNumbers($upTo = 10, $increment = 1){
    for($i = 1; $i <= $upTo; $i += $increment){
        echo $i . "\n";
    }
}
// Example of using the function

echo countNumbers(10, 1) . "\n";
echo countNumbers(10, 2) . "\n";
echo countNumbers(10, 3) . "\n";
?>