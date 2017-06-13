<?php
                      include('conn.php');
					  
					  $value="Human";
					  $value_new="Non-human";

                      $query="SELECT * FROM subcategory_details where classification='$value' ";

                      $run=mysqli_query($con,$query);
					  
					  $query2="SELECT * FROM subcategory_details where classification='$value_new' ";

                      $run2=mysqli_query($con,$query2);

                
                  ?>
 


<?php


  $id_value= $_GET['cat_id'];
    
  if($id_value==1)
  {
             ?>
             
             <form action="check.php" method="get">
              <table border="1">
                <?php
                       

                      while($data=mysqli_fetch_assoc($run))
                      {
                    
                         $subcateg_id =  $data['subcategory_id'];   
                      ?>  
                      <tr>
                            <td> <a href="check2.php?subcat_id=<?php echo $subcateg_id; ?>&cat_id=<?php echo $id_value; ?>"> <?php echo $data['subcategory_name'] ?> </a>  </td>

                      </tr>

                      <?php

  } 

    ?>
  </table>
   </form>

   <?php

 }

  if($id_value==2)
  {
         ?>
        <form action="check.php" method="get"> 
              <table border="1">
                <?php
                       

                      while($data=mysqli_fetch_assoc($run))
                      {
                      
                        $subcateg_id =  $data['subcategory_id'];                           
                      ?>  
                      <tr>
                            <td> <a href="check2.php?subcat_id=<?php echo $subcateg_id; ?>&cat_id=<?php echo $id_value; ?>"> <?php echo $data['subcategory_name'] ?> </a> </td>

                      </tr>

                      <?php

  } 

    ?>
  </table>
   </form>

   <?php

 }
  


  if($id_value==3)
  {
     ?>
              <form action="check.php" method="get"> 
              <table border="1">
                <?php
                       

                      while($data=mysqli_fetch_assoc($run2))
                      {
                      
                        $subcateg_id =  $data['subcategory_id'];    
                      ?>  
                      <tr>
                            <td> <a href="check2.php?subcat_id=<?php echo $subcateg_id; ?>&cat_id=<?php echo $id_value; ?>"> <?php echo $data['subcategory_name'] ?> </a> </td>

                      </tr>

                      <?php

     } 

     ?>
    </table>
 </form>

     <?php

 
  }

?>