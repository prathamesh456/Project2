<?php
        include('conn.php');

        $query="Select * from shipping_model";
        $run=mysqli_query($con,$query);
?>
 
  <h1> Shipping Details !! </h1>
  <table border="1">
  	         <tr>
                  	    <td> Shipping Type </td>
                  	    <td> Shipping Charge </td>
                  	    <td> Courier Partner </td>
                  	    <td> Creation Date </td>
                  </tr>

<?php
          while($data=mysqli_fetch_assoc($run))
          {
          	?>
                  <tr>
                  	    <td> <?php echo $data['Shipping_type'] ?> </td>
                  	    <td> <?php echo $data['shipping_charge'] ?> </td>
                  	    <td> <?php echo $data['courier_partner'] ?> </td>
                  	    <td> <?php echo $data['creation_date'] ?> </td>
                  </tr>
            <?php
          }
?>

  </table>