<?php
declare(strict_types=1);

/*
 * 420DW3_Week3_Homework index.php
 * 
 * @author Marc-Eric Boury (Newironsides)
 * @since 2023-01-25
 * (c) Copyright 2023 Marc-Eric Boury 
 */

$isDemo = false;

if ($isDemo) {
    include "Solutions/Question1.php";
    include "Solutions/Question2.php";
    include "Solutions/Question3.php";
    include "Solutions/Question4.php";
    
} else {
    include "Questions/Question1.php";
    include "Questions/Question2.php";
    include "Questions/Question3.php";
    include "Questions/Question4.php";
}
