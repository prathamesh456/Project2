<?php
                      include('conn.php');
                      include('header.php');


                      $query="SELECT * FROM category_details";

                      $run=mysqli_query($con,$query);

                    


                  ?>
 
 <html>
     
 <head>
 	     <style type="text/css">
 
   ul {list-style: none;padding: 0px;margin: 0px;}
   ul li {display: block;position: relative;float: left;border:1px solid #000}
   li ul {display: none;}
   ul li a {display: block;background: #000;padding: 5px 10px 5px 10px;text-decoration: none;
           white-space: nowrap;color: #fff;}
   ul li a:hover {background: #f00;}
   li:hover ul {display: block; position: absolute;}
   li:hover li {float: none;}
   li:hover a {background: #f00;}
   li:hover li a:hover {background: #000;}

  #drop-nav li ul li {border-top: 0px;}

 

</style>  

 </head>

 <body>
                  
           <form action="customerdashboard.php" method="get">  


            <table>

                   <tr>
                          <div class="menu">                    
                 <ul id="drop-nav">
                          <?php
                        while($row=mysqli_fetch_assoc($run)) {
                        ?>
               
                              <li>
                                  <a href="category_view.php?cat_id=<?php echo $row['category_id'] ;?>"><?php echo $row['category_name'] ;?></a>
                                  <ul>
                                              <?php
        
                                             $select_sub_category="SELECT * FROM subcategory_details INNER JOIN category_details ON subcategory_details.categ_id=category_details.category_id where subcategory_details.categ_id=".$row['category_id'];
                                             $select_sub_category_execute=mysqli_query($con,$select_sub_category);
                                             
                                              while($row1=mysqli_fetch_assoc($select_sub_category_execute))
                                              {

                                              ?>
                                            
                                              <li><a href="check2_modify.php?cat_id=<?php echo $row['category_id'];?>&sub_cat_id=<?php echo $row1['subcategory_id'];?>"> <?php echo $row1['subcategory_name'] ?> </a></li>
                                            

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

      </form>
          
       
   

  </body>

</html>


