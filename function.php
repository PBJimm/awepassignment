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
    }
    if(empty($studentId)){
        $empty_id = 'Please Insert Your Student ID';
    }
    if(empty($studentEmail)){
        $empty_id = 'Please Insert Your Student Email';
    }
    if(empty($studentCourse)){
        $empty_id = 'Please Insert Your Course';
    }
    if(empty($studentSchool)){
        $empty_id = 'Please Insert Your School';
    }

    include('index.php');

    
    ?>
    </body>
</html>