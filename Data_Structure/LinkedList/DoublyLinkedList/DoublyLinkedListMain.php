<?php

include "DoublyLinkedList.php";

    class DoublyLinkedListMain{
        function doublyLinkedListMain(){
            $doublyLinkedList = new DoublyLinkedList();

            $doublyLinkedList->insertAtFirst(10);
            $doublyLinkedList->insertAtFirst(20);

            $doublyLinkedList->displayList();

            $doublyLinkedList->insertAtLast(80);
            $doublyLinkedList->insertAtLast(90);
            $doublyLinkedList->displayList();

            $doublyLinkedList->insertAtPosition(50, 3);
            $doublyLinkedList->displayList();

            $doublyLinkedList->deleteFirst();
            $doublyLinkedList->displayList();

            
            $doublyLinkedList->deleteLast();
            $doublyLinkedList->displayList();

            
            $doublyLinkedList->deleteAtPosition(1);
            $doublyLinkedList->displayList();
            
        }
    }

    $main = new DoublyLinkedListMain();
    $main->doublyLinkedListMain();

?>