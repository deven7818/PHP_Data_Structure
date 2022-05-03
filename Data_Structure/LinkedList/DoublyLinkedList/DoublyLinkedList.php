<?php

include "Node.php";

class DoublyLinkedList
{
    public $head;

    function __construct()
    {
        $this->head = null;
    }

    //function to insert element at first position
    function insertAtFirst($data)
    {
        echo "\nThe element insert at first - ";
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        $newNode->prev = null;
        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $this->head->prev = $newNode;
            $newNode->next = $this->head;
            $this->head = $newNode;
        }
    }

    //function to insert element at last position
    function insertAtLast($data)
    {
        echo "\nThe element insert at last - ";
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        $newNode->prev = null;
        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != null) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
            $newNode->prev = $temp;
        }
    }

    /**
     * function to insert element at perticular position
     * passing the parameters $data and $position
     */
    function insertAtPosition($data, $position)
    {
        echo "\nThe $data insert at $position - ";
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        $newNode->prev = null;
        if ($position < 1) {
            echo "\nPosition should be >= 1";
        } else if ($position == 1) {
            $newNode->next = $this->head;
            $this->head = $newNode;
            $this->head->prev = $newNode;
        } else {
            $temp = new Node();
            $temp = $this->head;
            for ($i = 1; $i < $position; $i++) {
                if ($temp != null) {
                    $temp = $temp->next;
                }
            }
            if ($temp != null) {
                $newNode->next = $temp->next;
                $newNode->prev = $temp;
                $temp->next = $newNode;
                if ($newNode->next != null) {
                    $newNode->next->prev = $newNode;
                }
            } else {
                echo "\nPrevious node is null";
            }
        }
    }

    //Function to delete First - Head node
    function deleteFirst()
    {
        echo "\nThe element deleted at first - ";
        if ($this->head != null) {
            if ($this->head->next == null) {
                $this->head == null;
            } else {
                $this->head = $this->head->next;
                $this->head->prev = null;
            }
        }
    }

    //function to delete last node
    function deleteLast()
    {
        echo "\nThe element deleted at last - ";
        if ($this->head != null) {
            if ($this->head->next == null) {
                $this->head = null;
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

    /**
     * Function to delete a node at given position
     * Passing the Postiion as the Parameter
     */
    public function deleteAtPosition($position)
    {
        echo "\nThe element deleted from position  $position - ";
        if ($position < 1) {
            echo "\nPosition should be >= 1.";
        } elseif ($position == 1 && $this->head != null) {
            $this->head = $this->head->next;
            if ($this->head != null) {
                $this->head->prev = null;
            }
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
                if ($temp->next->next != null) {
                    $temp->next->next->prev = $temp->next;
                }
            } else {
                echo "\nThe Node is already Null.";
            }
        }
    }


    //Function to display elements in list
    function displayList()
    {
        $temp = new Node();
        $temp = $this->head;
        if ($temp != null) {
            echo "\nThe list elements are : ";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "The list is empty";
        }
    }
}
?>