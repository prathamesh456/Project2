
<?php
       include('conn.php');

       $query=" Select * from o_table";
       $run=mysqli_query($con,$query);

?>

  <h1 align="center"> Order Details !! </h1>
  <table border="1">
  	          <tr>
                  	    <td> Order Id </td>
                  	    <td> User Id </td>
                  	    <td> Order Amount </td>
                  	    <td> Shipping Method </td>
                  	    <td> Order Date </td>
                  	    <td> Order TrackingNumber </td>
                  	    <td> Payment Method </td>
                  	    <td> Discount </td>
                  	    <td> Grantotal </td>
                  	    <td> Order Status </td>
                  	    <td> Creation Date </td>
                  </tr>	

  	<?php

       while($data=mysqli_fetch_assoc($run))
       {
          ?>
           
                  <tr>
                  	    <td> <?php echo $data['onew_id'] ?> </td>
                  	    <td> <?php echo $data['o_userid'] ?> </td>
                  	    <td> <?php echo $data['o_amount'] ?> </td>
                  	    <td> <?php echo $data['o_shipping'] ?> </td>
                  	    <td> <?php echo $data['o_date'] ?> </td>
                  	    <td> <?php echo $data['o_trackingnumber'] ?> </td>
                  	    <td> <?php echo $data['payment_method'] ?> </td>
                  	    <td> <?php echo $data['discount'] ?> </td>
                  	    <td> <?php echo $data['grandtotal'] ?> </td>
                  	    <td> <?php echo $data['o_status'] ?> </td>
                  	    <td> <?php echo $data['creation_date'] ?> </td>
                  </tr>	

          <?php                
       }
?>

 </table>