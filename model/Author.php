<?php

/**
 * Created by PhpStorm.
 * User: mehdi
 * Date: 03/02/2017
 * Time: 10:27
 */
class Author
{
    private $idAuthor;
    private $firstName;
    private $lastName;
    private $century;


    function __construct($firstName, $lastName, $century)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->century = $century;
    }

}