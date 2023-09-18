<?php

/**
    *   =======Task 1: Looping with Increment using a Function====
 */

// Start For Loop
function printEvenNumbers($start, $end, $step)
{
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
    echo "\n";
}
echo "Using a for loop:";
printEvenNumbers(2, 20, 2);
// End For Loop

// Start While Loop
function whileloop($start, $end, $step)
{
    while ($start <= $end) {
        echo $start . " ";
        $start += $step;
    }
}
echo "Using a while loop: ";
whileloop(2, 20, 2);
echo "\n";
// End While Loop


// Start Do-While Loop

function dowhileloop($start, $end, $step)
{
    do {
        echo $start . " ";
        $start += $step;
    } while ($start <= $end);
}
echo "Using a do-while loop: ";
dowhileloop(2, 20, 2);
echo "\n";
// End Do-While Loop

/****
    *   ============Task 2: Skip Multiples of 5===========
*****/
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        continue;
    }
    echo $i . " ";
}
/****
    *   ============Task 3: Break on Condition===========
*****/
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$count = 0;
for ($i = 0; $count < 10; $i++) {
    $fib = fibonacci($i);
    if ($fib > 100) {
        break;
    }
    echo $fib . " ";
    $count++;
}
/****
    *   ============Task 4: Fibonacci Series printing using a Function===========
*****/
function printFibonacci($count) {
    $first = 0;
    $second = 1;
    for ($i = 0; $i < $count; $i++) {
        echo $first . " ";
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}
printFibonacci(15);

?>