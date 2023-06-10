<?php 

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Adib");
addTodoList("Hauzan");
addTodoList("Sofyan");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();
?>