<?php
/**
 * Created by PhpStorm.
 * User: hoanltm
 * Date: 02/11/2018
 * Time: 14:09
 */

class Node
{
    public $data;
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    function readNode()
    {
        return $this->data;
    }
}