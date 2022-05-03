<?php
include "SinglylinkedList.php";

class SinglyLinkedListMain{
    function singlyLinkedListMain(){
        $singlyLinkedList = new SinglylinkedList(10);
        
        $singlyLinkedList->insertAtEnd(90);
        $singlyLinkedList->insertAtEnd(80);
        
        $singlyLinkedList->displayList();
     
        $singlyLinkedList->insertAtStart(10);
        $singlyLinkedList->insertAtStart(20);
        $singlyLinkedList->displayList();

        $singlyLinkedList->insertAtposition(2, 2);
        $singlyLinkedList->displayList();

         $singlyLinkedList->popFirst();
         $singlyLinkedList->displayList();

         $singlyLinkedList->popLast();
         $singlyLinkedList->displayList();

         $singlyLinkedList->popAtPosition(2);
         $singlyLinkedList->displayList();
    }
}

$main = new SinglyLinkedListMain();
$main->singlyLinkedListMain();
?>