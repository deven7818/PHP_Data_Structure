<?php
/**
 * Class for node having data and next variable
 */
class Node{
    public $data;
    public $next;
    function __construct(){
        $this->data = 0;
        $this->next = null;
    }
}