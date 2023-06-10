<?php 

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

function viewAddTodoList ()
{
    echo "Menambah TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal) : ");

    if ($todo == "x") {
        echo "batal menambah todo";
    } else {
        addTodoList($todo);
    }
}

?>