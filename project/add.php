<?php

if(isset($_POST['new-task-input']))
{
    require 'connect.php';
    $title=$_POST['new-task-input'];

    if(empty($title))
    {
        header("Location: index.php");
    }
    else
    {
        $table_name="php_docker_table";
        $query="INSERT INTO $table_name(description) VALUES ('$title')";
        if(mysqli_query($connect,$query))
        {
            header("Location: index.php");
        }
        else
        {
            header("Location: index.php");
        }
    }

}
else
{
    header("Location: index.php?mess=error");

}
?>