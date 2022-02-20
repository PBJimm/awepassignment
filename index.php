<!DOCTYPE html>
<html>
    <body>
        <!-- action represent sending all these data to other place -->
        <!-- we use the POST method because we want the data to be secured and not appearing at the link -->
        <form action="function.php" method="post">
        <form method="post">
            Student Name   : <input type="text" name="studentName" placeholder="Student Name"><br>
                            <?php if(isset($empty_name)) { ?>
                                <p><?php echo $empty_name ?></p>
                           <?php } ?>
            Student ID     : <input type="number" name="studentId" placeholder="Student ID"><br>
                            <?php if(isset($empty_id)) { ?>
                                <p><?php echo $empty_id ?></p>
                           <?php } ?>
            Student E Mail : <input type="email" name="studentEmail" placeholder="studentid@student.pb.edu.bn"><br>
                            <?php if(isset($empty_email)) { ?>
                                <p><?php echo $empty_email ?></p>
                           <?php } ?>
            Student School : <input type="text" name="studentSchool" placeholder="E.g SICT"><br>
                            <?php if(isset($empty_school)) { ?>
                                <p><?php echo $empty_school ?></p>
                           <?php } ?>
            Student Course : <input type="text" name="studentCourse" placeholder="E.g Diploma in Web Development"><br>
                            <?php if(isset($empty_course)) { ?>
                                <p><?php echo $empty_course ?></p>
                           <?php } ?>
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="reset" name="reset">  
     
        </form>

       
    </body>
</html>