<?php
        include('conn.php');
        session_start(); 

        $email = $_POST['email'];
        $p_id = $_POST['p_id'];

       $query_fetchemail = " Select * from Cart_1 where email='$email' ";
        $run1 = mysqli_query($con, $query_fetchemail);
        $row_count = mysqli_fetch_assoc($run1); 

        if($row_count<=0)
        {
          $query2 = " INSERT INTO Cart_1(email) VALUES ('$email') ";
           $run2 = mysqli_query($con,$query2);
           if($run2)
           {
           	  $query_fetch_cartid1 = " Select cart_id from Cart_1 where email='$email' ";
           	  $run22 = mysqli_query($con, $query_fetch_cartid1);
              $data_new1 = mysqli_fetch_assoc($run22);
              $query_insert_cartid1 = "INSERT INTO cart_subdetails(cart_id, product_id) VALUES ('".$data_new1['cart_id']."','$p_id')";
              $run33 = mysqli_query($con,$query_insert_cartid1);
              echo "inserted into Cart_1 and Cart_subdetails successfully"; 
           }

        }

        else
        {
            $query_fetch_cartid = " Select cart_id from Cart_1 where email='$email' ";
           	$run2 = mysqli_query($con, $query_fetch_cartid);
           	$data_new = mysqli_fetch_assoc($run2); // added new
            $query_insert_cartid = "INSERT INTO cart_subdetails(cart_id, product_id) VALUES ('".$data_new['cart_id']."','$p_id')";
             $run3 = mysqli_query($con,$query_insert_cartid);
           echo "inserted into cart_subdetails successfully"; 	
        }


?>