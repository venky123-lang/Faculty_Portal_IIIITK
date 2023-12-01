<?php
session_start();
$con = mysqli_connect("localhost","root","","phpform");
// $email = $_SESSION['email'];
// $password = $_SESSION['password'];

// if($email){

// }
// else{
//     header('location: index.php');
// }

// $getId_query = "select id from faculty_db_login where email='$email'";
// $getId_query_run = mysqli_query($con, $getId_query);
// $result = mysqli_fetch_assoc($getId_query_run);
// $id = $result['id'];
// echo $email,$id;

// $query =  "select faculty_db_personal_data.full_name,domain from faculty_db_personal_data,faculty_db_experience where faculty_db_personal_data.sno = faculty_db_experience.sno and faculty_db_experience.id='$id' ";

$id = '1234';
$query_personal = "select * from faculty_db_personal_data where id='$id'  ";

$query_run_personal = mysqli_query($con, $query_personal);

if(mysqli_num_rows($query_run_personal) > 0){

while ($row_personal = mysqli_fetch_assoc($query_run_personal)) {
    $image = $row_personal['image'];
    $blog = $row_personal['blog'];
    $facebook = $row_personal['facebook'];
    $twitter = $row_personal['twitter'];
    $linkedIn = $row_personal['linkedIn'];
    $full_name = $row_personal['full_name'];
    $designation = $row_personal['designation'];
    $dept = $row_personal['dept'];
    $mobile_number = $row_personal['mobile_number'];
    $mail = $row_personal['mail'];
    $date_of_joined = $row_personal['date_of_joined'];
    $room_no = $row_personal['room_no'];
    $biosketch = $row_personal['pdf'];
    $publications = $row_personal['publications'];
    $sponsored_projects = $row_personal['sponsored_projects'];
    $consultancy_projects = $row_personal['consulatncy_projects'];
    $doctoral_students = $row_personal['doctoral_students'];
    $continuing_education = $row_personal['continuing_education'];
    $pg_dissertations = $row_personal['pg_dissertaions'];
}
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
    <link rel="shortcut icon" href="img/logomin.png" type="image/x-icon">
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
</head>
<body>
    <div class="main-div">
        <div class="left-div">
            <center><img src="data:image;base64,<?php echo base64_encode($image) ?>" alt="" class="profile-img" /></center>
            <center>
                <a href="<?php echo "$blog" ?>" target="_blank" title="Blog" class="fa fa-globe social-icons"></a>
                <a href="<?php echo "$facebook" ?>" target="_blank" title="Facebook" class="fa fa-facebook social-icons"></a>
                <a href="<?php echo "$twitter" ?>" target="_blank" title="Twitter" class="fa fa-twitter social-icons"></a>
                <a href="<?php echo "$linkedIn" ?>" 
                target="_blank" title="LinkedIn" class="fa fa-linkedin social-icons"></a>
            </center><br />
            <center><button class="button-89" role="button"><a href="./Google-login/index.php" target="_blank"><i class="fa fa-plus-square" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;Update Info</a></button></center>
            <ul class="sub-contents-list">
                <li><i class="fa fa-user" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="#personal_information">Personal Information</a></li>
                <li><i class="fa fa-graduation-cap" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="#education_qualifications">Education Qualifications</a></li>
                <li><i class="fa fa-history" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="#experience">Experience</a></li>
                <li><i class="fa fa-lightbulb-o" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="#expertise_information">Expertise Information</a></li>
                <li><i class="fa fa-handshake-o" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="#projects">Projects</a></li>
                <li><i class="	fa fa-bar-chart" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="#continuing_education">Continuing Education</a></li>
                <li><i class="fa fa-book" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="#publications">Publications</a></li>
                <li><i class="	fa fa-newspaper-o" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="#courses_taught">Courses Taught</a></li>
                <li><i class="fa fa-group" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="#research_scholars">Research Scholars</a></li>
                <li><i class="fa fa-bookmark" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="#dissertations">Dissertations</a></li>
                <li><i class="fa fa-trophy" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="#awards">Awards & Honors</a></li>
                <br />

                
                <!-- Academic Identities -->
            <?php

            $query_academic_identities = "select * from faculty_db_academic_identities where id='$id'  ";

            $query_run_academic_identities = mysqli_query($con, $query_academic_identities);

            if(mysqli_num_rows($query_run_academic_identities) > 0){
                
                ?>
                <h4>Academic Identity</h4>
                <?php

            while ($row_academic_identities = mysqli_fetch_assoc($query_run_academic_identities)) {
                $orcid = $row_academic_identities['orcid'];
                $scopus = $row_academic_identities['scopus'];
                $researcher = $row_academic_identities['researcher'];
                $google_scholar = $row_academic_identities['google_scholar'];

                ?>
                <li><i class="	fa fa-newspaper-o" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="<?php echo $orcid; ?>">Orcid Id</a></li>
                <li><i class="fa fa-group" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="<?php echo $scopus; ?>">Scopus Id</a></li>
                <li><i class="fa fa-bookmark" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="<?php echo $researcher; ?>">Researcher Id</a></li>
                <li><i class="fa fa-trophy" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a href="<?php echo $google_scholar; ?>">Google Scholar Id</a></li>

                <?php
            }
            }
            ?>
            <center><button class="button-89" role="button"><a href="./inputs/admin.php" target="_blank"><i class="fa fa-plus-square" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;Administrator</a></button></center>
                

            </ul>
        </div>
        <div class="right-div" style="width: 90%;">
            <div class="first-inner-right-div">
                <div>
                    <h2><?php echo "$full_name" ?></h2>
                    <h3></h3>
                    <p><span style="font-size: 20px;font-weight: bold;"><?php echo "$designation" ?></span> <br><?php echo "$dept" ?> <br /><i class="fa fa-phone" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;+91 <?php echo "$mobile_number" ?> <br><i class="fa fa-envelope" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<?php echo "$mail" ?> <br><i class="fa fa-download" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;<a target="_blank" href="./inputs/pdf/<?php echo "$biosketch" ?>" style="color: red;"><u>Bio-Sketch</u></a></p>
                </div>
                <div>
                    <!-- <img src="./img/download (1).png" alt="" class="qr-scanner" width="70%" height="80%" style="top: 50%;"/> -->
                </div>
            </div>
            <div class="first-inner-right-div square-divs-main">
                <p class="square-divs"> <span class="square-divs-span"><?php echo "$publications" ?></span> <br>Publications</p>
                <p class="square-divs" style="background-color: rgb(171, 107, 230);"> <span class="square-divs-span"><?php echo "$sponsored_projects" ?></span> <br>Sponsored Projects</p>
                <p class="square-divs" style="background-color: rgb(133, 231, 122);"> <span class="square-divs-span"><?php echo "$consultancy_projects" ?></span> <br>Consulatancy projects</p>
                <p class="square-divs" style="background-color: rgb(122, 124, 234);"> <span class="square-divs-span"><?php echo "$doctoral_students" ?></span> <br>Doctoral Students</p>
                <p class="square-divs" style="background-color: rgb(239, 134, 223);"> <span class="square-divs-span"><?php echo "$continuing_education" ?></span> <br>Continuing Education</p>
                <p class="square-divs" style="background-color: rgb(235, 225, 135);"> <span class="square-divs-span"><?php echo "$pg_dissertations" ?></span> <br>PG Dissertation</p>    
            </div>


            <div class="one" id="personal_information">
                <h1><i class="fa fa-user" style="font-size:30px;color:rgb(14, 47, 209)"></i>&nbsp;Personal Information</h1>
            </div>
            <div class="second-inner-right-div">
                <div style="padding: 5px;">
                    <h3><?php echo "$full_name" ?></h3>
                    <p><?php echo "$designation" ?> </p>
                    <p><?php echo "$dept" ?> </p>
                    <p>Joined in <b><?php echo "$date_of_joined" ?></b></p>
                </div>
                <div style="padding: 5px;">
                    
                    <p><i class="fa fa-home" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;Room No. <?php echo "$room_no" ?> </p>
                    <p><i class="fa fa-map-marker" style="font-size:20px;color:rgb(14, 47, 209)"></i>&nbsp;Dept. of <?php echo "$dept" ?></p>
                    <p>Indian Institute of Technology, Design and Manufacturing </p>
                    <p>Kurnool, Andhra Pradesh, 518007</p>
                </div>
            </div>


            <!-- Experience Retrieve -->
            <?php
            $query_education = "select * from faculty_db_education_data where id='$id'  ";

            $query_run_education = mysqli_query($con, $query_education);

            if(mysqli_num_rows($query_run_education) > 0){
                ?>
                <div class="one" id="education_qualifications">
                <h1><i class="fa fa-graduation-cap" style="font-size:30px;color:rgb(14, 47, 209)"></i>&nbsp;Education Qualifications</h1>
            </div>
            <div class="Third-inner-right-div">
                <?php

            while ($row_education = mysqli_fetch_assoc($query_run_education)) {
                $program = $row_education['program'];
                $stream = $row_education['stream'];
                $university_name = $row_education['university_name'];
                $year_of_passout = $row_education['year_of_passout'];
                ?>
                <ul style="list-style: none;">
                        <li><h3><i class="fa fa-check" style="font-size:15px;color:rgb(14, 47, 209)"></i>&nbsp;<?php echo $program; ?>(<?php echo $year_of_passout; ?>)</h3></li>
                        <ul style="list-style: none;">
                            <li><p><i class="fa fa-dot-circle-o" style="font-size:10px;color:rgb(14, 47, 209)"></i>&nbsp;<?php echo $stream; ?></p></li>
                            <li><p><i class="fa fa-dot-circle-o" style="font-size:10px;color:rgb(14, 47, 209)"></i>&nbsp;<?php echo $university_name; ?></p></li>
                        </ul>
                    </ul>
                <?php
            }
            ?>
            </div>
            <?php
            }

            ?>



            <!-- Experience Retrieve -->
            <?php
            $query_experience = "select * from faculty_db_experience where id='$id'  ";

            $query_run_experience = mysqli_query($con, $query_experience);

            if(mysqli_num_rows($query_run_experience) > 0){
                ?>
                <div class="one" id="experience">
                <h1><i class="fa fa-history" style="font-size:30px;color:rgb(14, 47, 209)"></i>&nbsp;Experience</h1>
            </div>
            <div class="Third-inner-right-div">
                <h4>Teaching Experience</h4>
                <?php

            while ($row_experience = mysqli_fetch_assoc($query_run_experience)) {
                $domain = $row_experience['domain'];
                $institute = $row_experience['institute'];
                $from_date = $row_experience['from_date'];
                $to_date = $row_experience['to_date'];
                ?>
                <p><i class="fa fa-check" style="font-size:15px;color:rgb(14, 47, 209)"></i>&nbsp; <?php echo $domain; ?>,  <i class="fa fa-home" style="color: rgb(130, 9, 9);"></i>&nbsp;<?php echo $institute; ?>,  <i class="fa fa-calendar" style="color: rgb(120, 7, 7);"></i>&nbsp;<?php echo $from_date; ?> to <?php echo $to_date; ?></p>
                <?php
            }
            ?>
            </div>
            <?php
            }
            ?>


            <!-- Expertise Information retrival -->
            <?php
            $query_expertise = "select * from faculty_db_expertise where id='$id'  ";

            $query_run_expertise = mysqli_query($con, $query_expertise);

            if(mysqli_num_rows($query_run_expertise) > 0){
                ?>
                <div class="one" id="expertise_information">
                <h1><i class="fa fa-lightbulb-o" style="font-size:30px;color:rgb(14, 47, 209)"></i>&nbsp;Expertise Information</h1>
            </div>
            <div class="Third-inner-right-div">
                <h4>Research group</h4>
                <?php

            while ($row_expertise = mysqli_fetch_assoc($query_run_expertise)) {
                $expertise_info = $row_expertise['expertise_info'];
                ?>
                <p><i class="fa fa-check" style="font-size:15px;color:rgb(14, 47, 209)"></i>&nbsp; <?php echo $expertise_info; ?></p>
                <?php
            }
            ?>
            </div>
            <?php
            }

            ?>



            <!-- Projects -->
            <?php
            $query_projects = "select * from faculty_db_projects where id='$id'  ";

            $query_run_projects = mysqli_query($con, $query_projects);

            if(mysqli_num_rows($query_run_projects) > 0){
                ?>
                <div class="one" id="projects">
                <h1><i class="fa fa-handshake-o" style="font-size:30px;color:rgb(14, 47, 209)"></i>&nbsp;Projects</h1>
            </div>
            <div class="Third-inner-right-div">
                <?php

            while ($row_projects = mysqli_fetch_assoc($query_run_projects)) {
                $project_title = $row_projects['project_title'];
                $domain = $row_projects['domain'];
                $role = $row_projects['role'];
                $duration = $row_projects['duration'];
                $status = $row_projects['status'];
                $type = $row_projects['type'];
                ?>
                <div  style="display: flex; ">
                    <div >
                        <p class="left-margin-ribbon" ></p>
                    </div>
                    <div  style="padding-left: 10px;">
                        <h4><?php echo $project_title; ?></h4>
                        <p><i class="fa fa-home" style="color: rgb(130, 9, 9);"></i>&nbsp;<?php echo $domain; ?></p>
                        <div class="sub-Third-inner-right-div">
                            <p><i class="fa fa-user" style="color: rgb(130, 9, 9);"></i>&nbsp;<?php echo $role; ?></p>
                            <p><i class="fa fa-calendar" style="color: rgb(130, 9, 9);"></i>&nbsp;<?php echo $duration; ?></p>
                            <p><i class="fa fa-check-circle" style="color: rgb(130, 9, 9);"></i>&nbsp;<?php echo $status; ?></p>
                            <button class="button-disabled"><?php echo $type; ?></a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            </div>
            <?php
            }
            ?>



            <!-- continuing Education -->
            <?php
            $query_continuing_education = "select * from faculty_db_continuing_education where id='$id'  ";

            $query_run_continuing_education = mysqli_query($con, $query_continuing_education);

            if(mysqli_num_rows($query_run_continuing_education) > 0){
                ?>
                <div class="one" id="continuing_education">
                <h1><i class="fa fa-bar-chart" style="font-size:30px;color:rgb(14, 47, 209)"></i>&nbsp;Continuing Education</h1>
            </div>
            <div class="Third-inner-right-div">
                <?php

            while ($row_continuing_education = mysqli_fetch_assoc($query_run_continuing_education)) {
                $sector = $row_continuing_education['sector'];
                $dept = $row_continuing_education['dept'];
                $role = $row_continuing_education['role'];
                $duration = $row_continuing_education['duration'];
                $status = $row_continuing_education['status'];
                $type = $row_continuing_education['type'];
                ?>
                <div  style="display: flex; ">
                    <div >
                        <p class="left-margin-ribbon" ></p>
                    </div>
                    <div  style="padding-left: 10px;">
                        <h4><?php echo $sector; ?></h4>
                        <p><i class="fa fa-home" style="color: rgb(130, 9, 9);"></i>&nbsp;<?php echo $dept; ?></p>
                        <div class="sub-Third-inner-right-div">
                            <p><i class="fa fa-user" style="color: rgb(130, 9, 9);"></i>&nbsp;<?php echo $role; ?></p>
                            <p><i class="fa fa-calendar" style="color: rgb(130, 9, 9);"></i>&nbsp;<?php echo $duration; ?></p>
                            <p><i class="fa fa-check-circle" style="color: rgb(130, 9, 9);"></i>&nbsp;<?php echo $status; ?></p>
                            <button class="button-disabled"><?php echo $type; ?></a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            </div>
            <?php
            }
            
            ?>
            


            <!-- Publications -->
            <?php
            $query_publications = "select * from faculty_db_publications where id='$id'  ";

            $query_run_publications = mysqli_query($con, $query_publications);

            if(mysqli_num_rows($query_run_publications) > 0){
                ?>
                 <div class="one" id="publications">
                <h1><i class="fa fa-book" style="font-size:30px;color:rgb(14, 47, 209)"></i>&nbsp;Publications</h1>
            </div>
            <h3>Total Publications : 3</h3>
            <div class="Third-inner-right-div">
                <?php

            while ($row_publications = mysqli_fetch_assoc($query_run_publications)) {
                $description = $row_publications['description'];
                $type = $row_publications['type'];
                ?>
                <div  style="display: flex; ">
                    <div >
                        <p style="border: 3px solid rgb(51, 43, 143); height:60%;" ></p>
                    </div>
                    <div  style="padding-left: 10px;">
                        <p><?php echo $description; ?><button class="button-disabled" style="background-color: aqua;"><?php echo $type; ?></a></p>
                    </div>
                </div>
                <?php
            }
            ?>
            </div>
            <?php
            }
            ?>
           


            <!-- Courses Taught -->
            <?php
            $query_courses = "select * from faculty_db_courses_taught where id='$id'  ";

            $query_run_courses = mysqli_query($con, $query_courses);

            if(mysqli_num_rows($query_run_courses) > 0){
                ?>
                <div class="one" id="courses_taught"> 
                <h1><i class="fa fa-newspaper-o" style="font-size:30px;color:rgb(14, 47, 209)"></i>&nbsp;Courses Taught</h1>
            </div>
            <div class="Third-inner-right-div">
                <?php

            while ($row_courses = mysqli_fetch_assoc($query_run_courses)) {
                $course_id = $row_courses['course_id'];
                $course_name = $row_courses['course_name'];
                $course_type = $row_courses['course_type'];
                ?>
                <p><i class="fa fa-check" style="font-size:15px;color:rgb(14, 47, 209)"></i>&nbsp;  <?php echo $course_id; ?> : <?php echo $course_name; ?> {<?php echo $course_type; ?>}</p>
                <?php
            }
            ?>
            </div>
            <?php
            }
            ?>


            <!-- Research Scholars -->
            <?php
            $query_research = "select * from faculty_db_research_scholars where id='$id'  ";

            $query_run_research = mysqli_query($con, $query_research);

            if(mysqli_num_rows($query_run_research) > 0){
                ?>
                <div class="one" id="research_scholars">
                <h1><i class="fa fa-group" style="font-size:30px;color:rgb(14, 47, 209)"></i>&nbsp;Research Scholars</h1>
            </div>
            
            <div class="Third-inner-right-div">
                <h4>Ph.D. Scholards [3]</h4>
                <?php

            while ($row_research = mysqli_fetch_assoc($query_run_research)) {
                $research_area = $row_research['research_area'];
                $scholar_name = $row_research['scholar_name'];
                $enrolled_in = $row_research['enrolled_in'];
                $passed_out = $row_research['passed_out'];
                $guide = $row_research['guide'];
                ?>
                <div  style="display: flex; ">
                    <div >
                        <p class="left-margin-ribbon" ></p>
                    </div>
                    <div  style="padding-left: 10px;">
                        <h4><?php echo $research_area; ?></h4>
                        <div class="sub-Third-inner-right-div">
                            <p><i class="fa fa-male" style="color: rgb(130, 9, 9);"></i>&nbsp;<?php echo $scholar_name; ?></p>
                            <p><i class="fa fa-sign-in" style="color: rgb(130, 9, 9);"></i>&nbsp;<?php echo $enrolled_in; ?></p>
                            <p><i class="fa fa-sign-out" style="color: rgb(130, 9, 9);"></i>&nbsp;<?php echo $passed_out; ?></p>
                            <p><i class="fa fa-user" style="color: rgb(130, 9, 9);"></i>&nbsp;<?php echo $guide; ?></p>
                        </div>
                    </div>
                </div>

                <?php


            }
            ?>
            </div>
            <?php
            }
            ?>




            <!-- Dissertaions -->
            <?php
            $query_dissertation = "select * from faculty_db_dissertation where id='$id'  ";

            $query_run_dissertation = mysqli_query($con, $query_dissertation);

            if(mysqli_num_rows($query_run_dissertation) > 0){
            ?>
            <div class="one" id="dissertations">
                <h1><i class="fa fa-bookmark" style="font-size:30px;color:rgb(14, 47, 209)"></i>&nbsp;Dissertations</h1>
            </div>
            <div class="Third-inner-right-div">
               
                <h4>PG Dissertations</h4>
            <?php

            while ($row_dissertation = mysqli_fetch_assoc($query_run_dissertation)) {
                $dissertation_description = $row_dissertation['dissertation_description'];
                $role = $row_dissertation['role'];
                $duration = $row_dissertation['duration'];

            ?>
            <p><i class="fa fa-check" style="font-size:15px;color:rgb(14, 47, 209)"></i>&nbsp; <?php echo $dissertation_description; ?>   <i class="fa fa-user" style="color: rgb(130, 9, 9);"></i>&nbsp;<?php echo $role; ?>   <i class="fa fa-calendar" style="color: rgb(130, 9, 9);"></i>&nbsp;<?php echo $duration; ?></p>
            <?php
            }
            ?>
            </div>
            <?php
            }
            ?>
            

            <!-- Awards & Honors -->
            <?php

            $query_awards = "select * from faculty_db_awards where id='$id'  ";

            $query_run_awards = mysqli_query($con, $query_awards);

            if(mysqli_num_rows($query_run_awards) > 0){
                ?>
                <div class="one" id="awards">
                <h1><i class="fa fa-trophy" style="font-size:30px;color:rgb(14, 47, 209)"></i>&nbsp;Awards & Honors</h1>
            </div>
            <div class="Third-inner-right-div">
               
                <h4>Awards & Honors</h4>
                <?php

            while ($row_awards = mysqli_fetch_assoc($query_run_awards)) {
                $award_description = $row_awards['award_description'];
                $year = $row_awards['year'];

                ?>
                <p><i class="fa fa-check" style="font-size:15px;color:rgb(14, 47, 209)"></i>&nbsp; <?php echo $award_description; ?> <i class="fa fa-calendar-check-o" style="color: rgb(130, 9, 9);"></i>&nbsp;<?php echo $year; ?></p>

                <?php
            }
            ?>
            </div>
            <?php
            }
            ?>

        </div>
    </div>
</body>
</html>