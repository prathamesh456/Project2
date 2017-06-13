<html>
          <?php
                  include('conn.php');


                  $pname=$_POST['p_name'];
                  $price=$_POST['p_price'];
                  $weight=$_POST['p_weight'];
                  $category=$_POST['p_category'];
                  $stock=$_POST['p_stock'];
                  $p_option=$_POST['p_oid'];
                  
            if(isset($_POST['add']))
            {
               $query = " INSERT INTO product(product_name, product_price, product_weight, product_categoryID, product_stock, product_OptionId) VALUES ('$pname','$price','$weight','$category','$stock','$p_option') ";
               $run = mysqli_query($con,$query);

               if($run)
               {
               	echo "Data inserted successfully !!";
               }
               else
               {
               	echo "Data insertion Failed !!";
               }
            }

          ?>

<body>

 <h1> Add New Product !! </h1>

<form action="addproduct.php" method="post">  
               
                <table border="1">
                	<tr>      	    
                          	   <td> Product Name </td>
                          	   <td> <input type="text" name="p_name" /> </td>
                    </tr>
                    <tr>
                          	   <td> Product Price </td>
                          	   <td> <input type="text" name="p_price" /> </td>
                    </tr>
                    <tr>
                          	   <td> Product Weight </td>
                          	   <td> <input type="text" name="p_weight" /> </td>
                    </tr>
                    <tr>
                          	   <td> Product Category Id </td>
                          	   <td> <input type="text" name="p_category" /> </td>
                    </tr>
                    <tr>
                          	   <td> Product Stock </td>
                          	   <td> <input type="text" name="p_stock" /> </td>
                    </tr>
                    <tr>
                          	   <td> Product OptionId </td>
                          	    <td> <input type="text" name="p_oid" /> </td>
                          	   
                    </tr>

                    <tr>
                        <td> </td> <td> <input type="submit" name="add" value="submit"> </td>
                    </tr>	

                  </table>

    </form>

</body>
</html>