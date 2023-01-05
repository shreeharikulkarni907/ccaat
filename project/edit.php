<?php

require 'connect.php';

if($_GET['task_id'])
{
    $table_name="php_docker_table";
    $task_id=$_GET['task_id'];

    $title=$_POST['new-task-input'];

    if(empty($title))
    {
       
        header("Location: index.php");
        // echo '<script>alert("Please Provide the Updated Task By Enterring in the task field")</script>';

    }

    $query="UPDATE $table_name where `id`=$task_id set `description`=$title";
    if(mysqli_query($connect,$query))
    {
        header("Location: index.php");
    }
    else
    {
        echo "error";
    }

}