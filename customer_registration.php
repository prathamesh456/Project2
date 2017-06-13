<html>

<?php
       include('conn.php');

       if(isset($_POST['submit_button']))
       {
          $fname = $_POST['cust_firstname'];
          $lname = $_POST['cust_lastname'];
          $password = $_POST['cust_passwd'];
          $email = $_POST['cust_email'];
          $dob = $_POST['cust_dob'];
          $address = $_POST['cust_address'];
          $city = $_POST['cust_city'];
          $state = $_POST['cust_state'];
          $country = $_POST['cust_country'];
          $zip = $_POST['cust_zip']; 
          $contact = $_POST['cust_contact']; 


         $query = " INSERT INTO user_registration(user_email, user_password, dob, first_name, last_name, city, state, country, zip, user_contact, cust_address,cust_status) VALUES ('$email','$password','$dob','$fname','$lname','$city','$state',' $country','$zip','$contact','$address',1) ";
         $run = mysqli_query($con,$query);
         if($run)
         {
         	echo "Data inserted successfully";
         }
         else
         {
         	echo "Data insertion fail";
         }
       }
?>

<body>  
  <h1 align="center"> Customer Registration  </h1> <br><br><br><br>

        <form action="customer_registration.php" method="POST">
            <table border="1" align="center">
                 <tr>
                       <td> First Name : </td>
                       <td> <input type="text" name="cust_firstname" /> </td>
                 </tr>
                 <tr>
                       <td> Last Name : </td>
                       <td> <input type="text" name="cust_lastname" /> </td>
                 </tr>
                 <tr>
                       <td> Password : </td>
                       <td> <input type="password" name="cust_passwd" /> </td>
                 </tr>
                  <tr>
                       <td> Email : </td>
                       <td> <input type="text" name="cust_email" /> </td>
                 </tr>
                  <tr>
                       <td> Date of Birth : </td>
                       <td> <input type="text" name="cust_dob" /> </td>
                 </tr>
                  <tr>
                       <td> Address : </td>
                       <td> <textarea cols=33 name="cust_address">  </textarea> </td>
                 </tr>

                 <tr>
                       <td> Zip : </td>
                       <td> <input type="text" name="cust_zip" /> </td>
                 </tr>
                   
                 <tr>
                       <td> Country : </td>
                       <td> 
                              <select name="cust_country">
                              	<option> India </option>
                              	<option> Australia </option>
                              	<option> England </option>
                              	<option> Germany </option>
                              </select>	
                       </td>
                 </tr>

                  <tr>
                       <td> State : </td>
                       <td> 
                              <select name="cust_state">
                              	<option> Maharashtra </option>
                              	<option> Uttar Pradesh </option>
                              </select>	
                       </td>
                 </tr>

                 <tr>
                       <td> City : </td>
                       <td> 
                              <select name="cust_city">
                              	<option> Mumbai </option>
                              	<option> Delhi  </option>
                              	<option> Chennai </option>
                              	<option> Bangalore </option>
                              </select>	
                       </td>
                 </tr>

                           
                 <tr>
                       <td> Mobile No : </td>
                       <td> +91 <input type="text" name="cust_contact" /> </td>
                 </tr>

                 <tr>
                 	  <td> </td> <td> <center> <input type="submit" value="submit" name="submit_button" /> </center> </td> 
                 </tr>	
                 


            </table>
   </body>

</html>