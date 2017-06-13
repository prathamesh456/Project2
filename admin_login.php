<?php

    include('conn.php');

     if(isset($_POST['submit_button']))
        {
        	$name = $_POST['admin_name'];
        	$password = $_POST['admin_passwd'];

        	$query = " SELECT * FROM admin_login WHERE admin_name='$name' AND admin_password='$password' " ;
            $run = mysqli_query($con,$query);
            $row_count = mysqli_num_rows($run);

            if($row_count==1)
            {
            	header('location:admindashboard.php');
            }       	
            else
            {
            	echo "Please enter correct admin name and password";
            }
        	

        }

?>

<html>
     
     <body>

     <h1 align="center"> Admin Login </h1> <br><br><br><br>

        <form action="admin_login.php" method="POST">
            <table border="1" align="center">
                 <tr>
                       <td> Admin Name : </td>
                       <td> <input type="text" name="admin_name" /> </td>
                 </tr>
                 <tr>
                       <td> Admin Password : </td>
                       <td> <input type="password" name="admin_passwd" /> </td>
                 </tr>
                 <tr>
                 	  <td> </td> <td> <center> <input type="submit" value="submit" name="submit_button" /> </center> </td> 
                 </tr>	

            </table>

        </form>
    </body>
</html>