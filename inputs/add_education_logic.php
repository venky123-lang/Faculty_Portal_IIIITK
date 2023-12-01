<?php

session_start();
$id = $_SESSION['id'];
// echo $email,$id,$password;

//insert.php

if(isset($_POST["program"]))
{

	include('database_connection.php');

	// $order_id = uniqid();

	for($count = 0; $count < count($_POST["program"]); $count++)
	{

		$query = "
		INSERT INTO faculty_db_education_data 
        (program, stream, university_name, year_of_passout,id) 
        VALUES (:program, :stream, :university_name, :year_of_passout, :id)
		";

		$statement = $connect->prepare($query);

		$statement->execute(
			array(
				':program'	=>	$_POST["program"][$count],
				':stream'=>	$_POST["stream"][$count],
				':university_name'=>	$_POST["university_name"][$count],
                ':id'=>	$id,
				':year_of_passout'	=>	$_POST["year_of_passout"][$count]
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
