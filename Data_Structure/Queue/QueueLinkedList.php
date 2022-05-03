<?php

include "../../Data_Structure/LinkedList/SinglyLinkedList/SinglyLinkedList.php";

/**
 * Program for Queue using Singly linked list
 */

class QueueLinkedList{
    public $singlyLinkedList;

    //constructor
    function __construct($object)
    {
        $this->singlyLinkedList = $object;
    }

    //Function to add data to queue using singly linked list
    function enqueue($data){
        $this->singlyLinkedList->insertAtStart($data);
    }

    //Function to delete data to queue using singly linked list
    function dequeue(){
        $this->singlyLinkedList->popLast();
    }

    //display data from the Queue
    function displayData(){
        $this->singlyLinkedList->displayList();
    }
}

$list = new SinglylinkedList();

$queue = new QueueLinkedList($list);
$queue->enqueue(10);
$queue->enqueue(20);
$queue->enqueue(30);
$queue->enqueue(40);
$queue->displayData();

$queue->dequeue();
$queue->displayData();

?>