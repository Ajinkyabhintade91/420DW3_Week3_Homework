<?php
declare(strict_types=1);

/*
 * 420DW3_Week3_Homework Question2.php
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

$five_long_string = "abcde";
$coldplay_song = <<<HEREDOC
'Cause you're a sky, 'cause you're a sky full of stars
I'm gonna give you my heart
'Cause you're a sky, 'cause you're a sky full of stars
'Cause you light up the path
I don't care, go on and tear me apart
I don't care if you do, ooh-ooh, ooh
'Cause in a sky, 'cause in a sky full of stars
I think I saw you
'Cause you're a sky, 'cause you're a sky full of stars
I wanna die in your arms, oh, oh-oh
'Cause you get lighter the more it gets dark
I'm gonna give you my heart, oh
I don't care, go on and tear me apart
I don't care if you do, ooh-ooh, ooh
'Cause in a sky, 'cause in a sky full of stars
I think I see you
I think I see you
'Cause you're a sky, you're a sky full of stars
Such a heavenly view
You're such a heavenly view
Yeah, yeah, yeah, ooh
HEREDOC;
// Lyrics of "A sky full of stars" as performed by Coldplay. All rights belong to their respective owners. Used
// under fair use for educational purposes only.

$mixed_case_string = "ThIs Is A mIxEd CaSe StRiNg.";
$untrimmed_variable = "     blabla\t     ";


// </editor-fold>


echo '<h2>Question 2:</h2>';
/*
 * Question 2 - String functions
 *
 * a) Use the strlen() function to obtain the length of the string contained in the pre-defined $five_long_string
 *      variable. Use the debug() function to display the result.
 *
 * b) Use the strtolower() and strtoupper() functions to obtain the lowercase and uppercase versions of the string
 *      pre-defined variable $mixed_case_string and use the debug() function to display both results.
 *
 * c) The pre-defined variable $coldplay_song contains the lyrics of the song "A sky full of stars" by Coldplay. Define
 *      a "offset" integer variable initialized with zero, a while loop with an assignment operation as the condition,
 *      and use the strpos() function and the debug() function to display the positions of all the occurences of the string
 *      "sky full of stars" inside the lyrics.
 *
 * d) Use the str_replace() function to replace the string "full of" by the string "filled with" in the coldplay
 *      song lyrics contained in the string variable $coldplay_song. Use the debug() function to display the resulting
 *      modified string.
 *
 * e) Define a variable conatining a string with formatting markers able to be formatted as to contain
 *      "Hello, my name is <the name>!". Use the sprintf() and debug() functions to display said string with your own
 *      name. (Hint: the format marker for string replacement is '%s').
 *
 * f) Sequentiually use the functions ltrim(), rtrim() and trim() and debug() to trim the pre-defined string variable
 *      $untrimmed_variable and display the result of each trimming function.
 */
// WRITE YOUR CODE HERE

echo "a)";
debug(strlen($five_long_string));

echo "b)";
debug(strtolower($mixed_case_string));
debug(strtoupper($mixed_case_string));

echo "c)";
$offset = 0;
while ($offset = strpos($coldplay_song, "sky full of stars", $offset)) {
    debug($offset);
    $offset++;
}

echo "d)";
debug(str_replace("full of", "filled with", $coldplay_song));

echo "e)";
$format_string = "Hello, my name is %s!";
debug(sprintf($format_string, "Marc-Eric Boury"));

echo "f)";
debug(ltrim($untrimmed_variable));
debug(rtrim($untrimmed_variable));
debug(trim($untrimmed_variable));

// END OF YOUR CODE SECTION