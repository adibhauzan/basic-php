<?php 

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("Adib");
addTodoList("Hauzan");
addTodoList("Sofyan");
addTodoList("Wati");
addTodoList("Komalasari");

showTodoList();

removeTodoList(2);

showTodoList();

removeTodoList(4);

showTodoList();

$success = removeTodoList(4);
var_dump($success);

showTodoList();
?>
