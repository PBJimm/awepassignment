<!DOCTYPE html>
<html>
    <body>
    <?php

    $studentName = $_POST['studentName'];
    $studentId = $_POST['studentId'];

    if(empty($studentName)){
        $empty_name = 'Please Insert Your Full Name';
    }
    if(empty($studentId)){
        $empty_id = 'Please Insert Your Student ID';
    }
    include('index.php');

    
    ?>
    </body>
</html>