<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 11/10/2015
 * Time: 7:37 PM
 */

    //indexed array
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    //printing all even values in the indexed array
    //count($array) returns the length of the array
    for($i = 0; $i < count($numbers); $i++) {
        if(isEven($numbers[$i]))
            print $numbers[$i] . "<br>";
    }

    print "--------------------<br>";

    $colors = array("white", "blue", "red", "orange", "purple");

    //foreach loop for array values
    foreach($colors as $value) {
        print "$value <br>";
    }

    print "--------------------<br>";

    //associative arrays, like hashmaps or dictionaries

    $age = array("John" => 22, "Jane" => 27, "Bob" => 19);

    foreach($age as $x => $x_value) {
        print "key: " . $x . ", value: " . $x_value . "<br>";
    }

    //checking array size limit, seems like dynamic arrays
    $numArray;
    for($i = 0; $i < 1000; $i++) {
        $numArray[$i] = $i + 1;
    }

    for($i = 0; $i < count($numArray); $i++) {
        print "$numArray[$i]<br>";
    }

    /******** FUNCTIONS ********/

    //returns true if $num is an even number
    function isEven($num) {
        if($num % 2 == 0)
            return true;
        return false;
    }

?>