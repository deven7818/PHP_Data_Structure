<?php

include "StackArray.php";

class StackArrayMain {
    function main()
    {
        $stackArray = new StackArray(5);
        $stackArray->push(10);
        $stackArray->push(20);
        $stackArray->push(30);
        $stackArray->displayStackElements();
        $stackArray->peek();
        $stackArray->pop();
        $stackArray->displayStackElements();
    }
}

$main = new StackArrayMain();
$main->main();
?>