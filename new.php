<?php
        $pid = $_GET['p_id'];
          
        include('conn.php');

        $query="SELECT * FROM product INNER JOIN product_category ON product.product_id=product_category.product_id where product_category.product_id=".$pid;
        $run = mysqli_query($con,$query);
        
        while($data=mysqli_fetch_assoc($run))
        {
        	echo "<br> Product Name : ".$data['product_name'];
        	echo "<br> Product Price : ".$data['product_price'];
        	echo "<br> Product Weight : ".$data['product_weight'];
        	echo "<br> Product Category : ".$data['product_categoryID'];

        }
?>

<?php
       

       session_start();

     $session_email=$_SESSION['email'];
?>


<html>
       <head>
       	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
             <script>
  $(document).ready(function(){
    $("#cart2").click(function(){
    var p_id="<?php echo $pid; ?>";
    var email_id="<?php echo $session_email; ?>";
  //  var s_id="<?php echo $session_id; ?>";    
   // var qty=document.getElementById("qty").value;
    $.ajax({    
        url:"add_to_cart.php",
        type:"POST",
        data:{p_id:p_id,email:email_id},
        success:function(html){
            $("#ajax_response").html(html);
        },
        error:function(html){
            alert("error");
        }

    });

    });

});
</script> 
       </head>

<body>
       <button id="cart2"> Add to Cart </button>

       <h3 id="ajax_response"> </h3>
</body>


</html>