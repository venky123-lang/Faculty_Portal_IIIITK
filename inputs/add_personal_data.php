
<?php
// error_reporting(0);
// session_start();
require_once('navbar.php');
$con = mysqli_connect("localhost","root","","phpform");
// echo $email;

if(isset($_POST['submit'])){
    $date_of_joined = $_POST['date_of_joined'];
    $room_no = $_POST['room_no'];
    $blog = $_POST['blog'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $linkedIn = $_POST['linkedIn'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    $pdf = $_FILES['pdf']['name'];
    $pdf_type = $_FILES['pdf']['type'];
    $pdf_size = $_FILES['pdf']['size'];
    $pdf_tem_local = $_FILES['pdf']['tmp_name'];
    $pdf_store = "pdf/".$pdf;

    move_uploaded_file($pdf_tem_local,$pdf_store);

    // $biosketch = $_POST['biosketch'];
    // if (isset($_FILES['biosketch']['name']))
    // {
    //   $biosketch = $_FILES['biosketch']['name'];
    //   $file_tmp = $_FILES['biosketch']['tmp_name'];

    //   move_uploaded_file($file_tmp,"./pdf/".$biosketch);

    // }
    

    $query = "update faculty_db_personal_data set date_of_joined='$date_of_joined',room_no='$room_no',blog='$blog',facebook='$facebook',twitter='$twitter',linkedIn='$linkedIn',image='$image',pdf='$pdf' where id='$id' and mail = '$email' ";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        echo "<script>
        alert('Data Successfully Submitted');
        </script>";
    }
}

?>



        <style>
        
  /* Right Div Stylings */

  
/* Add padding to container elements */
.container {
    padding: 20px;
      width:90%;
      /* height: 100vh; */
    /* position: absolute; */
    /* left: 50%; */
    /* top: 50%; */
    overflow: hidden;
    /* overflow-y: scroll; */
    /* transform: translate(-50%, -50%); */
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
        <div class="right-div" style="width: 90%;">
        <form method="post" action="./add_personal_data.php" enctype="multipart/form-data">
        <div class="container">
          <h2>Add your personal data</h2>
      
              <label for="email"><b>Date of joined</b></label>
            <input type="date" name="date_of_joined" placeholder="Enter the date of joined" value="" required />
            <label for="email"><b>Dept. Room No.</b></label>
            <input type="text" name="room_no" placeholder="Dept.Room No." value="" required>
          <label for="email"><b>Personal Blog URL</b></label>
          <input type="url" placeholder="Include http://" name="blog" value="" required>
          <label for="email"><b>Facebook A/C URL</b></label>
          <input type="url" placeholder="Include http://" name="facebook" value="" required>
          <label for="email"><b>Twitter A/C URL</b></label>
          <input type="url" placeholder="Include http://" name="twitter" value="" required>
          <label for="email"><b>LinkedIn A/C URL</b></label>
          <input type="url" placeholder="Include http://" name="linkedIn" value="" required>
          <label for="psw"><b>profile Picture</b></label>
          <input type="file" name="image" value="" required>
          <label for="psw"><b>Bio - Sketch</b></label>
          <input type="file" name="pdf" value="" accept=".pdf" required>
      
      
          <div class="clearfix" style="display: flex;gap:10px">
      
          <a href="./index.php" style="text-decoration: none;color:white;width:50%;text-align:center;" class="exit-btn">Exit</a>
            <button type="submit" name="submit" class="btn" style="width: 50%;background-color:blue;color:white;">Insert</button>
          </div>
        </div>
      </form>



        </div>
</body>
</html>