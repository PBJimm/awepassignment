<!DOCTYPE html>
<html>
    <body>
    <?php

            $studentName = $_POST['studentName'];
            $studentId = $_POST['studentId'];
            $studentEmail = $_POST['studentEmail'];
            $school = $_POST['school'];
            $course = $_POST['course'];
            
            echo "

            Student Name : $studentName
            <br>
            Student ID : $studentId
            <br>
            Student Email : $studentEmail
            <br>
            School : $school
            <br>
            Courses : $course
            ";

            
          
    ?>
    </body>
</html>