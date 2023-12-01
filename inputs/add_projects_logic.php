<?php

session_start();
$id = $_SESSION['id'];
// echo $email,$id,$password;

//insert.php

if(isset($_POST["project_title"]))
{

	include('database_connection.php');

	// $order_id = uniqid();

	for($count = 0; $count < count($_POST["project_title"]); $count++)
	{

		$query = "
		INSERT INTO faculty_db_projects
        (project_title, domain, role, duration, status, type,id) 
        VALUES (:project_title, :domain, :role, :duration, :status, :type, :id)
		";

		$statement = $connect->prepare($query);

		$statement->execute(
			array(
				':project_title'	=>	$_POST["project_title"][$count],
				':domain'=>	$_POST["domain"][$count],
				':role'=>	$_POST["role"][$count],
                ':status'=>	$_POST["status"][$count],
				':type'=>	$_POST["type"][$count],
                ':id'=>	$id,
				':duration'	=>	$_POST["duration"][$count]
			)
		);

	}

	$result = $statement->fetchAll();

	if(isset($result))
	{
		echo 'ok';
	}

}

?>
