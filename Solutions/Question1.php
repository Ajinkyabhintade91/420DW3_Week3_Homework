<?php
declare(strict_types=1);

/*
 * 420DW3_Week3_Homework Question1.php
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

/**
 * A parent class
 *
 * @author Marc-Eric Boury
 * @since  2023-01-25
 */
class AParent {
    public function __construct() {}
}

/**
 * A child class inheriting from {@see AParent}
 *
 * @author Marc-Eric Boury
 * @since  2023-01-25
 */
class AChild extends AParent {
    public function __construct() {
        parent::__construct();
    }
}

// </editor-fold>


echo '<h2>Question 1:</h2>';
/*
 * Question 1 - Variable handling functions
 *
 * a) declare and initialize a new variable named and containing the values as following:
 *      "set_variable" containing any non-zero integer of your choice
 *
 * b) declare and initialize 6 new variables named and containing the values as following:
 *      "null_variable" containing null
 *      "int_variable" containing any non-zero integer of your choice
 *      "string_variable" containing a non-empty string of your choice
 *      "boolean_variable" containing FALSE
 *      "array_variable" containing an EMPTY array
 *      "object_variable" containing a new instance of the TestObject class (that class exists from the debug functions file)
 *
 * c) use the isset() function to test if the "set_variable" variable declared in a) is set or not. Use the debug()
 *      function to display the result.
 *
 * d) use the unset() function to unset the "set_variable" variable declared in a) and do a second test like in c) to
 *      re-check and diplay whether the variable is now set.
 *
 * e) for every variable declared and initialized in b), test whether the variable is empty by using the
 *      empty() function. Use the debug() function to display the result. Make sure you understand why some variables
 *      are considered empty and others arent; review the theory if necessary.
 *
 * f) Use var_dump() to dump to the output the information about the "object_variable" variable.
 *
 * g) Use var_export() to RETURN information about the "object_variable" variable and echo to display it to the output.
 *
 * h) for every variable declared and initialized in b), use the gettype() function to obtain the type string of the
 *      variable. Use the debug() function to display the result.
 *
 * i) Re-define the "set_variable" variable defined in a) and unset in b), this time with a non-zero floating point
 *      number. Then, use the settype() function to change the variable's type to a string, and use the debug()
 *      function to display the variable.
 *
 * j) Two classes are pre-defined in this file: AParent and AChild that inherits from AParent. Define a new variable
 *      named "a_child" and assign a new instance of the AChild class to it ( $a_child = new AChild(); ). Use the
 *      is_a() function to check if the "a_child" variable's value is considered a AParent (use AParent::class to
 *      get the AParent class name). Use the debug() function to display the result.
 */
// WRITE YOUR CODE HERE

$set_variable = 55;

$null_variable = null;
$int_variable = -22;
$string_variable = "containing a non-empty string of your choice";
$boolean_variable = FALSE;
$array_variable = [];
$object_variable = new TestObject();

echo "c)";
debug(isset($set_variable));

echo "d)";
unset($set_variable);
debug(isset($set_variable));

echo "e)";
debug(empty($null_variable));
debug(empty($int_variable));
debug(empty($string_variable));
debug(empty($boolean_variable));
debug(empty($array_variable));
debug(empty($object_variable));

echo "f)<br/>";
var_dump($object_variable);
echo "<br/>";

echo "g)<br/>";
echo var_export($object_variable, true);
echo "<br/>";

echo "h)";
debug(gettype($null_variable));
debug(gettype($int_variable));
debug(gettype($string_variable));
debug(gettype($boolean_variable));
debug(gettype($array_variable));
debug(gettype($object_variable));

echo "i)";
$set_variable = 13.845368;
settype($set_variable, "string");
debug($set_variable);

echo "j)";
$a_child = new AChild();
debug(is_a($a_child, AParent::class));

// END OF YOUR CODE SECTION