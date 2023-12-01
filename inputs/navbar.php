
<?php

session_start();
$con = mysqli_connect("localhost","root","","phpform");
$email = $_SESSION['email'];
echo $email;


$getId_query = "select id from faculty_db_personal_data where mail='$email'";
$getId_query_run = mysqli_query($con, $getId_query);
$result = mysqli_fetch_assoc($getId_query_run);
$id = $result['id'];
// echo $id;
$_SESSION['id'] = $id;


if($email){

}
else{
    header('location: ../Google-login/index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Faculty1-Indian Institute of Technology Design and Manufacturing , Kurnool</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css">

		<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>

		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <link rel="shortcut icon" href="../img/logomin.png" type="image/x-icon">
    <style>
        body{
    margin-left: 10em;
    margin-right: 10em;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
a{
  color: #080808;
  text-decoration: none;
}
a:hover{
  color: red;
}
.main-div{
    display: flex;
}
.left-div{
    padding: 30px;
    width: 25%;
    
    height: 100vh;
    /* background-color: #007bb5; */
    overflow: hidden;
    overflow-y: scroll;   
}
.right-div{
  /* flex-grow: 1; */
    padding: 30px;
    height: 100vh;
    /* background-color: #007bb5; */
    overflow: hidden;
    overflow-y: scroll;
}
.profile-img{
    width:80%;
    border-radius: 50%;
    border: 5px solid rgb(129, 160, 221);

}

/* Social Icons Stylings */
.social-icons {
    padding: 5px;
    font-size: 10px;
    width: 15px;
    text-align: center;
    text-decoration: none;
    margin: 3px 1px;
    border-radius: 50%;
  }
  
  .social-icons:hover {
      opacity: 0.7;
  }
  .fa-globe {
    background: #77f392;
    color: white;
  }
.fa-facebook {
    background: #3B5998;
    color: white;
  }
  .fa-twitter {
    background: #55ACEE;
    color: white;
  }
  .fa-linkedin {
    background: #007bb5;
    color: white;
  }
  .sub-contents-list{
    list-style: none;
  }
  .sub-contents-list > li{
    padding-top: 15px;
    padding-bottom: 10px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: large;
    border-bottom: 2px solid rgb(146, 136, 136);
  }
  .sub-contents-list > li:hover{
    color: red;
    cursor: pointer;
  }



  /* Right Div Stylings */

 
    </style>
</head>
<body>
    <div class="main-div">
        <div class="left-div">
            <h3 align="center">Add your data &nbsp;<i class="fa fa-hand-o-down" style="font-size:20px;color:rgb(14, 47, 209)"></i></h3>
            <ul class="sub-contents-list">
                <li><i class="fa fa-user" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="./add_personal_data.php">Personal Information</a></li>
                <li><i class="fa fa-graduation-cap" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="./add_education.php">Education Qualifications</a></li>
                <li><i class="fa fa-history" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="./add_experience.php">Experience</a></li>
                <li><i class="fa fa-lightbulb-o" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="./add_expertise_info.php">Expertise Information</a></li>
                <li><i class="fa fa-handshake-o" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="./add_projects.php">Projects</a></li>
                <li><i class="	fa fa-bar-chart" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="./add_Continuing_Education.php">Continuing Education</a></li>
                <li><i class="fa fa-book" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="./add_publications.php">Publications</a></li>
                <li><i class="	fa fa-newspaper-o" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="./add_courses_taught.php">Courses Taught</a></li>
                <li><i class="fa fa-group" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="./add_Research_Scholars.php">Research Scholars</a></li>
                <li><i class="fa fa-bookmark" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="./add_dissertations.php">Dissertations</a></li>
                <li><i class="fa fa-trophy" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="./add_awards.php">Awards & Honors</a></li>
                <li><i class="fa fa-link" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="./add_academic_identities.php"> Add Academic Identities</a></li>
                <li><i class="fa fa-sign-out" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="./logout.php">Log Out</a></li>
                <br />

            </ul>
        </div>