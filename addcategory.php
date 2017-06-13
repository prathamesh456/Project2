
<html>
   <body>
   	     <h1> Add a new Category  </h1>  <br><br> 
   	      <form action="addcategory.php" method="post">
   	      	      <table>
   	      	      	      <tr>
   	      	      	      	  <td> Category Name </td>
   	      	      	      	  <td> <input type="text" name="c_name" /> </td>
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
 
       $c_name=$_POST['c_name'];

      if(isset($_POST['add']))
      {
          $query="INSERT INTO category_details(category_name) VALUES ('$c_name')";
          $run = mysqli_query($con,$query);

          if($run)
          {
          	echo "Category Inserted Successfully !!";
          }
          else
          {
          	echo "Category Insertion Failed !!";
          }

      }

?>
