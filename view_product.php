<html>
<body>
	<h1> Product Details : </h1>
<form action="view_product.php" method="post">  
               
               <?php
                      include('conn.php');

                      $query="SELECT * FROM product";

                      $run=mysqli_query($con,$query);
                  ?>
                
                <table border="1">
                	<tr>
                          	   <td> Product Id </td>
                          	   <td> Product Name </td>
                          	   <td> Product Price </td>
                          	   <td> Product Weight </td>
                          	   <td> Product Category Id </td>
                          	   <td> Product Stock </td>
                          	   <td> Product OptionId </td>
                          	   <td> Creation Date </td>
                    </tr>

                    <?php
                           while($data=mysqli_fetch_assoc($run))
                           {
                           	  ?>
                                 
                                 <tr>
                                 	 <td> <?php echo $data['product_id'] ?> </td>
                                 	 <td> <?php echo $data['product_name'] ?> </td>
                                 	 <td> <?php echo $data['product_price'] ?> </td>
                                 	 <td> <?php echo $data['product_weight'] ?> </td>
                                 	 <td> <?php echo $data['product_categoryID'] ?> </td>
                                 	 <td> <?php echo $data['product_stock'] ?> </td>
                                 	 <td> <?php echo $data['product_OptionId'] ?> </td>
                                 	 <td> <?php echo $data['creation_date'] ?> </td>
                                 </tr>

                           	  <?php

                           }
                    ?> 
             </table>	

         </form>
         </body>
         </html>
