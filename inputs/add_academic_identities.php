<?php
// error_reporting(0);
// session_start();
require_once('navbar.php');
$con = mysqli_connect("localhost","root","","phpform");

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
input[type=url]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f7f7f7;
	font-family: Montserrat,Arial, Helvetica, sans-serif;
}



input[type=url]:focus {
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

    <form method="post" action="./add_academic_identities.php">
        <div class="container">
          <h2>Add Academic Identities URLs</h2>
      
              <label for="email"><b>Orcid Id</b></label>
            <input type="url" name="orcid" placeholder="Include http://" value="" required />
            <label for="email"><b>Scorpus Id</b></label>
            <input type="url" name="scopus" placeholder="Include http://" value="" required>
          <label for="email"><b>Researcher Id</b></label>
          <input type="url" placeholder="Include http://" name="researcher" value="" required>
          <label for="psw"><b>Google Scholar Id</b></label>
          <input type="url" placeholder="Include http://" name="google_scholar" value="" required>
      
      
          <div class="clearfix" style="display: flex;gap:10px">
      
          <a href="./index.php" style="text-decoration: none;color:white;width:50%;text-align:center;" class="exit-btn">Exit</a>
            <button type="submit" name="submit" class="btn btn-primary" style="width: 50%;">Insert</button>
          </div>
        </div>
      </form>

</body>
</html>