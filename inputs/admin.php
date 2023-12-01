<?php
// error_reporting(0);
// session_start();
// require_once('navbar.php');
$con = mysqli_connect("localhost","root","","phpform");
$new_id = uniqid('IIITDMK');
echo $new_id;

if(isset($_POST['submit'])){
    $full_name = $_POST['full_name'];
    $designation = $_POST['designation'];
    $dept = $_POST['dept'];
    $mobile_number = $_POST['mobile_number'];
    $mail = $_POST['mail'];

    $query = "insert into faculty_db_personal_data (full_name,designation,dept,mobile_number,mail,id) values('$full_name','$designation','$dept','$mobile_number','$mail','$new_id')";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        echo "<script>
        alert('Faculty Data Successfully Submitted');
        </script>";
    }
}
?>
<head>
<link rel="shortcut icon" href="../img/logomin.png" type="image/x-icon">
</head>
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
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
      border:1px solid #ccc;
      border-radius:10px;
      background:white;
  -webkit-box-shadow: 2px 1px 21px -9px rgba(0,0,0,0.38);
  -moz-box-shadow: 2px 1px 21px -9px rgba(0,0,0,0.38);
  box-shadow: 2px 1px 21px -9px rgba(0,0,0,0.38);
  }

/* Full-width input fields */
input[type=text]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f7f7f7;
	font-family: Montserrat,Arial, Helvetica, sans-serif;
}



input[type=text]:focus {
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


@keyframes youtubeAnim{
  0%,100%{
    color:#c9110f;
  }
  50%{
    color:#ff0000;
  }
}
    </style>

    <form method="post" action="./admin.php">
        <div class="container">
          <h2>Add new Faculty</h2>
      
              <label for="email"><b>Faculty Full Name</b></label>
            <input type="text" name="full_name" placeholder="First Name Last Name" value="" required />
            
            <label for="email"><b>Designation</b></label>
            <input type="text" name="designation" placeholder="Faculty Designation" value="" required />
            

            <label for="email"><b>Department</b></label>
            <input type="text" name="dept" placeholder="Enter Department dept" value="" required />
            

            <label for="email"><b>Mobile Number</b></label>
            <input type="text" name="mobile_number" placeholder="mobile_number" value="" required />
            

            <label for="email"><b>Faculty Official Mail</b></label>
            <input type="text" name="mail" placeholder="e.g., venkatakrishna.cse@iiitk.ac.in" value="" required />

      
      
          <div class="clearfix" style="display: flex;gap:10px">
      
          <a href="../index.php" style="text-decoration: none;color:white;width:50%;text-align:center;" class="exit-btn">Log out</a>
            <button type="submit" name="submit" class="btn btn-primary" style="width: 50%;">Insert</button>
          </div>
        </div>
      </form>

</body>
</html>