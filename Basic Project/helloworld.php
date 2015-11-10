<?php
    function greet($name) {
        print"Hello " . $name;          //string concatenation
    }

    function isEven($number) {
        if(number % 2 == 0)             //if remainder of number / 2 is 0
            print $number . " is even";
        else
            print $number . " is odd";
    }

    function print1Through10() {
        for ($i = 0; $i < 10; $i++){    //this for loop implementation is similar to java
            print $i + 1 . "<br>";
        }
    }
?>