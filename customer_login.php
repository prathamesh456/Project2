<?php

    session_start(); 
    

      
    include('conn.php');

     if(isset($_POST['submit_button']))
        {
        	$email = $_POST['cust_email'];
        	$password = $_POST['cust_passwd'];

        	$query = " SELECT * FROM user_registration WHERE user_email='$email' AND user_password='$password' " ;
            $run = mysqli_query($con,$query);
            $row_count = mysqli_num_rows($run);
          

            
                           


            if($row_count==1)
            {
            	header('location:c_edit2.php');
                $_SESSION['email']=$email;
            }       	
            else
            {
            	echo "Please enter correct customer name and password";
            }
        	

        }

?>

<html>
     
     <body>

     <h1 align="center"> Customer Login </h1> <br><br><br><br>

        <form action="customer_login.php" method="POST">
            <table border="1" align="center">
                 <tr>
                       <td> Your Email : </td>
                       <td> <input type="text" name="cust_email" /> </td>
                 </tr>
                 <tr>
                       <td> Your Password : </td>
                       <td> <input type="password" name="cust_passwd" /> </td>
                 </tr>
                 <tr>
                 	  <td> </td> <td> <center> <input type="submit" value="submit" name="submit_button" /> </center> </td> 
                 </tr>	

            </table>

        </form>
    </body>
</html>