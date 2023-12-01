<?php

session_start();
$con = mysqli_connect("localhost","root","","phpform");
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$getId_query = "select id from faculty_db_login where email='$email' && password='$password' ";
$getId_query_run = mysqli_query($con, $getId_query);
$result = mysqli_fetch_assoc($getId_query_run);
$id = $result['id'];
// echo $id;

if(isset($_POST['submit'])){
    $orcid = $_POST['orcid'];
    $scopus = $_POST['scopus'];
    $researcher = $_POST['researcher'];
    $google_scholar = $_POST['google_scholar'];

    $query = "insert into faculty_db_academic_identities (orcid,scopus,researcher,google_scholar,id) values('$orcid','$scopus','$researcher','$google_scholar','$id')";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        echo "<script>
        alert('Data Successfully Submitted');
        </script>";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Academic Identities</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap');

body {
	font-family: Montserrat,Arial, Helvetica, sans-serif;
	background-color:#f7f7f7;
}
* {box-sizing: border-box}

/* Add padding to container elements */
.container {
    padding: 20px;
      width:500px;
      height: 100vh;
    position: absolute;
    left: 50%;
    top: 50%;
    overflow: hidden;
    overflow-y: scroll;
    transform: translate(-50%, -50%);
      border:1px solid #ccc;
      border-radius:10px;
      background:white;
  -webkit-box-shadow: 2px 1px 21px -9px rgba(0,0,0,0.38);
  -moz-box-shadow: 2px 1px 21px -9px rgba(0,0,0,0.38);
  box-shadow: 2px 1px 21px -9px rgba(0,0,0,0.38);
  }

/* Full-width input fields */
input[type=url], input[type=file], input[type=date], input[type=text]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f7f7f7;
	font-family: Montserrat,Arial, Helvetica, sans-serif;
}



input[type=url]:focus , input[type=file]:focus, input[type=date]:focus, input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}



/* Set a style for all buttons */
button {
  background-color: #0eb7f4;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
	font-size:16px;
	font-family: Montserrat,Arial, Helvetica, sans-serif;
	border-radius:10px;
}
.exit-btn{
    background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
	font-size:16px;
	font-family: Montserrat,Arial, Helvetica, sans-serif;
	border-radius:10px;
}

button:hover {
  opacity:1;
}


/* Change styles for signup button on extra small screens */
@media screen and (max-width: 300px) {
  .signupbtn {
     width: 100%;
  }
}

    </style>
</head>
<body>
    <form method="post" action="./add_academic_identities.php">
        <div class="container">
          <h2>Add your personal data</h2>
      
              <label for="email"><b>Date of joined</b></label>
            <input type="date" name="date_of_joined" placeholder="Enter the date of joined" value="" required />
            <label for="email"><b>Dept. Room No.</b></label>
            <input type="text" name="room_no" placeholder="Dept.Room No." value="" required>
          <label for="email"><b>Personal Blog URL</b></label>
          <input type="url" placeholder="Include http://" name="blog" value="" required>
          <label for="email"><b>Facebook A/C URL</b></label>
          <input type="url" placeholder="Include http://" name="facebbok" value="" required>
          <label for="email"><b>Twitter A/C URL</b></label>
          <input type="url" placeholder="Include http://" name="twitter" value="" required>
          <label for="email"><b>LinkedIn A/C URL</b></label>
          <input type="url" placeholder="Include http://" name="linkedIn" value="" required>
          <label for="psw"><b>Profile Picture</b></label>
          <input type="file" name="profile" value="" required>
          <label for="psw"><b>Bio - Sketch</b></label>
          <input type="file" name="bio_sketch" value="" required>
      
      
          <div class="clearfix" style="display: flex;gap:10px">
      
          <a href="./index.php" style="text-decoration: none;color:white;width:50%;text-align:center;" class="exit-btn">Exit</a>
            <button type="submit" name="submit" class="btn" style="width: 50%;">Insert</button>
          </div>
        </div>
      </form>

</body>
</html>