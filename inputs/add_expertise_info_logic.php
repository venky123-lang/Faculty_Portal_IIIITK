<?php

session_start();
$id = $_SESSION['id'];
// echo $email,$id,$password;

//insert.php

if(isset($_POST["expertise_info"]))
{

	include('database_connection.php');

	// $order_id = uniqid();

	for($count = 0; $count < count($_POST["expertise_info"]); $count++)
	{

		$query = "
		INSERT INTO faculty_db_expertise
        (expertise_info,id) 
        VALUES (:expertise_info,:id)
		";

		$statement = $connect->prepare($query);

		$statement->execute(
			array(
				':expertise_info'	=>	$_POST["expertise_info"][$count],
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
