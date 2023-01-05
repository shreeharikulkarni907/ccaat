<?php
require 'connect.php';

if($_GET['task_id'])
{
    $table_name="php_docker_table";
    $task_id=$_GET['task_id'];

    $query="DELETE FROM $table_name where `id` = $task_id";
    if(mysqli_query($connect,$query))
    {
        header("Location: index.php");
    }
    else
    {
        echo "error";
    }

}



?>