<?php
                      include('conn.php');
                      
                       include('header.php'); 

                      $query="SELECT * FROM category_details";

                      $run=mysqli_query($con,$query);

                    


                  ?>
 
 <html>
     
 <head>
 	       <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #4CAF50;
}

.active {
    background-color: #4CAF50;
}
</style> 

 </head>

 <body>
         <table>   
                <tr>   
                    <td>  
           <div class="menu">                    
                 <ul id="drop-nav">
                          <?php
                        while($row=mysqli_fetch_assoc($run)) {
                        ?>
                           

                              <li>
                                  <a href="check2.php?cat_id=<?php echo $row['category_id'] ;?>"><?php echo $row['category_name'] ;?></a>
                                  <ul>
                                              <?php

                                              
                                          $select_sub_category="SELECT * FROM sub_category_id INNER JOIN category_id ON sub_category_id.category_id=category_id.category_id where sub_category_id.category_id=".$row['category_id'];
                                            $select_sub_category_execute=mysqli_query($conn,$select_sub_category); 
                                              while($row1=mysqli_fetch_assoc($select_sub_category_execute))
                                              {
                                              ?>
                                            
                                              <li ><a href="category_view.php?cat_id=<?php echo $row['category_id'];?>&sub_cat_id=<?php echo $row1['sub_category_id'];?>"><?php echo $row1['sub_category_name'] ?></a></li>
                                            

                                             <?php
                                            }
                                           ?>
                                 </ul>
                                           
                                            
                            </li>

                                          
                        <?php
                        }
                        ?>

                   </ul>

                       
          </tr>

           <tr>
                <td> <?php include('footer.php'); ?> </td>
           </tr>
       
    </table>

  </body>

</html>



