<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "login_system";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST["fname"])){

    /*Personal Details Table values*/

    $firstName = $_POST["fname"];
    $LastName = $_POST["lname"];
    $email = $_POST["email"];
    $id_pass_num = $_POST["id_pass_number"];
    $title = $_POST["title"];
    $gender = $_POST["gender"];
    $race = $_POST["race"];
    $province = $_POST["province"];
    $nationality = $_POST["nationality"];
    $address = $_POST["address"];
    $disability = $_POST["disability"];
    $maritalStatus = $_POST["marital_status"];
    $language = $_POST["language"];


    /*Parent/Gurdian Details*/

    $parent_name = $_POST['pname'];
    $parent_lname = $_POST['PSname'];
    $p_id_no = $_POST['P_ID_number'];
    $p_title = $_POST['p_title'];
    $parent_gender = $_POST['p_gender'];
    $cell_No = $_POST['cellNo'];
    $alt_cell_no = $_POST['AltCellNo'];
    $parent_role = $_POST['role'];


    /*Applicants Education*/

    $TertiaryEducation = $_POST['studies'];
    $lastAttendedSchool = $_POST['schoolName'];
    $finalYear = $_POST['year'];
    $certificate = $_POST['certificate'];
    $gradePassed = $_POST['gradePassed'];
    $upgrading = $_POST['matricStatus'];
    $admissionType = $_POST['admission'];


    /*University Choices*/

    $Uni1 = $_POST['uniChoice1'];
    $Uni2 = $_POST['uniChoice2'];
    $Uni3 = $_POST['uniChoice3'];
    $Uni4 = $_POST['uniChoice4'];

    /* Course Choice*/

    $courseChoice1 = $_POST['option1'];
    $courseChoice2 = $_POST['option2'];
    $courseChoice3 = $_POST['option3'];
    $courseChoice4 = $_POST['option4'];


    /*if(!empty($firstName) && !empty($LastName) && !empty($id_pass_num) && !empty($title) && !empty($gender) 
    && !empty($race) && !empty($province) && !empty($nationality) && !empty($address) && !empty($disability) 
    && !empty($maritalStatus) && !empty($language)){

        $query = "insert into personalDetails(fname, lname, id_pass_number, title, gender, race, province, nationality, 
        address, disability, marital_status, language) values 
        '$firstName', '$LastName', '$id_pass_num', '$title', '$gender', '$race', 
        '$province', '$nationality', '$address', '$disability', '$maritalStatus', '$language')";

        

    }else{
        echo "All Forms are required";
    }*/

    $query = "INSERT INTO personaldetails(fname, lname, email, id_pass_number, title, gender, race, province, nationality, address, disability, marital_status, language)
        VALUES ('$firstName', '$LastName', '$email','$id_pass_num', '$title', '$gender', '$race', 
        '$province', '$nationality', '$address', '$disability', '$maritalStatus', '$language')";

    $query2 = "INSERT INTO `parent/guardian`(`pname`, `PSname`, `P_ID_number`, `title`, `gender`, `cellNo`, `AltCellNo`, `role`) 
    VALUES ('$parent_name','$parent_lname','$p_id_no','$p_title','$parent_gender','$cell_No','$alt_cell_no','$parent_role')";

    $query3 = "INSERT INTO `applicantseducation`(`TertiaryStudies`, `lastAttendedSchool`, `finalYear`, `certificate`, 
    `gradePassed`, `upgrading`, `admissionType`) VALUES ('$TertiaryEducation','$lastAttendedSchool','$finalYear',
    '$certificate','$gradePassed','$upgrading','$admissionType')";

    $query4 = "INSERT INTO `universitychoice`(`email`,`university1`, `university2`, `university3`, 
    `university4`) VALUES ('$email','$Uni1','$Uni2','$Uni3','$Uni4')";

    $query5 = "INSERT INTO `coursechoice`(`firstchoice`, `secondchoice`, `thirdchoice`, `fourthchoice`) 
    VALUES ('$courseChoice1','$courseChoice2','$courseChoice3','$courseChoice4')";

        $run = mysqli_query($conn, $query) or die(mysqli_error());
        $run2 = mysqli_query($conn, $query2) or die(mysqli_error());
        $run3 = mysqli_query($conn, $query3) or die(mysqli_error());
        $run4 = mysqli_query($conn, $query4) or die(mysqli_error());
        $run5 = mysqli_query($conn, $query5) or die(mysqli_error());

        if($run && $run2 && $run3 && $run4 && $run5){
            echo "Form successfully submited";
            
            header("Location: ..\user profile.php? registration=complete");
        }else{
            echo "Not submited";
        }
}


?>