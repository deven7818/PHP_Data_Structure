<?php

include "QueueArray.php";

class QueueArrayMain {
    function main()
    {
        $queueArray = new QueueArray(5);

        $queueArray->enQueue(10);
        $queueArray->enQueue(20);
        $queueArray->enQueue(30);
        
        $queueArray->displayQueueElements();
        $queueArray->deQueue();
        $queueArray->displayQueueElements();
        $queueArray->peek();


        
    }
}

$main = new QueueArrayMain();
$main->main();
?>