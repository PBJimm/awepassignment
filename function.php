<!DOCTYPE html>
<html>
    <body>
    <?php

    $studentName = $_POST['studentName'];
    $studentId = $_POST['studentId'];
    $studentEmail =  $_POST['studentEmail'];
    $studentSchool =  $_POST['studentSchool'];
    $studentCourse =  $_POST['studentCourse'];

    if(empty($studentName)){
        $empty_name = 'Please Insert Your Full Name';
    } elseif (strlen($studentName) < 3){
        $empty_name = 'Your name should not be less than 3';
    }
    if(empty($studentId)){
        $empty_id = 'Please Insert Your Student ID';
    } elseif (strlen($studentId) < 6){
        $empty_id = 'Your Student ID should not be less than 6';
    }
    if(empty($studentEmail)){
        $empty_email = 'Please Insert Your Student Email';
    }
    if(empty($studentCourse)){
        $empty_course = 'Please Insert Your Course';
    } elseif (strlen($studentCourse) < 6){
        $empty_course = 'Your student course should not be less than 6';
    }
    if(empty($studentSchool)){
        $empty_school = 'Please Insert Your School';
    } elseif (strlen($studentSchool) < 6){
        $empty_school = 'Your  schoool name should not be less than 6';
    }

    include('index.php');

    
    ?>
    </body>
</html>