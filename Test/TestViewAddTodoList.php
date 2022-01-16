<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Zunedi");
addTodoList("Suprianto");
addTodoList("Sinambela");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();