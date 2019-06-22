<?php

function add($x, $y)
{
    return $x + $y;
}

if (add(1,2) == 3) {
    echo "Add is OK";
} else
    echo "Add broken";