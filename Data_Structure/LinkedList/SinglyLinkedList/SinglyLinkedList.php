<?php

include "Node.php";

class SinglylinkedList
{
    protected $head;

    //constructor to create an empty LinkedList 
    function __construct(){
        $this->head = null;
    }

    //function to insert element at start of list
    function insertAtStart($data)
    {
        echo "\nAfter Insert $data at the start of list - ";
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $newNode->next = $this->head;
            $this->head = $newNode;
        }
    }

    //function to add element at end of the list
    function insertAtEnd($data)
    {
        echo "\nAfter Insert $data at the end of list - ";
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != null) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
        }
    }


    //function to insert element at perticular node
    function insertAtposition($data, $position)
    {
        echo "\nAfter inserting $data at $position nd position - ";
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;

        if ($position < 1) {
            echo "\nPosition should be >= 1";
        } else if ($position == 1) {
            $newNode->next = $this->head;
            $this->head = $newNode;
        } else {
            $temp = new Node();
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                if ($temp != null) {
                    $temp = $temp->next;
                }
            }
            if ($temp != null) {
                $newNode->next = $temp->next;
                $temp->next = $newNode;
            } else {
                echo "\nPrevious node is null";
            }
        }
    }

    //function to delete element from start of the list
    public function popFirst()
    {
        echo "\nAfter Deleting first element - ";
        if ($this->head != null) {
            if ($this->head->next == null) {
                $this->head = null;
            } else {
                $this->head = $this->head->next;
            }
        }
    }

    //function to delete element from end of the list
    public function popLast()
    {
        echo "\nAfter Deleting last element - ";
        if ($this->head != null) {
            if ($this->head->next == null) {
                //$this->head = null;
            } else {
                $temp = new Node();
                $temp = $this->head;
                while ($temp->next->next != null) {
                    $temp = $temp->next;
                }
                $temp->next = null;
            }
        }
    }

    //function to delete element at perticular position
    public function popAtPosition($position)
    {
        echo "\nAfter deleting element from $position - ";
        if ($position < 1) {
            echo "\nPosition should be >=1.";
        } elseif ($position == 1 && $this->head != null) {
            $this->head = $this->head->next;
        } else {
            $temp = new Node();
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                if ($temp != null) {
                    $temp = $temp->next;
                }
            }
            if ($temp != null && $temp->next != null) {
                $temp->next = $temp->next->next;
            } else {
                echo "\nThe Node is already Null";
            }
        }
    }

    // function to display list elements
    function displayList()
    {
        //create a temp node pointing to head
        $temp = new Node();
        $temp = $this->head;

        /**
         * if the temp node is not null continue displaying the content and move to the 
         * next node till the temp becomes null
         */
        if ($temp != null) {
            echo "List elements are : ";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }
            echo "\n";

            //If the temp node is null at the start, the list is empty
        } else {
            echo "\nList is empty";
        }
    }
}
?>