<?php
                      include('conn.php');
                      include('header.php');


                      $query="SELECT * FROM category_details";

                      $run=mysqli_query($con,$query);

                    


                  ?>
 
 <html>
     
 <head>
 	       

 </head>

 <body>
                  
           <form action="customerdashboard.php" method="get">  


            <table>

                <tr>    	

                    <td>  

                       
                       <?php 
                       

                      while($data=mysqli_fetch_assoc($run))
                      {
                      
                            $categ_id =  $data['category_id'];
                      ?>	
                         
                        
                        <tr>
                          	<td> <?php echo $data['category_id'] ?> </td>
                            <td >  <a href="check.php?cat_id=<?php echo $categ_id; ?>">  <?php echo $data['category_name']  ?> </a> </td> 
                        </tr> 

                       
                      	          

                      	
                   <?php   	

                      
                    } 
                       
               ?>

                 </td>
              </tr>

              <tr>
                   <td> <?php include('footer.php'); ?> </td>
              </tr>


          </table>

      </form>
          
       
   

  </body>

</html>



