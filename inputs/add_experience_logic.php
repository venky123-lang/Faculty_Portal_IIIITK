<?php

session_start();
// $con = mysqli_connect("localhost","root","","phpform");
// $email = $_SESSION['email'];
// $password = $_SESSION['password'];
// $getId_query = "select id from faculty_db_login where email='$email' && password='$password' ";
// $getId_query_run = mysqli_query($con, $getId_query);
// $result = mysqli_fetch_assoc($getId_query_run);
$id = $_SESSION['id'];
// echo $id;


if(isset($_POST["domain"]))
{

	include('database_connection.php');

	// $order_id = uniqid();

	for($count = 0; $count < count($_POST["domain"]); $count++)
	{

		$query = "
		INSERT INTO faculty_db_experience 
        (domain, institute, from_date, to_date,id) 
        VALUES (:domain, :institute, :from_date, :to_date, :id)
		";

		$statement = $connect->prepare($query);

		$statement->execute(
			array(
				':domain'	=>	$_POST["domain"][$count],
				':institute'=>	$_POST["institute"][$count],
				':from_date'=>	$_POST["from_date"][$count],
                ':id'=>	$id,
				':to_date'	=>	$_POST["to_date"][$count]
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
