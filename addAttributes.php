<html>
   <body>
   	     <h1> Add a new Category  </h1>  <br><br> 
   	      <form action="addAttributes.php" method="post">
   	      	      <table>
   	      	      	      <tr>
   	      	      	      	  <td> Attribute Name </td>
   	      	      	      	  <td> <input type="text" name="a_name" /> </td>
   	      	      	      </tr>
                              <tr>
                                   <td> Attribute Option </td>
                                   <td> <input type="text" name="a_option" /> </td>
                              </tr>
   	      	      	      <tr>
   	      	      	      	   <td> <input type="submit" value="submit" name="add" /> </td>
   	      	      	      </tr>
   	      	      </table>
   	      </form>	
   </body>	
</html>

<?php
        include('conn.php');

        $attr_name=$_POST['a_name'];
        $attr_option=$_POST['a_option'];

        if(isset($_POST['add']))
        {
          $query="INSERT INTO attribute_details(attribute_name, attribute_option) VALUES ('$attr_name','$attr_option')";
          $run=mysqli_query($con,$query);
          
          if($run)
          {
            echo "Attribute inserted successfully !!";
          }
          else
          {
            echo "Attribute insertion failed !!";
          }
        }
?>