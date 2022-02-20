<!DOCTYPE html>
<html>
    <body>
    <?php

            if (isset($_POST['submit'])){
                $studentName = $_POST['studentName'];

                if (strlen($studentName) < 3)
                $msg = '<font color="red"> Please check your name</font>';
            }

            
          
    ?>
    </body>
</html>