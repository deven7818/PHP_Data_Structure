<?php

/**
 * Program for queue implimantation using array
 */
class QueueArray
{
    protected $queueArray;
    protected $entry;
    protected $exit;
    protected $size;


    //Constructor passing paramener $size for array
    function __construct($size)
    {
        $this->queueArray = array();
        $this->entry = -1;
        $this->exit = -1;
        $this->size = $size;
    }

    //enQueue function for inserting element to queue
    function enQueue($data)
    {
        if ($this->isQueueEmpty()) {
            echo "Queue is empty";
            $this->exit++;
        } else if ($this->isQueueFull()) {
            echo "\nQueue is Full";
            return;
        }
        $this->entry++;
        $this->queueArray[$this->entry] = $data;
    }

    //deQueue function for deleting element to queue
    function deQueue()
    {
        if ($this->isQueueEmpty()) {
            echo "\nQueue is empty";
        } else {
            echo "\nRemoved element is " . $this->queueArray[$this->exit];
            $this->exit++;
        }
    }

    //function displayQueueElements to display queue elements
    function displayQueueElements()
    {
        if ($this->isQueueEmpty()) {
            echo "\nQueue is empty";
        } else {
            echo "\nElements of queue are : ";
            for ($i = $this->exit; $i <= $this->entry; $i++) {
                echo $this->queueArray[$i] . " ";
            }
        }
    }

    //function peek to peek top element from queue
    function peek()
    {
        if (self::isQueueEmpty()) {
            echo "\nQueue is empty";
        } else {
            echo "\nQueue top element is " . $this->queueArray[$this->exit];
        }
    }

    //function to check queue is empty
    function isQueueEmpty()
    {
        if ($this->entry == -1) {
            return true;
            return false;
        }
    }

    //function to check queue is full
    public function isQueueFull()
    {
        if ($this->entry + 1 == $this->size) {
            return true;
        } else {
            return false;
        }
    }
}
?>