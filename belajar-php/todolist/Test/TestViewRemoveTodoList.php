<?php 

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Adib");
addTodoList("Hauzan");
addTodoList("Sofyan");
addTodoList("Programmer");
addTodoList("Zaman");
addTodoList("Now");

showTodoList();

viewRemoveTodoList();

showTodoList();


?>