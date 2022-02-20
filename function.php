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
    } elseif (strlen($studentName) < 6){
        $empty_name = 'Your name should not be less than 6';
    }
    // basically what it does here, arah elseif atu ia gtau kalau input name mu kurang daripada 6 then ia keluarkan the statement atu, strlen means string lenght
    // tapinya take note, this only happens if kamu buat kurang daripada 6. sekiranya kalau kamu termiss enter nama atu then ia kan keluarkan please insert your fullname atu
    // reference link -  https://youtu.be/MMHUxT1pSMg

    if(empty($studentId)){
        $empty_id = 'Please Insert Your Student ID';
    } elseif (strlen($studentId) < 6){
        $empty_id = 'Your Student ID should not be less than 6';
    }
    // sama juanya disini kalau id kamu atu kurang daripada 6 then kira atu error lah jua
    // sama juanya disini macam diatas kalau ketinggalan id ia keluarkan the insert your student id atu, and vice versa
    // reference link -  https://youtu.be/MMHUxT1pSMg


    if(empty($studentEmail)){
        $empty_email = 'Please Insert Your Student Email';
    }

    if(empty($studentCourse)){
        $empty_course = 'Please Insert Your Course';
    } 
    
    if(empty($studentSchool)){
        $empty_school = 'Please Insert Your School';
    } 

    include('index.php');

    
    ?>
    </body>
</html>