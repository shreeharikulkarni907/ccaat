<!-- <?php

// $connect=mysqli_connect(
// 	'db', # Service name
// 	'php_docker', # username
// 	'password',   # Password
// 	'php_docker'  # db table
// );

// $table_name="php_docker_table";

require 'connect.php';

$table_name="php_docker_table";

$query="SELECT * FROM $table_name";

$response=mysqli_query($connect,$query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=devicewidth, initial-scale=1.0">
	<title>Task List 2023</title>

	<link rel="stylesheet" href="main.css" />
</head>
<body>
	
	<header>
		<h1>Task List 2023</h1>
		<form id="new-task-form" action=add.php method="POST" autocomplete="off">
			<input 
				type="text" 
				name="new-task-input" 
				id="new-task-input" 
				placeholder="What do you have planned?" />
			<input 
				type="submit"
				id="new-task-submit" 
				value="Add task" />
		</form>
	</header>
	<main>
		<section class="task-list">
			<h2>Tasks</h2>

			<div id="tasks">

			<?php while($i=mysqli_fetch_assoc($response)) { ?>

				<div class="task">
					<div class="content">
						<input 
							type="text" 
							class="text" 
							value=<?php echo $i['description'] ?>
							readonly>
					</div>
					<div class="actions">

					<!-- <a href="edit.php?task_id=<?php echo $i['id']?>" class="edit" style="
					  	appearance: none;
	                    border: none;
	                    outline: none;
	                    background: none;
						cursor: pointer;
	                    margin: 0 0.5rem;
	                    font-size: 1.125rem;
                     	font-weight: 700;
                       	text-transform: uppercase;
                    	transition: 0.4s;
						background-image: linear-gradient(to right, var(--pink), var(--purple));
						-webkit-text-fill-color: transparent;
						-webkit-background-clip: text;
					" id="anc">Edit</a> -->



				    <a href="delete.php?task_id=<?php echo $i['id']?>" class="delete" style="
					  	appearance: none;
	                    border: none;
	                    outline: none;
	                    background: none;
						cursor: pointer;
	                    margin: 0 0.5rem;
	                    font-size: 1.125rem;
                     	font-weight: 700;
                       	text-transform: uppercase;
                    	transition: 0.4s;
						background-image: linear-gradient(to right, var(--pink), var(--purple));
						-webkit-text-fill-color: transparent;
						-webkit-background-clip: text;
					" id="anc">Delete</a>
					</div>
				</div>
				<?php } ?>

			</div>
		</section>
	</main>

	<!-- <script src="main.js"></script> -->
</body>
</html> -->
