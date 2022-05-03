<?php
include "../../Data_Structure/LinkedList/SinglyLinkedList/SinglyLinkedList.php";

/**
 * program for stack using linked List
 */
class StackLinkedList{
    public $singlyLinkedList;
    //constructor
    function __construct($object)
    {
        $this->singlyLinkedList = $object;
    }

    //calling method from singly Linked list to add data at first position 
    function pushData($data){
        $this->singlyLinkedList->insertAtStart($data);
    }

    //calling method from singly Linked list to delete data at first position
    function popData(){
        $this->singlyLinkedList->popFirst();
    }

    //display data from the list
    function displayData(){
        $this->singlyLinkedList->displayList();
    }

}
//Singly linked list object
$list = new SinglylinkedList();

//Stack linked list object
$stackLinkedList = new StackLinkedList($list);
$stackLinkedList->pushData(10);
$stackLinkedList->pushData(20);
$stackLinkedList->pushData(30);

$stackLinkedList->displayData();

$stackLinkedList->popData();

$stackLinkedList->displayData();

?>