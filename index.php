<!DOCTYPE html>
<html>
    <style>
            table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 80%;
                    
                }

            td, th {
                    border: 2px solid #dddddd;
                    text-align: middle;
                    padding: 8px;
                    }

            tr:nth-child(even) {
                    background-color: #dddddd;
                    }    
    </style>
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
            
            <h2>LIST OF CCA CLUBS IN POLITEKNIK BRUNEI</h2>
            <p>Student Can Only Join Up To THREE(3) CCA Per Semester</p>

            <table>
            
            <tr>
                <th>Name of Club</th>
                <th>Details of Club</th>
                <th>Tick (If Interested)</th>
            </tr>
            <tr>
                <td>Politeknik Brunei Touch Rugby</td>
                <td>Are you up to the challenge?! Join us as we roar upon the field with the finest team that existed in Politeknik Brunei. We ensure you get the best basic knowledge and the fun with touch rugby</td>
                <td><input type="checkbox" name="tick" value="tick"></td>
            </tr>
            <tr>
                <td>Let's Japan Club</td>
                <td>Konichiwa! Here in Let's Japan Club we are going to teach you about the basic and fundamental knowledge about Japan's culture and tradition</td>
                <td><input type="checkbox" name="tick" value="tick"></td>
            </tr>
            <tr>
                <td>Politeknik Brunei Movie Club</td>
                <td>Are you interested in short film making, but you don't know where to start? Then our club is your one stop centre. Come and join us as we are going the fundamental of script writtings, editting and stroyboard</td>
                <td><input type="checkbox" name="tick" value="tick"></td>
            </tr>
            <tr>
                <td>Tae Kwon Do Club</td>
                <td>For those who are interested in learning self-defense. This club not only teach you martial art but it also teach you self-decipline.</td>
                <td><input type="checkbox" name="tick" value="tick"></td>
            </tr>
            <tr>
                <td>Fishing Club</td>
                <td>Hi all! Those who interested in fishing or someone who wants to know about this club can join us.</td>
                <td><input type="checkbox" name="tick" value="tick"></td>
            </tr>
            <tr>
                <td>Football Club</td>
                <td>Untuk mengganti Sir Alex Fergueson</td>
                <td><input type="checkbox" name="tick" value="tick"></td>
            </tr>

            </table>

            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="reset" name="reset">





            
     
        </form>

       
    </body>
</html>