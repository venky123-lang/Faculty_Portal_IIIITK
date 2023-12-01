<?php

session_start();
$id = $_SESSION['id'];
// echo $email,$id,$password;

//insert.php

if(isset($_POST["award_description"]))
{

	include('database_connection.php');

	// $order_id = uniqid();

	for($count = 0; $count < count($_POST["award_description"]); $count++)
	{

		$query = "
		INSERT INTO faculty_db_awards
        (award_description,year,id) 
        VALUES (:award_description,:year,:id)
		";

		$statement = $connect->prepare($query);

		$statement->execute(
			array(
				':award_description'	=>	$_POST["award_description"][$count],
                ':year'	=>	$_POST["year"][$count],
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
