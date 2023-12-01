<?php

session_start();
$id = $_SESSION['id'];
// echo $email,$id,$password;

//insert.php

if(isset($_POST["sector"]))
{

	include('database_connection.php');

	// $order_id = uniqid();

	for($count = 0; $count < count($_POST["sector"]); $count++)
	{

		$query = "
		INSERT INTO faculty_db_continuing_education
        (sector, dept, role, duration, status, type,id) 
        VALUES (:sector, :dept, :role, :duration, :status, :type, :id)
		";

		$statement = $connect->prepare($query);

		$statement->execute(
			array(
				':sector'	=>	$_POST["sector"][$count],
				':dept'=>	$_POST["dept"][$count],
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
