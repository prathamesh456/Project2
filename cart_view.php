<?php
       include('conn.php');

       session_start();

       $cust_email = $_SESSION['email'];

       $query = "Select cart_id from Cart_1 where email='$cust_email'";
       $run = mysqli_query($con,$query);
       $result_cartid = mysqli_fetch_assoc($run);

       $cartid_value = $result_cartid['cart_id']; // -> it represents cart_id for the logged in user
      
       $query2 = "Select * from product INNER JOIN cart_subdetails ON product.product_id = cart_subdetails.product_id
                   where cart_subdetails.cart_id='$cartid_value' ";
       $run2 = mysqli_query($con,$query2);
       //$data = mysqli_fetch_assoc($run2);
   ?>
       <table border="1">
       	 <tr>
       	 	   <td> Product Name : </td>
       	 	   <td> Product Price : </td>
       	 	   <td> Product Category : </td>
       	 </tr>
   <?php 
         while($data = mysqli_fetch_assoc($run2))
         {    
      ?>
        <tr>
        	 <td> <?php echo $data['product_name']; ?> </td>
        	 <td> <?php echo $data['product_price']; ?> </td>
        	 <td> <?php echo $data['product_categoryID']; ?> </td>
        </tr>
       
       <?php
        
         }

        ?> 	
    </table> <br><br><br>

    <button> Payment Method </button>
    <button> Shipping Details </button>  <br><br>
       

       <button> Purchase </button>
       