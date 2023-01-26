<?php
declare(strict_types=1);

/*
 * 420DW3_Week3_Homework Question4.php
 * 
 * @author Marc-Eric Boury (Newironsides)
 * @since 2023-01-25
 * (c) Copyright 2023 Marc-Eric Boury 
 */

require_once "includes/debug_functions.php";

/*
 * Write all your code between the comments indicating where to do so.
 * Do not mind any code outside of those comments, it is used for correction.
 * Make certain that all the names of your variables are exactly as requested in the question, including the case
 * The required variable names do not include the required dollar sign, remember to add it as necessary
 */

// <editor-fold defaultstate="collapsed" desc="PREDEFINED DATA">

$int_array = [ 0 => 2, 1 => 1, 2 => 256, 3 => 64, 4 => 32, 5 => 16, 6 => 8, 7 => 128, 8 => 4];
$an_address = [
    "number" => "2405",
    "street" => "rue de la Patate",
    "city" => "Montreal",
    "state" => "Quebec",
    "country" => "Canada",
    "postalCode" => "H0H 0H0"
];
$csv_string = "potato;tomato;onion;leek;cucumber";
$usort_array = [
    "echo",
    "bravo",
    "alpha",
    "charlie",
    "delta"
];

// </editor-fold>


echo '<h2>Question 4:</h2>';
/*
 * Question 4 - Array functions
 *
 * a) Create a conditional if-block that uses the is_array() function to test if the pre-defined variable $an_address
 *      is indeed an array.
 *
 * b) Inside the if-block created in a), use the count() function to obtain the size of the array contained in the
 *      $an_address variable. Use the debug() function to display the resulting value.
 *
 * c) Also inside the if-block created in a), create a nested if conditional. Use array_key_exists() in the condition
 *      of this nested if-block to check if the $an_address array has a key named "state", and use debug() to display
 *      the value of that array entry (only if it exists, so inside the nested if-block).
 *
 * d) Back inside the first-level if-block (not the nested one), use implode() to create a string built with the values
 *      of the $an_address array using a single space (" ") as the separator. use the debug() function to display the
 *      resulting string.
 *
 * e) The pre-defined variable $csv_string contains a list of semicolon-separated values. Use explode() to separate
 *      those values into an array and debug() to display the resulting array.
 *
 * f) The $int_array contains non-ordered integers. Use each of the following function and the debug() one to sequentially
 *      sort in various ways and display the array. Note the effect on the keys.
 *          asort()
 *          arsort()
 *          ksort()
 *          krsort()
 *          sort()
 *          rsort()
 *
 * g) BONUS (tougher) question: Use the usort() function to order the pre-defined $usort_array string array by the
 *      lexicographical order of its string values. To do this, you must define a callback function that usort() can
 *      use for the sorting. See the PHP manual page about the usort function for details. Use debug() to output the
 *      sorted array.
 */
// WRITE YOUR CODE HERE

if (is_array($an_address)) {
    echo "b)";
    debug(count($an_address));
    
    if (array_key_exists("state", $an_address)) {
        echo "c)";
        debug($an_address["state"]);
    }
    
    echo "d)";
    debug(implode(" ", $an_address));
}

echo "e)";
debug(explode(";", $csv_string));

echo "f)";
asort($int_array);
debug($int_array);
arsort($int_array);
debug($int_array);
ksort($int_array);
debug($int_array);
krsort($int_array);
debug($int_array);
sort($int_array);
debug($int_array);
rsort($int_array);
debug($int_array);

echo "g)";
/**
 * @throws Exception
 */
$callback = function(mixed $element1, mixed $element2) : int {
    if (!is_string($element1) || !is_string($element2)) {
        throw new Exception("array element is not a string.");
    }
    return $element1 <=> $element2;
};
usort($usort_array, $callback);
debug($usort_array);


// END OF YOUR CODE SECTION