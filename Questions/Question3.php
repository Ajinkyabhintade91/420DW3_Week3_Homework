<?php
declare(strict_types=1);

/*
 * 420DW3_Week3_Homework Question3.php
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

$int_array = [1, 2, 4, 6, 16, 32, 64, 128, 256];
/**
 * @param int|float $price
 *
 * @return float
 *
 * @author Marc-Eric Boury
 * @since  2023-01-25
 */
function get_tax_amount(int|float $price) : float {
    return 0.1495 * $price;
}

// </editor-fold>


echo '<h2>Question 3:</h2>';
/*
 * Question 3 - Math functions
 *
 * a) Use the max() and min() functions to obtain the maximum and minimum values contained in the pre-defined
 *      int array variable $int_array and use the debug() function to display both results.
 *
 * b) I have created the small function named "get_tax_amount" to calculate the sales tax amount for a given subtotal
 *      price. Use my "get_tax_amount" function and the the round() function to obtain the tax amount rounded to two
 *      decimals for the following subtotal values: 19.99 and 192.50 . Display the results by using the debug() function.
 *
 * c) Use the rand() funtion three times function to generate integers between 0 and 100 and use the debug() function to
 *      display each result.
 *
 * d) Use the random_int() function three times function to generate integers between 0 and 100 and use the debug()
 *      function to display each result.
 */
// WRITE YOUR CODE HERE





// END OF YOUR CODE SECTION