<!DOCTYPE html>
<html>
    <body>
        <!-- action represent sending all these data to other place -->
        <!-- we use the POST method because we want the data to be secured and not appearing at the link -->
        <form action="function.php" method="post">
        <form method="post">
            Student Name   : <input type="text" name="studentName" placeholder="Student Name"><br>
                            
            Student ID     : <input type="number" name="studentId" placeholder="Student ID"><br>
            Student E Mail : <input type="email" name="studentEmail" placeholder="Student E Mail"><br>
            Student School : <select name="school">
                                    <option>Schools</option>
                                    <option value="School_of_Information_Communication_and_Technology">School of Information, Communication and Technology</option>
                                    <option value="School_of_Business_Studies">School of Business Studies</option>
                                    <option value="School_of_Health_Science">School of Health Science</option>
                                    <option value="School_of_Science_and_Engineering">School of Science and Engineering</option>
                                    <option value="School_of_Petroleum_Engineering">School of Petroleum Engineering</option>
                            </select><br>
            Courses        :
            <br>
            Web Development : <input type="radio" name="course" value="Web_Development">
            <br>
            Information System : <input type="radio" name="course" value="Information_System">
            <br>
            IT Network : <input type="radio" name="course" value="IT_Network">
            <br>
            Library : <input type="radio" name="course" value="Library">
            <br>
            Digital Media : <input type="radio" name="course" value="Digital_Media">
            <br>

            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="reset" name="reset">  
     
        </form>

       
    </body>
</html>