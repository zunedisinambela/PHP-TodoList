<?php

/**
 * Menambah todo ke list
 */
function addTodoList(string $todo)
{
    global $todoList;

    $number = sizeof($todoList) + 1; // Mengecek jumlah dari todolistnya

    $todoList[$number] = $todo;
}