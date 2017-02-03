<?php

/**
 * Created by PhpStorm.
 * User: mehdi
 * Date: 03/02/2017
 * Time: 10:21
 */
class Citation
{

    private $idCitation;
    private $text;
    private $author;


    function __construct($text, $author)
    {
        $this->text=$text;
        $this->author=$author;
    }

}