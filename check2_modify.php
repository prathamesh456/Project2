<html>
<head> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    

          
</head> 

<body>

<?php
       include('conn.php');

       session_start();

     $session_email=$_SESSION['email'];



       $subcategid_value= $_GET['sub_cat_id'];
       $categid_value= $_GET['cat_id'];

       $query=" Select * from sub_subcategorydetails where categ_id='$categid_value' AND Subcateg_id='$subcategid_value' ";
       $run=mysqli_query($con,$query);
        
     ?>   
     
      <form action="check2.php" method="get">
       <table border="1">
       	<tr>
       		 <th> Item </th>
       		 <th> Price </th>
       	</tr>	

       	<tr>

       	</tr>	
     
     <?php
       while($data=mysqli_fetch_assoc($run))
       { 
       	    $newid=$data['Subcateg_id'];
            
            
       	?>
                
                <tr>
                      <td> <a href="new.php?p_id=<?php echo $data['p_id']; ?>"> <?php echo $data['Type'] ?> </a> </td>
                       <td> <a href="new.php?p_id=<?php echo $data['p_id']; ?>"> <?php echo $data['Cost'] ?> </a> </td>
                       
                </tr>	
                
       	<?php
       }
?>

 </table>
</form>
         
              <h3 id="ajax_response"> </h3>
         

</body>

                  

 <script>
  $(document).ready(function(){
    $("#cart1").click(function(){
    var p_id="<?php echo $pid; ?>";
    var email_id="<?php echo $session_email; ?>";
   // var s_id="<?php echo $session_id; ?>";   // this is for guest user   
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
</html>
 