<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Zunedi");
addTodoList("Suprianto");
addTodoList("Sinambela");

var_dump($todoList);