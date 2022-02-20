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
        <!-- as you can see there are php tag underneath the input tag, this is to validate the error message the was written on function.php file -->
        <!-- basically what it means is that, ku buat function if else nya arah function.php punya file then bawah ani tani show the error message atu -->
        <!-- validation reference link - https://youtu.be/MMHUxT1pSMg -->

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

        <table>
            
            <tr>
                <th>Name of Club</th>
                <th>Details of Club</th>
                <th>Tick (If Interested)</th>
            </tr>
            <tr>
                <td>Politeknik Brunei Touch Rugby</td>
                <td>Are you up to the challenge?! Join us as we roar upon the field with the finest team that existed in Politeknik Brunei. We ensure you get the best basic knowledge and the fun with touch rugby</td>
                <td><input type="checkbox" name="tick" value="Politeknik_Brunei_Touch_Rugby"></td>
            </tr>
            <tr>
                <td>Let's Japan Club</td>
                <td>Konichiwa! Here in Let's Japan Club we are going to teach you about the basic and fundamental knowledge about Japan's culture and tradition</td>
                <td><input type="checkbox" name="tick" value="Let's_Japan_Club"></td>
            </tr>
            <tr>
                <td>Politeknik Brunei Movie Club</td>
                <td>Are you interested in short film making, but you don't know where to start? Then our club is your one stop centre. Come and join us as we are going the fundamental of script writtings, editting and stroyboard</td>
                <td><input type="checkbox" name="tick" value="Politeknik_Brunei_Movie_Club"></td>
            </tr>
            <tr>
                <td>Tae Kwon Do Club</td>
                <td>For those who are interested in learning self-defense. This club not only teach you martial art but it also teach you self-decipline.</td>
                <td><input type="checkbox" name="tick" value="Tae_Kwon_Do_Club"></td>
            </tr>
            <tr>
                <td>Fishing Club</td>
                <td>Hi all! Those who interested in fishing or someone who wants to know about this club can join us.</td>
                <td><input type="checkbox" name="tick" value="Fishing_Club"></td>
            </tr>
            <tr>
                <td>Football Club</td>
                <td>Untuk mengganti Sir Alex Fergueson</td>
                <td><input type="checkbox" name="tick" value="Football_Club"></td>
            </tr>

        </table>    
                    
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="reset" name="reset">  

           
        </form>

       
    </body>
</html>