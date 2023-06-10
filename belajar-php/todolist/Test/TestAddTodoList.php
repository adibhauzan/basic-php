<?php 

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";


addTodoList("Adib");
addTodoList("Hauzan");
addTodoList("Sofyan");

var_dump($todoList);

?>