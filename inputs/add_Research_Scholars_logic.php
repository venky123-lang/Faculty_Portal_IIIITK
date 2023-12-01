<?php

session_start();
$id = $_SESSION['id'];
// echo $email,$id,$password;

//insert.php

if(isset($_POST["research_area"]))
{

	include('database_connection.php');

	// $order_id = uniqid();

	for($count = 0; $count < count($_POST["research_area"]); $count++)
	{

		$query = "
		INSERT INTO faculty_db_research_scholars
        (research_area, scholar_name, enrolled_in, passed_out, guide, id) 
        VALUES (:research_area, :scholar_name, :enrolled_in, :passed_out, :guide, :id)
		";

		$statement = $connect->prepare($query);

		$statement->execute(
			array(
				':research_area'	=>	$_POST["research_area"][$count],
				':scholar_name'=>	$_POST["scholar_name"][$count],
				':enrolled_in'=>	$_POST["enrolled_in"][$count],
                ':guide'=>	$_POST["guide"][$count],
                ':id'=>	$id,
				':passed_out'	=>	$_POST["passed_out"][$count]
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
