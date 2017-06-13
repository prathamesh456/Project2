
<html>
<body>
	<h1> Customer List : </h1>
<form action="CustomerList.php" method="post">  
               <?php
                      include('conn.php');

                      $query="SELECT * FROM user_registration";

                      $run=mysqli_query($con,$query);
                  ?>


                  <table border="1">
                          <tr>
                          	   <td> Customer Mail </td>
                          	   <td> Date Of Birth </td>
                          	   <td> First Name </td>
                          	   <td> Last Name </td>
                          	   <td> City </td>
                          	   <td> State </td>
                          	   <td> Country </td>
                          	   <td> Mobile No </td>
                          	   <td> Address </td>
                          </tr> 

                          <?php
                       

                      while($data=mysqli_fetch_assoc($run))
                      {
                      
                      ?>	
                         
                        
                        <tr>
                        	<td> <?php echo $data['user_email'] ?> </td>
                        	<td> <?php echo $data['dob']  ?> </td>
                        	<td> <?php echo $data['first_name'] ?> </td>
                        	<td> <?php echo $data['last_name'] ?> </td>
                        	<td> <?php echo $data['city'] ?> </td>
                        	<td> <?php echo $data['state'] ?> </td>
                        	<td> <?php echo $data['country'] ?> </td>
                        	<td> <?php echo $data['user_contact'] ?> </td>
                        	<td> <?php echo $data['cust_address'] ?> </td>
                        	
                        </tr> 

                       
                      	          

                      	
                   <?php   	

                      
                    } 
                       
               ?>

                           
                  </table>
 </form>                 

</body>
</html>