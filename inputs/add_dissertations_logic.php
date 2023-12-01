<?php

session_start();
$id = $_SESSION['id'];
// echo $email,$id,$password;

//insert.php

if(isset($_POST["dissertation_description"]))
{

	include('database_connection.php');

	// $order_id = uniqid();

	for($count = 0; $count < count($_POST["dissertation_description"]); $count++)
	{

		$query = "
		INSERT INTO faculty_db_dissertation
        (dissertation_description,role,duration,id) 
        VALUES (:dissertation_description,:role,:duration,:id)
		";

		$statement = $connect->prepare($query);

		$statement->execute(
			array(
				':dissertation_description'	=>	$_POST["dissertation_description"][$count],
                ':role'	=>	$_POST["role"][$count],
                ':duration'	=>	$_POST["duration"][$count],
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
