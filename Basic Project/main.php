<?php
/**
 * Created by PhpStorm.
 * User: thori
 * Date: 11/10/2015
 * Time: 10:42 AM
 */
    //linking to another file
    include 'helloworld.php';

    //string variable
    $firstName = 'Jason';

    //calling function from another file
    //passing the string as parameter
    greet($firstName);

    //printing double space
    print"<br><br>";

    //int variable
    $someNumber = 5;

    //passing integer as parameter
    isEven($someNumber);

    print"<br><br>";

    print1Through10();

?>