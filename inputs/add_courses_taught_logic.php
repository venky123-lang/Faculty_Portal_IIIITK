<?php

session_start();
$id = $_SESSION['id'];
// echo $email,$id,$password;

//insert.php

if(isset($_POST["course_id"]))
{

	include('database_connection.php');

	// $order_id = uniqid();

	for($count = 0; $count < count($_POST["course_id"]); $count++)
	{

		$query = "
		INSERT INTO faculty_db_courses_taught
        (course_id,course_name,course_type,id) 
        VALUES (:course_id,:course_name,:course_type,:id)
		";

		$statement = $connect->prepare($query);

		$statement->execute(
			array(
				':course_id'	=>	$_POST["course_id"][$count],
                ':course_name'	=>	$_POST["course_name"][$count],
                ':course_type'	=>	$_POST["course_type"][$count],
                ':id'=>	$id
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
